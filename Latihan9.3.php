<?php

//class manusia
class manusia {
    //property
    protected $nama = "Ardi";
    var $kelas = "SI 2";

    //method protected
    protected function nama(){
        return "Nama : ".$this->nama;
    }

    //method public untuk akses nama
    public function tampilkan_nama(){
        return $this->nama();
    }

    //method protected
    protected function tampilkan_kelas(){
        return "Kelas : ".$this->kelas;
    }

    //method public untuk akses kelas
    public function get_kelas(){
        return $this->tampilkan_kelas();
    }
}

//instansiasi class manusia
$manusia = new manusia();

//memanggil method
echo $manusia->tampilkan_nama()."<br />";
echo $manusia->get_kelas();

?>