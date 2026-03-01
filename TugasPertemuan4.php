<?php

class Mahasiswa {

    private $dataMahasiswa = [];

    public function tambahMahasiswa($nama, $kelas, $matkul, $nilai){
        $this->dataMahasiswa[] = [
            "nama" => $nama,
            "kelas" => $kelas,
            "matkul" => $matkul,
            "nilai" => $nilai
        ];
    }

    private function cekLulus($nilai){
        if($nilai >= 70){
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }

    public function tampilkanData(){
        foreach($this->dataMahasiswa as $mhs){
            echo "Nama : " . $mhs["nama"] . "<br>";
            echo "Kelas : " . $mhs["kelas"] . "<br>";
            echo "Mata Kuliah : " . $mhs["matkul"] . "<br>";
            echo "Nilai : " . $mhs["nilai"] . "<br>";
            echo $this->cekLulus($mhs["nilai"]) . "<br>";
            echo "<hr>";
        }
    }
}

$mhs = new Mahasiswa();

$mhs->tambahMahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80);
$mhs->tambahMahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75);
$mhs->tambahMahasiswa("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55);

$mhs->tampilkanData();

?>