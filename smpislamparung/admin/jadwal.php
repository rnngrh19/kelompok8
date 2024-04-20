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
                <div class="content-tombol">
                   <div class="tombol">
                      <button onclick="openForm()">TAMBAH JADWAL</button>
                   </div>
                   <div class="search">
                      <i data-feather="search"></i>
                      <input type="text" placeholder="search">
                   </div>
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
    <div id="myForm" class="section-form">
      <div class="content-form">
        <div class="form-title">
           <h4>Tambah Jadwal Pelajar</h4>
          <a href="javascript:void(0)" class="closebtn" onclick="closeForm()">&times;</a>
        </div>
      <div class="form-input">
        <form action="">
          <div class="input1">
            <div class="row1">
                <p>Hari</p>
                <select name="" id="">
                    <option value="pilih hari">pilih hari</option>
                    <option value="senen">senen</option>
                    <option value="selasa">selasa</option>
                </select>
           </div>
           <div class="row2">
                <p>Kelas</p>
                <select name="" id="">
                     <option value="pilih kelas">pilih kelas</option>
                     <option value="VII">VII</option>
                     <option value="IX">IX</option>
                </select>  
           </div>
         </div>

            <p>Mata Pelajaran</p>
            <select name="" id="">
                <option value="pilih Mata Pelajaran">pilih Mata Pelajaran</option>
                <option value="Matematika">Matematika</option>
                <option value="IPA">IPA</option>
            </select>
            <p>Guru</p>
            <select name="" id="">
                <option value="pilih Guru">pilih Guru</option>
                <option value="Yanto s.pd">Yanto s.pd</option>
                <option value="yeyen m.pd">m.pd</option>
            </select>

            <p>Jam Mulai</p>
            <select name="" id="">
                <option value="pilih hari">pilih Jam Mulai</option>
                <option value="09.00">09.00</option>
                <option value="10.00">10.00</option>
            </select>

            <p>Jam Selesai</p>
            <select name="" id="">
                <option value="pilih hari">pilih Jam Selesai</option>
                <option value="11.00">11.00</option>
                <option value="12.00">12.00</option>
            </select>
        </form>
      </div>

      <div class="form-button">
        <button>Submit</button>
      </div>
  </div>
    </div>
    <script>
        feather.replace();
        function openForm() {
           document.getElementById("myForm").style.width = "100%";
        }

        function closeForm() {
            document.getElementById("myForm").style.width = "0%";
        }
    </script>
</body>
</html>
