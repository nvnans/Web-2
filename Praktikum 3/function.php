<?php
    
    //Buat Fungsi
    function hitungUmur($thn_lahir) {
        //Function Code
        $thn_skrg = 2023;
        //Hitung Umur
        $umur = $thn_skrg - $thn_lahir;
        //Tampilkan Umur
        //echo $umur;

        //Kembaliin Umur
        return $umur;
    }

    //Panggil Fungsi
    //hitungUmur(2003);
    
    echo "Umur saya adalah " . hitungUmur(2003);

?>