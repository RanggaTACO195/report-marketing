<?php 
class Login_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
      }

      function login($post, $cookie_login = false) {
        $this->load->helper('string');
        $this->load->helper('cookie');
        $res = $this->Master_model->checkUserLogin($post['username'], $post['password']);
  
        if(!empty($res)){
          //set session data
         $session = array(
          'id' => $res->id,
          'id_account' => $res->id_account,
           'username' => $res->username,
           'name' => $res->name,
           'email' => $res->email_login,
           'logged_in' => TRUE,
         );
        $this->session->set_userdata($session);
       //check session
 
        }else{
          return false;
        }
    
        if(!is_object($res)) return FALSE;
        // if ($res->isactive !== "1") return FALSE;
        $status = $this->session->userdata('logged_in');
        $this->is_login($status);
        $this->save_login();
        return TRUE;
      }

      public function is_login($row = NULL) {
        if($row != NULL){
        return true;}
        else{
          // $this->session->sess_destroy();
          return false;
        }
      }
    
      function logout() {
        $this->load->helper('cookie');
        $this->session->sess_destroy();
        delete_cookie('crmb2b');
      }

      private function save_login() {
        $this->load->library('user_agent');
        $log = array(
          'ip' => (string) $this->input->ip_address(),
          'user_agent' => (string) $this->agent->agent_string(),
          'browser' => (string) $this->agent->browser(),
          'id_user' => (string) $this->session->userdata('id'),
          'dt' => (string) date('Y-m-d H:i:s')
          );
    
        $this->Master_model->insertData('login_log_marketing', $log);
      }

    }
    ?>