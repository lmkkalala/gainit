<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendeur extends CI_Controller {

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
        $this->load->library('sendmail');
        $this->to = 'murhulakalalalucien14@gmail.com';
    }

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
			if ($link != null) {
				if ($link == 'seller') {
					$link = 'index';
				}
					if (file_exists('front/Seller/'.$link.'.php')) {
						$page = 'Seller/'.$link;
					}else{
						$page = $link;
					}
			}else{
				$page = 'Seller/index';
			}

			$this->load->view($page,$data);
		}else if ($this->session->usertype == 'admin') {
			if ($link != null) {
				if ($link == 'admin') {
					$link = 'index';
				}

				if (file_exists('front/Admin/'.$link.'.php')) {
					$page = 'Admin/'.$link;
				}else{
					$page = $link;
				}
			}else{
				$page = 'Admin/index';
			}
			$this->load->view($page,$data);
		}else{
			if ($link != null) {
				$page = $link;
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}
	}

	public function add_category(){
		$data = array(
			'categorie' => $this->input->post('categorie'),
			'add_date' => date('Y-m-d'),
		);
		$row = $this->db->get_where('produit_categorie',array('categorie'=>$this->input->post('categorie')))->result_array();
		if (sizeof($row)>0) {
			echo json_encode(array('info'=>'Cette categorie de produit existe déjà.'));
		}else{
			$add_category = $this->db->insert('produit_categorie',$data);
			if ($add_category) {
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Ajouter','Nouvelle categorisation de produit '.$this->input->post('categorie').' a été enregistrée a par '.$this->session->names.' avec success.');
				echo json_encode(array('info'=>'Categorie ajouter avec success.'));
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Ajouter','Echec d\'action, Nouvelle categorisation de produit '.$this->input->post('categorie').' a été tentée a par '.$this->session->names.'.');
				echo json_encode(array('info'=>'Echec d\'enregistrement, veuiller reessayer.'));
			}
		}
	}

	public function add_product(){
		$number = rand();
		$config = array(
			'file_name'=> $number.'_'.$_FILES['image1']['name'],
			'upload_path'=> 'dist/produit',
			'allowed_types'=> 'gif|jpg|png|jpeg|jfif|pdf',
			'max_size'=> 80000,
			'max_width'=> 3024,
			'max_height'=> 4032,
		);

		$this->load->library('upload',$config);
	        if (!$this->upload->do_upload('image1')){
	            $error = strip_tags($this->upload->display_errors());
	            echo json_encode(array('info' => $error));
	            return;
	        }else{
	            $upload_data = $this->upload->data();
	            $file = $upload_data['file_name'];
	        }
	        //$mise = $this->input->post('prix') * 10/100;
	        $mise = 0;
	    $data = array(
			'product'=>$this->input->post('produit'),
			'user_id'=>$this->session->identifier,
			'prix_vente'=>$this->input->post('prix'),
			'mise'=>$mise,
			'category_product'=>$this->input->post('categorie'),
			'description'=>$this->input->post('description'),
			'caption_image' => $file,
			'add_date' => date('Y-m-d'),
		);

		$add_product = $this->db->insert('produit',$data);
		if ($add_product) {
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Ajouter','Le produit '.$this->input->post('produit').' du vendeur '.$this->session->names.' a été ajouter avec success.');
			echo json_encode(array('info' => 'Le Produit a été ajouter avec success','status'=>'success'));
	    return;
		}else{
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Ajouter','Echec d\'action, Le produit '.$this->input->post('produit').' du vendeur '.$this->session->names.' a echouer.');
			echo json_encode(array('info' => 'Echec d\'enregistrement, veuiller reessayer','status'=>'fail'));
	    return;
		}
	}

	public function update_product(){
		if (isset($_FILES['updateimage1']['name']) and !empty($_FILES['updateimage1']['name'])) {
			$number = rand();
			$config = array(
				'file_name'=> $number.'_'.$_FILES['updateimage1']['name'],
				'upload_path'=> 'dist/produit',
				'allowed_types'=> 'gif|jpg|png|jpeg|jfif|pdf',
				'max_size'=> 80000,
				'max_width'=> 3024,
				'max_height'=> 4032,
			);

			$this->load->library('upload',$config);
		        if (!$this->upload->do_upload('updateimage1')){
		            $error = strip_tags($this->upload->display_errors());
		            echo json_encode(array('info' => $error));
		            return;
		        }else{
		        	$file_to_unlink = site_url().'dist/produit/'.$this->input->post('old_image');
		        	if (file_exists($file_to_unlink)) {
		        		unlink($file_to_unlink);
		        	}
		            $upload_data = $this->upload->data();
		            $file = $upload_data['file_name'];
		        }
		}else{
			$file = $this->input->post('old_image');
		}

	 	$data = array(
			'product'=>$this->input->post('updateproduit'),
			'user_id'=>$this->session->identifier,
			'prix_vente'=>$this->input->post('updateprix'),
			'mise'=>$this->input->post('updateprixT'),
			'category_product'=>$this->input->post('updatecategorie'),
			'description'=>$this->input->post('updatedescription'),
			'caption_image' => $file,
		);
		
	  $condition = array('id'=>$this->input->post('product_id'));
		$update_product = $this->db->update('produit',$data,$condition);
		if ($update_product) {
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Modifier','Le produit '.$this->input->post('updateproduit').' du vendeur '.$this->session->names.' a été modifier avec success.');
			echo json_encode(array('info' => 'Le Produit a été modifier avec success','status'=>'success'));
	    return;
		}else{
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Modifier','Echec d\'action, Le produit '.$this->input->post('updateproduit').' du vendeur '.$this->session->names.' a echouer.');
			echo json_encode(array('info' => 'Echec de modification, veuiller reessayer','status'=>'fail'));
	    return;
		}
	}

	public function get_data(){
		$this->db->where('id',$this->input->post('rowid'));
		$rows = $this->db->get('produit')->result_array();
		echo json_encode($rows);
	}

	public function delete_product(){
		$this->db->where('id',$this->input->post('product_id'));
		$row = $this->db->get('produit')->result_array();
		if (sizeof($row) > 0) {
			$file = site_url('dist/produit').$row[0]['caption_image'];
			if (file_exists($file)) {
				unlink($file);
			}
			$this->db->where('id',$this->input->post('product_id'));
			$delete_product = $this->db->delete('produit');
			if($delete_product){
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer','Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a été Supprimer avec success.');
				echo json_encode(array('info' => 'Le Produit a été supprimer avec success','status'=>'success'));
	      return;
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer','Echec d\'action, Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a echouer.');
				echo json_encode(array('info' => 'Echec, veuiller reessayer','status'=>'fail'));
	      return;
			}
		}else{
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer','Echec d\'action, Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a echouer.');
			echo json_encode(array('info' => 'Echec, veuiller reessayer','status'=>'fail'));
	    return;
		}
	}

	public function valider_seller_product(){
			$this->db->where('id',$this->input->post('product_id'));
			$valider_sell_by_seller = $this->db->update('produit',array('seller_validation'=>1));
			if($valider_sell_by_seller){
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Validation vente vendeur','Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a été Validation vente vendeur avec success.');
				echo json_encode(array('info' => 'Le Produit a été valider avec success','status'=>'success'));
	      return;
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Validation vente vendeur','Echec d\'action, Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a echouer.');
				echo json_encode(array('info' => 'Echec, veuiller reessayer','status'=>'fail'));
	      return;
			}
	}


	public function activate_product(){
		$this->db->where('id',$this->input->post('product_id_show'));
		$row = $this->db->get('produit')->result_array();
		if (sizeof($row) > 0) {
			if ($row[0]['display_status'] == '1') {
				$value = 0;
				$message = 'Desactiver';
			}else{
				$message = 'Activer';
				$value = 1;
			}

			$this->db->where('id',$row[0]['user_id']);
			$user = $this->db->get('user')->result_array();

			$this->db->where('id',$this->input->post('product_id_show'));
			$activate_product = $this->db->update('produit',array('display_status'=>$value,'start_date'=>$this->input->post('start_date'),'end_date'=>$this->input->post('end_date')));
			if($activate_product){
				$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,'Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a été '.$message.' avec success.');
				echo json_encode(array('info' => 'Le Produit a été '.$message.' avec success','status'=>'success'));
	      return;
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,'Echec d\'action, Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a été '.$message.'.');
				echo json_encode(array('info' => 'Echec, veuiller reessayer','status'=>'fail'));
	      return;
			}
		}else{
			$this->System_log->system_logs($this->session->identifier,$this->session->names,$message,'Echec d\'action, Le produit '.$row[0]['product'].' du vendeur '.$this->session->names.' a été '.$message.'.');
			echo json_encode(array('info' => 'Echec, veuiller reessayer','status'=>'fail'));
	    return;
		}
	} 

	public function contact_admin(){
		$from = $this->input->post('email');
		$to = $this->to;
		$message = $this->input->post('names').' a envoyer ce message <br><br>'.$this->input->post('message').' <br><br> <ul><li>Telephone '.$this->input->post('phone').'</li><li> Address Mail '.$this->input->post('email').'</li></ul>';

		$r = $this->sendmail->sendmailto($from,$to,'Message Vendeur',$message);

		if ($r) {
			echo json_encode(array('info'=>'votre message a été envoyer,vous recevrez votre reponse via votre address mail.','status'=>'success'));
		}else{
			echo json_encode(array('info'=>'Echec veuiller reessayer.','status'=>'fail'));
		}
	}

	// send mail function
	// public function sendmail(){
	// 	$config = Array(
	// 	  'protocol' => 'smtp',
	// 	  'smtp_host' => 'ssl://smtp.googlemail.com',
	// 	  'smtp_port' => 465,
	// 	  //"SMTPCrypto" => "tls",
	// 	  'smtp_user' => 'termitehubinfo@gmail.com', // change it to yours
	// 	  'smtp_pass' => 'ohidipxsjzyihras', // change it to yours
	// 	  'mailtype' => 'html',
	// 	  'charset' => 'iso-8859-1',
	// 	  'wordwrap' => TRUE
	// 	);

	//     $message = 'hello bro';
	//     $this->load->library('email', $config);
	//     $this->email->set_newline("\r\n");
	//     $this->email->from('termitehubinfo@gmail.com'); // change it to yours
	//     $this->email->to('murhulakalalalucien14@gmail.com');// change it to yours
	//     $this->email->subject('Resume from JobsBuddy for your Job posting');
	//     $this->email->message($message);

	//     if($this->email->send()){
	//       echo 'Email sent.';
	//     }else{
	//      show_error($this->email->print_debugger());
	//     }
	// }

}