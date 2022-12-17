<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('AuthController.php');
class ReportController extends AuthController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Molekuler_model', 'molekuler');
    }

    public function index()
    {

		$this->load->view('partials/header');
		$this->load->view('report/index');
		$this->load->view('partials/footer');
    }

}

?>