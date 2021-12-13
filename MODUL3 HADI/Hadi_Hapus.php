<?php 
$conn = mysqli_connect('localhost:3306','root','','modul3');
 
$judul = $_GET['Judul'];
$delete = "DELETE FROM buku_table where judul_buku='$judul'";

mysqli_query($conn, $delete);

echo "
    <script>
        alert('Data telah dihapus');
        document.location.href = 'Hadi_Home.php';
    </script>";
?>