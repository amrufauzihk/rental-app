<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->helper('url');
    }

    public function index(){
        if ($this-> session->userdata('authenticated')){
            redirect('dashboard');
        } else{
            $this->session->set_flashdata('msg','anda telah logout ! silahkan login Terlebih Dahulu');
            $this->load-view('login');
            
        }

    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $user =$this->Login_Model->get($username);
        
        if (empty($user)){
            $this->session->set_flashdata('messege','username atau password  salah');
            redirect('/login');
        
        }else{
            if ($password ==$user->password){
                $session = array(
                    'authenticated' => true,
                    'id' => $user->id,
                    'username' => $user->nam_lengkap,
                );
                $this->session->set_userdata($session);
                redirect('/dashboard');
            }else{
                $this->session->set_flashdata('massage','password salah');
                redirect('/login');
            }
        }
    }
}