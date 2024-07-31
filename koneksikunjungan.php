<?php
$koneksi = new mysqli('localhost', 'root', '', 'briscella_xipplg2')
or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
$idKunjungan = $_POST['idKunjungan'];
$idPasien = $_POST['idPasien'];
$idDokter = $_POST['idDokter'];
$tanggal = $_POST['tanggal'];
$keluhan = $_POST['keluhan'];
$koneksi->query("INSERT INTO Kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) values ('$idKunjungan', '$idPasien', '$idDokter', '$tanggal', '$keluhan')");
header('location: kunjungan.php');
}

if (isset($_GET['idKunjungan'])) {
    $idKunjungan = $_GET['idKunjungan'];
    $koneksi->query("DELETE FROM Kunjungan where idKunjungan = '$idKunjungan'");
    header("location:kunjungan.php");
    }

    if (isset($_POST['edit'])) {
        $idKunjungan = $_POST['idKunjungan'];
        $idPasien = $_POST['idPasien'];
        $idDokter = $_POST['idDokter'];
        $tanggal= $_POST['tanggal'];
        $keluhan = $_POST['keluhan'];
        $koneksi->query("UPDATE Kunjungan SET idKunjungan='$idKunjungan', idPasien='$idPasien', idDokter='$idDokter', tanggal='$tanggal', keluhan='$keluhan'");
        header("location:kunjungan.php");
    }
?>