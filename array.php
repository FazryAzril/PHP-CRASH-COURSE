<?php
    $kelas = [];

    $murid = [

        'nama' => 'Siti',
        'umur' => 11
    ];

    $kelas [] = $murid;

    $murid = [

        'nama' => 'Atan',
        'umur' => 12
    ];

    $kelas [] = $murid;

    echo 'nama: '.$kelas[0] ['nama']. '<br>';
    echo 'umur: '.$kelas[0] ['umur']. '<br>';
    echo "<br>-------------</br>";

    echo "<pre>";
    print_r($kelas);
    echo "</pre>";


?>