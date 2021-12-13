<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--NavBar-->
    <nav class="navbar navbar-dark bg-dark sticky-lg-top">
        <div class="container-fluid">
          <a class="navbar-brand" type="button" href="Hadi_Home.php">
            <img src="img\logo-ead.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top" style="width: 120px; height: auto;">
          </a>
          <ul class="nav">
            <li class="nav-item">
                <a type="button nav-link active" aria-current="page" href="Hadi_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
            </li>
        </div>
      </nav>
    </nav>
    <br>
    <div class="mt-5 align-items-center">
        <!--Tampilan jika data ada dan tidak ada-->
        <?php
            $conn = mysqli_connect('localhost:3306', 'root', '', 'modul3');
            $show = "SELECT * FROM buku_table";
            $query = mysqli_query($conn, $show);
            $row = mysqli_num_rows($query);
            if($row == 0){
                ?>
                <div class="container">
                    <div class="container-item justify-content-center text-center text-dark py-2" style="padding-left: 5%; padding-right: 5%; margin-top: 15%; margin-bottom: 20%;">
                        <h2>Belum Ada Buku</h2>
                        <hr style="color: rgb(0, 0, 235); height: 3px;"/> 
                        <h4>Silahkan Menambahkan Buku</h4>
                    </div>
                    <?php
                }
            else{
                ?>
                <div class="container d-flex justify-content-center">
                    <?php
                    while($dataBuku = mysqli_fetch_array($query)){
                        ?>
                        <div class="card mx-1" style="width:244px;">
                            <img src="asset/Kalkulus.jpg" alt="gambar" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><?= $dataBuku['judul_buku']?></h4>
                                <p><?= $dataBuku['deskripsi']?></p>
                                <button class="btn btn-primary" type="submit"><a href="Hadi_DetailBuku.php?judul=<?= $dataBuku['judul_buku']?>" style="color: white;">Tampilkan lebih lanjut</a></button>
                            </div>
                        </div>
                    <?php }?>
                </div>
                
        <?php }?>
    </div>
    <br>
    <br>
    <br>
    <br>
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
</body>
</html>