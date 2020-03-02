<?php

include 'connection.php';

$id_nasabah = $_POST['id_nasabah'];


$nama_nasabah = $_POST['nama_nasabah'];

$status_nasabah = $_POST['status_nasabah'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$negara = $_POST['negara'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$ibu_kandung = $_POST['ibu_kandung'];
$alamat_domisili = $_POST['alamat_domisili'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kelurahan_desa = $_POST['kelurahan_desa'];
$kecamatan = $_POST['kecamatan'];
$jenis_identitas = $_POST['jenis_identitas'];
$nomor_identitas = $_POST['nomor_identitas'];
$tanggal_terbit = $_POST['tanggal_terbit'];
$tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$agama = $_POST['agama'];
$status_pernikahan = $_POST['status_pernikahan'];
$kode_pos = $_POST['kode_pos'];
$no_telepon = $_POST['no_telepon'];
$email_pribadi = $_POST['email_pribadi'];
$provinsi_pribadi = $_POST['provinsi_pribadi'];
$kota_pribadi = $_POST['kota_pribadi'];

$jenis_pekerjaan = $_POST['jenis_pekerjaan'];
$nama_kantor = $_POST['nama_kantor'];
$bidang_pekerjaan = $_POST['bidang_pekerjaan'];
$jabatan = $_POST['jabatan'];
$tahun_bekerja = $_POST['tahun_bekerja'];
$bulan_bekerja = $_POST['bulan_bekerja'];
$npwp = $_POST['npwp'];

$alamat_kantor = $_POST['alamat_kantor'];
$rt_pekerjaan = $_POST['rt_pekerjaan'];
$rw_pekerjaan = $_POST['rw_pekerjaan'];
$kelurahan_desa_pekerjaan = $_POST['kelurahan_desa_pekerjaan'];

$kecamatan_pekerjaan = $_POST['kecamatan_pekerjaan'];
$provinsi_pekerjaan = $_POST['provinsi_pekerjaan'];
$kota_pekerjaan = $_POST['kota_pekerjaan'];
$nomor_telepon_pekerjaan = $_POST['nomor_telepon_pekerjaan'];

// Nomor Rekening
// $nomor_rekening = substr(str_shuffle("1234567890"), 0, 6);

mysqli_query($koneksi,"UPDATE data_nasabaah SET nama_nasabah='$nama_nasabah', status_nasabah='$status_nasabah',
jenis_kelamin='$jenis_kelamin',kewarganegaraan='$kewarganegaraan',negara='$negara',tempat_lahir='$tempat_lahir',
ibu_kandung='$ibu_kandung',alamat_domisili='$alamat_kantor',rt='$rt',rw='$rw',kelurahan_desa='$kelurahan_desa',
kecamatan='$kecamatan',jenis_identitas='$jenis_identitas',nomor_identitas='$nomor_identitas',pendidikan_terakhir='$pendidikan_terakhir',
agama='$agama',status_pernikahan='$status_pernikahan',kode_pos='$kode_pos',no_telepon='$no_telepon',email_pribadi='$email_pribadi',
provinsi_pribadi='$provinsi_pribadi',kota_pribadi='$kota_pribadi',jenis_pekerjaan='$jenis_pekerjaan',nama_kantor='$nama_kantor',
bidang_pekerjaan='$bidang_pekerjaan',jabatan='$jabatan',tahun_bekerja='$tahun_bekerja',bulan_bekerja='$bulan_bekerja',
npwp='$npwp',alamat_kantor='$alamat_kantor',rt_pekerjaan='$rt_pekerjaan',rw_pekerjaan='$rw_pekerjaan',kelurahan_desa_pekerjaan='$kelurahan_desa',
kecamatan_pekerjaan='$kecamatan_pekerjaan',provinsi_pekerjaan='$provinsi_pribadi',kota_pekerjaan='$kota_pekerjaan',
nomor_telepon_pekerjaan='$nomor_telepon_pekerjaan' WHERE id_nasabah='$id_nasabah'");

header("location:../teller/data-nasabah.php");

?>