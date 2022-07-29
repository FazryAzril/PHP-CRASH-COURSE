<?php


  $nama = isset($_GET['nama']) ? $_GET['nama'] : ' ';

    switch($nama){
        case 'Ali' :
            echo "Selamat Datang Ali";    
            break;
        case 'Raju' :
            echo "Selamat Datang Ali";    
            break;
        case 'Siti' :
            echo "Selamat Pagi Siti";    
            break;
        case 'Aliyah' :
            echo "Dah makan ke belum Aliyah?";    
            break;
        case 'Karim' :
            echo "Ada G ke, Karim!";    
            break;
    
    }
/*
    if ($nama == 'Ali') {
        echo "Selamat Datang Ali";    
    } else if ($nama == 'Raju') {
        echo "Selamat Datang Ali";    
    } else if ($nama == 'Raju') {
        echo "Selamat Datang Ali";    
    } else if ($nama == 'Raju') {
        echo "Apa khabar Raju";
    } else if ($nama == 'Raju') {
        echo "Apa khabar Raju";
    } else {
        echo "Saya PHP, Awak Siapa?";
    }

*/
?>