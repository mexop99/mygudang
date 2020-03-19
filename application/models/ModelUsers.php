<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUsers extends CI_Model
{

    private $_table ="users";
    
    public $name = "";
    public $username = "";
    public $password = "";
    public $image = "dafault.jpg";
    public $is_active=0;
    public $role_id =0;
    public $time_created =0;


    


    public function login($data)
    {
        // // $this->db->select('*');
        // $this->db->select('users');
        // $this->db->where('username', $data['username']);
        // $this->db->where('password', sha1($data['password']));
        // $query = $this->db->get();
        // // $query = $this->db->get_where('users', $data(''));
        // return $query;
    }


    public function login1($username)
    {
        $user = $this->db->get_where('users', ['username'=> $username])->row_array();
        return $user;
    }


    public function reg()
    {
        $post = $this->input->post();
        $this->name= $post['name'];
        $this->username = $post['username'];
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->is_active=1;
        $this->role_id=1;
        $this->time_created=time();

        return $this->db->insert($this->_table, $this);
    }
}
