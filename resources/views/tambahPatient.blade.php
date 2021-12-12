<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>EAD Public Health Center</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light justify-content-md-center justify-content-start">
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link{{ request()->is('/') ? ' active' : ''}}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->is('vaccine') ? ' active' : ''}}" href="/vaccine">Vaccine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->is('patient') ? ' active' : ''}}" href="/patient">Patient</a>
        </ul>
    </div>
    </nav>  
@section('isi')

    <h1 class="text-center p-5">Register Patient</h1>
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="pb-3">
            <label for="vaccine_id">Vaccine Id</label>
            <input class="form-control" type="text" name="vaccine_id" id="vaccine_id" value="" readonly>
        </div>
        <div class="pb-3">
            <label for="name">Patient Name</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="pb-3">
            <label for="nik">NIK</label>
            <div class="input-group-prepend d-flex">
                <input class="form-control" type="text" name="nik" id="nik">
            </div>
        </div>
        <div class="pb-3">
            <label for="alamat">Alamat</label>
            <div class="input-group-prepend d-flex">
                <input class="form-control" type="text" name="alamat" id="alamat">
            </div>
        </div>
        <div class="pb-3">
            <label for="ktp">KTP</label>
            <input class="form-control" type="file" name="ktp" id="ktp">
        </div>
        <div class="pb-3">
            <label for="no_hp">No HP</label>
            <div class="input-group-prepend d-flex">
                <input class="form-control" type="text" name="no_hp" id="no_hp">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit" style="">Register</button>
    </form>
    </div>
</body>
    @section('Footer') 
        <!--Footer-->
        <footer>
        <div class="text-center text-dark py-2 fixed-bottom" style="background-color: whitesmoke;">
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
                    <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kesan : Praktikum WAD ini cukup sulit bagi saya yang masih awam mengenai dunia website, dan dirasa saya cukup banyak tertinggal
                        Saya sudah mencoba untuk mempelajari lebih mengenai php mysql dan sebagainya akan tetapi tetap cukup sulit bagi saya dikarenakan 
                        rentang waktu yang cukup singkat
                    </p>
                    <p>Pesan : Asprak diharapkan lebih membantu atau menawarkan bantuan tutorial jika dirasa ada mahasiswa yang tidak paham.
                        Semoga untuk kedepannya praktikum ini dapat berjalan lebih mudah bagi adik tingkat angkatan 20. Cukup saya saja yang merasakan stressnya :')</p>
                </div>
            </div>
        </div>
    </footer>
    </html>
