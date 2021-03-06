<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body style="background-color: #fdfde3;">
</nav>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand nav-link" href="Index.php" style="padding-left: 18%;"><h3>EAD Travel</h3></a>
            <div class="d-flex" style="padding-right: 18%;">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    include('phpcontrol/do_register.php')?>
    <?php
    if (!empty($_GET['status'])) {
        if($_GET['status'] == "success"){
            ?>
            <div class="alert alert-success" role="alert">Berhasil Register</div>
            <?php
        } 
    }
?>
    <?php
    include('phpcontrol/do_login.php')?>
    <?php
    if (!empty($_GET['status'])) {
        if($_GET['status'] == "masuk"){
            ?>
            <div class="alert alert-success" role="alert">Berhasil login</div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger" role="alert">Gagal Login</div>
            <?php
        }
    }
?>
    <div class="container" style="width: 35rem; padding-top: 8rem;">
        <div class="row justify-content-center">
            <div class="row justify-content-center mt-3 ">
                <div class="col-sm ">
                    <div class="card p-5" style="width: 30rem;">
                        <h3 class="text-center mb-3">Login</h3>
                        <ul class="list-group list-group-flush">
                            <form action="Index.php" method="POST" enctype="multipart/formdata" autocomplete="off">
                                <div class="form-row mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-mail">
                                </div>
                                <div class="form-row mb-3">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" placeholder="Kata Sandi Anda">
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-check form-check-inline" style="padding-left: 22px;">
                                        <input class="form-check-input" type="checkbox" id="ingat" name="ingat">
                                        <label class="form-check-label" for="Tag">Remember Me?</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary justify-content-center mb-3" name="submit" style="width: 150px;">Login</button>
                                    <p>Anda belum punya akun?  <a href='Register.php' >Register</a></p>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
<br>
<br>
    <footer>
        <div class="text-center text-dark py-2 " style="background-color: #e3f2fd;">
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