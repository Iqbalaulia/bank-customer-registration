<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../index.php");
	}
?>

<?php
      // include database connection file
      include_once("../function/connection.php");
      $id_nasabah = $_GET['id_nasabah'];

      $result = mysqli_query($koneksi, "SELECT * FROM data_nasabaah WHERE id_nasabah=$id_nasabah");
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
              <form method="POST" action="../function/edit-data-nasabah.php">
              
              <?php while($data_nasabah = mysqli_fetch_array($result)) { ?>
            
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
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Nama Nasabah</label>
                                  <input type="text" name="nama_nasabah" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['nama_nasabah'] ?>" placeholder="Nama Nasabah">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nasabah</label>
                                  <select name="status_nasabah" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" ><?php echo $data_nasabah['status_nasabah'] ?></option>
                                    <option>Baru</option>
                                    <option>Pengkinian</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                  <select name="jenis_kelamin" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected"><?php echo $data_nasabah['jenis_kelamin'] ?></option>
                                    <option>Pria</option>
                                    <option>Wanita</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Kewarganegaraan</label>
                                  <select name="kewarganegaraan" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected"><?php echo $data_nasabah['kewarganegaraan'] ?></option>
                                    <option>WNI</option>
                                    <option>WNA</option>

                                  </select>
                                </div>
                              </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Negara</label>
                                  <input type="text" name="negara" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['negara'] ?>" placeholder="Negara">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tempat Lahir</label>
                                  <input type="text" name="tempat_lahir" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['tempat_lahir'] ?>" placeholder="Tempat Lahir">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Tanggal Lahir</label>
                                  <input type="date" name="tanggal_lahir" value="<?php echo $data_nasabah['tanggal_lahir'] ?>" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Tanggal Lahir">
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Nama Ibu Kandung</label>
                                  <input type="text" name="ibu_kandung" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['ibu_kandung'] ?>" placeholder="Nama Ibu Kandung">
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Alamat Domisili</label>
                                  <input type="text" name="alamat_domisili" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['alamat_domisili'] ?>" placeholder="Nama Ibu Kandung">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>RT</label>
                                  <input type="text" name="rt" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['rt'] ?>" placeholder="RT">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>RW</label>
                                  <input type="text" name="rw" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['rw'] ?>" placeholder="RW">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Kelurahan/Desa</label>
                                  <input type="text" name="kelurahan_desa" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['kelurahan_desa'] ?>" placeholder="Kelurahan/Desa">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Kecamatan</label>
                                  <input type="text" name="kecamatan" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['kecamatan'] ?>" placeholder="Kecamatan">
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
                                    <option selected="selected"><?php echo $data_nasabah['jenis_identitas'] ?></option>
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
                                    placeholder="Nomor Identitas" value="<?php echo $data_nasabah['nomor_identitas'] ?>">
                                </div>
                              </div>

                              
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Pendidikan Terakhir</label>
                                  <select name="pendidikan_terakhir" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" ><?php echo $data_nasabah['pendidikan_terakhir'] ?></option>
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
                                    <option selected="selected" ><?php echo $data_nasabah['agama'] ?></option>
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
                                    <option selected="selected" ><?php echo $data_nasabah['status_pernikahan'] ?></option>
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
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['kode_pos'] ?>" placeholder="Kode Pos">
                                </div>
                              </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nomor Telepon</label>
                                  <input type="number" name="no_telepon" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['no_telepon'] ?>" placeholder="Kode Pos">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" name="email_pribadi" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['email_pribadi'] ?>" placeholder="Email">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Provinsi</label>
                                  <select name="provinsi_pribadi" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" ><?php echo $data_nasabah['provinsi_pribadi'] ?></option>
                                    <option>Jawa Timur</option>

                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Kota</label>
                                  <select name="kota_pribadi" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" ><?php echo $data_nasabah['kota_pribadi'] ?></option>
                                    <option>Surabaya</option>

                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <!-- <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                      </div> -->
                    </div>
                  </div>



                  <div class="col-md-12">
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Data Pekerjaan</h3>
                      </div>
                      <div class="card-body">
                        <div class="row">

                          <div class="col-md-6">
                            
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Jenis Pekerjaan</label>
                                  <select name="jenis_pekerjaan" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected"> <?php echo $data_nasabah['jenis_pekerjaan'] ?></option>
                                    <option>PNS</option>
                                    <option>TNI/Polri</option>
                                    <option>Pegawai Swasta</option>
                                    <option>Pegawai BUMN</option>
                                    <option>Profesional</option>
                                    <option>Wiraswasta</option>
                                    <option>Lainnya</option>

                                  </select>
                                </div>
                              </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nama Kantor / Tempat Kerja</label>
                                  <input type="text" name="nama_kantor" class="form-control border border-secondary"
                                    id="exampleInputPassword1" value="<?php echo $data_nasabah['nama_kantor'] ?>" placeholder="Nama Kantor / Tempat Kerja">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Bidang Pekerjaan</label>
                                  <input type="text" name="bidang_pekerjaan"
                                    class="form-control border border-secondary" id="exampleInputPassword1"
                                    placeholder="Bidang Pekerjaan" value="<?php echo $data_nasabah['bidang_pekerjaan'] ?>">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Jabatan</label>
                                  <input type="text" name="jabatan" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Jabatan" value="<?php echo $data_nasabah['jabatan'] ?>">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Lama Bekerja (Tahun)</label>
                                  <input type="number" name="tahun_bekerja" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Tahun" value="<?php echo $data_nasabah['tahun_bekerja'] ?>">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Lama Bekerja (Bulan)</label>
                                  <input type="number" name="bulan_bekerja" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Bulan" value="<?php echo $data_nasabah['bulan_bekerja'] ?>">
                                </div>
                              </div>


                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>NPWP Nasabah</label>
                                  <input type="text" name="npwp" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="NPWP Nasabah" value="<?php echo $data_nasabah['npwp'] ?>">
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Alamat Kantor</label>
                                  <input type="text" name="alamat_kantor" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="Alamat Kantor" value="<?php echo $data_nasabah['alamat_kantor'] ?>">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>RT</label>
                                  <input type="text" name="rt_pekerjaan" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="RT" value="<?php echo $data_nasabah['rt_pekerjaan'] ?>">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>RW</label>
                                  <input type="text" name="rw_pekerjaan" class="form-control border border-secondary"
                                    id="exampleInputPassword1" placeholder="RW" value="<?php echo $data_nasabah['rw_pekerjaan'] ?>">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Kelurahan/Desa</label>
                                  <input type="text" name="kelurahan_desa_pekerjaan"
                                    class="form-control border border-secondary" id="exampleInputPassword1"
                                    placeholder="Kelurahan/Desa" value="<?php echo $data_nasabah['kelurahan_desa_pekerjaan'] ?>">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Kecamatan</label>
                                  <input type="text" name="kecamatan_pekerjaan"
                                    class="form-control border border-secondary" id="exampleInputPassword1"
                                    placeholder="Kecamatan" value="<?php echo $data_nasabah['kecamatan_pekerjaan'] ?>">
                                </div>
                              </div>


                            </div>
                          </div>

                          <!--  -->
                          <div class="col-md-6">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Provinsi</label>
                                  <select name="provinsi_pekerjaan" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" ><?php echo $data_nasabah['provinsi_pekerjaan'] ?></option>
                                    <option>Jawa Timur</option>


                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Kota</label>
                                  <select name="kota_pekerjaan" class="form-control select2 " style="width: 100%;">
                                    <option selected="selected" ><?php echo $data_nasabah['kota_pekerjaan'] ?></option>
                                    <option>Semarang</option>

                                  </select>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>Nomor Telepon</label>
                                  <input type="number" name="nomor_telepon_pekerjaan"
                                    class="form-control border border-secondary" id="exampleInputPassword1"
                                    placeholder="Nomor Telepon" value="<?php echo $data_nasabah['nomor_telepon_pekerjaan'] ?>">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>



                </div>
                <!-- /.card-body -->
                <div class="card-footer" align="right">
                <input type="hidden" name="id_nasabah" value=<?php echo $_GET['id_nasabah'];?>>
                  <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                </div>

              <?php } ?>

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
