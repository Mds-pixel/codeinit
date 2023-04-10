<?php
class matematika extends CI_Controller
{
    public function index(){
        echo "rencananya kita belajar matematika 1888888";
    }
    public function penjumlahan($n1, $n2){
        $this->load->model('hitung');
        $hasil = $this->hitung->jumlah($n1, $n2);
        echo "hasil penjumlahan dari".$n1."+".$n2."=".$hasil;
    }
}