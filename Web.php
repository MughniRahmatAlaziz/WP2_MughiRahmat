<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index(){
        $data['judul'] = "KEUTAMAAN BULAN RAMADHAN";
        $this->load->view('v_header',$data);
        $this->load->view('v_artikel',$data);
        $this->load->view('v_footer',$data); 
    }

    public function login(){
        $data['judul'] = "Masukan Data Diri Anda";
        $this->load->view('v_header',$data);
        $this->load->view('form-input',$data);
        $this->load->view('v_footer',$data); 
    }

    public function home(){
        $data['judul'] = "KEUTAMAAN BULAN RAMADHAN";
        $this->load->view('v_header',$data);
        $this->load->view('v_ramadhan',$data);
        $this->load->view('v_footer',$data); 
    }

    public function hasil(){
        {
            $data = [
                'nama1' => $this->input->post('nama1'),
                'nim'  => $this->input->post('nim'),
                'kelas' => $this->input->post('kelas'),
                'umur' => $this->input->post('umur'),
                'tala' => $this->input->post('tala'),
                'alamat' => $this->input->post('alamat'),
                'kopo' => $this->input->post('kopo'),
                'email' => $this->input->post('email'),
                ];
       
        $data['judul'] = "Data Diri Anda";
        $this->load->view('v_header',$data);
        $this->load->view('v_hasil',$data);
        $this->load->view('v_footer',$data);
        }
    }
}
?>
