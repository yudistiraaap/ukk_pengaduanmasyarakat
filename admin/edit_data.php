<?php
include '../config/koneksi.php';



if (isset($_POST['hapus_pengaduan'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
    $data = mysqli_fetch_array($query);
    if (is_file('../assets/img/'.$data['foto'])) {
        unlink('../assets/img/'.$data['foto']);
        mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
        header('location:index.php');
    }
}

if (isset($_POST['hapus_tanggapan'])) {
    $id_tanggapan = $_POST['id_tanggapan'];
    $query = mysqli_query($koneksi, "DELETE FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");
    if ($query) {
        echo "<script>
        alert('data berhasil dihapus');
        window.location='index.php?page=tanggapan';
        </script>";
    }
    
}

if (isset($_POST['hapus_petugas'])) {
    $id_petugas = $_POST['id_petugas'];
    $query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
    if ($query) {
        echo "<script>
        alert('data berhasil dihapus');
        window.location='index.php?page=petugas';
        </script>";
    }
    
}

if (isset($_POST['hapus_masyarakat'])) {
    $nik = $_POST['nik'];
    $query = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik'");
    if ($query) {
        echo "<script>
        alert('data berhasil dihapus');
        window.location='index.php?page=masyarakat';
        </script>";
    }
    
}


?>