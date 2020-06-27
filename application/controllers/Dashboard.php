<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    /**
     * @return void
     */
    public function index()
    {
        check_not_login(); // cek login atau belum

        $user_data['user_login'] = $this->fungsi->user_login(); // mengambil data dari libraries Fungsi.PHP


        //load view
        $data['title'] = "MyGudang | Dashboard";
        $this->load->view('template/header', $data);
        $this->template->load('template/globalTemplate', 'dashboard/dashboard', $user_data);
        $this->load->view('template/footer');
    }
}
