<?php 
// Variable Scope / lingkup variabel

// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }

// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET;

$tokoSendal = [[
    "nama" => "sendal swallow murah",
    "merek" => "swallow",
    "ukuran" => 20,
    "gambar" => "4.jpg"
],
[
    "nama" => "sendal selop murah",
    "merek" => "dongfuang",
    "ukuran" => 44,
    "gambar" => "2.jpg"
],
[
    "nama" => "sendal murah fashion",
    "merek" => "tricore",
    "ukuran" => 3,
    "gambar" => "3.jpg"
],
[
    "nama" => "sendal north balance new murah",
    "merek" => "new balance",
    "ukuran" => 22,
    "gambar" => "5.jpg"
],
[
    "nama" => "sendal murah nyaman",
    "merek" => "swallow",
    "ukuran" => 1,
    "gambar" => "1.jpg"
]];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandal</title>
</head>
<body>
    <h1>Sandal</h1>
    <ul>
    <?php foreach($tokoSendal as $ts) :?>
        <li>
            <a href="latihan2.php?nama=<?= $ts["nama"]?>&merek=<?= $ts["merek"];?>&ukuran=<?=$ts["ukuran"];?>&gambar=<?=$ts["gambar"]?>"><?= $ts["nama"];?></a>
        </li>
        <?php endforeach;?>
    </ul>
</body>
</html>