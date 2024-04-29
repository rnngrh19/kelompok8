<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="../../css/guru1.css" rel="stylesheet"> 
    <link href="../../css/navbar.css" rel="stylesheet"> 
    <link href="../../css/sidebar.css" rel="stylesheet"> 
</head>
<body>

<div class="section-form" style="width: 100%">
    <div class="content-form">
            <div class="form-title">
            <?php 
                include '../koneksi.php';
                $id = $_GET['id'];
	            $update = mysqli_query($con,"SELECT * FROM tb_guru WHERE id_guru='$id'") or die(mysql_error());
                foreach ($update as $u) { ?>
        
                <h4>Ubah Data</h4>
                <a  class="closebtn" href="../../guru.php">&times;</a>
            </div>
            <div class="form-input">
              <form action="" method="post" enctype="multipart/form-data">
                  <input type="text" placeholder="NIP" class="text" name="nip" value="<?=$u["nip"]?>">
                  <input type="text" placeholder="Nama Guru" class="text" name="nama" value="<?=$u["nama_guru"]?>" >
                  <input type="mail" placeholder="Email" class="text" name="email" value="<?=$u["email"]?>">
                  <p class="text-danger">Ubah Foto (ekstensi wajib jpg,png)</p>
                  <img src="profilfoto/<?= $u['foto']?>" alt="" width="60px" height="60px" style="border-radius: 50%; margin-right: 1rem;">
                  <input type="file" class="file" name="foto"> 
                
            </div>
        <?php }
        ?>
            <div class="form-button">
              <button name="updateGuru">Update</button>
            </div>
            </form>
        <?php 
            if(isset($_POST['updateGuru'])) {
                
                $pass= sha1($_POST['email']);
                $gambar = @$_FILES['foto']['name'];
                if (!empty($gambar)) {
                move_uploaded_file($_FILES['foto']['tmp_name'],"profilfoto/gambar");
                $editGuru = mysqli_query($con,"UPDATE tb_guru SET foto='$gambar',nip='$_POST[nip]',nama_guru='$_POST[nama]',email='$_POST[email]' WHERE id_guru='$id' ");
                } else {
                $editGuru= mysqli_query($con,"UPDATE tb_guru SET nip='$_POST[nip]',nama_guru='$_POST[nama]',email='$_POST[email]' WHERE id_guru='$id' ");
                }
                 if ($update) {
                    echo " <script>
                    alert('Data telah diupdate !');
                    window.location='../../guru.php';
                    </script>";	
                 }
         
           }
          ?>
    

</div>

</body>
</html>