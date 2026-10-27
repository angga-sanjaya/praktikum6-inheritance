<?php

class pengguna
{
    protected $nama, $email;

    public function __construct($nama, $email)
    {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }

    public function tampilkanPeran(){
        echo "Peran: Pengguna Umum <br>";
    }
}

class mahasiswa extends pengguna
{

    private $nim, $prodi;

    public function __construct($nim, $nama, $prodi, $email)
    {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData()
    {
        parent::tampilkanData();
        echo "NIM : " . $this->nim . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
    }

    public function tampilkanPeran(){
        echo "Peran: Mahasiswa <br>";
    }
}

class dosen extends pengguna
{

    private $nidn, $bidangKeahlian;

    public function __construct($nidn, $nama, $bidangKeahlian, $email)
    {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData()
    {
        parent::tampilkanData();
        echo "NIDN : " . $this->nidn . "<br>";
        echo "Bidang Keahlian : " . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran(){
        echo "Peran: Dosen <br>";
    }
}

class administrasi extends pengguna
{

    private $idpegawai, $bagian;

    public function __construct($idpegawai, $nama, $bagian, $email)
    {
        parent::__construct($nama, $email);
        $this->idpegawai = $idpegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData()
    {
        parent::tampilkanData();
        echo "NIDN : " . $this->idpegawai . "<br>";
        echo "Bidang Keahlian : " . $this->bagian . "<br>";
    }

    public function tampilkanPeran(){
        echo "Peran: Administrasi <br>";
    }
}

$mhs = new mahasiswa("12345678", "Andi", "Sistem Informasi", "andi@gmail.com");
$dosen = new dosen("09876543", "Budi", "Pemrograman Web", "budi@gmail.com");
$adm = new administrasi("123", "Rudi", "TU", "rudi@gmail.com");

echo "<h2>Data Mahasiswa</h2>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<hr>";

echo "<h2>Data Mahasiswa</h2>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();

echo "<hr>";

echo "<h2>Data Administrasi</h2>";
$adm->tampilkanData();
$adm->tampilkanPeran();