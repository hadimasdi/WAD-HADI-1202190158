<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cart Booking</title>
  </head>
  <body style="background-color: #fdfde3;">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand nav-link" href="Index.php" style="padding-left: 18%;"><h3>EAD Travel</h3></a>
            <div class="d-flex" style="padding-right: 18%;">
                <ul class="nav ">
                    <li class="nav-item">
                      <a class="btn-link" href="Cart.php"><img src="img/shopping-cart.png" alt="shopping-cart" style="width: 50px; height: 35px;"></a>
                    </li>
                    <li class="nav-item dropdown text-dark">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lorem ipsum dolor</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item btn btn-link" type="button" href="Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="Login.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <table class="table" style="background-color: aliceblue;">
            <thead class="text-dark"style="background-color: white;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tempat</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Tanggal Perjalanan</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tbody>
        </table>
    </div>
    <footer>
        <div class="text-center text-dark py-2 fixed-bottom" style="background-color: #e3f2fd;">
            <ul class="footer-item" style="padding-top: 5px; padding-bottom: 5px;">
                <span>&#169;2021 Copyright :</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#footerModal">
                  HADI_1202190158
                </button>
            </ul>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="footerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Created By :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nama : Hadi Noerddien Jayanto</p>
                    <p>NIM  : 1202190158</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>