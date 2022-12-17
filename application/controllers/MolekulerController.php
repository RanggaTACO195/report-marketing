<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MolekulerController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Molekuler_model', 'molekuler');
    }

    public function index(){
        $response = array();
        $TestStatus = $this->input->get('TestStatus');
        $Date_Received_Now = $this->input->get('Date_Received_Now');
        $Date_Received_last = $this->input->get('Date_Received_last');
 
        $data = $this->molekuler->get_molekuler_data_by_allfilter($TestStatus, $Date_Received_Now, $Date_Received_last);
        if(count($data) > 0){
            $response = array(
                "success" => true,
                "data" => $data
                );
          }else{
            $response = array(
                "success" => false,
                "data" => []
                );
          }
            echo json_encode($response);
    }

    public function getFilterStatusByID()
    {
      $id_account = $this->input->get('account');
      $response = array();
      $data = $this->molekuler->get_molekuler_teststatus_by($id_account);
      if(count($data) > 0){
       $response = array(
            "success" => true,
            "data" => $data
          );
        }else{
          $response = array(
            "success" => false,
            "data" => []
          );
        }
       echo json_encode($response);
    }

    public function getTestStatus(){
        $account = $this->input->get("account");
        $response = array();
        $data = $this->molekuler->get_molekuler_teststatus();
        if(count($data) > 0){
         $response = array(
              "success" => true,
              "data" => $data
            );
          }else{
            $response = array(
              "success" => false,
              "data" => []
            );
          }
         echo json_encode($response);
    }

    public function insertData()
    {
      $response = array();
     //$_POST = json_decode(file_get_contents("php://input"), true);
      $data = array(
        'id_account' => $this->input->post('id_account'),
        'test_status' => $this->input->post('test_status'),
      );
      $result = $this->molekuler->insert_data_detail_account($data);
      if(isset($result)){
        $response = array(
          "success" => true,
          "data" => $result
        );
        }else{
          $response = array(
            "success" => false,
            "data" => []
          );
        }
        echo json_encode($response);
    }

    public function getDetailAccount()
    {
      $response = array();
      $data = $this->molekuler->get_data_detail_account();
      if(count($data) > 0){
          $response = array(
            "success" => true,
            "data" => $data
          );
        }else{
          $response = array(
            "success" => false,
            "data" => []
          );
        }
        echo json_encode($response);
    }

    public function getAccount()
    {
      $response = array();
      $data = $this->molekuler->get_data_account();
      if(count($data) > 0){
          $response = array(
            "success" => true,
            "data" => $data
          );
        }else{
          $response = array(
            "success" => false,
            "data" => []
          );
        }
        echo json_encode($response);
    }



}

?>