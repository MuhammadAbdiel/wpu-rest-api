<?php

// $mahasiswa = [
//     [
//         "nama" => "Muhammad Abdiel Firjatullah",
//         "nim" => "2031710156",
//         "email" => "abdielfirdie@gmail.com"
//     ],
//     [
//         "nama" => "Muhammad Firdaus",
//         "nim" => "2031710157",
//         "email" => "dausmini@gmail.com"
//     ]
// ];

// * Mengambil Data dari Database e_voting menggunakan Object PDO

$dbh = new PDO('mysql:host=localhost;dbname=e_voting', 'root', '');
$db = $dbh->prepare('SELECT * FROM users');
$db->execute();
$user = $db->fetchAll(PDO::FETCH_ASSOC);

// * Mengkonversi data dari Database yang berupa Array Associative menjadi JSON

$data = json_encode($user);
echo $data;

// var_dump($mahasiswa);
