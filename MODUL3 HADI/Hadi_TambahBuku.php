<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--NavBar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" type="button" href="Hadi_Home.php">
            <img src="img/logo-ead.png" alt="" width="30" height="24" class="d-inline-block align-text-top" style="width: 120px; height: auto;">
          </a>
          <ul class="nav">
            <li class="nav-item">
                <a type="button nav-link active" aria-current="page" href="Hadi_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
            </li>
        </div>
      </nav>
    </nav>
    <div class="container shadow-lg" style="margin-top: 5%; margin-bottom: 10%;">
            <div class="card-body">
                <div class="text-dark text-center">
                    <h1>Tambah Data Buku</h1>
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

<?php
$conn = mysqli_connect('localhost:3306', 'root', '', 'modul3');
?>
<?php
if(isset($_POST['submit'])){
    $Judul = $_POST["Judul"];
    $Penulis = $_POST["Penulis"];
    $Tahun = $_POST["Tahun"];
    $Deskripsi = $_POST["Deskripsi"];
    $Bahasa = $_POST["Bahasa"];
    $Tag = implode(', ', $_POST["Tag"]);
    $Gambar = $_FILES['Gambar']['name'];
    $source = $_FILES['Gambar']['tmp_name'];

    move_uploaded_file($source, 'asset/'.$Gambar);
        
    $query = "INSERT INTO buku_table VALUES ('', '$Judul', '$Penulis', $Tahun, '$Deskripsi', '$Gambar', '$Tag', '$Bahasa')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'Hadi_TambahBuku.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Terdapat kesalahan')
        </script>";
    }   
}
?>