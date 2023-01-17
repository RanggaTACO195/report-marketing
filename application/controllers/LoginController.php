<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
        $this->load->model('Master_model', 'Master_model');

    }

    public function index(){

        $this->load->view('login');
    }

    public function submit(){
		// $check_cookie = $this->cac_user_model->validate_cookie();
		$check_cookie = false;
  
		if (($this->input->post('username') && $this->input->post('password')) || $check_cookie) {
			$login = $this->login->login($this->input->post()) || $check_cookie;
			if ($login) {
				if($this->session->userdata('logged_in') == TRUE){
					return redirect('/home');
					exit();
				}
			
			} else {
				return redirect('/login');
				exit();
			}
		}
		$this->load->view('/login');
    }

	function logout() {
		$this->login->logout();
		return redirect('/login');
	}


}

?>