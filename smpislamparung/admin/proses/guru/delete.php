<?php
    include ("../koneksi.php");
    $delete = mysqli_query($con,"DELETE FROM tb_guru WHERE id_guru=$_GET[id]");
    if ($delete) {
            echo " <script>
            alert('Data telah dihapus !');
            window.location='../../guru.php';
            </script>";	
    }
?>