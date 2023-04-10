<?php
class hitung extends CI_Model
{
    //buat variabel buat nampung nilai
    public $nilai1, $nilai2, $hasil;

    //eksekusi penjumlahan
    public function jumlah($n1=null, $n2=null){
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;


    }
}