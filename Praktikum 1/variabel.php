<?php 
//echo "Hello World";

$Nama = "Noviana Nur Shanti";
$Jurusan = "Teknik Informatika";
$Semester = 2;

echo "Nama Saya adalah : " .$Nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php echo $Nama; ?> </h2>
    <p> Saya Kuliah di Jurusan <?= $Jurusan; ?> </p>
    <p> Saat ini Saya Semester <?= $Semester; ?> </p>
</body>
</html>