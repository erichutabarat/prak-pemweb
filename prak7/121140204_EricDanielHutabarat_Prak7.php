<!-- 
Nama : Eric Daniel Hutabarat
NIM : 121140204
Kelas praktikum : RB -->

<?php

class Manusia{
    private $nama;
    private $umur;
    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
        echo "objek berhasil dibuat<br>";
    }
    public function tampilkan_data(){
        echo "Nama : ".$this->nama. "<br>". "Umur : ". $this->umur. "<br>";
    }
}

class Mhs extends Manusia{
    private $nim;
    public function __construct($nama, $umur, $nim) {
        parent::__construct($nama, $umur);
        $this->nim = $nim;
        echo "objek Mahasiswa (class inherit) berhasiil dibuat";
    }
}

$Manusia = new Manusia("Eric", 21);
$Mahasiswa = new Mhs("Eric", 21, 121140204);


?>
