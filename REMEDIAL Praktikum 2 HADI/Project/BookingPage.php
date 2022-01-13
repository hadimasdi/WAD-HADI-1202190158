<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
    <!--Bootsrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php

    $name = $_POST['name'];
    $date = $_POST['date'];
    $start = $_POST['Start'];
    $tujuan = $_POST['Tempat'];
    $noHP = $_POST['Phone'];
    ?>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-dark bg-black fixed-top text-white justify-content-center">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="Home.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="BookingPage.php" style="color: white;">Booking</a>
        </li>
    </ul>
</nav>
<br>
<br>
<br>
<div class="container">
    <div class="text-dark text-center p-1 m-1" style="font-family: Arial;">
        <h3>Thank You <?php echo $name?> For Reserving</h3>
        <h4>Please Double Check Your Reservation Details</h4>
    </div>
</div>
<br>
<div class="container">
    <table class="table" style="background-color: aliceblue;">
        <thead class="text-white"style="background-color: black;">
          <tr>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check-In</th>
            <th scope="col">Tujuan Traveling</th>
            <th scope="col">Phone Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo rand()?></th>
                <th><?php echo $name ?></th>
                <th><?php echo $date ?></th>
                <th><?php echo $tujuan ?></th>
                <th><?php echo $noHP ?></th>
          </tr>
        </tbody>
    </table>
</div>
<!--Footer-->
<footer>    
    <div class="text-center text-white py-2 fixed-bottom" style="background-color: rgb(165, 165, 165);">
        <p>Created By : Hadi Noerddien Jayanto_1202190158</p>
    </div>
</footer>
    
</body>
</html>