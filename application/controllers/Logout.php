<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logout extends CI_Controller {
     public function __construct(){
        parent::__construct();
         $this->load->helper('url');
         $this->load->library('session');
         $this->load->model('System_log');
     }
    public function index() {
         $this->load->database();
        $this->System_log->system_logs($this->session->identifier,$this->session->names,'Deconnexion','L\'utilisateur '.$this->session->names.' s\'est deconnecter avec success.');
        $data = array();
    	$this->session->sess_destroy();
    	redirect('Login',$data);
	}
}