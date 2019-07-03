
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CRUD Simpel Codeigniter</title>
  <link href="<?php echo base_url();?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/datatable/dataTables.min.css" rel="stylesheet">

</head>

<body>  
<div class="container">
  <h4 class="mt-3">CRUD Simpel</h4>
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
      <div class="card shadow-sm mb-4">
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
    <footer class="mt-5 mb-3">
    <div class="container my-auto">
      <div class="text-center my-auto">
        <span>developed by <a href="https://indrijunanda.gitlab.io" target="_blank" style="color: #424242;"><b>indrijunanda</b><a></span>
      </div>
    </div>
  </footer> 
</div>             
   

  <script src="<?php echo base_url(); ?>/assets/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/datatable/datatables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable();
    });
  </script>
</body>
</html>
