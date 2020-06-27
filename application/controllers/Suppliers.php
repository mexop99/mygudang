<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Suppliers extends CI_Controller{
    public function index()
    {
        $data['title'] = "MyGudang | Suppliers";
        $this->load->view('template/header', $data);
        $this->template->load('template/globalTemplate','suppliers/view_supplierData');
        $this->load->view('template/footer');
    }
}