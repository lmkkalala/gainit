<?php
	defined('BASEPATH') or exit('No direct script access allowed');
		class Login_modal extends CI_Model {
			public function insert($table){
				return $this->db->insert($table);
			}
			public function update($table, $data, $condition){
				return $this->db->update($table,$data,$condition);
			}
			public function view(){

			}
			public function delete($table,$condition){
				return $this->db->delete($table,$condition);
			} 
			public function get_where($table,$username,$email,$phone){
				$username = $this->db->get_where($table,array('username'=>$username))->result_array();
				if (count($username) > 0) {
					$username = array('username'=>'exist');
				}else{
					$username = array('username'=>'not');
				}

				$email = $this->db->get_where($table,array('email'=>$email))->result_array();
				if (count($email) > 0) {
					$email = array('email'=>'exist');
				}else{
					$email = array('email'=>'not');
				}

				$phone = $this->db->get_where($table,array('phone'=>$phone))->result_array();
				if (count($phone) > 0) {
					$phone = array('phone'=>'exist');
				}else{
					$phone = array('phone'=>'not');
				}
				$response = array_merge($username,$email,$phone);
				return $response;
			}
		}