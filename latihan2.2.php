<?php


class belanja { // ini adalah class belanja
      
//jenis variable instance
    public string $NamaPembeli="lulu"; //string diinputkan berupa nama
    public string $NamaBarang="cangkir";
    public int $HargaBarang=500; //menggunakan integer karna bilangannya bulat
    public int $JumlahBarang=2;
    public float $TotalBayar=10000;
    public float $Diskon=0.1;

    //jenis variable static
    public static float $pajak = 0.02;

public function __construct ($NamaPembeli){
    $this->$NamaPembeli = $NamaPembeli;
    }

    public function hitungtotal(): float 
    {
        $subtotal = $this->HargaBarang * $this->JumlahBarang;

        return $subtotal;
    }

    public function Diskon(): float
    {
        $Diskon = $this->hitungtotal() * $this->Diskon;

        return $Diskon;
    }


      public function HargaDiskon(): float
    {
        $HSD = $this->hitungtotal() - $this->Diskon(); 

        return $HSD;
    }

    public function TampilRincian ($NamaPembeli): void{
        echo "Nama Pembeli : " . $this->NamaPembeli . "<br>"; //Menampilkan nama pembeli
        echo "Nama Barang : " . $this->NamaBarang . "<br>";
        echo "Harga Barang : " . $this->HargaBarang . "<br>"; 
        echo "Jumlah Barang : " . $this->JumlahBarang . "<br>";
        echo "Total Bayar : " . $this->hitungtotal() . "<br>";
        echo "Diskon : " . $this->Diskon() . "<br>";
        echo "Harga Setelah Diskon : " . $this->HargaDiskon() . "<br>";
    }

}

$belanja1 = new belanja("lulu");
$belanja1->TampilRincian($belanja1->NamaPembeli);


?>
