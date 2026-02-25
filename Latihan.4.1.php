<?php

function formatrupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

class Belanja {
    public $namapembeli;
    public $namabarang;
    public $hargabarang;
    public $jumlahbeli;

//ini adalah method yang ... 
public function hitungsubtotal(): float|int {
    return $this->hargabarang * $this->jumlahbeli;
}

public function hitungtotaldengandiskon($persendiskon): float|int {
    $subtotal = $this -> hitungsubtotal();
    $diskon = ($persendiskon / 100) * $subtotal;
    return $subtotal - $diskon; 
    }
}

//buat array data pembeli
$data = [
    'namapembeli' =>'gendis',
    'namabarang' => 'mie ayam',
    'hargabarang' => 12000,
    'jumlahbeli' => 12
]; 

//instansiasi objek belanja dari class belanja
$belanja = new belanja();
$belanja->namapembeli = $data['namapembeli'];
$belanja->namabarang = $data['namabarang'];
$belanja->hargabarang = $data['hargabarang'];
$belanja->jumlahbeli = $data ['jumlahbeli'];

//output

echo "<h2> STRUK BELANJA WARUNG A </h2>";
echo "pembeli: " . $belanja->namapembeli . "<br>";
echo "barang: " . $belanja->namabarang . "<br>";
echo "subtotal: " . formatrupiah(angka: $belanja->hitungsubtotal()) . "<br>";
echo "total (diskon 10%): " . formatrupiah(angka: $belanja->hitungtotaldengandiskon(persendiskon: 10)) . "<br>";
?>




