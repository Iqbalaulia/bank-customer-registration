<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../index.php");
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
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">

  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php
      // include database connection file
      include_once("../function/connection.php");
      $id_nasabah = $_GET['id_nasabah'];
      // Fetech user data based on id
      $result = mysqli_query($koneksi, "SELECT * FROM data_nasabaah WHERE id_nasabah=$id_nasabah");
      while($data_nasabah = mysqli_fetch_array($result)) {
        $nama_nasabah     = $data_nasabah['nama_nasabah'];
      }

     
    ?>
    <!-- Navbar -->
    <?php include('../component/navbar-teller.php') ?>
    <!-- End Navbar -->

    <!-- Asidebar -->
    <?php include('../component/navbar-right-teller.php') ?>
    <!-- End Asidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Pembayaran Setoran Tunai</h1>
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
              <form method="POST" action="../function/edit-setoran-nasabah.php">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card">
                      <div class="card-header">
                        <h3 class="card-title">Setoran Tunai</h3>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Nama Nasabah</label>
                                  <input type="text" name="nama_nasabah" class="form-control border border-secondary"
                                    id="exampleInputPassword1" disabled value="<?php echo $nama_nasabah; ?>" placeholder="Nama Nasabah">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Setoran Harus Dibayarkan</label>
                                  <input type="number" name="setoran_dibayar" class="form-control border border-secondary"
                                    id="exampleInputPassword1" disabled value="500000" placeholder="Tempat Lahir">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Setoran</label>
                                  <input type="number" name="setoran_tunai" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Setoran Tunai">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer" align="right">
                        <input type="hidden" name="id_nasabah" value=<?php echo $_GET['id_nasabah'];?>>
                        <button type="submit" name="update" class="btn btn-outline-primary">Simpan Setoran</button>
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


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="../dist/js/pages/dashboard.js"></script>
  <script src="../plugins/select2/js/select2.full.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
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
