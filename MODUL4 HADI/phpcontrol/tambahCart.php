<?php
require('config.php');
if(isset($_POST['submit'])){
    $tempat = $_POST['nama_tempat'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];
    $rand = rand();
    $insert = "INSERT INTO `bookings`(`id`, `nama_tempat`, `lokasi`, `harga`, `tanggal`) 
    VALUES ('$rand','$name','$tempat','$harga','$tanggal')";
    $query = mysqli_query($db, $insert);
    if($query > 0){
        header('location: Index.php?tambah=success');
    }
}
?>