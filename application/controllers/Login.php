<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('Login_modal');
        $this->load->model('product_modal');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('System_log');
        $this->load->library('sendmail');
		$this->from = 'termitehubinfo@gmail.com';

    }

	/**
	 * Create a new user
	 */
	public function index($value = null){
		$this->session->other_usertype = '';
		$data['products_show_arrival'] = $this->product_modal->get('produit',4,'DESC','id');
		$data['products_show_top'] = $this->product_modal->get('produit',6,'DESC','add_date');
		$data['products_show_all'] = $this->product_modal->get('produit');
		//category of product_modal		
		$data['category_show_all'] = $this->db->get('produit_categorie')->result_array();
		if ($this->session->names == null or $this->session->usertype == null) {
			if ($value == 1) {
				if (isset($_POST['name'])) {
					$name = $this->input->post('name');
					$password = $this->input->post('password');

					$this->db->where('email',$name);
					$check_email_username = $this->db->get('user')->result_array();

					if (count($check_email_username) <= 0) {
						$data['info'] = 'Cet nom d\'utilisateur est introuvable, Pas Enregistre.';
						$this->load->view('login',$data);
					}else if(count($check_email_username) > 0){	
						$rows = $check_email_username;
						if ($rows[0]['password'] != md5($password)) {
							$this->System_log->system_logs($rows[0]['id'],$rows[0]['username'],'Connection/Login','Echec d\'action, l\'utilisateur '.$rows[0]['username'].' a été tante une connection, avec un mot de passe incorrect.');
							$data['info'] = 'Mot de passe incorrect';
							$this->load->view('login',$data);
						}else{
							$this->System_log->system_logs($rows[0]['id'],$rows[0]['username'],'Connection/Login','L\'utilisateur '.$rows[0]['username'].' a été connecté avec success.');
							$data['info'] = 'Vous venez de vous enregistere sur la platfome des gagnants Profiter de nos services!';
							
							if (!empty($rows[0]['other_usertype'])) {
								$this->session->other_usertype = $rows[0]['other_usertype'];
							}

							$this->session->identifier = $rows[0]['id'];		
							$this->session->names = $rows[0]['username'];
							$this->session->email = $rows[0]['email'];
							$this->session->phone = $rows[0]['phone'];
							$this->session->country = $rows[0]['country'];
							$this->session->province = $rows[0]['province'];
							$this->session->city = $rows[0]['city'];
							$this->session->address =  $rows[0]['country'].'/'.$rows[0]['province'].'/'.$rows[0]['city'];
							$this->session->usertype = $rows[0]['usertype'];
							$this->session->profile = $rows[0]['profile'];

							if ($this->session->usertype == 'client') {
								$this->session->flashdata('loginSuccessClient','Bienvenu sur Tirage Une application ou vous etez le gagnant');
								redirect('Welcome');
							}else if ($this->session->usertype == 'admin') {
								$this->session->flashdata('loginSuccessAdmin','Bienvenu sur Tirage Une application ou vous etez le gagnant');
								redirect('Welcome');
							}else if ($this->session->usertype == 'seller') {
								$this->session->flashdata('loginSuccessSeller','Bienvenu sur Tirage Une application ou vous etez le gagnant');
								redirect('Welcome');
							}
						}
					}else{
						$data['info'] = 'Echec d\'operation essayer plus tard';
						$this->load->view('login',$data);
					}
				}else{
					$this->load->view('login',$data);
				}
			}else{
				$this->load->view('login',$data);
			}	
		}else if ($this->session->names != null) {
			if (isset($value)) {
			 	$this->load->view('index',$data);	
			}else{
				$this->load->view('index',$data);
			}
		}else{
			$this->load->view('index',$data);	
		}
	}

	public function forgotpass($request = null){
		$html = '<div class="col-md-12 mt-2">
					<input type="email" id="email" class="form-control" name="email" placeholder="Saisissez votre adress mail">
				</div>
				<div class="col-md-12 mt-2">
					<button type="submit" id="valider" class="btn btn-primary w-100 mt-2">Envoyer</button>
				</div>';
		if ($request == null) {
			echo $html;
			return;
		}

		if ($request == 'srtc') {
			$rand = rand();
			$email = $this->input->post('email');
			$update = $this->db->update('user',array('forgotpass' => $rand,'forgotpassdate'=>time()),array('email'=>$email));
			$text_to_send = '<div style="border:1px solid rgba(0,0,0,0.4);padding:10px; border-radius:10px;width:600px;"><div style="display: inline-block;"><img src="'.base_url().'assets/img/loginLoader.jpeg" width="100"><span style="font-size: 20px;font-weight: bolder; text-transform: uppercase;"> Tirage</span></div><p>Cher Client</p><p>Pour modifier votre mot de passe copier le nombre suivant au lieu indiquer <span style="color:green;">'.$rand.'</span></p><p>Si vous avez pas effectuer cette opération ignore ce email.</p><br>Les administrateurs<br><p><hr>Pourquoi acheter un produit à 10$ , si vous pouvez l\'avoir à 1$? Tentez votre chance et Soyez le bienheureux.</p></div>';
			
			if ($update) {
				$r = $this->sendmail->sendmailto($this->from,$email,'Mot de passe oublier',$text_to_send);
				if ($r) {
					$mail = 'Un email vous a été envoyer avec succes , si vous ne l\'avez pas reçu cliquer ci-dessous sur le bouton renvoyer.';
				}else{
					$mail = 'Echec d\'opération, appuyer sur retour pour reesseyer';
				}
				$html = '<div class="col-md-12 mt-2 text-info"><p>'.$mail.'</p></div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" value="'.$email.'" readonly>
						</div>
						<div class="col-md-12 mt-2">
							<input type="text" id="code" name="code" class="form-control" placeholder="1234">
						</div>
						<div class="col-md-12 mt-2">
							<div class="row">
								<div class="col-md-6">
									<button type="submit" id="valider" class="btn btn-primary w-100 mt-2" onclick="send(\'check\')">Verifier</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-primary w-100 mt-2" onclick="send(\'srtc\')">renvoyer</button>
								</div>
							</div>
						</div>';
				echo $html;
			}else{
				$html = '<div class="col-md-12 mt-2">
							<p class="text-danger">Cette address mail n\'a pas été retrouve.</p>
						</div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" placeholder="Saisissez votre adress mail">
						</div>
						<div class="col-md-12 mt-2">
                            <button type="submit" id="valider" class="btn btn-primary w-100 mt-2">Envoyer</button>
                        </div>';
				echo $html;
			}
		}else if ($request == 'check') {
			$email = $this->input->post('email');
			$code = $this->input->post('code');
			$row = $this->db->get_where('user',array('email'=>$email,'forgotpass'=>$code))->result_array();
			if (count($row) > 0) {
				$stored_time = $row[0]['forgotpassdate'];
				$v =  date($stored_time) + 900;
				$current_time =  date('Y-m-d h:i:s',$v);
				if (date('Y-m-d h:i:s',time()) > $current_time) {
					$html = '
						<div class="col-md-12 mt-2">
							<p class="text-warning">Votre code a déjà expirer veiller en generer un autre.</p>
						</div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" value="" required>
						</div>
						<div class="col-md-12 mt-2">
                            <button type="submit" id="valider" onclick="send(\'srtc\')" class="btn btn-primary w-100 mt-2">Envoyer</button>
                        </div>';
				}else{
					$html = '
						<div class="col-md-12 mt-2">
							<p class="text-info">Veiller Saisir votre nouveau mot de passe</p>
						</div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" value="'.$email.'" readonly>
						</div>
						<div class="col-md-12 mt-2">
							<input type="password" id="new_password" class="form-control" name="new_password" placeholder="Saisissez votre nouveau mot de passe" required>
						</div>
						<div class="col-md-12 mt-2">
                            <button type="submit" id="valider" onclick="send(\'change\')" class="btn btn-primary w-100 mt-2">Envoyer</button>
                        </div>';
				}
				echo $html;
			}else{
				$html = '
						<div class="col-md-12 mt-2">
							<p class="text-warning">Le code que vous avez entre n\'a pas été retrouve veiller en generer un autre.</p>
						</div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" value="" required>
						</div>
						<div class="col-md-12 mt-2">
                            <button type="submit" id="valider" onclick="send(\'srtc\')" class="btn btn-primary w-100 mt-2">Envoyer</button>
                        </div>';
                echo $html;
			}
		}else if ($request == 'change') {
			$update = $this->db->update('user',array('password'=>md5($this->input->post("new_password")),'forgotpass'=>'','forgotpassdate'=>''),array('email'=>$this->input->post('email')));
			if ($update) {
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Motification mot de passe oublier','L\'utilisateur '.$this->session->names.' a modifier son mot de passe avec success.');
				$html = '
						<div class="col-md-12 mt-2">
							<p class="text-success">Votre mot de passe a été modifier avec succes.</p>
						</div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" value="" required>
						</div>
						<div class="col-md-12 mt-2">
                            <button type="submit" id="valider" onclick="send(\'srtc\')" class="btn btn-primary w-100 mt-2">Envoyer</button>
                        </div>';
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Motification mot de passe oublier','Echec, d\'operation, l\'utilisateur '.$this->session->names.' a tenter de modifier son mot de passe.');
				$html = '
						<div class="col-md-12 mt-2">
							<p class="text-danger">Echec, d\'operation veuiller reessayer.</p>
						</div>
						<div class="col-md-12 mt-2">
							<input type="email" id="email" class="form-control" name="email" value="" required>
						</div>
						<div class="col-md-12 mt-2">
                            <button type="submit" id="valider" onclick="send(\'srtc\')" class="btn btn-primary w-100 mt-2">Envoyer</button>
                        </div>';
			}
			echo $html;
		}
	}

	public function register(){
		$this->session->other_usertype = '';
		//category of product_modal		
		$data['category_show_all'] = $this->db->get('produit_categorie')->result_array();
		$this->form_validation->set_rules('names', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('country', 'country', 'required');
		$this->form_validation->set_rules('user_type', 'usertype', 'required');
		$this->form_validation->set_rules('province', 'province', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('image', 'image', 'required');
		if ($this->form_validation->run() == FALSE) {
			$response = $this->Login_modal->get_where('user',$this->input->post('names'),$this->input->post('email'),$this->input->post('phone'));
			if (isset($response['username']) and $response['username'] == 'exist') {
				$data['info'] = "Ce nom d\'utilisateur a déjà été utilisé.";
				$this->load->view('signup',$data);
				return;
			}

			if (isset($response['email']) and $response['email'] == 'exist') {
				$data['info'] = "Cet address mail a déjà été utilisé.";
				$this->load->view('signup',$data);
				return;
			}

			if (isset($response['phone']) and $response['phone'] == 'exist') {
				$data['info'] = "Ce numéro de telephone a déjà été utilisé.";
				$this->load->view('signup',$data);
				return;
			}

			if (isset($_POST['user_type']) and $_POST['user_type'] == 'seller') {
				$this->db->set('store_name',$this->input->post('store_name'));
				$this->db->set('description',$this->input->post('description'));
				if (isset($_FILES['cover_store_image']['name']) and !empty($_FILES['cover_store_image']['name'])) {
							$config0['log_threshold']		= '1';
							$config0['file_name']          	 = $_FILES['cover_store_image']['name'];
							$config0['upload_path']          = 'assets/img/cover_store/';
			                $config0['allowed_types']        = 'gif|jpg|png|jpeg';
			                $config0['max_size']             = 8000;
			                $config0['max_width']            = 3024;
			                $config0['max_height']           = 4032;
			                $config0['overwrite']			= false;

			                $this->load->library('upload',$config0);
			                $this->upload->initialize($config0);
			                if (!$this->upload->do_upload('cover_store_image')){
			                    $data['info'] = strip_tags($this->upload->display_errors().', Pour l\'image de couverture');
								$this->load->view('signup',$data);
								return;
			                }else{
			                        $upload_data = $this->upload->data();
			                        $file_cover = $upload_data['file_name'];
			                        $this->db->set('cover_store_image', $file_cover);
			                }
				}else{
					$data['info'] = 'Vous devez mettre la photo de couverture de votre boutique';
					$this->load->view('signup',$data);
					return;
				}
			}else{
				$this->db->set('store_name','client');
				$this->db->set('description','client');
				$this->db->set('cover_store_image', 'client');	
			}

			$this->db->set('username',$this->input->post('names'));
			$this->db->set('email',$this->input->post('email'));
			$this->db->set('phone',$this->input->post('phone'));
			$this->db->set('country',$this->input->post('country'));
			$this->db->set('usertype',$this->input->post('user_type'));
			$this->db->set('province',$this->input->post('province'));
			$this->db->set('city',$this->input->post('city'));
			$this->db->set('password', md5($this->input->post('password')));
			$this->db->set('add_date',time());
			$this->db->set('login_status','1');

		if (isset($_FILES['image_profile']['name']) and !empty($_FILES['image_profile']['name'])) {
					
					$config['file_name']          	= $_FILES['image_profile']['name'];
					$config['upload_path']          = 'assets/img/user/';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 8000;
	                $config['max_width']            = 3024;
	                $config['max_height']           = 4032;
	                $config['overwrite']			= false;


	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                if (!$this->upload->do_upload('image_profile')){
	                        $data['info'] = strip_tags($this->upload->display_errors().' Pour l\'image de profile');
							$this->load->view('signup',$data);
							return;
	                }else{
	                        $upload_data = $this->upload->data();
	                        $file_profile = $upload_data['file_name'];
	                        $this->db->set('profile', $file_profile);
	                }
		}else{
			$data['info'] = 'Vous devez mettre la photo de profile pour vous enregistrer';
			$this->load->view('signup',$data);
			return;
		}

		// if (!empty($rows[0]['other_usertype'])) {
		// 	$this->session->other_usertype = $rows[0]['other_usertype'];
		// }
		
			$insert = $this->Login_modal->insert('user');
			if ($insert) {
				$this->db->where('email',$this->input->post('email'));
				$rows = $this->db->get('user')->result_array();

				$this->System_log->system_logs($rows[0]['id'],$rows[0]['username'],'Inscription/signup','L\'utilisateur '.$rows[0]['username'].' s\'est inscrit avec success.');
				$text_to_send = '<img src="'.base_url().'assets/img/loginLoader.jpeg" width="100"><h3> Tirage</h3><br><br><p>Cher '.$this->input->post('names').'</p><br><p>Votre address mail a été utilisé pour effectuer une Inscription sur notre platfome, nous vous remercions pour la confiance.</p><br><span>Si vous avez pas effectuer cette opération contacter notre equipe technique pour une suppression de compte</span><br><br>Les administrateurs<br><br><p>Pourquoi acheter un produit à 10$ , si vous pouvez l\'avoir à 1$? Tentez votre chance et Soyez le bienheureux.</p>';
				$this->sendmail->sendmailto($this->from,$this->input->post('email'),'Inscription',$text_to_send);
				if (sizeof($rows) > 0) {
					$this->session->identifier = $rows[0]['id'];
					$this->session->names = $this->input->post('names');
					$this->session->email = $this->input->post('email');
					$this->session->phone = $this->input->post('phone');
					$this->session->country = $this->input->post('country');
					$this->session->province = $this->input->post('province');
					$this->session->city = $this->input->post('city');
					$this->session->usertype = $this->input->post('user_type');
					$this->session->profile = $file_profile;
				}else{
					$this->session->sess_destroy();
					$this->session->flashdata('error','Erreur, L\'opération a echouer veiller reesseyer.');
					redirect('Login');
				}
				//session data
				redirect('login/index');
			} else {
				$data['info'] = "Echec d'enregistrement, Veiller reesseyer";
				$this->load->view('signup',$data);
				return;
			}
		}else{
			$data['info'] = "Echec d'enregistrement, Veiller reesseyer";
			$this->load->view('signup',$data);
			return;
		}
	}
}