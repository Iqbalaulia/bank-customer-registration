<!-- cek apakah yang mengakses halaman ini sudah login -->
<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard TELLER</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include('./component/navbar.php') ?>
    <!-- End Navbar -->

    <!-- Asidebar -->
    <?php include('./component/navbar-right.php') ?>
    <!-- End Asidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Pendaftaran Nasabah</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <form method="POST" action="data-nasabah.html">



                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Data Pribadi</h3>
                      </div>
                      <div class="card-body">
                        <div class="row">

                          <div class="col-md-6">
                            <!-- 
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Nama</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Alamat</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nasabah</label>
                                  <select name="status_nasabah" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Jenis Nasabah</option>
                                    <option>Baru</option>
                                    <option>Pengkinian</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                  <select name="jenis_kelamin" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Jenis Kelamin</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Kewarganegaraan</label>
                                  <select name="kewarganegaraan" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Kewarganegaraan</option>
                                    <option>WNI</option>
                                    <option>WNA</option>

                                  </select>
                                </div>
                              </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Negara</label>
                                  <input type="text" name="negara" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Negara">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tempat Lahir</label>
                                  <input type="text" name="tempat_lahir" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Tempat Lahir">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tanggal Lahir</label>
                                  <input type="date" name="tanggal_lahir" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Tanggal Lahir">
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Nama Ibu Kandung</label>
                                  <input type="text" name="ibu_kandung" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Nama Ibu Kandung">
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Alamat Domisili</label>
                                  <input type="text" name="alamat_domisili" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Nama Ibu Kandung">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>RT</label>
                                  <input type="text" name="rt" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="RT">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>RW</label>
                                  <input type="text" name="rw" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="RW">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Kelurahan/Desa</label>
                                  <input type="text" name="kelurahan_desa" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Kelurahan/Desa">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Kecamatan</label>
                                  <input type="text" name="kecamatan" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Kecamatan">
                                </div>
                              </div>


                            </div>
                          </div>

                          <!--  -->
                          <div class="col-md-6">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Jenis Identitas</label>
                                  <select name="jenis_identitas" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Jenis Identitas</option>
                                    <option>KTP</option>
                                    <option>SIM</option>
                                    <option>Passport Dilampiri KITAP/KITAS/KIMS</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nomor Identitas</label>
                                  <input type="number" name="nomor_identitas"
                                    class="form-control border border-secondary" id="exampleInputPassword1"
                                    placeholder="Nomor Identitas">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tanggal Terbit</label>
                                  <input type="date" name="tanggal_terbit" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Tanggal Terbit">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tanggal Kadaluarsa</label>
                                  <input type="date" name="tanggal_kadaluarsa"
                                    class="form-control border border-secondary" id="exampleInputPassword1"
                                    placeholder="Tanggal Luarsa">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Pendidikan Terakhir</label>
                                  <select name="pendidikan_terakhir" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Pendidikan Terakhir</option>
                                    <option>SD</option>
                                    <option>SLTP</option>
                                    <option>SLTA</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                    <option>Lainnya</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Agama</label>
                                  <select name="agama" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Agama</option>
                                    <option>Islam</option>
                                    <option>Katolik</option>
                                    <option>Protestan</option>
                                    <option>Budha</option>
                                    <option>Hindu</option>
                                    <option>Lainnya</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Status Pernikahan</label>
                                  <select name="status_pernikahan" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Status Pernikahan</option>
                                    <option>Lajang</option>
                                    <option>Kawin</option>
                                    <option>Janda/Duda</option>
                                  </select>
                                </div>
                              </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Kode Pos</label>
                                  <input type="number" name="kode_pos" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Kode Pos">
                                </div>
                              </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nomor Telepon</label>
                                  <input type="number" name="no_telepon" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Kode Pos">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" name="no_telepon" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Email">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Provinsi</label>
                                  <select name="provinsi" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Kewarganegaraan</option>
                                    <option>Jawa Timur</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Kota</label>
                                  <select name="kota" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" disabled>Kewarganegaraan</option>
                                    <option>Surabaya</option>

                                  </select>
                                </div>
                              </div>



                            </div>

                          </div>


                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                      </div>
                    </div>
                  </div>
                </div>


              </form>


            </div>
          </div>
        </div>
      </section>


    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.2
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="plugins/datatables/jquery.dataTables.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="plugins/select2/js/select2.full.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });

  </script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

    })

  </script>
</body>

</html>
