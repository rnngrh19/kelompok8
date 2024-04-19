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
    <link href="css/laporanabsensi.css" rel="stylesheet"> 
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
                    <h4>LAPORAN ABSENSI</h4>
                </div>
                
                <div class="content-row">
                  <div class="row-card">
                    <p>Mata Pelajaran</p>
                    <select name="input" id="" class="form-input">
                      <option value="pilih kelas">pilih mata pelajaran</option>
                      <option value="ipa">ipa</option>
                      <option value="ips">ips</option>
                      <option value="matematika">matematika</option>
  
                    </select>
                  </div>
                  <div class="row-card">
                    <p>Kelas</p>
                    <select name="input" id="" class="form-input">
                      <option value="pilih kelas">pilih kelas</option>
                      <option value="VII">VII</option>
                      <option value="VIII">VIII</option>
                      <option value="IX">IX</option>
  
                    </select>
                  </div>
                  <div class="row-card">
                    <p>Semester</p>
                    <select name="input" id="" class="form-input">
                      <option value="pilih Semester">pilih Semester</option>
                      <option value="Ganjil">Ganjil</option>
                      <option value="Genap">Genap</option>
                    </select>
                  </div>

                  <button><i data-feather="search"></i>    CARI</button>
                </div>
               


            </div>
        </div>
    </div>
    <script>
        feather.replace();
      </script>
</body>
</html>