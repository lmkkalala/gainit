<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class SendMail
	{
		 public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }

		// send mail function
		public function sendmailto($from, $to, $subject, $message){
			$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465, #587
			  #"SMTPCrypto" => "tls", #tls
			  'smtp_user' => 'contacttirage0@gmail.com', // change it to yours
			  'smtp_pass' => 'lhkbsmoairlcuflq', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

		    //$message = 'hello bro';
		    $this->CI->load->library('email');
		    $this->CI->email->initialize($config);
		    $this->CI->email->set_newline("\r\n");
		    $this->CI->email->from($from); // change it to yours
		    $this->CI->email->to($to);// change it to yours
		    $this->CI->email->subject($subject);
		    $this->CI->email->message($message);
			$send = @$this->CI->email->send();
		    if($send){
		      return TRUE;
		    }else{
		    	return FALSE;
		     //show_error($this->email->print_debugger());
		    }
		}
	}