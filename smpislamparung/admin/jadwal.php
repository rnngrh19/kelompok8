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
    <link href="css/jadwal.css" rel="stylesheet"> 
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
                    <h4>JADWAL</h4>
                </div>
                <div class="tombol">
                    <button>TAMBAH JADWAL</button>
                </div>
                <div class="card-body">
                      <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                          <thead>

                            <tr>
                              <th>No.</th>
                              <th>Hari</th>
                              <th>Kelas</th>
                              <th>Mata Pelajaran</th>
                              <th>Jam Mulai</th>
                              <th>Jam Selesai</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>2.</b></th>
                              <td>Rabu</td>
                              <td>VIII</td>
                              <td>Kalkulus</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>3.</b></th>
                              <td>Kamis</td>
                              <td>VII</td>
                              <td>PJOK</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"><b>1.</b></th>
                              <td>Selasa</td>
                              <td>VII</td>
                              <td>Bhs Indonesia</td>
                              <td>09.00</td>
                              <td>11.00</td>
                              <td>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
                              </td>
                            </tr>
                            
                          
                          </tbody>
                        </table>
                      </div>
               


            </div>
        </div>
    </div>
    <script>
        feather.replace();
      </script>
</body>
</html>