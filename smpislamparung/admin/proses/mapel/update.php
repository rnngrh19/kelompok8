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
    <link href="../../css/mapel.css" rel="stylesheet"> 
    <link href="../../css/navbar.css" rel="stylesheet"> 
    <link href="../../css/sidebar.css" rel="stylesheet"> 
</head>
<body>

<div class="section-form" style="width: 100% ;background-color: rgba(0,0,0, 0.2);">
    <div class="content-form" style="height: 60%;">
            <div class="form-title">
            <?php 
                include '../koneksi.php';
                $id = $_GET['id'];
	            $update = mysqli_query($con,"SELECT * FROM tb_mapel WHERE id_mapel='$id'") or die(mysql_error());
                foreach ($update as $u) { ?>
        
                <h4>Ubah Data Mata Pelajaran</h4>
                <a  class="closebtn" href="../../mapel.php">&times;</a>
            </div>
            <div class="form-input">
              <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Kode Mata Pelajaran</label> <br>
                    <input type="text"  class="text" name="kode" value="<?=$u['kode_mapel']?>" readonly>
                    <label for="">Nama Mata Pelajaran</label>
                    <input type="text"  class="text" name="nama" value="<?=$u['nama_mapel']?>" >
            </div>
        <?php }
        ?>
            <div class="form-button">
              <button name="updateMapel">Update</button>
            </div>
            </form>
        <?php 
            if(isset($_POST['updateMapel'])) { 
                $update= mysqli_query($con,"UPDATE tb_mapel SET nama_mapel='$_POST[nama]' WHERE id_mapel='$id' ");
                if ($update) {
                  echo " <script>
                  alert('Data telah diupdate !');
                  window.location='../../mapel.php';
                  </script>";	
               }
              }
                
  
                
          ?>
    

</div>

</body>
</html>