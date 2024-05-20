<?php
    include ("../koneksi.php");
    $delete = mysqli_query($con,"DELETE FROM tb_mapel WHERE id_mapel=$_GET[id]");
    if ($delete) {
            echo " <script>
            alert('Data telah dihapus !');
            window.location='../../mapel.php';
            </script>";	
    }
?>