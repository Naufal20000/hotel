<?php
$koneksi = new mysqli('localhost', 'root', '', 'hotelmahal')
    or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id_cust = $_POST['id_cust'];
    $nm_cust = $_POST['nm_cust'];
    $no_Telp = $_POST['no_Telp'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO hotel (id_cust, nm_cust, no_Telp, jk, alamat) values ('$id_cust', '$nm_cust', '$no_Telp', '$jk', '$alamat')");
    header('location:hotel.php');
}

if (isset($_GET['id_cust'])) {
    $id_cust = $_GET['id_cust'];
    $koneksi->query("DELETE FROM hotel where id_cust = '$id_cust'");
    header("location:hotel.php");
}

if (isset($_POST['edit'])) {
    $id_cust = $_POST['id_cust'];
    $nm_cust = $_POST['nm_cust'];
    $no_Telp = $_POST['no_Telp'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query ("UPDATE hotel SET id_cust='$id_cust', nm_cust='$nm_cust', no_Telp='$no_Telp', jk='$jk', alamat='$alamat'");
    header('location:hotel.php');
} 

if (isset($_POST['simpanuser'])) {
    $nmUser = $_POST['nmUser'];
    $Pass = $_POST['Pass'];
    $Posisi = $_POST['Posisi'];
    $koneksi->query("INSERT INTO user (nmUser, Pass, Posisi) values ('$nmUser', '$Pass', '$Posisi')");
    header('location:user.php');
}

if (isset($_GET['nmUser'])) {
    $nmUser = $_GET['nmUser'];
    $koneksi->query("DELETE FROM user where nmUser = '$nmUser'");
    header("location:user.php");
}

if (isset($_POST['edituser'])) {
    $nmUser = $_POST['nmUser'];
    $Pass = $_POST['Pass'];
    $Posisi = $_POST['Posisi'];
    $koneksi->query ("UPDATE user SET nmUser='$nmUser', Pass='$Pass', Posisi='$Posisi'");
    header('location:user.php');
} 

?>