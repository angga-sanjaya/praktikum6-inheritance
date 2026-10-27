<?php
class pengguna {
    public $nama;
    public $email;

    public function __construct($nama,$email){
        $this -> nama = $nama;
        $this -> email = $email;
    }

    public function TampilkanData(){
        echo "Nama : " . $this -> nama . "<br>";
        echo "Email : " . $this -> email . "<br>";
    }
}

class  mahasiswa extends pengguna{
    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi)
    {
        parent::__construct($nama, $email);

        $this -> nim = $nim;
        $this -> prodi = $prodi;
    }

    public function TampilkanDataMahasiswa() {
        $this -> Tampilkandata();

        echo "NIM : " . $this -> nim . "<br>";
        echo "Program Studi : " . $this -> prodi . "br"; 
    }
}

$mhs1 = new mahasiswa ("Andi", "andi@gmail.com", "123456789", "SIstem Informasi");

$mhs1 -> TampilkanDataMahasiswa();
?>