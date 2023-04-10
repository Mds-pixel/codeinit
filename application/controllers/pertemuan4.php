<?php
defined('BESTPATH') or exit ('no direct script access allowed');
class pertemuan4 extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('new_atas',$data);
        $this->load->view('new_menu',$data);
        $this->load->view('new_isi',$data);
        $this->load->view('new_bawah',$data);
    }
}