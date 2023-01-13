<?php
	defined('BASEPATH') or exit('No direct script access allowed');
		class System_log extends CI_Model {
			public function system_logs($user_id = null,$user = null,$operation = null,$description = null){
				if (!empty($user_id)) {
					$data = array(
						'user_id'=>$user_id,
						'user'=>$user,
						'operation'=>$operation,
						'description'=>$description,
						'date'=>date('Y-m-d h:i:s',time()),
					);
					return $this->db->insert('system_log',$data);	
				}	
			}
		}