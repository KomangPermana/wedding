<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountAdmin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('wedding_helper');
		$this->load->model('Admin/AccountModel');
    }
    
	public function index(){
		
    }
    
    function uLogin(){
        $username = $this->input->post("username");
		$password = $this->input->post("password");
		$hashpass = MD5('wedding'.$password);
		$where = array(
			"Username" => $username,
			"HashPassword" => $hashpass
        );
        
        $cek = $this->AccountModel->cek_login("user",$where)->num_rows();
        if ($cek > 0){
			$Data = $this->AccountModel->cek_login("user",$where)->result();
			foreach ($Data as $d){
				$dSession = array(
					"uid" => $d->Id,
					"uname" => $d->Username
				);
				$uStatus = $d->IsActive;
            }
            if ($uStatus == 1){
                $this->session->set_userdata($dSession);
                redirect(base_url("Admin/Home"));
            } else {
                $vars['Alert'] = "Akun Dalam Status - Dibekukan";
				$this->load->view('account/Home', $vars);
            }
        }
    }

    function uLogout(){
		$this->session->sess_destroy();
		redirect(base_url('Admin/AccountAdmin'));
	}
}