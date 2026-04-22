<?php

class Pengunjung {
    
    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }

    public static function reset() {
        self::$jumlah = 0;
    }
}

// Instansiasi objek
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

// Reset jumlah
Pengunjung::reset();

// Menampilkan hasil
echo "Jumlah Pengunjung: " . Pengunjung::$jumlah;

?>