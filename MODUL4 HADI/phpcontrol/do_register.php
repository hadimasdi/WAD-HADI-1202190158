<?php 
include("config.php");
if(isset($_POST['submit'])){
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['noHp'];
    $password = $_POST['password'];
    $cekpass = $_POST['cekPass'];

    if ($password == $cekpass) {
        $insert = "INSERT INTO `users`(`id`, `nama`, `email`, `no_hp`, `password`) 
                    VALUES ('','$name','$email','$nohp','$password')";
        $query = mysqli_query($db, $insert);
        
        if ($query > 0) {
            header('location: Login.php?status=success');
        } else {
            header('location: Register.php?status=failed');
        }
        
    } else {
        header('location: Register.php?status=failed');
    }
           
}
?>