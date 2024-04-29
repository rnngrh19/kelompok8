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
    <link href="css/guru.css" rel="stylesheet"> 
    <link href="css/navbar.css" rel="stylesheet"> 
    <link href="css/sidebar.css" rel="stylesheet"> 
   
</head>
<body>
    <div class="section">
        <!--SIDEBAR-->
        <div class="sidebar">
            <div class="profil">
                    <div class="col-md-3" >
                      <img src="img/dybala.jpg" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-7">
                      <div class="card-body mt-1">
                        <h5 class="card-title">Rian Nugraha</h5>
                        <p class="card-text fw-light ">Admin</p>
                      </div>
                    </div>
                
            </div>
        
            <div class="items">
                    
                <ul class="nav flex-column ">
                    <li class="nav-item " >
                        <a class="nav-link text-white mb-2" href="dashboard.php"><i data-feather="home" ></i> <span class="m-4">Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="laporanabsensi.php"><i data-feather="edit-3" ></i> <span class="m-4">Laporan Absensi</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="jadwal.php"><i data-feather="calendar" ></i> <span class="m-4">Jadwal</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="guru.php"><i data-feather="user" ></i> <span class="m-4">Guru</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="siswa.php"><i data-feather="users" ></i> <span class="m-4">Siswa</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="kelas.php"><i data-feather="home" ></i> <span class="m-4">Kelas</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="matapelajaran.php"><i data-feather="book-open" ></i> <span class="m-4">Mata Pelajaran</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mb-2" href="logout.php"><i data-feather="log-out" ></i> <span class="m-4 text-danger">LogOut</span></a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <!--MAIN-->
        <div class="main">
            <div class="navbar-items">
                <a href=""><i data-feather="menu"></i></a>
                <h4>SMP ISLAM PARUNG</h4>
            </div>

            <div class="content">
                <div class="content-title">
                    <h4>GURU</h4>
                </div>
                <div class="content-tombol">
                   <div class="tombol">
                      <button onclick="openForm()">TAMBAH GURU</button>
                   </div>
                   <div class="search">
                      <form action="guru.php" method="get">
                      <i data-feather="search"></i>
                      <input type="text" placeholder="search" name="search" id="search">
                      </form>
                    </div>
                </div>
                <div class="card-body" >
                      <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                          <thead>

                            <tr>
                              <th>No.</th>
                              <th>NIP</th>
                              <th>Nama Guru</th>
                              <th>Email</th>
                              <th>Foto</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              $no=1;
                              
                              include ("proses\koneksi.php");
                              if(isset($_GET['search'])){
                                $cari = $_GET['search'];
                                $guru = mysqli_query($con,"SELECT * from tb_guru where nama_guru like '%".$cari."%'");				
                              }else{
                                $guru = mysqli_query($con,"SELECT * FROM tb_guru");		
                              }
                              
                              
                              foreach($guru as $g) { ?>
                              <tr>
                                <th scope="row"><b><?=$no++?></b></th>
                                <td><?=$g['nip']?></td>
                                <td><?=$g['nama_guru']?></td>
                                <td><?=$g['email']?></td>
                                <td><img src="proses/guru/profilfoto/<?=$g['foto']?>" alt="" width="40px" height="40px" style="border-radius: 50%;"></td>
                                <td>
                                  <a  class="btn btn-warning btn-sm" href="proses/guru/update.php?id=<?=$g['id_guru']?>">Ubah</a>
                                  <a href="proses\guru\delete.php?id=<?=$g['id_guru']?>" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i> Hapus</a>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
            </div>
        </div>
    </div>

    <div id="myForm" class="section-form">
      <div class="content-form">
        <div class="form-title">
           <h4>Tambah Guru</h4>
          <a href="javascript:void(0)" class="closebtn" onclick="closeForm()">&times;</a>
        </div>
      <div class="form-input">
        <form action="proses\guru\add.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="NIP" class="text" name="nip">
            <input type="text" placeholder="Nama Guru" class="text" name="nama">
            <input type="mail" placeholder="Email" class="text" name="email">
            <p class="text-danger">Masukan Foto! (ekstensi wajib jpg,png)</p>
            <input type="file" class="file" name="foto">
          
      </div>
      <div class="form-button">
        <button name="simpanGuru">Simpan</button>
      </div>
      </form>
  </div>

    <div id="myUpdate" class="section-form">

      <div class="content-form">
                  <div class="form-title">
                      <h4>Ubah Data</h4>
                      <a href="javascript:void(0)" class="closebtn" onclick="closeUpdate()">&times;</a>
                  </div>
                  <div class="form-input">
                    <form action="update.php" method="get" enctype="multipart/form-data">
                        <input type="text" placeholder="NIP" class="text" name="nip" value="<?=$g["nip"]?>">
                        <input type="text" placeholder="Nama Guru" class="text" name="nama" value="<?=$g["nama_guru"]?>" >
                        <input type="mail" placeholder="Email" class="text" name="email" value="<?=$g["email"]?>">
                        <p class="text-danger">Masukan Foto! (ekstensi wajib jpg,png)</p>
                        <input type="file" class="file" name="foto">
                      
                  </div>
              
                  <div class="form-button">
                    <button name="updateGuru">Update</button>
                  </div>
                  </form>
                                        
      </div>
    </div>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        feather.replace();
        function openForm() {
           document.getElementById("myForm").style.width = "100%";
        }

        function closeForm() {
            document.getElementById("myForm").style.width = "0%";
        }
        
        function openUpdate() {
           document.getElementById("myUpdate").style.width = "100%";
          
        }

        function closeUpdate() {
            document.getElementById("myUpdate").style.width = "0%";
        }

     </script>
</body>
</html>
