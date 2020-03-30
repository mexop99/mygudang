<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    public function index()
    {
        check_not_login();
        $data['title'] = "MyGudang | Dashboard";
        $this->load->view('template/header', $data);
        $this->template->load('template/viewMainTemplate','dashboard/dashboard');
        $this->load->view('template/footer');
    }
}