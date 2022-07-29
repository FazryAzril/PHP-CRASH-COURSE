<?php

$kelas = [];
$kelas [] = ['nama' => 'Siti', 'umur' => 11];
$kelas [] = ['nama' => 'Atan', 'umur' => 11];
$kelas [] = ['nama' => 'Ali', 'umur' => 12];
$kelas [] = ['nama' => 'Abu', 'umur' => 13];
$kelas [] = ['nama' => 'Raju', 'umur' => 14];
$kelas [] = ['nama' => 'Aliya', 'umur' => 15];
$kelas [] = ['nama' => 'Karim', 'umur' => 16];
foreach($kelas as $indeks =>$murid){
    echo "nombor $indeks<br>";
    echo "nama" .$murid['nama']. "<br>";
    echo "umur" .$murid['umur']. "<br>";
    echo "------------<br>";
}






?>