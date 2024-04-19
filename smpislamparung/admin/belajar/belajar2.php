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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>DAFTAR NAMA MAHASISWA</h2>
    <ul>
    <?php foreach($mahasiswa as $mhs) { ?>
        <li><a href="belajar.php"><?= $mhs["nama"]?></a></li>

     <?php } ?>   
    </ul>
</body>
</html>