<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->checkLogin();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function checkLogin(){
   
        if($this->session->userdata('logged_in') != '1'){
            return redirect('/login');
        }else{
            return true;
        }
    }

    


}

?>