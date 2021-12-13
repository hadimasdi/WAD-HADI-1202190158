<?php
$tempat = [
    [
        "gedung" => "Westin Ballroom",
        "harga" => 15000000,
        "kapasitas" => 5000,
        "img" => "Westin.jpg"
    ],
    [
        "gedung" => "Puri Begawan",
        "harga" => 10000000,
        "kapasitas" => 5000,
        "img" => "Puri Begawan.jpg"
    ],
    [
        "gedung" => "Djava Ballroom",
        "harga" => 7000000,
        "kapasitas" => 5000,
        "img" => "DJava.jpg"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta Tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootsrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-dark bg-black fixed-top text-white justify-content-center">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="HomePage.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="BookingPage.php" style="color: white;">Booking</a>
        </li>
    </ul>
</nav>
<!--Pesan Welcome-->
<br>
<br>
<div class="container-fluid text-center m-2 p-2" style="background-color: white;">
    <div class="Header">
        <h3 class="Welcome">WELCOME TO ESD VENUE RESERVATION</h3>
    </div>
</div>
<!--Membuat Tag Perusahaan dan card dalam 1 container-->
<div class="container">
    <div class="bg-dark text-white text-center" style="font-family: Arial;">
        <h4>Find your best deal for your event, here!</h4>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="width: auto;">
                <img class="card-img-top" src="Westin.jpg" alt="Card image cap" width="15px">
                <div class="card-body">
                    <h5 class="card-title">Westin Ballroom</h5>
                    <p class="card-text">Rp 15.000.000 / hour</p>
                    <p class="card-text">5000 Capacity</p>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item text-success">Free Parking</li>
                        <li class="list-group-item text-success">Full AC</li>
                        <li class="list-group-item text-success">Cleaning Service</li>
                        <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                   <a href="BookingPage.php?img=<?= $tempat[0]["img"];?>&gedung=<?= $tempat[0]["gedung"];?>" type="submit" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: auto;">
                <img class="card-img-top" src="Puri Begawan.jpg" alt="Card image cap" width="15px">
                <div class="card-body">
                    <h5 class="card-title">Puri Begawan</h5>
                    <p class="card-text">Rp 10.000.000 / hour</p>
                    <p class="card-text">3000 Capacity</p>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item text-success">Free Parking</li>
                        <li class="list-group-item text-success">Full AC</li>
                        <li class="list-group-item text-danger">Cleaning Service</li>
                        <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="BookingPage.php?img=<?= $tempat[1]["img"];?>&gedung=<?= $tempat[1]["gedung"];?>" type="submit" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: auto;">
                <img class="card-img-top" src="DJava.jpg" alt="Card image cap" width="15px">
                <div class="card-body">
                    <h5 class="card-title">Djava Ballroom</h5>
                    <p class="card-text">Rp 7.000.000 / hour</p>
                    <p class="card-text">1000 Capacity</p>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item text-danger">Free Parking</li>
                        <li class="list-group-item text-danger">Full AC</li>
                        <li class="list-group-item text-danger">Cleaning Service</li>
                        <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="BookingPage.php?img=<?= $tempat[2]["img"];?>&gedung=<?= $tempat[2]["gedung"];?>" type="submit" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <!--Footer-->
    <footer>    
        <div class="text-center text-white py-2" style="background-color: rgb(165, 165, 165);">
            <p>Created By : Hadi Noerddien Jayanto_1202190158</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>