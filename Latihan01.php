<?php
class Latihan01 extends CI_Controller
{
    public function index()
    {
        echo"<center><h1>Haii</h1>";
        echo"Selamat Datang.... Selamat Belajar Web Programming II</center>";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}    