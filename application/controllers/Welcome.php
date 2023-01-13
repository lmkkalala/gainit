<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->model('product_modal');
        $this->load->model('Client_modal');
        $this->load->model('System_log');
    }

	public function index($link = null,$value = null, $id = null){
		if (!empty($link)) {
			$this->session->other_usertype = '';
		}

		if ($link == 'mon_compte' and empty($this->session->identifier)) {
			redirect('');
			return;
		}

		$data['store'] = '';
		$data['user_id'] = '';
		if (!empty($this->session->flashdata('delete'))) {
			$this->session->sess_destroy();
			redirect('Login');
		}

// get the cart
		if (!empty($this->session->identifier)) {
			$this->db->join('produit','produit.id=cart.product_id');
			$this->db->join('user','cart.user_id=user.id');
			$data['cart_contents_show'] = $this->db->get_where('cart',array('cart.user_id'=>$this->session->identifier))->result_array();
		}else{
			$data['cart_contents_show'] = $this->db->get_where('cart',array('cart.user_id'=>$this->session->no_session))->result_array();
		}
		
// product of the home page
		$data['current_category'] = 'Tous les Articles';
		//$this->db->order_by('title', 'RANDOM');
		$data['products_show_arrival'] = $this->product_modal->get('produit',8,'DESC','id');
		$this->db->limit(8);
		$this->db->where('usertype','seller');
		$data['shop_show_main'] = $this->db->get('user')->result_array();
		$data['products_show_top'] = $this->product_modal->get('produit',8,'DESC','add_date');
		$data['products_show_all'] = $this->product_modal->get_all('produit');

// category of product
		$data['category_show_all'] = $this->db->get('produit_categorie')->result_array();

// content of the connected user start
		if (!empty($this->session->identifier)) {
			$this->db->order_by('id','DESC');
			$data['products_show'] = $this->db->get_where('produit',array('user_id'=>$this->session->identifier))->result_array();
			$data['connected_user'] = $this->db->get_where('user',array('usertype'=>$this->session->usertype,'email'=>$this->session->email))->result_array();
		}
// admin show all product
		$data['status'] = '';
		if (!empty($this->session->identifier)) {
			$this->db->order_by('id','DESC');
			$this->db->limit('15');
			$data['products_show_admin_dash'] = $this->db->get_where('produit',array('display_status'=>1))->result();
			if ($value != '' and $id != '') {
				if ($value == 'vendu') {
					$this->db->order_by('id','DESC');
					$data['products_show_admin'] = $this->db->get_where('produit',array('display_status'=>1,'sellValidate'=>1,'validate_tirage'=>1,'user_id'=>$id))->result();
					$data['status'] = 'VENDU';
				}else if ($value == 'en_vente') {
					$this->db->order_by('id','DESC');
					$data['products_show_admin'] = $this->db->get_where('produit',array('display_status'=>1,'sellValidate'=>0,'user_id'=>$id))->result();
					$data['status'] = 'EN COURS DE VENTE';
				}else{
					$this->db->order_by('id','DESC');
					$data['products_show_admin'] = $this->db->get_where('produit',array('display_status'=>1,'user_id'=>$id))->result();
				}	
			}else{
				$this->db->order_by('id','DESC');
				$data['products_show_admin'] = $this->db->get_where('produit',array('display_status'=>1))->result();
			}

			$this->db->order_by('date','DESC');
			$this->db->join('produit','produit.id = produit_vendu.product_id');
			$this->db->join('user','user.id = produit_vendu.client_id');
			$data['products_show_vendu_admin'] = $this->db->get('produit_vendu',array('sellValidate'=>'1'))->result();

			$data['connected_user'] = $this->db->get_where('user',array('usertype'=>$this->session->usertype,'email'=>$this->session->email))->result_array();
			$data['admin_show'] =  $this->db->get_where('user',array('usertype'=>'admin'))->result();
			$data['client_show'] =  $this->db->get_where('user',array('usertype'=>'client'))->result();
			$data['vendeur_show'] =  $this->db->get_where('user',array('usertype'=>'seller'))->result();

			if($link != '' and $value != ''){
				$data['detail_product'] = $this->db->get_where('produit',array('id'=>$value))->result_array();
				$this->db->join('produit','produit.id = produit_en_vente.product_id');
				$this->db->join('user','user.id = produit_en_vente.client_id');
				$data['produit_en_vente'] = $this->db->get_where('produit_en_vente',array('product_id'=>$value))->result_array();
			}
		}

// get data product for the seller view
		if (!empty($this->session->identifier)) {
			$this->db->join('produit','produit.id = produit_en_vente.product_id');
			$this->db->where('seller_id',$this->session->identifier);
			$data['produit_en_seller'] = $this->db->get('produit_en_vente')->result_array();
		}

// get data product for the client view where he already bet on
		if (!empty($this->session->identifier)) {
			$this->db->join('produit','produit.id = produit_en_vente.product_id');
			$this->db->where('client_id',$this->session->identifier);
			$data['produit_en_client'] = $this->db->get('produit_en_vente')->result_array();
		}

		if ($value != null) {
			$data['products_show_sell'] = $this->db->get_where('produit',array('user_id'=>$this->session->identifier,'validate_tirage'=>1,'id'=>$value))->result_array();
		}else{
			$data['products_show_sell'] = $this->db->get_where('produit',array('user_id'=>$this->session->identifier,'validate_tirage'=>1))->result_array();
		}
//system logs
	$this->db->order_by('date','DESC');
	$data['system_log'] = $this->db->get_where('system_log',array('user_id'=>$this->session->identifier))->result_array();	

//system logs for the admin
	$this->db->order_by('date','DESC');
	$data['system_log_admin'] = $this->db->get('system_log')->result();	


// content of the connected user end
		$data['shop_show'] = $this->db->get_where('user',array('usertype'=>'seller'))->result_array();

		if (!empty($this->session->identifier)) {
			$id = $this->session->identifier;
			$data['user'] = $this->Client_modal->get_user('user',$id);
		}else{
			$data['user'] = $this->Client_modal->get_user('user','0');
		}
// display testimonies
			$condition = array('validate'=>'1');
			$this->db->join('user','user.id = testimonies.client_id');
			$data['testimony_list'] = $this->db->get_where('testimonies',$condition)->result_array();

			$this->db->join('user','user.id = testimonies.client_id');
			$data['testimony_list_admin'] = $this->db->get('testimonies')->result();
			
// display this information on the seller dashboard
		if (!empty($this->session->identifier)) {
			$id = $this->session->identifier;
			$data['posted_article'] = $this->db->get_where('produit',array('user_id'=>$id))->num_rows();
			$data['validated_article'] = $this->db->get_where('produit',array('user_id'=>$id,'admin_display'=>1))->num_rows();
			$data['not_validated_article'] = $this->db->get_where('produit',array('user_id'=>$id,'admin_display'=>0))->num_rows();
			$data['in_sale_article'] = $this->db->get_where('produit',array('user_id'=>$id,'admin_display'=>1))->num_rows();
			$data['sold_article'] = $this->db->get_where('produit',array('user_id'=>$id,'sellValidate'=>1))->num_rows();
			$data['liked_article'] = $this->db->get_where('product_reaction',array('product_user_poster'=>$id))->num_rows();
		}else{
			$data['posted_article'] = 0;
			$data['validated_article'] = 0;
			$data['not_validated_article'] = 0;
			$data['in_sale_article'] = 0;
			$data['sold_article'] = 0;
			$data['liked_article'] = 0;
		}
// information to display on the admin dashboard
		$data['seller_number'] = $this->db->get_where('user',array('usertype'=>'seller'))->num_rows();
		$data['all_user_number'] = $this->db->get_where('user')->num_rows();
		$data['client_number'] = $this->db->get_where('user',array('usertype'=>'client'))->num_rows();
		$data['product_number'] = $this->db->get_where('produit')->num_rows();
// total money
		$total_money_amount = $this->db->get_where('produit_en_vente')->result_array();
		$data['total_money_amount'] = 0;
		if (count($total_money_amount) <= 0) {
			$data['total_money_amount'] = 0;
		}else{
			foreach ($total_money_amount as $key => $value) {
				$data['total_money_amount'] = $data['total_money_amount'] + $total_money_amount[$key]['mise'];
			}	
		}
		

		if ($link == null and $this->session->usertype != null) {
			$page = 'index';
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
		}else if ($this->session->usertype == 'client' or $this->session->usertype == 'admin' or $this->session->usertype == 'seller') {
			if ($link != null) {
				$page = $link;
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}else{
			if ($link != null) {
				$page = $link;
				if(!file_exists('front/'.$page.'.php')){
					redirect('Welcome');
				}
			}else{
				$page = 'index';
			}
			$this->load->view($page,$data);
		}
	}

	// change connected session to a client on 
	public function connect_as_($value){
		$this->session->usertype = 'client';
		$this->session->session_change = $value;
		redirect('Welcome');
	}
	// change the session from client to admin or seller session type
	public function go_to($valueSession){
		$this->session->usertype = $valueSession;
		$this->session->session_change = '';
		redirect('Welcome');
	}

	// get the information of an article on the tirage page
	public function product_details($value = null){
		$data['store'] = '';
		if ($value != null) {
			$count = 0;
			$check = true;
			while ($check == true) {
				$password = md5($count);
				if ($password == $value) {
					$product_id = $count;
					$check = false;
				}else{
					$count ++;
				}
			}
		$data['user_id'] = '';
			//category of product
		$data['category_show_all'] = $this->db->get('produit_categorie')->result_array();
			$data['products_show_arrival'] = $this->product_modal->get('produit',4,'DESC','id');
			$data['product'] = $this->product_modal->get_where('produit','id',$product_id);
			$this->load->view('product_details',$data);
		}else{
			redirect('Welcome');
		}
	}

	// display one product on the website
	public function product($value = null){
		$data['store'] = '';
		if ($value != null) {
			$count = 0;
			$check = true;
			while ($check == true) {
				$password = md5($count);
				if ($password == $value) {
					$user_id = $count;
					$check = false;
				}else{
					$count ++;
				}
			}
			$data['user_id'] = $user_id;
			$this->db->join('user','user.id = produit.user_id');
			$data['shop_products_show'] = $this->product_modal->get_where('produit','user_id',$user_id);
			if(!empty($data['shop_products_show'])){
				$data['store'] = $data['shop_products_show'][0]['store_name'];
			}
			//category of product
			$data['current_category'] = 'Tous les Articles';
		$data['category_show_all'] = $this->db->get('produit_categorie')->result_array();
			if (sizeof($data['shop_products_show']) > 0) {
				$this->load->view('article',$data);
			}else{
				$this->session->message = 'Cette Boutique est vide, aucun produit';
				redirect('Welcome/index/shop');
			}
			
		}else{
			redirect('Welcome');
		}
	}

	// add an article to the cart
	public function add_to_cart(){
		if (!empty($this->session->identifier)) {
			$row = $this->db->get_where('produit',array('id'=>$this->input->post('product_id')))->result_array();
			if ($row[0]['sellValidate'] == '1'  or date('Y-m-d',time()) >= $row[0]['end_date']) {
				echo json_encode(array('info'=>'La session de tirage de cette article a déjà été cloture.','status'=>'info'));
				return;
			}
			$seller_id = $row[0]['user_id'];
			$check_user_exist = $this->db->get_where('cart',array('user_id'=>$this->session->identifier,'seller_id'=>$seller_id,'product_id'=>$this->input->post('product_id')))->result_array();
			if (count($check_user_exist) <= 0) {
				$array = array(
					'user_id'=> $this->session->identifier,
					'product_id'=> $this->input->post('product_id'),
					'seller_id'=> $seller_id,
					'add_date'=>date('Y-m-d',time()),
				);
				$add_to_cart = $this->db->insert('cart',$array);
				if ($add_to_cart) {
					echo json_encode(array('info'=>'L\'article a été ajouter a votre Panier, clique sur l\'icon <i class="icofont-cart"></i> pour consulter le contenue du Panier.','status'=>'success'));
				}else{
					echo json_encode(array('info'=>'Echec, veuiller reessayer!','status'=>'error'));
				}
			}else{
				echo json_encode(array('info'=>'Cet article a déjà été ajouter, consulter le <i class="icofont-cart"></i> Panier.','status'=>'warning'));
			}
		}else{
			echo json_encode(array('info'=>'Vous devez posseder un compte pour ajouter cet article à votre Panier. <a href="'.site_url('Welcome/index/login').'">Cliquer Ici.</a>','status'=>'warning'));
		}
	}

	// delete article from the cart
	public function delete_to_cart(){
		if (!empty($this->session->identifier)) {
			$this->db->where('cart_id',$this->input->post('cart_id'));
			$this->db->where('user_id',$this->session->identifier);
			$delete = $this->db->delete('cart');
			if ($delete == true) {
				echo json_encode(array('info'=>'Cet article a été supprimer avec success.','status'=>'success'));
			}else{
				echo json_encode(array('info'=>'Echec, veuiller reessayer!','status'=>'error'));
			}
		}else{
			echo json_encode(array('info'=>'Echec, veuiller reessayer, aucun compte associer.','status'=>'error'));
		}
	}

	//select article based on a category
	public function categorised_article($value,$user_id = null){
			$data['current_category'] = $value;
			if ($user_id != 'null') {
				$this->db->where('user_id',$user_id);
			}

			if ($value == 'categorie') {
				$products_show_all = $this->product_modal->get_all('produit');
			}else{
				$this->db->where('category_product',$value);
				$products_show_all = $this->product_modal->get_all('produit');
			}

			if(count($products_show_all) <= 0){
				echo '<div class="row">
							<div class="col-md-12">
								<p style="font-size:15px; font-weight:bold; text-decoration:underline; text-align: center;">Cette categorie est vide!</p>
							</div>
					  </div>
					  ';
			}
			foreach ($products_show_all as $key => $value){
				$number_row_selling_article[$key] = $this->db->get_where('produit_en_vente',array('product_id'=>$products_show_all[$key]['id']))->num_rows();
				$number_row_like[$key] = $this->db->get_where('product_reaction',array('product_id'=>$products_show_all[$key]['id'],'reaction'=>1))->num_rows();
				if ($this->session->identifier != null) {
					$row = $this->db->get_where('product_reaction',array('product_id'=>$products_show_all[$key]['id'],'user_id'=>$this->session->identifier))->result_array();
					if (count($row) > 0) {
						$reaction = $row[0]['reaction'];
						if ($reaction == 1) {
							$color = 'text-info';
						}else{
							$color = '';
						}
					}else{
						$color = '';
					}
				}else{
					$color = '';
				}
				echo '<div class="col-md-3 col-6">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-popular-items mb-50 text-center">
                                            <div class="popular-img">
												<a href="'.base_url('Welcome/product_details/'.md5($products_show_all[$key]['id'])).'">
													<img class="leazyLoad2" src="'.base_url('dist/produit/'.$products_show_all[$key]['caption_image']).'" alt="'.$products_show_all[$key]['id'].'" style="background-color: rgba(0, 0, 0, 0.6);">
												</a>
                                                <div class="img-cap">
                                                    <span onclick="add_to_cart('.$products_show_all[$key]['id'].')">Ajouter <i class="icofont-cart"></i></span>
                                                </div>
                                                <div class="favorit-items">
                                                    <span class="flaticon-heart '.$color.'" id="like_button'.$products_show_all[$key]['id'].'" onclick="like_button('.$products_show_all[$key]['id'].')" style="color:rgba(255, 0, 0, 0.8);">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="popular-caption">
                                                <h3 class="display-6">
                                                	<a href="'.base_url('Welcome/product_details/'.md5($products_show_all[$key]['id'])).'" style="font-size: 16px;">'.$products_show_all[$key]['product'].'</a> 
                                                    <small style="font-size: 15px; background-color: rgba(255, 0, 0, 0.8);padding: 5px;color: white;border-radius: 5px;">$ '.$products_show_all[$key]['mise'].'</small>
                                                </h3>
                                                <table style="font-size:12px;">
                                                    <tr>
                                                        <th>Personnes Enregistre</th> <td id="number_person'.$products_show_all[$key]['id'].'">'.$number_row_selling_article[$key].'</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombres Likes</th> <td id="number_reaction'.$products_show_all[$key]['id'].'">'.$number_row_like[$key].'</td>
                                                    </tr>
                                                </table>
                                                <p style="color: #fff; font-size: 15px;padding: 5px; background-color: rgba(255, 0, 0, 0.8);width: 100px;">
                                                    <a href="'.base_url('Welcome/product_details/'.md5($products_show_all[$key]['id'])).'">Details <i class="icofont-arrow-right fs-3"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>';
		}  
	}

	// like button for article
	public function like_button(){
		if ($this->session->identifier == null) {
			echo json_encode(array('status'=>'no_user','reaction'=>''));
		}else{
			//$number_row_selling_article = $this->db->get_where('produit_en_vente',array('product_id'=>$this->input->post('product_id')))->num_rows();
			$number_row_like = $this->db->get_where('product_reaction',array('product_id'=>$this->input->post('product_id'),'reaction'=>1))->num_rows();

			$this->db->where('id',$this->input->post('product_id'));
			$product = $this->db->get('produit')->result_array();

			$this->db->where('user_id',$this->session->identifier);
			$this->db->where('product_id',$this->input->post('product_id'));
			$row = $this->db->get('product_reaction')->result_array();
			if (count($row) > 0) {
				$reaction = $row[0]['reaction'];
				if ($reaction == 0) {
					$reaction = 1;
					$number_row_like = $number_row_like + 1;
				}else{
					$reaction = 0;
					$number_row_like = $number_row_like - 1;
				}
				$this->db->where('user_id',$this->session->identifier);
				$this->db->where('product_id',$this->input->post('product_id'));
				$update = $this->db->update('product_reaction',array('reaction'=>$reaction,'product_user_poster'=>$product[0]['user_id']));
				if ($update == true) {
					echo json_encode(array('status'=>'success','reaction'=>$reaction,'reaction_value'=>$number_row_like));
				}else{
					echo json_encode(array('status'=>'fail','reaction'=>''));
				}
			}else{
				$insert = $this->db->insert('product_reaction',array('product_id'=>$this->input->post('product_id'),'user_id'=>$this->session->identifier,'reaction'=>1,'product_user_poster'=>$product[0]['user_id']));
				if ($insert == true) {
					$number_row_like = $number_row_like + 1;
					echo json_encode(array('status'=>'success','reaction'=>1,'reaction_value'=>$number_row_like));
				}else{
					echo json_encode(array('status'=>'fail','reaction'=>''));
				}
			}
		}
	}

	public function load_product($product_id){
		$row = $this->db->get_where('produit',array('id'=>$product_id))->result_array();
		echo json_encode($row);
	}

// submit participation add client to a tirage
	public function submit_participation(){
		$this->db->where('id',$this->input->post('product_id'));
		$product = $this->db->get('produit')->result_array();
		
		// check the tirage session has already been clased by the admin
		if ($product[0]['sellValidate'] == '1' or date('Y-m-d',time()) >= $product[0]['end_date']) {
			echo json_encode(array('info'=>'La periode de tirage pour cet article est déjà depasse.','status'=>'fail','temp_id'=>''));
			return;
		}

		$now = time();
		$date = date('Y-m-d',$now);
		$code = rand().''.$now.''.$this->input->post('client_id');
		$temp_id = 'Tirage'.time();
		$this->db->set('client_id',$this->input->post('client_id'));
		$this->db->set('temp_id',$temp_id); //added
		$this->db->set('product_id',$this->input->post('product_id'));
		$this->db->set('seller_id',$this->input->post('seller_id'));
		$this->db->set('mise',$this->input->post('mise'));
		$this->db->set('code_mise',$code);
		$this->db->set('date',$date);
		$insert = $this->db->insert('temp_produit_en_vente');

		$this->db->where('id',$this->input->post('product_id'));
		$rows = $this->db->get('produit')->result_array();

		if ($insert) {
			//$this->System_log->system_logs($this->session->identifier,$this->session->names,'Depot mise','L\'utilisateur '.$this->session->names.' a envoyer sa mise pour le produit '.$rows[0]['product'].'.');
			echo json_encode(array('info'=>'Votre mise a été enregistrée.','status'=>'success','temp_id'=>$temp_id));
		}else{
			//$this->System_log->system_logs($this->session->identifier,$this->session->names,'Depot mise','Echec d\'action, l\'utilisateur '.$this->session->names.' a envoyer sa mise pour le produit '.$rows[0]['product'].'.');
			echo json_encode(array('info'=>'Echec d\'enregistrement, veillez reessayer.','status'=>'fail','temp_id'=>''));
		}
	}


	public function api_pay_back($op, $id){
		if ($op == 'success') {
			$this->db->where('temp_id',$id);
			$rows = $this->db->get('temp_produit_en_vente')->result_array();
			foreach ($rows as $key => $value) {
				$this->db->set('client_id',$rows[$key]['client_id']);
				$this->db->set('product_id',$rows[$key]['product_id']);
				$this->db->set('seller_id',$rows[$key]['seller_id']);
				$this->db->set('mise',$rows[$key]['mise']);
				$this->db->set('code_mise',$rows[$key]['code_mise']);
				$this->db->set('date',$rows[$key]['date']);
				$this->db->insert('produit_en_vente');
			}
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Depot mise','L\'utilisateur '.$this->session->names.' a envoyer sa mise pour le produit '.$rows[0]['product'].'.');
			echo json_encode(array('info'=>'Votre mise a été enregistrée.','status'=>'success'));
		}else if($op == 'cancel'){
			$this->session->c_message = 'Operation annuler';
			redirect('Welcome/index/article');
		}else{
			$this->System_log->system_logs($this->session->identifier,$this->session->names,'Depot mise','Echec d\'action, l\'utilisateur '.$this->session->names.' a envoyer sa mise pour le produit '.$rows[0]['product'].'.');
			echo json_encode(array('info'=>'Echec d\'enregistrement, veillez reessayer.','status'=>'fail'));
		}
		$this->db->where('temp_id',$id);
		$this->db->delete('temp_produit_en_vente');
	}
	
	// submit the cart of the client on the main web page
	public function submit_participation_cart(){
		$post_count = count($_POST);
		$temp_id = 'Tirage'.time();
		for ($i=0; $i < $post_count ; $i++) { 
			$this->db->where('id',$_POST['product_id_'.$i]);
			$product = $this->db->get('produit')->result_array();

			// check the tirage session has already been clased by the admin
			if ($product[0]['sellValidate'] != '1' and date('Y-m-d',time()) <= $product[0]['end_date']) {
				$now = time();
				$date = date('Y-m-d',$now);
				$code = rand().''.$now.''.$this->input->post('client_id');

				$this->db->set('client_id',$this->session->identifier);
				$this->db->set('temp_id',$temp_id); //added
				$this->db->set('product_id',$this->input->post('product_id_'.$i));
				$this->db->set('seller_id',$product[0]['user_id']);
				$this->db->set('mise',$product[0]['mise']);
				$this->db->set('code_mise',$code);
				$this->db->set('date',$date);
				$insert[$i] = $this->db->insert('temp_produit_en_vente');

				$this->db->where('id',$this->input->post('product_id_'.$i));
				$rows = $this->db->get('produit')->result_array();

				if ($insert[$i]) {
					$this->db->where('user_id',$this->session->identifier);
					$this->db->where('product_id',$this->input->post('product_id_'.$i));
					$this->db->where('seller_id',$product[0]['user_id']);
					$this->db->delete('cart');
					$this->System_log->system_logs($this->session->identifier,$this->session->names,'Depot mise','L\'utilisateur '.$this->session->names.' a envoyer sa mise pour le produit '.$rows[0]['product'].'.');
				}
			}
		}
		if ($insert) {
			echo json_encode(array('info'=>'Vos mises ont été enregistre, desormais vous participer au tirage dont vous vener de place vos mises, un email a été envoyer à votre address mail.','status'=>'success','temp_id'=>$temp_id));
		}else{
			echo json_encode(array('info'=>'Echec d\'enregistrement, veillez reessayer.','status'=>'fail','temp_id'=>''));
		}
	}

	// create a client account for a seller
	public function create_a_client_account(){
		$this->db->where('id',$this->input->post('create_id_user'));
		$this->db->where('other_usertype','client');
		$num_rows = $this->db->get('user')->num_rows();
		if ($num_rows <= 0) {
			$this->db->where('id',$this->input->post('create_id_user'));
			$update = $this->db->update('user',array('other_usertype'=>'client'));
			if ($update) {
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Creation','L\'utilisateur '.$this->session->names.' a crée un compte client.');
				echo json_encode(array('info'=>'Votre compte client a été créer avec success.','status'=>'success'));
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Creation','Echec d\'action, l\'utilisateur '.$this->session->names.' a crée un compte client.');
				echo json_encode(array('info'=>'Echec d\'opération veuiller reessayer.','status'=>'fail'));
			}
		}else{
			echo json_encode(array('info'=>'vous possedez déjà un compte client.','status'=>'info'));
		}
	}

	// delete the client account of a seller
	public function delete_a_client_account(){
		$this->db->where('id',$this->input->post('create_id_user'));
			$update = $this->db->update('user',array('other_usertype'=>''));
			if ($update) {
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer','L\'utilisateur '.$this->session->names.' a supprimer son compte client.');
				echo json_encode(array('info'=>'Votre compte client a été supprimer avec success.','status'=>'success'));
			}else{
				$this->System_log->system_logs($this->session->identifier,$this->session->names,'Supprimer','Echec d\'action, l\'utilisateur '.$this->session->names.' a supprimer son compte client.');
				echo json_encode(array('info'=>'Echec d\'opération veuiller reessayer.','status'=>'fail'));
		}
	}
	// filter list of sellers
	public function filter_seller_list($seller = null){
		if (!empty($seller)) {
			$seller = str_replace('%20', ' ', $seller);
			$this->db->where('usertype','seller');
			$this->db->like('store_name',$seller);
			$vendeur_show =  $this->db->get('user')->result();
			if (count($vendeur_show) <= 0) {
				$this->db->where('usertype','seller');
				$this->db->like('username',$seller);
				$vendeur_show =  $this->db->get('user')->result();
				if (count($vendeur_show) <= 0) {
					echo '<div class="col-md-12"><p>Le vendeur n\'a pas été retrouve</p></div>';
					return;
				}
			}
		}else{
			$this->db->where('usertype','seller');
			$vendeur_show =  $this->db->get('user')->result();
		}
		
        foreach ($vendeur_show as $key => $value){ 
            if ($value->login_status == '1') {
                $icon = 'fas fa-lock-open';
            }else{
               $icon = 'fas fa-lock';
            }
              	echo '<div class="col-md-3 mt-2">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Boutique&nbsp;<button class="btn btn-info" onclick="block_seller('.$value->id.')"><span id="icon'.$value->id.'" class="'.$icon.'"></span></button></p>
                            </div>
                            <div class="card-body" style="max-height: 400px">
                                <div class="row">
                                   <div class="col-12 d-flex justify-content-center" style="width: 100px;height: 100px;">
                                       <img src="'.base_url("assets/img/cover_store/").$value->cover_store_image.'" class="img-fluid icon-circle" style="width: auto;">
                                   </div>
                                   <div class="col-12 mt-3 d-flex justify-content-center">
                                       <h6>'.$value->store_name.'</h6>
                                   </div> 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                       <a href="'.base_url("Welcome/index/Produit/en_vente/".$value->id).'" class="btn btn-secondary w-100">En vente</a>
                                    </div>
                                    <div class="col-6">
                                       <a href="'.base_url("Welcome/index/Produit/vendu/".$value->id).'" class="btn btn-secondary w-100">Vendu</a>
                                    </div>
                                    <div class="col-12 mt-3">
                                       <a href="'.base_url("Welcome/index/Produit/available/".$value->id).'" class="btn btn-info w-100">Voir Produits</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
	}

	public function load_winners($search = null){
		if (!empty($search)) {
			$this->db->or_like('user.username',$search);
			$this->db->or_like('produit.product',$search);
			$this->db->or_like('user.store_name',$search);
		}

		$this->db->join('user','user.id = produit_vendu.client_id');
		$this->db->join('produit','produit.id = produit_vendu.product_id');
		$rows = $this->db->get('produit_vendu')->result();
		if(count($rows) <= 0){
			echo '<div class="col-md-3 mx-3"><p>La liste est encore vide.</p></div>';
			return;
		}

		foreach ($rows as $key => $value) {
			$user[$key] = $this->db->get_where('user',array('id' => $value->seller_id))->result_array();
		echo'<div class="col-md-3 mt-2">
				<div class="card-body" style="border-radius: 10px;border: 1px solid rgba(0, 0, 0, 0.4);padding: 15px;">
		                 <div class="row d-flex justify-content-center">
		                   <img src="'.base_url("assets/img/user/".$value->profile).'" style="width: 50%;border-radius: 50%;">
		                 </div>
		                 <div class="row mt-1">
		                   <div class="col-md-12">
		                     <div style="text-align: center;">
		                       <span style="font-size: 11px;color:#000;">'.$value->username.'</span>
		                       <hr>
		                       <ul>
		                         <li>
		                         	<span style="font-size: 11px;color:#000;font-weight:bolder;">Article </span><span>'.$value->product.'</span>
		                         </li>
		                         <li>
		                         <span style="font-size: 11px;color:#000;font-weight:bolder;">Boutique </span><span>'.$user[$key][0]['store_name'].'</span>
		                         </li>
		                       </ul>
		                      </div>
		                   </div>
		                 </div>
		            </div>
		        </div>';
        }
	}

	public function load_todays_tirage(){
		$this->db->join('user','user.id = produit.user_id');
		$rows = $this->db->get_where('produit', array('end_date' => date('Y-m-d')))->result();
		if(count($rows) <= 0){
			echo '<div class="col-md-11 mx-3"><p>La liste est vide, aucun tirage d\'article se derouler aujourd\'hui, participer a un tirage en cliquant sur le lien suivant <a href="'.base_url('Welcome/index/article').'" class="btn text-info shadow-none">Participer</a>.</p></div>';
			return;
		}

		foreach ($rows as $key => $value) {
			if ($value->validate_tirage == '1') {
				$this->db->join('user','user.id = produit_vendu.client_id');
				$client_winner[$key] = $this->db->get_where('produit_vendu',array('product_id'=>$value->id))->result_array();
				if (count($client_winner[$key]) > 0) {
					$text[$key] = '<ul>
							<li><span>Nom </span><span>'.$client_winner[$key][0]['username']. '<i class="icofont-win-trophy text-warning h4"></i></span></li>
							<li><span>Email </span><span>'.$client_winner[$key][0]['email'].'</span></li>
						';
					$profile[$key] = '<img src="'.base_url("assets/img/user/".$client_winner[$key][0]['profile']).'" style="width: 10%;border-radius: 50%;">';
				}
			}else{
				$text[$key] = '<img src="'.base_url('assets/img/SecondTartCygnet-max-1mb.gif').'" width="100"><p class="text-white bg-info p-1 h6">Le tirage est en cours</p>';
	            $profile[$key] = '';
	        }
			echo'<div class="col-md-3 mt-2">
					<div class="card-body" style="border-radius: 10px;border: 1px solid rgba(0, 0, 0, 0.4);padding: 15px;">
	                 <div class="row d-flex justify-content-center">
	                   <img src="'.base_url("dist/produit/".$value->caption_image).'" style="width: 50%;border-radius: 20%;">'.$profile[$key].'
	                 </div>
	                 <div class="row mt-1">
	                   <div class="col-md-12">
	                     <div style="text-align: center;">
	                       <hr>
	                       <ul>
	                         <li><span style="font-size: 11px;color:#000;font-weight:bolder;">Article </span><span>'.$value->product.'</span></li>
	                         <li><span style="font-size: 11px;color:#000;font-weight:bolder;">Boutique </span><span>'.$value->store_name.'</span></li>
	                       </ul>
	                      </div> 
	                   </div>
	                 </div>
	                 <div class="row d-flex justify-content-center">
	                    '.$text[$key].'
	                 </div>
	               </div>
               	</div>';
		}
	}

	public function getIPAddress() {  
	    //whether ip is from the share internet  
	     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
	                $ip = $_SERVER['HTTP_CLIENT_IP'];  
	        }  
	    //whether ip is from the proxy  
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
	                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	     }  
	//whether ip is from the remote address  
	    else{  
	             $ip = $_SERVER['REMOTE_ADDR'];  
	     }  
	     return $ip;  
	}  

	public function sharedLink($client_tirage_link = ''){
		$ip = $this->getIPAddress();  

		$num_rows = $this->db->get_where('connected_shared',array('code_mise_client'=>$client_tirage_link,'ip'=>$ip))->result_array();

		if (count($num_rows) > 0) {
			redirect('');
			return;
		}

		$rows = $this->db->get_where('produit_en_vente',array('code_mise'=>$client_tirage_link))->result();
		foreach ($rows as $key => $value) {
			$visite_number = $value->visite_number + 1;
			$this->db->where('code_mise',$client_tirage_link);
			$this->db->update('produit_en_vente',array('visite_number'=>$visite_number));
			$visite_number = 0; 
		}
		$this->db->insert('connected_shared',array('code_mise_client'=>$client_tirage_link,'ip'=>$ip,'date'=>date('Y-m-d h:i:s',time())));
		redirect('');
		return;
	}

	public function add_to_testimony(){
		$lenght = strlen($this->input->post('testimony_message'));
		if ($lenght > 500) {
			echo json_encode(array('info'=>'Votre temoignage est tres long il ne doit pas depasse 500 caracteres.','status'=>'warning'));
			return;
		}

		if (isset($_POST['product_sold_id']) and !empty($_POST['product_sold_id'])){
			if ($this->session->usertype == 'seller') {
				$column = 'seller_validate';
			}else if ($this->session->usertype == 'client') {
				$column = 'winner_validate';
			}else{
				echo json_encode(array('info'=>'Erreur systeme, veuiller reessayer plutard.','status'=>'warning'));
				return;
			}
			$this->db->where('product_id',$this->input->post('product_sold_id'));
			$this->db->where($column,'1');
			$rows = $this->db->get('produit_vendu')->num_rows();
			
			if ($rows > 0) {
				echo json_encode(array('info'=>'vous avez déjà effectuer la validation de ce article.','status'=>'warning'));
				return;
			}
			
			$this->db->update('produit_vendu',array($column => '1'),array('product_id' => $this->input->post('product_sold_id')));
		}

		$data = array(
			'client_id'=>$this->input->post('identifier'),
			'testimony_message'=>$this->input->post('testimony_message'),
			'validate'=> '0',
			'date'=>date('Y-m-d'),
		);

		$insert = $this->db->insert('testimonies',$data);
		if ($insert) {
			echo json_encode(array('info'=>'Votre temoignage a été enregistrée et sera bientôt valider par les administrateurs.','status'=>'success'));
		}else{
			echo json_encode(array('info'=>'Echec d\'opération, veuiller reessayer.','status'=>'error'));
		}
	}

	public function contact_process(){
		$message = $this->input->post('message');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$number = $this->input->post('number');

		$sms = 'De'.$name.'<br>'.$email.'<br><br>'.$message;
		$send = $this->sendmail->sendmailto($email,'supportTic@gmail.com',$subject,$sms);
		if($send){
			echo json_encode(array('info'=>'MESSAGE ENVOYER AVEC SUCCESS.','status'=>'success'));
		}else{
			echo json_encode(array('info'=>'Echec d\'opération, veuiller reessayer.','status'=>'error'));
		}
	}

}
