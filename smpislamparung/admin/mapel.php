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
    <link href="css/mapel.css" rel="stylesheet"> 
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
                        <a class="nav-link text-white mb-2" href="mapel.php"><i data-feather="book-open" ></i> <span class="m-4">Mata Pelajaran</span></a>
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
                    <h4>MATA PELAJARAN</h4>
                </div>
                <div class="content-tombol">
                   <div class="tombol">
                      <button onclick="openForm()">TAMBAH MATA PELAJARAN</button>
                   </div>
                   <div class="search">
                      <form action="mapel.php" method="get">
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
                              <th >Kode Mata Pelajaran</th>
                              <th >Nama Mata Pelajaran</th>
                              <th >Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              $no=1;
                              
                              include ("proses\koneksi.php");
                              if(isset($_GET['search'])){
                                $cari = $_GET['search'];
                                $mapel = mysqli_query($con,"SELECT * from tb_mapel where nama_mapel like '%".$cari."%'");				
                              }else{
                                $mapel = mysqli_query($con,"SELECT * FROM tb_mapel ");		
                              }
                              
                              
                              foreach($mapel as $m) { ?>
                              <tr>
                                <th scope="row"><b><?=$no++?></b></th>
                                <td><?=$m['kode_mapel']?></td>
                                <td><?=$m['nama_mapel']?></td>
                                <td>
                                  <a  class="btn btn-warning btn-sm" href="proses/mapel/update.php?id=<?=$m['id_mapel']?>">Ubah</a>
                                  <a href="proses\mapel\delete.php?id=<?=$k['id_mapel']?>" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i> Hapus</a>
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
           <h4>Tambah Mata Pelajaran</h4>
          <a href="javascript:void(0)" class="closebtn" onclick="closeForm()">&times;</a>
        </div>
      <div class="form-input">
        <form action="proses\mapel\add.php" method="post" enctype="multipart/form-data">
            <input type="text" class="text" name="kode" value="KMP-<?=time()?>" readonly>
            <input type="text" placeholder="Nama Mata Pelajaran" class="text" name="nama" required>
      </div>
      <div class="form-button">
        <button name="simpanMapel">Simpan</button>
      </div>
      </form>
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