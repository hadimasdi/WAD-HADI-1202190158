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
    <title>Traveling Reservation Sederhana</title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-dark bg-black fixed-top text-white justify-content-center">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="Home.php" style="color: white;">Home</a>
        </li>
    </ul>
</nav>
<!--Pesan Welcome-->
<br>
<br>
<div class="container-fluid text-center m-2 p-2" style="background-color: white;">
    <div class="Header">
        <h3 class="Welcome">WELCOME TO TRAVELING RESERVATION</h3>
    </div>
</div>
<!--Membuat Tag Perusahaan dan card dalam 1 container-->
<div class="container">
    <div class="bg-dark text-white text-center" style="font-family: Arial;">
        <h4>Find your best deal for your event, here!</h4>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="width: auto;">
                <img class="card-img-top" src="Bali.jpg" alt="Card image cap" width="15px">
                <div class="card-body">
                    <h5 class="card-title">Bali</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <p class="card-text">Rp 7.000.000</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="card-body">
                <form action="BookingPage.php" method="POST">
                    <div class="form-row mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="Hadi_1202190158" readonly name="name" id="name">
                    </div>
                    <div class="form-row mb-3">
                        <label for="date" class="form-label">Event date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-row mb-3">
                        <label for="inputType" class="form-label">Tujuan</label>
                        <select class="form-select" name="Tempat" id="Tempat">
                            <option selected>Bali</option>
                        </select>
                    </div>
                    <div class="form-row mb-3">
                        <label for="inputNumber" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="Phone" id="Phone">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit"class="btn btn-link active btn-primary">Book</button>
                    </div>
                </form>
</div>
    <!--Footer-->
    <footer>    
        <div class="text-center text-white py-2" style="background-color: rgb(165, 165, 165);">
            <p>Created By : Hadi Noerddien Jayanto_1202190158</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>