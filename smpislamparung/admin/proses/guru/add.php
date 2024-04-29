<?php

include ("../koneksi.php");

if (isset($_POST['simpanGuru'])) {

    $pass= sha1($_POST['nip']);
		$sumber = @$_FILES['foto']['tmp_name'];
		$target = 'profilfoto/';
		$nama_gambar = @$_FILES['foto']['name'];
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if ($pindah) {
			$save= mysqli_query($con,"INSERT INTO tb_guru VALUES(null,'$_POST[nip]','$_POST[nama]','$_POST[email]','$pass','$nama_gambar') ");
			if ($save) {
				echo " <script>
				alert('Data berhasil disimpan');
				window.location='../../guru.php';
				</script>";	
			}

		}
  }

  ?>