<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    function index()
    {
        $this->load->view('login_view');
    }
} /* not end project

/**     function auth(){
        $username = $this->input->post('username',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $cek_user = $this->login_model->cek_user($username,$password);
        if($cek_user->num_rows() > 0){
        $data = $cek_user->row_array();
        $username = $data['username'];
        $level = $data['level'];
        $sesdata = array(
        'username'=> $username,
        'level' => $level,
        'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        if($level == 'admin'){
        $this->session->set_userdata('akses','admin');
        redirect('admin/overview');
        }
        elseif($level == 'petugas'){
        $this->session->set_userdata('akses','petugas');
        redirect('admin/pembayaran');
        }
        elseif($level == 'siswa'){
            $this->session->set_userdata('akses','siswa’);
            redirect('admin/pembayaran');
            }else {
            $this->session->set_flashdata('msg','Username
            or Password is Wrong');
            redirect('login’);
        }
    }

            function logout(){
                $this->session->sess_destroy();
                $url=base_url('');
                redirect($url);
            }
        } */