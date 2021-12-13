<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profile</title>
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
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="mt-5 container bg-white rounded-1 shadow">
        <h2 class="text-center p-3">Profile</h2>
        <form action="" method="post">
            <div class="container d-flex align-items-center mb-3">
                <label class="mb-2 col-2" for="email">E-mail</label>
                <input class="form-control" type="text" name="email" id="email" readonly value="" >
            </div>
            <div class="container d-flex align-items-center mb-3">
                <label class="mb-2 col-2" for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" value="" placeholder="Masukkan nama lengkap">
            </div>
            <div class="container d-flex align-items-center mb-3">
                <label class="mb-2 col-2" for="noHp">Nomor Handphone</label>
                <input class="form-control" type="text" name="nohp" id="noHp" value="" placeholder="Masukkan nomor handphone">
            </div>
            <hr>
            <div class="container d-flex align-items-center mb-3">
                <label class="mb-2 col-2" for="password">Kata Sandi</label>
                <input class="form-control" type="password" name="password" id="pass" placeholder="Kata Sandi">
            </div>
            <div class="container d-flex align-items-center mb-3">
                <label class="mb-2 col-2" for="cekPass">Konfirmasi Kata Sandi</label>
                <input class="form-control" type="password" name="repass" id="cekPass" required placeholder="Konfirmasi Kata Sandi">
            </div>
            <div class="d-flex justify-content-center pb-3">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a type="button" href="Index.php" class="ms-2 btn btn-warning">Cancel</a>
                
            </div>
        </form>
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