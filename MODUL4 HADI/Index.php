<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
    <?php
    include('phpcontrol/do_login.php')?>
    <?php
    if (!empty($_GET['status'])) {
        if($_GET['status'] == "masuk"){
            ?>
            <div class="alert alert-success" role="alert">Berhasil login</div>
            <?php
        } else{
            ?>
            <div class="alert alert-danger" role="alert">Gagal Login</div>
            <?php
        }
    }

?>
    <?php
    include('phpcontrol/tambahCart.php')
    ?>
    <?php
       if (!empty($_GET['tambah'])) {
        if($_GET['tambah'] == "success"){
            ?>
            <div class="alert alert-success" role="alert">Berhasil tambah cart</div>
            <?php
        } 
    }
?>
    <br>
    <br>
    <div class="container rounded-3" style="background-color:green; height: 10rem; width: 75rem;">
        <div class="container text-center" style="padding-top: 40px;">
            <h1>EAD Travel</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card" style="width: 25rem;">
            <img src="img/Jepang.jpeg" class="card-img-top" alt="jepang" style="height: 18rem; width: 25rem;">
            <div class="card-body">
                <h4 class="card-title">Fuji, Japan</h4>
                <p class="card-text">Gunung Fuji (?????????) adalah gunung tertinggi di Jepang dengan tinggi 3.776 meter. Gunung Fuji masih merupakan gunung berapi yang aktif, terakhir meletus pada tahun 1707. Terletak di perbatasan antara Prefektur Yamanashi dan Shizuoka dan dapat dilihat dari Tokyo dan Yokohama pada hari-hari yang cerah. Gunung Fuji juga telah terdaftar sebagai warisan dunia UNESCO.
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>Rp. 7.000.000</h5></li>
              </ul>
              <div class="card-footer text-muted text-center">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jepangModal" style="padding-left: 0;">Pesan Tiket</button>
                </div>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="img/Korea.jpeg" class="card-img-top" alt="korea" style="height: 18rem; width: 25rem;">
            <div class="card-body">
                <h4 class="card-title">Busan, Korea</h4>
                <p class="card-text">Gunung Fuji (?????????) adalah gunung tertinggi di Jepang dengan tinggi 3.776 meter. Gunung Fuji masih merupakan gunung berapi yang aktif, terakhir meletus pada tahun 1707. Terletak di perbatasan antara Prefektur Yamanashi dan Shizuoka dan dapat dilihat dari Tokyo dan Yokohama pada hari-hari yang cerah. Gunung Fuji juga telah terdaftar sebagai warisan dunia UNESCO.
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>Rp. 6.000.000</h5></li>
              </ul>
              <div class="card-footer text-muted text-center">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#koreaModal" style="padding-left: 0;">Pesan Tiket</button>
                </div>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="img/Thailand.jpeg" class="card-img-top" alt="Thailand" style="height: 18rem; width: 24rem;">
            <div class="card-body">
                <h4 class="card-title">Bangkok, Thailand</h4>
                <p class="card-text">Gunung Fuji (?????????) adalah gunung tertinggi di Jepang dengan tinggi 3.776 meter. Gunung Fuji masih merupakan gunung berapi yang aktif, terakhir meletus pada tahun 1707. Terletak di perbatasan antara Prefektur Yamanashi dan Shizuoka dan dapat dilihat dari Tokyo dan Yokohama pada hari-hari yang cerah. Gunung Fuji juga telah terdaftar sebagai warisan dunia UNESCO.
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>Rp. 5.000.000</h5></li>
              </ul>
              <div class="card-footer text-muted text-center">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#thailandModal" style="padding-left: 0;">Pesan Tiket</button>
                </div>
            </div>
        </div>
        <!-- Modal Jepang -->
        <div class="modal fade" id="jepangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tanggal Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="Index.php" method="POST">
                            <div class="form-row mb-3">
                                <input type="hidden" id="user_id" name="user_id" value="">
                                <input type="hidden" id="nama_tempat" name="nama_tempat" value="Fuji">
                                <input type="hidden" id="lokasi" name="lokasi" value="Japan">
                                <input type="hidden" id="harga" name="harga" value="7000000">
                                <input type="date" class="form-control" name="tanggal" id="date">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-link active btn-primary">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Korea-->
        <div class="modal fade" id="koreaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tanggal Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="Index.php" method="POST">
                            <div class="form-row mb-3">
                                <input type="hidden" id="user_id" name="user_id" value="">
                                <input type="hidden" id="nama_tempat" name="nama_tempat" value="Busan">
                                <input type="hidden" id="lokasi" name="lokasi" value="Korea">
                                <input type="hidden" id="harga" name="harga" value="6000000">
                                <input type="date" class="form-control" name="tanggal" id="date">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-link active btn-primary">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Thailand-->
        <div class="modal fade" id="thailandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tanggal Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="Index.php" method="POST">
                            <div class="form-row mb-3">
                                <input type="hidden" id="user_id" name="user_id" value="">
                                <input type="hidden" id="nama_tempat" name="nama_tempat" value="Bangkok">
                                <input type="hidden" id="lokasi" name="lokasi" value="Thailand">
                                <input type="hidden" id="harga" name="harga" value="5000000">
                                <input type="date" class="form-control" name="tanggal" id="date">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-link active btn-primary">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <div class="text-center text-dark py-2" style="background-color: rgb(218, 233, 255);">
            <ul class="footer-item" style="padding-top: 5px; padding-bottom: 5px;">
                <span>&#169;2021 Copyright :</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#footerModal" style="padding-left: 0;">
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
</body>
</html>