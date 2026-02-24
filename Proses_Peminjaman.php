<?php
class Pinjaman {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $terlambat;

    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }
    public function angsuran() {
        return $this->totalPinjaman() / $this->lama;
    }
    public function denda() {
        return $this->angsuran() * 0.0015 * $this->terlambat;
    }  
    public function totalBayar() {
        return $this->angsuran() + $this->denda();
    }
}
$pinjam = new Pinjaman();

$pinjam->pinjaman  = htmlspecialchars($_POST['pinjaman']);
$pinjam->bunga     = htmlspecialchars($_POST['bunga']);
$pinjam->lama      = htmlspecialchars($_POST['lama']);
$pinjam->terlambat = htmlspecialchars($_POST['terlambat']);

echo "<h2>Hasil Perhitungan</h2>";
echo "Total Pinjaman : Rp " . number_format($pinjam->totalPinjaman(),0,",",".") . "<br>";
echo "Angsuran per Bulan : Rp " . number_format($pinjam->angsuran(),0,",",".") . "<br>";
echo "Denda Keterlambatan : Rp " . number_format($pinjam->denda(),0,",",".") . "<br>";
echo "Total Pembayaran : Rp " . number_format($pinjam->totalBayar(),0,",",".") . "<br>";
?>