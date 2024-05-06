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
    <link href="../../css/siswa.css" rel="stylesheet"> 
    <link href="../../css/navbar.css" rel="stylesheet"> 
    <link href="../../css/sidebar.css" rel="stylesheet"> 
</head>
<body>

<div class="section-form" style="width: 100%; background-color: rgba(0,0,0, 0.2)">
    <div class="content-form">
            <div class="form-title">
            <?php 
                include '../koneksi.php';
                $id = $_GET['id'];
	            $update = mysqli_query($con,"SELECT * FROM tb_siswa WHERE id_siswa='$id'") or die(mysql_error());
                foreach ($update as $u) { ?>
        
                <h4>Ubah Data</h4>
                <a  class="closebtn" href="../../siswa.php">&times;</a>
            </div>
            <div class="form-input">
                <form action="" method="post" enctype="multipart/form-data">
                <h6>DATA DIRI</h6>
                <div class="txt">
                    <label>Nama Siswa</label>
                    <input type="text" placeholder="nama lengkap" class="text" name="nama" value="<?= $u['nama_siswa']?>">
                </div>
                <div class="txt">
                    <label>NIS/NISN</label>
                    <input type="text"  class="text" name="nisn" value="<?= $u['nisn']?>" readonly>
                </div>
                <div class="txt">
                    <label>Tempat, tanggal lahir</label>
                    <div class="txt-tgl">
                        <input type="text"  class="tanggal" name="tempat" value="<?= $u['tempat_lahir']?>"> <label>/</label>
                        <input type="date" class="tanggal" name="tanggal" value="<?= $u['tanggal_lahir']?>">
                    </div>
                </div>
                <div class="txt">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="text" name="jk"  value="<?= $u['jk']?>" readonly>
                </div>
                <div class="txt" style="align-items: flex-start;">
                    <label for="">Alamat Siswa</label>
                    <textarea name="alamat" cols="46%" rows="5" style="padding-left: 0.5rem;" ><?= $u['alamat']?></textarea>
                </div>
                <h6>AKADEMIK</h6>
                <div class="txt">
                
                    <label for="">Kelas Siswa</label>
                    <select name="kelas" class="text" id="" >  
                        <option value="">--- pilih kelas baru ---</option>
                        <?php 
                        $class = mysqli_query($con,"SELECT * FROM tb_kelas");
                                 ?>
                                <?php foreach ($class as $c ) { ?>
                                <option value="<?= $c['id_kelas']?>"><?= $c['nama_kelas']?></option>    
                                    
                                <?php } ?>
                    </select>
                
                </div>
                <div class="txt">
                    <label>Tahun Masuk</label>
                    <input type="text" placeholder="tahun masuk" class="text" name="th_masuk" value="<?= $u['th_angkatan']?>">
                </div>
                <div class="txt" style="justify-content: start;">
                    <label>Pas Foto</label>
                    <img src="profilfoto/<?=$u['foto']?>" width="60px" height="60px" alt=""style="margin: 0 0.5rem 0 6.5rem; border-radius: 50%">
                    <input type="file" class="file" name="foto" >
                </div>
            
        </div>
        <?php }
        ?>
            <div class="form-button">
              <button name="updateSiswa">Update</button>
            </div>
            </form>
        <?php 
            if(isset($_POST['updateSiswa'])) {
                
                $gambar = @$_FILES['foto']['name'];
                
                $kelas = $_POST['kelas'];
                if (!empty($gambar)) {
                move_uploaded_file($_FILES['foto']['tmp_name'],"profilfoto/$gambar");
                $editSiswa= mysqli_query($con,"UPDATE tb_siswa SET 
                                            foto='$gambar',nama_siswa='$_POST[nama]',tempat_lahir='$_POST[tempat]',
                                            tanggal_lahir='$_POST[tanggal]', alamat='$_POST[alamat]'
                                            WHERE id_siswa='$id' ");
                } else if(!empty($kelas)) {
                $editSiswa= mysqli_query($con,"UPDATE tb_siswa SET nama_siswa='$_POST[nama]',tempat_lahir='$_POST[tempat]',
                                                tanggal_lahir='$_POST[tanggal]', alamat='$_POST[alamat]',
                                                id_kelas='$_POST[kelas]' 
                                                WHERE id_siswa='$id' ");
                } else {
                  $editSiswa= mysqli_query($con,"UPDATE tb_siswa SET 
                                            nama_siswa='$_POST[nama]',tempat_lahir='$_POST[tempat]',
                                            tanggal_lahir='$_POST[tanggal]', alamat='$_POST[alamat]' WHERE id_siswa='$id' ");
                
                       
                }
                 if ($update) {
                    echo " <script>
                    alert('Data telah diupdate !');
                    window.location='../../siswa.php';
                    </script>";	
                 }
         
           }
          ?>
    

</div>

</body>
</html>