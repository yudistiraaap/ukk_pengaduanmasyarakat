<?php
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat");
$jml_masyarakat = mysqli_num_rows($masyarakat);

$petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$jml_petugas = mysqli_num_rows($petugas);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan");
$jml_pengaduan = mysqli_num_rows($pengaduan);

$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan");
$jml_tanggapan = mysqli_num_rows($tanggapan);
?>

<div class="container">
    <h3 class="mt-3">Dashboard</h3>
    <div class="row mt-3">
        <div class="col-md-3 mt-3">
        <div class="card">
            <div class="card-header" style="background-color:indianred">Masyarakat</div>
            <div class="card-body" style="background-color:indianred"><?php echo $jml_masyarakat; ?> Orang</div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
    <div class="card">
        <div class="card-header" style="background-color:slategray">Pengaduan</div>
        <div class="card-body" style="background-color:slategray"><?php echo $jml_pengaduan; ?> Aduan</div>
    </div>
</div>
<div class="col-md-3 mt-3">
<div class="card">
    <div class="card-header" style="background-color:palegoldenrod">Tanggapan</div>
    <div class="card-body" style="background-color:palegoldenrod"><?php echo $jml_tanggapan; ?> Tanggapan</div>
</div>
</div>
<div class="col-md-3 mt-3">
<div class="card">
    <div class="card-header" style="background-color:lightblue">Petugas</div>
    <div class="card-body" style="background-color:lightblue"><?php echo $jml_petugas; ?> Petugas</div>
</div>
</div>

</div>
</div