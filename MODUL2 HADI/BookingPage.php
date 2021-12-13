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
        <title>Booking Page</title>
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
<br>
<br>
<br>
<!--Tagline-->
<div class="container">
    <div class="bg-dark text-white text-center p-1 m-1" style="font-family: Arial;">
        <h4>Reserve your venue now!</h4>
    </div>
</div>
<br>

<!--Membuat Form Book Revenue-->
<div class="container">
    <div class="card mb-3" style="max-width: 1440px;">
        <div class="row g-0">
          <div class="col-md-4">
          <?php
                if(isset($_GET["img"])){
                    ?><img class="" width="100%" src="<?= $_GET["img"];?>" alt="">
            <?php
                }else{
                    ?><img width="100%" src="Westin.jpg" alt="">
                <?php }?>
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <form action="MyBookingPage.php" method="POST">
                    <div class="form-row mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="Hadi_1202190158" readonly name="name" id="name">
                    </div>
                    <div class="form-row mb-3">
                        <label for="date" class="form-label">Event date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-row mb-3">
                        <label for="Start" class="form-label">Start Time</label>
                        <input type="time" class="form-control" name="Start" id="Start">
                    </div>
                    <div class="form-row mb-3">
                        <label for="Duration" class="form-label">Duration (hour)</label>
                        <select class="form-select" name="Duration" id="Duration" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-row mb-3">
                        <label for="inputType" class="form-label">Building Type</label>
                        <select class="form-select" name="B_Type" id="B_Type">
                            <option selected>Choose...</option>
                            <?php foreach ($tempat as $tempat):?>
                                <?php
                                    if($tempat["gedung"]==$_GET["gedung"]){
                                        ?><option selected="selected" value="<?= $tempat["gedung"];?>"><?= $tempat["gedung"];?></option>
                                <?php
                                    }else{
                                        ?><option value="<?= $tempat["gedung"];?>"><?=$tempat["gedung"];?></option>
                                <?php }?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-row mb-3">
                        <label for="inputNumber" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="Phone" id="Phone">
                    </div>
                    <label for="service" class="form-label">Add Service(s)</label>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="service[]" value="Catering">
                        <label class="form-check-label" for="exampleCheck1">Catering / Rp 5.000.000</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="service[]" value="Decoration">
                        <label class="form-check-label" for="exampleCheck1">Decoration / Rp 2.500.000</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="service[]" value="Decoration">
                        <label class="form-check-label" for="exampleCheck1">Sound System / Rp 1.500.000</label>
                    </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit"class="btn btn-link active btn-primary">Book</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>
<!--Footer-->
<footer>    
    <div class="text-center text-white py-2 " style="background-color: rgb(165, 165, 165);">
        <p>Created By : Hadi Noerddien Jayanto_1202190158</p>
    </div>
</footer>
    
</body>
</html>