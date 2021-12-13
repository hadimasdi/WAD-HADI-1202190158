<?php 
    $conn = mysqli_connect('localhost:3306','root','','modul3');
    $select = "SELECT * FROM buku_table ";
    $data = mysqli_query($conn, $select);
    $sort = mysqli_fetch_assoc($data);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--NavBar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" type="button" href="Hadi_Home.php">
            <img src="img\logo-ead.png" alt="" width="30" height="24" class="d-inline-block align-text-top" style="width: 120px; height: auto;">
          </a>
          <ul class="nav">
            <li class="nav-item">
                <a type="button nav-link active" aria-current="page" href="Hadi_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
            </li>
        </div>
      </nav>
    </nav>
    <?php
        $conn = mysqli_connect("localhost:3306", "root", "", "modul3");
        $select = "SELECT * FROM buku_table ";
        $data = mysqli_query($conn, $select);
        if (mysqli_num_rows($data) != 0) {
            $show = mysqli_fetch_array($data);

        ?>
        
    <div class="container">
        <div class="container shadow-lg" style="margin-top: 5%; margin-bottom: 10%;">
            <div class="card-body">
                <div class="Jud text-dark text-center">
                    <h1>Detail Buku</h1>
                </div>
                <div class="card-img shadow-lg text-center">
                    <img src="asset/Kalkulus.jpg" alt="">
                </div>
                <hr style="color: blue; height: 3px;"/>
                <div class="container">
                    <div class="Judul mb-3">
                        <p><b>Judul :</b></p>
                        <p><?php echo $show["judul_buku"]; ?></p>
                    </div>
                    <div class="mb-3">
                        <p><b>Penulis :</b></p>
                        <p><?php echo $show["penulis_buku"]; ?></p>
                    </div>
                    <div class="mb-3">
                        <p><b>Tahun Terbit :</b></p>
                        <p><?php echo $show["tahun_terbit"]; ?></p>
                    </div>
                    <div class="mb-3">
                        <p><b>Deskripsi :</b></p>
                        <p><?php echo $show["deskripsi"]; ?></p>
                    </div>
                    <div class="mb-3">
                        <p><b>Bahasa :</b></p>
                        <p><?php echo $show["bahasa"]; ?></p>
                    </div>
                    <div class="mb-3">
                        <p><b>Tag :</b></p>
                        <p><?php echo $show["tag"]; ?></p>
                    </div>
                <div class="gap-2 d-grid">
                    <!--Button Modal Sunting-->
                    <button class="btn btn-primary d-block" data-bs-toggle="modal" data-bs-target="#modalSunting" type="button">Sunting</button>
                    <!--Button Hapus-->
                    <a href="Hadi_Hapus.php?Judul=<?= $sort['judul_buku']?>" class="btn btn-danger d-block" type="button" name="delete">Hapus</a>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSunting" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="suntingtitle">Sunting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-row mb-3">
                      <label for="Judul" class="form-label"><b>Judul Buku </b></label>
                      <input type="text" class="form-control" id="Judul" name="Judul" placeholder="Contoh : Pemrograman WEB bersama EAD">
                    </div>
                    <div class="form-row mb-3">
                        <label for="Penulis" class="form-label"><b>Penulis</b></label>
                        <input type="text" class="form-control" id="Penulis" name="Penulis" value="Hadi_1202190158" readonly>
                    </div>
                    <div class="form-row mb-3">
                        <label for="Tahun" class="form-label"><b>Tahun Terbit</b></label>
                        <input type="text" class="form-control" id="Tahun" name="Tahun"  placeholder="Contoh : 2019">
                    </div>
                    <div class="form-row mb-3">
                        <label for="Deskripsi" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3" placeholder="Contoh : Buku ini menjelaskan tentang..."></textarea>
                    </div>
                    <div class="form-row mb-3">
                        <label for="Bahasa" class="form-label"><b>Bahasa</b></label>
                        <div class="form-check-inline" style="padding-left: 10px;">
                            <input class="form-check-input" type="radio" name="Bahasa" id="Bahasa" value="Indonesia">
                            <label class="form-check-label" for="Bahasa">
                            Indonesia
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="Bahasa" id="Bahasa" value="Lainnya" >
                            <label class="form-check-label" for="Bahasa">
                            Lainnya
                        </label>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label for="Tag" class="form-label"><b>Tag</b></label>
                        <div class="form-check form-check-inline" style="padding-left: 60px;">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="Pemrograman">
                            <label class="form-check-label" for="Tag">Pemrograman</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="WEBSITE">
                            <label class="form-check-label" for="Tag">WEBSITE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="JAVA">
                            <label class="form-check-label" for="Tag">JAVA</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="OOP">
                            <label class="form-check-label" for="Tag">OOP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="MVC">
                            <label class="form-check-label" for="Tag">MVC</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="Kalkulus">
                            <label class="form-check-label" for="Tag">Kalkulus</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="Tag" name="Tag[]" value="Lainnya">
                            <label class="form-check-label" for="Tag">Lainnya</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Gambar" class="form-label"><B>Gambar</B></label>
                        <input  type="file" id="Gambar" name="Gambar">
                      </div>
                    <div class="d-grid mb-3" style="padding-left: 20%; padding-right: 20%;">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah Buku +</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
?>
    <!--Modal-->

    <!--Footer-->
    <footer>    
        <div class="text-center text-dark py-2 " style="background-color: rgb(218, 218, 218);">
            <ul class="footer-item" style="padding-top: 50px; padding-bottom: 50px;">
                <img src="img/logo-ead.png" alt="logo-ead" style="width: 120px;">
                <h3>Perpustakaan EAD</h3>
                <span>&#169; Hadi_1202190158</span>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>