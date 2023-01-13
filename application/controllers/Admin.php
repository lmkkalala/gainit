<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('System_log');
		$this->load->library('sendmail');
		$this->from = 'termitehubinfo@gmail.com';
		$this->to = 'murhulakalalalucien14@gmail.com'; // this email address must be change
    }

    var $image_file_type = 'gif|jpg|png|jpeg|jfif|pdf';

	public function index($link = null){

		$data['products_show_arrival'] = $this->product_modal->get('produit',4,'DESC','id');
		$data['products_show_top'] = $this->product_modal->get('produit',6,'DESC','add_date');
		$data['products_show_all'] = $this->product_modal->get('produit');
		$data['products_show'] = $this->product_modal->get_all('produit');
		//category of product
		$data['category_show_all'] = $this->db->get('produit_categorie')->result_array();

		if ($this->session->usertype == 'client') {
			if ($link != null) {
				$page = $link;
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}else if ($this->session->usertype == 'seller') {
			
		}else if ($this->session->usertype == 'admin') {
			
		}else{
			if ($link != null) {
				$page = $link;
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}
	}
	// validate product by the admin
	public function update_product(){
		$data = array(
			'participant'=>$this->input->post('participant'),
			'mise'=>$this->input->post('mise'),
			'admin_display'=>1,
		);
		$this->db->where('id',$this->input->post('product_id'));
		$update_product = $this->db->update('produit',$data);
		$this->db->where('id',$this->input->post('product_id'));
		$row = $this->db->get('produit')->result_array();
		if ($update_product) {
			$text_send = 'La mise du produit '.$row[0]['product'].' a été enregistrée par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Configuration Mise',$text_send);
			echo json_encode(array('status' => 'success','info'=>'La modification a reussi.'));
		}else{
			$text_send = 'Echec d\'action, la mise du produit '.$row[0]['product'].' a été enregistrée par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Configuration Mise',$text_send);
			echo json_encode(array('status' => 'fail','info'=>'Echec, d\'operation veuiller reessayer.'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,'Validation produit',$text_send);
	}

	public function add_admin(){
		if(isset($_FILES['profile']['name']) and !empty($_FILES['profile']['name'])){
			if (!file_exists(site_url().'assets/img/user/'.$_FILES['profile']['name'])) {
						$config0['log_threshold']		= '1';
						$config0['upload_path']          = 'assets/img/user/';
						$config0['file_name']  			= rand().'tigare'.'user_'.$_FILES['profile']['name'];
		                $config0['allowed_types']        = $this->image_file_type;
		                $config0['max_size']             = 80000;
		                $config0['max_width']            = 3024;
		                $config0['max_height']           = 4032;
		                $config0['overwrite']			= false;
		                $this->load->library('upload',$config0);
		                $this->upload->initialize($config0);
			        if (!$this->upload->do_upload('profile')){
		                        $error = strip_tags($this->upload->display_errors());
		                       	echo json_encode(array('status' => 'fail','info' => $error.'Modifier Image Profile'));
		                       	return;
		                }else{
		                	$upload_data = $this->upload->data();
		                	$profile = $upload_data['file_name'];
		                }
			}else{
				echo json_encode(array('status' => 'fail','info'=>'Veuiller renomer le nom de fichier'));
                return;	
			}
		}

		$data = array(
			'username' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'usertype' => 'admin',
			'country' => $this->input->post('country'),
			'province' => $this->input->post('province'),
			'city' => $this->input->post('city'),
			'password' => md5($this->input->post('password')),
			'profile' => $profile,
			'store_name' => '-',
			'cover_store_image' => '-',
			'description' => '-',
			'add_date' => time(),
		);

		$add_admin = $this->db->insert('user',$data);
		if ($add_admin == true) {
			$text_send = 'L\'utilisateur '.$this->input->post('name').' a été ajouter par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Ajouter',$text_send);
		 	echo json_encode(array('status' => 'success','info'=>'Vous avez été enregistre avec success.'));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$this->input->post('name').' a été ajouter par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Ajouter',$text_send);
			echo json_encode(array('status' => 'fail','info'=>'Echec, veuiller essayer.'));
		}

		$this->sendmail->sendmailto($this->from,$this->to,'Nouveau admin',$text_send);
	}

	public function get_product_client_bet_number(){
		$this->db->where('product_id',$this->input->post('id_product'));
		$rows = $this->db->get('produit_en_vente')->result_array();
		$number = count($rows);
		echo json_encode(array('amount'=>$number));
	}

	public function get_admin_user(){
		$this->db->where('id',$this->input->post('user_id'));
		$rows = $this->db->get('user')->result_array();
		echo json_encode(array('user'=>$rows));
	}

	public function update_admin(){
		if(isset($_FILES['profile']['name']) and !empty($_FILES['profile']['name'])){
			if (!file_exists(site_url().'assets/img/user/'.$_FILES['profile']['name'])) {
						$config0['log_threshold']		= '1';
						$config0['upload_path']          = 'assets/img/user/';
						$config0['file_name']  			= rand().'tigare'.'user_'.$_FILES['profile']['name'];
		                $config0['allowed_types']        = $this->image_file_type;
		                $config0['max_size']             = 80000;
		                $config0['max_width']            = 3024;
		                $config0['max_height']           = 4032;
		                $config0['overwrite']			= false;
		                $this->load->library('upload',$config0);
		                $this->upload->initialize($config0);
			        if (!$this->upload->do_upload('profile')){
		                        $error = strip_tags($this->upload->display_errors());
		                       	echo json_encode(array('status' => 'fail','info' => $error.'Modifier Image Profile'));
		                       	return;
		                }else{
		                	$current_file = site_url().'assets/img/user/'.$this->input->post('current_profile');
		                	if (file_exists($current_file)) {
		                		unlink($current_file);
		                	}
		                	$upload_data = $this->upload->data();
		                	$profile = $upload_data['file_name'];
		                }
			}else{
				echo json_encode(array('status' => 'fail','info'=>'Veuiller renomer le nom de fichier'));
                return;
			}
		}else{
			$profile = $this->input->post('current_profile');
		}

		$data = array(
			'username' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'country' => $this->input->post('country'),
			'province' => $this->input->post('province'),
			'city' => $this->input->post('city'),
			'profile' => $profile,
		);

		if (isset($_POST['password']) and !empty($_POST['password'])) {
			$data = array_merge($data, array('password'=>md5($_POST['password'])));
		}

		$this->db->where('id',$this->input->post('user_id'));
		$update_admin = $this->db->update('user',$data);
		if ($update_admin == true) {
			$text_send = 'L\'utilisateur '.$this->input->post('name').' a été modifier par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Modification',$text_send);
		 	echo json_encode(array('status' => 'success','info'=>'Informations ont été modifier avec success'));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$this->input->post('name').' a été modifier par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Modification',$text_send);
			echo json_encode(array('status' => 'fail','info'=>'Echec de modification, veuiller reessayer.'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,'Modification admin',$text_send);
	}

	public function delete_admin(){
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','admin');
		$row = $this->db->get('user')->result_array();
		$username = $row[0]['username'];
		$file = site_url().'assets/img/user/'.$row[0]['profile'];
			if (file_exists($file)) {
				unlink($file);
			}
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','admin');
		$delete_admin = $this->db->delete('user');
		if ($delete_admin) {
			$text_send = 'L\'utilisateur '.$username.' a été supprimer par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer',$text_send);
			echo json_encode(array('info'=>'Utilisateur supprimer avec success','status'=>'success'));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$username.' a été supprimer par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer',$text_send);
			echo json_encode(array('info'=>'Echec de Suppression, veuiller reessayer.','status'=>'fail'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,'Suppression admin',$text_send);
	}

	public function delete_client(){
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','client');
		$row = $this->db->get('user')->result_array();
		$username = $row[0]['username'];
		$file = site_url().'assets/img/user/'.$row[0]['profile'];
			if (file_exists($file)) {
				unlink($file);
			}
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','client');
		$delete_client = $this->db->delete('user');
		if ($delete_client) {
			$text_send = 'L\'utilisateur '.$username.' a été supprimer par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer client',$text_send);
			echo json_encode(array('info'=>'Utilisateur supprimer avec success','status'=>'success'));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$username.' a été supprimer par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer client',$text_send);
			echo json_encode(array('info'=>'Echec de Suppression, veuiller reessayer','status'=>'fail'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,'Suppression Client',$text_send);
	}

	public function delete_product(){
		$this->db->where('product_id',$this->input->post('product_id'));
		$on_sold_product = $this->db->get('produit_en_vente')->result_array();
		if (count($on_sold_product) > 0) {
			echo json_encode(array('info'=>'Cet article est déjà en vente avec des mises et ne peux plus être suppremé','status'=>'fail'));
			return;
		}

		$this->db->where('id',$this->input->post('product_id'));
		$row = $this->db->get('produit')->result_array();
		$file = site_url().'dist/produit'.$row[0]['caption_image'];
		if (file_exists($file)) {
			unlink($file);
		}

		$this->db->where('id',$this->input->post('product_id'));
		$delete_product = $this->db->delete('produit');
		if ($delete_product) {
			$text_send = 'Le product '.$row[0]['product'].' a été supprimer par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer Article',$text_send);
			echo json_encode(array('info'=>'Produit supprimer avec success','status'=>'success'));
		}else{
			$text_send = 'Echec d\'action, le product '.$row[0]['product'].' a été supprimer par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer Article',$text_send);
			echo json_encode(array('info'=>'Echec de Suppression, veuiller reessayer','status'=>'fail'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,'Suppression Article',$text_send);
	}

	public function block_admin(){
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','admin');
		$get = $this->db->get('user')->result_array();
		$username = $get[0]['username'];
		if ($get[0]['login_status'] == '0') {
			$value = '1';
			$message = 'debloquer';
		}else{
			$value = '0';
			$message = 'bloquer';
		}
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','admin');
		$block_admin = $this->db->update('user',array('login_status'=>$value));
		if ($block_admin) {
			$text_send = 'L\'utilisateur '.$username.' a été '.$message.' par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,$text_send);
			echo json_encode(array('info'=>'Utilisateur '.$message.' avec success','status'=>'success','action'=>$message));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$username.' a été '.$message.' par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,$text_send);
			echo json_encode(array('info'=>'Echec de Suppression, veuiller reessayer','status'=>'fail'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,$message.' admin',$text_send);
	}

	public function block_seller(){
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','seller');
		$get = $this->db->get('user')->result_array();
		$username = $get[0]['username'];
		if ($get[0]['login_status'] == '0') {
			$value = '1';
			$message = 'debloquer';
		}else{
			$value = '0';
			$message = 'bloquer';
		}
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','seller');
		$block_seller = $this->db->update('user',array('login_status'=>$value));
		if ($block_seller) {
			$text_send = 'L\'utilisateur '.$username.' a été '.$message.' par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,$text_send);
			echo json_encode(array('info'=>'Utilisateur '.$message.' avec success','status'=>'success','action'=>$message));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$username.' a été '.$message.' par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,$text_send);
			echo json_encode(array('info'=>'Echec de Suppression, veuiller reessayer','status'=>'fail'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,$message.' Vendeur',$text_send);
	}

	public function block_client(){
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','client');
		$get = $this->db->get('user')->result_array();
		$username = $get[0]['username'];
		if ($get[0]['login_status'] == '0') {
			$value = '1';
			$message = 'debloquer';
		}else{
			$value = '0';
			$message = 'bloquer';
		}
		$this->db->where('id',$this->input->post('user_id'));
		$this->db->where('usertype','client');
		$block_client = $this->db->update('user',array('login_status'=>$value));
		if ($block_client) {
			$text_send = 'L\'utilisateur '.$username.' a été '.$message.' par '.$this->session->names.' avec success.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,$text_send);
			echo json_encode(array('info'=>'Utilisateur '.$message.' avec success','status'=>'success','action'=>$message));
		}else{
			$text_send = 'Echec d\'action, l\'utilisateur '.$username.' a été '.$message.' par '.$this->session->names.'.';
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,$text_send);
			echo json_encode(array('info'=>'Echec de Suppression, veuiller reessayer','status'=>'fail'));
		}
		$this->sendmail->sendmailto($this->from,$this->to,$message.' Client',$text_send);
	}

	// close tirage for a product
	public function close_tirage(){
		$this->db->where('id',$this->input->post('id_product'));
		$close_tirage = $this->db->update('produit',array('sellValidate'=>'1'));

		$this->db->where('id',$this->input->post('id_product'));
		$row = $this->db->get('produit')->result_array();
		$product_name = $row[0]['product'];
			if ($close_tirage) {
				$text_send = 'L\'utilisateur '.$this->session->names.' a clourer la session de tirage pour le produit '.$product_name.' avec success.';
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Cloture tirage',$text_send);
				echo json_encode(array('info'=>'Vous venez de cloturer la fin du tirage de cette article.','status'=>'success'));
			}else{
				$text_send = 'Echec d\'action, l\'utilisateur '.$this->session->names.' a clourer la session de tirage pour le produit '.$product_name.'.';
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Cloture tirage',$text_send);
				echo json_encode(array('info'=>'Echec d\'opération veuiller reessayer.','status'=>'fail'));
			}
		$this->sendmail->sendmailto($this->from,$this->to,'Cloture tirage',$text_send);
	}

	#validate testimony
	public function validate_testimony(){
		$row = $this->db->get_where('testimonies',array('testimony_id'=>$this->input->post('testimony_id')))->result_array();
		if ($row[0]['validate'] == '1') {
			$value = 0;
			$view = 'disvalidate';
			$text = 'valider';
		}else{
			$value = 1;
			$view = 'validate';
			$text = 'invalider';
		}
		$data = array('validate'=> $value);
		$update = $this->db->update('testimonies',$data,array('testimony_id'=>$this->input->post('testimony_id')));
		if ($update) {
			echo json_encode(array('info'=>'le temoignage a été '.$text.' avec success.','status'=>'success','view'=>$view));
		}else{
			echo json_encode(array('info'=>'Echec d\'opération, veuiller reessayer.','status'=>'error','view'=>$view));
		}
	}

	// Process to the tirage of the person who won
	public function process_tirage(){

		$from = $this->from;

		$product_id = $this->input->post('id_product');
		$row = $this->db->query("SELECT * FROM produit_en_vente WHERE product_id = $product_id AND validate_tirage = '0' AND visite_number >= '50' ORDER BY RAND ( )  LIMIT 1 ")->result_array();
		if(count($row) <= 0){
			echo json_encode(array('info'=>'Le tirage n\'a pas été effectuer, veuiller reessayer.'));
			return;
		}

		$condition = array(
			'client_id'=>$row[0]['client_id'],
			'product_id'=>$row[0]['product_id'],
			'seller_id'=>$row[0]['seller_id'],
			'code_mise'=>$row[0]['code_mise'],
		);

		$result = $this->db->get_where('produit_vendu',$condition)->num_rows();

		$user = $this->db->get_where('user',array('id'=>$row[0]['client_id']))->result_array();
		$product = $this->db->get_where('produit',array('id'=>$row[0]['product_id']))->result_array();
		$winner_client = array_merge($user,$row,$product);

		if (count($user) <= 0) {
			echo json_encode(array('info'=>'Le tirage n\'a pas été effectuer, veuiller reessayer, probleme du syteme.'));
			return;
		}

		$data = array(
			'client_id'=>$row[0]['client_id'],
			'product_id'=>$row[0]['product_id'],
			'seller_id'=>$row[0]['seller_id'],
			'code_mise'=>$row[0]['code_mise'],
			'date'=>date('Y-m-d',time()),
		);

		$text_send_client = '<img src="'.base_url().'assets/img/loginLoader.jpeg" width="100"><h3> Tirage</h3><br><br><p>Cher client Felicitations, vous étez le gagnant de l\'article '.$winner_client[2]['product'].' dont vous avez effectuer un tirage au nom de '.$winner_client[0]['username'].' avec le code client de '.$winner_client[1]['code_mise'].', veuiller passer à notre bureau ou bien nous contacter pour retirer votre article.</p><br><br>Les administrateurs<br><br><p>Pourquoi acheter un produit à 10$ , si vous pouvez l\'avoir à 1$? Tentez votre chance et Soyez le bienheureux.</p>';

		$r = $this->sendmail->sendmailto($from,$winner_client[0]['email'],'Tirage nos felicitations',$text_send_client);
		$text_display = 'Le gagnat de l\'article '.$winner_client[2]['product'].' est le client '.$winner_client[0]['username'].' dont le code de mise est le '.$winner_client[1]['code_mise'].', un mail lui a été envoyer.';
		if ($r) {
			if ($result <= 0) {
				$this->db->insert('produit_vendu',$data);
			}
		
			$dataUpdate = array('validate_tirage'=>'1');
			$this->db->update('produit_en_vente',$dataUpdate, array('product_id'=>$product_id));
			$this->db->update('produit',$dataUpdate,array('id'=>$product_id));
			echo json_encode(array('info'=>$text_display,'status'=>'success'));
		}else{
			echo json_encode(array('info'=>'Le tirage n\'a pas été effectuer, veuiller reessayer, probleme du syteme.','status'=>'fail'));
		}
	}

}