<?php

// Array
$animals = ["Kucing", "Ayam", "Ikan", "Burung"];
// Menampilkan Index/Isi Array
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

// Looping Array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

echo "<br>";
// Array Asosiatif
$Mahasiswa = ["Nama"=>"Noviana", "Umur"=>19, "Alamat"=>"Depok"];

echo $Mahasiswa["Nama"] . "<br>";

foreach ($Mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}
echo "<br>";

// Array Multidimensi
$Dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "SO"] 
];

echo $Dosen[0][1];
echo "<br>";

foreach ($Dosen as $dsn) {
    echo " Nama Dosen : " . $dsn[0];
    echo " Matkul : " . $dsn[1];
    echo "<br>";
    
}

?>