<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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
        $this->load->model('Client_modal');
        $this->load->model('System_log');
    }

	public function index($link = null){
		$data['products_show_arrival'] = $this->product_modal->get('produit',4,'DESC','id');
		$data['products_show_top'] = $this->product_modal->get('produit',6,'DESC','add_date');
		$data['products_show_all'] = $this->product_modal->get('produit');
		if ($this->session->usertype == 'client') {
			if ($link != null) {
				$page = $link;
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}else if ($this->session->usertype == 'seller') {
			redirect(site_url());
		}else if ($this->session->usertype == 'admin') {
			redirect(site_url());
		}else{
			if ($link != null) {
				$page = $link;
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}
	}

	public function update_client($user = null){
		if ($user != null) {
			$redirect = 'Welcome/index/modifier_profil';
		}else{
			$redirect = 'Welcome/index/mon_compte?modifier_profil';
		}

		$array = array(
			'username'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'country'=>$this->input->post('country'),
			'province'=>$this->input->post('province'),
			'city'=>$this->input->post('city'),
		);


		$row = $this->Client_modal->get_where('user','email',$this->input->post('email'));
		if ($this->input->post('old_pass') != null and $this->input->post('new_pass') != null and $this->input->post('conf_pass') != null) {
			if (sizeof($row) > 0) {
				if ($row[0]['password'] == md5($this->input->post('old_pass'))) {
					if ($this->input->post('new_pass') == $this->input->post('conf_pass')) {
						$password = array('password'=>md5($this->input->post('conf_pass')));
						$array = array_merge($array,$password);
					}else{
						$this->session->set_flashdata('notification','Les mot de passe que vous avez entre ne sont pas le même.');
						Redirect($redirect);
					}
				}
			}
		}

		if (isset($_FILES['profile']['name']) and !empty($_FILES['profile']['name'])) {
			$file_path = site_url().'assets/img/user/'.$_FILES['profile']['name'];
			if (!file_exists($file_path)) {
						$file_path_current = site_url().'assets/img/user/'.$this->input->post('current_profile');
						if (file_exists($file_path_current)) {
							unlink($file_path);
						}
						
						$config['log_threshold']		= '1';
						$config['file_name']          	= $_FILES['profile']['name'];
						$config['upload_path']          = 'assets/img/user/';
		                $config['allowed_types']        = 'gif|jpg|png|jpeg';
		                $config['max_size']             = 8000;
		                $config['max_width']            = 3024;
		                $config['max_height']           = 4032;
		                $config['overwrite']			= false;

		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                if (!$this->upload->do_upload('profile')){
		                        $this->session->set_flashdata('notification',''.strip_tags($this->upload->display_errors().' For the profile Image'));
								Redirect($redirect);
								return;
		                }else{
		                       $upload_data = $this->upload->data();
		                       $profile = array('profile' => $upload_data['file_name']);
		                       $array = array_merge($array,$profile);
		                }
			}else{
				$this->session->set_flashdata('notification','Ce nom de fichier existe déjà renomer votre fichier puis reessayer.');
				Redirect($redirect);
			}
		}

		if ($this->session->usertype == 'seller') {
			$seller_data = array(
				'store_name'=>$this->input->post('store_name'),
				'description'=>$this->input->post('description'),
			);
			$array = array_merge($array,$seller_data);

			if (isset($_FILES['cover_store_image']['name']) and !empty($_FILES['cover_store_image']['name'])) {
					$file_path = site_url().'assets/img/cover_store/'.$_FILES['cover_store_image']['name'];
					if (!file_exists($file_path)) {
								$file_path_current = site_url().'assets/img/cover_store/'.$this->input->post('current_cover_store_image');
								if (file_exists($file_path_current)) {
									unlink($file_path);
								}

								$config0['file_name']          	 = $_FILES['cover_store_image']['name'];
								$config0['upload_path']          = 'assets/img/cover_store/';
				                $config0['allowed_types']        = 'gif|jpg|png|jpeg';
				                $config0['max_size']             = 8000;
				                $config0['max_width']            = 3024;
				                $config0['max_height']           = 4032;
				                $config0['overwrite']			 = false;

				                $this->load->library('upload',$config0);
				                $this->upload->initialize($config0);
				              
				                if (!$this->upload->do_upload('cover_store_image')){
				                        $this->session->set_flashdata('notification',''.strip_tags($this->upload->display_errors().' For the Cover Image'));
										Redirect($redirect);
										return;
				                }else{
				                       $upload_data = $this->upload->data();
				                       $cover_store_image = array('cover_store_image' => $upload_data['file_name']);
				                       $array = array_merge($array,$cover_store_image);
				                }
					}else{
						$this->session->set_flashdata('notification','Ce nom de fichier existe déjà renomer votre fichier puis reessayer.');
						Redirect($redirect);
					}
				}
		}
		$update = $this->Client_modal->update('user',$array,$this->session->identifier);
			
		if ($update) { 
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Modifier','Le compte de '.$this->session->names.' a été modifier avec success.');
			$this->session->set_flashdata('notification','Vos information ont été modifier avec succes.');
			Redirect($redirect);
		}else{
			$this->session->set_flashdata('notification','Echec d\'execution reessayer plutart.');
			Redirect($redirect);
		}
	}

	public function delete_client(){
		$this->db->where('id',$this->session->identifier);
		$get = $this->db->get('user')->result_array();

		if (sizeof($get) > 0) {
			$profile = site_url().'assets/img/user/'.$get[0]['profile'];
			if (file_exists($profile)) {
				unlink($profile);
			}
			$cover_store_image = site_url().'assets/img/cover_store/'.$get[0]['cover_store_image'];
			if (file_exists($cover_store_image)) {
				unlink($cover_store_image);
			}
		}
		$delete = $this->Client_modal->delete('user',$this->session->identifier);
		if ($delete) {
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer','Le compte de '.$this->session->names.' a été supprimer avec success.');
			$this->session->set_flashdata('delete','Compte d\'utilisateur supprimer avec succes.');
			Redirect('Welcome/index/signup');
		}else{
			$this->session->set_flashdata('delete','Echec d\'execution reessayer plutart.');
			Redirect('Welcome/index/signup');
		}
	}
}
