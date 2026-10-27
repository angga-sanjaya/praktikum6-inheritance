<?php
class pengguna {
    public $nama;
    public $email;

    public function TampilkanData(){
        echo "Nama  : " . $this -> nama . "<br>";
        echo "Email : " . $this -> email . "<br>";
    }
}

class mahasiswa extends pengguna {
    public $nim;
    public $prodi;
}

$mhs1 = new mahasiswa();

$mhs1 -> nama = "Andi";
$mhs1 -> email = "andi@gmail.com";
$mhs1 -> nim = "123456789";
$mhs1 -> prodi = "Sistem Informasi";

$mhs1 -> TampilkanData();

echo "NIM : " . $mhs1 -> nim . "<br>";
echo "Program Studi : " . $mhs1 -> prodi . "<br>";
?>