<?php 
// Cek apakah tidak ada data di $_GET

if(!isset($_GET["nama"]) || 
!isset($_GET["merek"])||
!isset($_GET["ukuran"])||
!isset($_GET["gambar"]))
   {
    // redirect
    header("Location: latihan1.php");
    exit;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sendal</title>
</head>
<body>
    <ul></ul>
        <li>nama : <?= $_GET["nama"];?></li>
        <li>merek : <?= $_GET["merek"];?></li>
        <li>ukuran : <?=$_GET["ukuran"];?></li>
        <li><img src="sendal/<?= $_GET["gambar"];?>" alt=""></li>
    </ul>

    <a href="latihan1.php">kembali ke list sendal</a>
</body>
</html>