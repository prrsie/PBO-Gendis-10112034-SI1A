<?php

class kendaraan {
    public $JumlahRoda =4;
    public $Warna;
    public $bahanBakar = "Premium";
    public $Harga = 100000000;
    public $Merek;
    public $TahunPembuatan= 2004;

         public function statusHarga()
        {
            if($this->Harga > 50000000)
                {
                    $status = "Harga Kendraan Mahal";
                }
                else
                {
                    $status = "Harga Kendraan Murah";
}
        return $status;
        }

        function statusSubsidi()
        {
            if($this->TahunPembuatan < 2005 && $this->bahanBakar=="Premium"){
                $status = "DAPAT SUBSIDI";
            }
            else{
                $status = "TIDAK DAPAT SUBSIDI";
            }
            return $status;
        }
}

$ObjekKendaraan = new Kendaraan();
echo "jumlahRoda : ".$ObjekKendaraan->JumlahRoda."<br />";
echo "Status Harga : ".$ObjekKendaraan->statusHarga();
echo "Status Subsidi :".$ObjekKendaraan->statusSubsidi();

    $objekKendaraan1 = new Kendaraan;

    $objekKendaraan1 ->harga=1000000;
    $objekKendaraan1 ->tahunPembuatan = 1999;

    echo "Status Harga : ".$ObjekKendaraan ->statusHarga()
?>