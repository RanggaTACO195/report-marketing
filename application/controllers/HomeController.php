<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('AuthController.php');
class HomeController extends AuthController {

    public function __construct()
    {
        parent::__construct();
     
    }

    public function index()
    {
		$this->load->view('partials/header');
		$this->load->view('partials/body');
		$this->load->view('partials/footer');
    }

}

?>