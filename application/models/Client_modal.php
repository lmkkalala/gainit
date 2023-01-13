<?php
	defined('BASEPATH') or exit('No direct script access allowed');
		class Client_modal extends CI_Model {
			public function get_where($table,$id,$where){
				$this->db->where($id,$where);
				$rows = $this->db->get($table)->result_array();
				if (count($rows) > 0) {
					return $rows;
				}else{
					return $rows;
				}
			}
			public function update($table,$data,$id){
				$this->db->where('id',$id);
				return $this->db->update($table,$data);
			}
			public function delete($table,$id){
				$this->db->where('id',$id);
				return $this->db->delete($table);
			}

			public function get_user($table,$id){
				$this->db->where('id',$id);
				return $this->db->get($table)->result_array();
			}
		}