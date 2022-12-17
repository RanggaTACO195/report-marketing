<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AccountController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Molekuler_model', 'molekuler');
    }

    public function index(){
        $this->load->view('partials/header');
		$this->load->view('admin/index');
		$this->load->view('partials/footer');
    }

//     public function insertStatus()
//     {
 
//         $data = array(
//             'TestStatus' => 'Roche',
//             'created_date' => date('Y-m-d H:i:s'),
//             'is_active' => '1'
//         );

//         $this->db->insert('data_molekuler_teststatus', $data);
//         die();
// // BRCA AZI 2022
// // EGFR One Onco
// // FREE
// // Harga Khusus
// // HARGA KHUSUS 2021
// // Harga Khusus BPJS
// // Harga Khusus OPCRC
// // HARGA KHUSUS SM 2021
// // IHK KHUSUS DR. ISMELDI
// // IHK MOL Khusus Pasien dr. Henky
// // KHUSUS BPJS
// // MSD
// // N/A
// // OPCRC MSD
// // Paket ALL RAS
// // Paket ALL RAS + BRAF
// // Paket ALL RAS+BRAF
// // Paket ALLRAS
// // Paket ALLRAS + BRAF
// // Paket ALLRAS IHK MOL Khusus Pasien dr. Henky
// // Paket ALLRAS+BRAF
// // Paket IDH+MGMT+EGFR IHC
// // Paket Panel
// // PROMO NP OP-CRC
// // PT Bifarma Adiluhung



//     }
}
?>