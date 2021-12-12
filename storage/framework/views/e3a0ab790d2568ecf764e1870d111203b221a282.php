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
                <a class="nav-link<?php echo e(request()->is('/') ? ' active' : ''); ?>" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo e(request()->is('vaccine') ? ' active' : ''); ?>" href="/vaccine">Vaccine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php echo e(request()->is('patient') ? ' active' : ''); ?>" href="/patient">Patient</a>
        </ul>
    </div>
    </nav>  
<?php $__env->startSection('isi'); ?>
    <div class="container text-center">
        <p class="text-muted pt-5">Belum ada data vaksin :(</p>
    </div>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-primary" href="">Tambah Vaksin</a>
    </div>
</body>
<?php $__env->startSection('Footer'); ?> 
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
<?php /**PATH D:\XAMPP\htdocs\MODUL5 HADI\resources\views/vaccine.blade.php ENDPATH**/ ?>