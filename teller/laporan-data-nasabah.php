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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

<!-- Navbar -->
<?php include('../component/navbar-teller.php') ?>
    <!-- End Navbar -->

    <!-- Asidebar -->
    <?php include('../component/navbar-right-teller.php') ?>
    <!-- End Asidebar -->


    <?php
      include_once("../function/connection.php");

      $result = mysqli_query($koneksi, "SELECT * FROM data_nasabaah");
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Nasabah Bank Jelita</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Nasabah</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Nasabah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Nasabah</th>
                      <th>Nomor Rekening</th>
                      <th>Status Setoran Tunai</th>
                      <th>Approved By</th>
                      <th>Status Buku Tabungan</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php  $no_urut = 1; ?>
                    <?php while($data_nasabah = mysqli_fetch_array($result)) {    ?>

                    <tr>
                      <td style="width:5%;"><?php echo $no_urut++; ?></td>
                      <td style="width:10%;"><?php echo $data_nasabah['nama_nasabah'] ?></td>
                      <td style="width:10%;"><?php echo $data_nasabah['nomor_rekening'] ?></td>
                      <td style="width:10%;">
                        <?php 
                            
                            if($data_nasabah['setoran_tunai'] == 500000){
                              echo "Setoran Lunas";
                            }else{
                              echo "Segera Melakukan Setoran";
                            }
                          
                      
                        ?>
                      </td>
                      <td style="width:10%;"><?php echo $data_nasabah['approved_by'] ?></td>
                      <td style="width:10%;"><?php echo $data_nasabah['status_buku'] ?></td>

                    
                    </tr>

                    <?php }?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Nasabah</th>
                      <th>Nomor Rekening</th>
                      <th>Status Setoran Tunai</th>
                      <th>Approved By</th>
                      <th>Status Buku Tabungan</th>

                   
                    </tr>
                  </tfoot>
                </table>

                <div class="card-footer" align="right">
                  <form target="_blank" method="POST"
                    action="../function/print-data-nasabah.php">
                    <button type="submit" class="btn btn-outline-success mr-1 mb-1"><i class="fas fa-print"
                        data-toggle="tooltip" data-placement="top" title="Cetak Laporan Data Nasabah"></i> Data
                      Nasabah</button>

                  </form>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
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
</body>

</html>
