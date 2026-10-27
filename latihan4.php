<?php
class pengguna {

    public function TampilkanPeran(){
        echo "Peran: Pengguna Sistem Informasi";
    }
}

class mahasiswa extends pengguna {

    public function TampilkanPeran(){
        echo "peran : Mahasiswa";
    }
}

class dosen extends pengguna {

    public function TampilkanPeran(){
        echo "Peran : Dosen";
    }
}

$mhs = new mahasiswa();
$dosen = new dosen();

$mhs -> TampilkanPeran();

echo "<br>" . "<hr>";

$dosen -> TampilkanPeran();

?>