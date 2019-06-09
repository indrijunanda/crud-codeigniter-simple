
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CRUD Simpel Codeigniter</title>


  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>">
        <div class="sidebar-brand-icon">
          <i class="fab fa-php"></i>
        </div>
        <div class="sidebar-brand-text mx-1">CRUD Simpel</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Mahasiswa</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">  
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">         
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        </nav>    
        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">CRUD Simpel</h1>
          <p class="mb-4">Aplikasi Create, Read, Update dan Delete menggunakan Codeigniter Framework</p>
          <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>mahasiswa" style="color: #155724">Lihat data mahasiswa</a></u>
          </div>               
          <?php endif;?>
          <form method="POST" action="<?php echo base_url();?>mahasiswa/updatedata" enctype="multipart/form-data">                        
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa </h6>
                </div>
                <div class="card-body">
                    <input type="hidden" name="idmahasiswanya" value="<?php echo $mahasiswa->id_mahasiswa;?>">

                    <label for="nama">Nama Mahasiswa</label>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            placeholder="Masukkan Nama Mahasiswa" name="nama" required="" value="<?php echo $mahasiswa->nama;?>">
                    </div>
                        <label for="nim">Nim Mahasiswa</label>
                    <div class="form-group">
                        <input type="number" class="form-control form-control-user"
                            placeholder="Masukkan NIM Mahasiswa" name="nim" required="" value="<?php echo $mahasiswa->nim;?>">
                    </div>
                    <label for="fakultas">Fakultas</label>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            placeholder="Masukkan Asal Fakultas Mahasiswa" name="fakultas" required="" value="<?php echo $mahasiswa->fakultas;?>">
                    </div>
                    <label for="jurusan">Jurusan</label>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            placeholder="Masukkan Asal Jurusan Mahasiswa" name="jurusan" required="" value="<?php echo $mahasiswa->jurusan;?>">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                    <a href="<?php echo base_url();?>" class="btn btn-default">Batal</a>
                </div>
            </div>
        </form>      
        </div>    
      </div>       
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>developed by <b>indrijunanda</b></span>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sb-admin-2.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/demo/datatables-demo.js"></script>
</body>
</html>
