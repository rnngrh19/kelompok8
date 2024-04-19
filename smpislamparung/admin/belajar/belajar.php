<?php
    $mahasiswa = [
        [
                 "nama" => "RIAN NUGRAHA",
                "nim" => "211919292",
                "email" => "rian@kjdkfj",
                "jurusan"=>"Teknik Informatika",
                "gambar"=>"bintang.jpg"
        ],
        [
                "nama" => "VIRA",
                "nim" => "211919292",
                "email" => "vira@kjdkfj",
                "jurusan"=>"Teknik Informatika",
                "gambar"=>"abstrak.jpg"
        ]

    ]
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 10rem;
            height: 10rem;
        }
        li {
            list: none;
        }
    </style>
</head>
<body>
    <h2>DAFTAR MAHASISWA</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]?>" alt=""></li>
            <li><?= $mhs["nama"]?></li>
            <li><?= $mhs["nim"]?></li>
            <li><?= $mhs["email"]?></li>
            <li><?= $mhs["jurusan"]?></li>
        </ul>
    <?php } ?>
</body>
</html>