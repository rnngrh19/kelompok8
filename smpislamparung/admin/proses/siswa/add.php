<?php

include ("../koneksi.php");

if (isset($_POST['simpanSiswa'])) {

    	$pass= sha1($_POST['nisn']);
		$sumber = @$_FILES['foto']['tmp_name'];
		$target = 'profilfoto/';
		$nama_gambar = @$_FILES['foto']['name'];
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if ($pindah) {
			$save= mysqli_query($con,"INSERT INTO tb_siswa VALUES (
				null,'$_POST[nisn]','$_POST[nama]','$_POST[tempat]','$_POST[tanggal]',
				'$_POST[jk]','$_POST[alamat]','$pass','$nama_gambar','$_POST[th_masuk]',
				'$_POST[kelas]') ");
			if ($save) {
				echo " <script>
				alert('Data berhasil disimpan');
				window.location='../../siswa.php';
				</script>";	
			}

		}
  }

  ?>