<?php
$koneksi = new mysqli('localhost', 'root', '', 'briscella_xipplg2')
or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
$idDokter = $_POST['idPasien'];
$nmDokter = $_POST['nmPasien'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idDokter', '$nmDokter', '$jk', '$alamat')");
header('location: pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idDokter = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idDokter'");
    header("location:pasien.php");
    }

    if (isset($_POST['edit'])) {
        $idDokter = $_POST['idPasien'];
        $nmDokter = $_POST['nmPasien'];
        $jk = $_POST['jk'];
        $alamat= $_POST['alamat'];
        $koneksi->query("UPDATE pasien SET idPasien='$idDokter', nmPasien='$nmDokter', jk='$jk', alamat='$alamat'");
        header("location:pasien.php");
    }
?>