<?php

class Login_Model extends CI_Model
{
    function cek_login($table, $where)
    {
        // return $this->db->get_where($table, $where);
    }

    public function get($username)
    {
        $this->db->where('username', $username); // untuk menambahkan where clause : username='$username'
        $result = $this->db->get('users')->row(); // untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}