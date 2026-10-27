<?php
class pengguna {
    public $nama;
    public $email;

    public function TampilkanData(){
        echo "Nama : " . $this -> nama . "<br>";
        echo "Email : " . $this -> email . "<br>";
    }
}

$pengguna1 = new pengguna ();

$pengguna1 -> nama = "Andi";
$pengguna1 -> email = "Andi@email.com";

$pengguna1 -> TampilkanData();
?>