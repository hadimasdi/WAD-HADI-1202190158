<?php
include("config.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM `users` WHERE `email` = '$email'";

    $query = mysqli_query($db, $check);
    $row = mysqli_fetch_assoc($query);

    if ($password == $row["password"]) {
        $_SESSION['newLogin'] = true;
        $_SESSION['id'] = $row["id"];
        $_SESSION['name'] = $row["nama"];
        $_SESSION['color'] = "blue";

        header('location: Index.php?status=masuk');
    } else{
        header('location: Login.php?status=gagal');  
    }
}