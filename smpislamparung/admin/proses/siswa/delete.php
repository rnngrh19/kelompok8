<?php
    include ("../koneksi.php");
    $delete = mysqli_query($con,"DELETE FROM tb_siswa WHERE id_siswa=$_GET[id]");
    if ($delete) {
            echo " <script>
            alert('Data telah dihapus !');
            window.location='../../siswa.php';
            </script>";	
    }
?>