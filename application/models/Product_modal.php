<?php
	defined('BASEPATH') or exit('No direct script access allowed');
		class Product_modal extends CI_Model {

			public function get($table,$limit = null,$order = null, $order_id = null){
				if ($order != null and $order_id != null) {
					$this->db->order_by($order_id,$order);
				}
				
				if($limit != null){
					$this->db->limit($limit);
				}
				
				$this->db->where('display_status','1');
				$this->db->where('admin_display','1');
				$rows = $this->db->get($table)->result_array();
				if (count($rows) > 0) {
					return $rows;
				}else{
					return $rows;
				}
			}

			public function get_all($table){
				$this->db->where('display_status','1');
				$this->db->where('admin_display','1');
				$rows = $this->db->get($table)->result_array();
				if (count($rows) > 0) {
					return $rows;
				}else{
					return $rows;
				}
			}



			public function get_where($table,$id,$where){
				$this->db->where($id,$where);
				$this->db->where('display_status','1');
				$this->db->where('admin_display','1');
				$rows = $this->db->get($table)->result_array();
				if (count($rows) > 0) {
					return $rows;
				}else{
					return $rows;
				}
			}
		}