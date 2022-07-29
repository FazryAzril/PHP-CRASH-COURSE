<?php

    function tambah ($a, $b) {
        return $a + $b;
    }

    function ada_baki ($a,$b) {
        return ($a % $b) > 0;
    }

    function pre_name($pegawai) {
        $pname = ' ';
    
        if ($pegawai == 'Fazry') {
            $pname = 'Dr';
        }elseif ($pegawai == 'Siti') {
            $pname = 'Ir.';
        }else {
            $pname = 'Encik';
        }

        return $pname . $pegawai;
    }

?>