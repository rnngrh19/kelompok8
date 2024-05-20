<?php

include ("../koneksi.php");

if (isset($_POST['simpanMapel'])) {

			$save= mysqli_query($con,"INSERT INTO tb_mapel VALUES(null,'$_POST[kode]','$_POST[nama]') ");
			if ($save) {
				echo " <script>
				alert('Data berhasil disimpan');
				window.location='../../mapel.php';
				</script>";	
			}

	
  }

  ?>