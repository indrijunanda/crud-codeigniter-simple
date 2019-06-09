
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
          <p class="mb-4">Aplikasi Create, Read, Update dan Delete menggunakan Codeigniter framework</p> 
          <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success');?>
          </div> 
          <?php endif;?>   
          <?php if ($this->session->flashdata('delete')): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('delete');?>
          </div> 
          <?php endif;?> 
          <a class="btn btn-primary mb-2" href="<?php echo base_url();?>mahasiswa/inputdata"><i class="fa fa-upload"></i> Tambah Data Mahasiswa</a>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Universitas X</h6>
            </div>                        
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="width: 30px;">No.</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Fakultas</th>
                      <th>Jurusan</th>    
                      <th style="width: 70px;">Aksi</th>                  
                    </tr>
                  </thead>                  
                <tbody>
                <?php $no=1;
                 foreach ($mahasiswa as $datamahasiswa): ?>
                <tr>
                      <td style="text-align: center;"><?php echo $no++;?></td>
                      <td><?php echo $datamahasiswa->nama;?></td>
                      <td><?php echo $datamahasiswa->nim;?></td>
                      <td><?php echo $datamahasiswa->fakultas;?></td>
                      <td><?php echo $datamahasiswa->jurusan;?></td>
                      <td style="text-align: center;">
                      <a href="<?php echo base_url();?>mahasiswa/editdata/<?php echo $datamahasiswa->id_mahasiswa;?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="<?php echo base_url();?>mahasiswa/hapusdata/<?php echo $datamahasiswa->id_mahasiswa;?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td>                      
                    </tr>
                <?php endforeach;?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
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
