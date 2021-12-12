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
    <h2 class="text-center p-5">About Us</h2>
    <div class="container d-flex justify-content-around align-items-center">
        <img class="pe-5" src="img/Dokter.png" alt="gambar" height="250px">
        <p class="p-4">
        Vaksin merupakan salah satu cara terpenting dan tepat guna untuk mencegah 
        penyakit dan menjaga kondisi tubuh. Vaksin, yang juga sering disebut imunisasi, 
        mengambil keuntungan dari fungsi unik yang dimiliki tubuh dalam mempelajari dan melawan kuman-kuman penyebab penyakit. 
        Vaksin membantu menciptakan kekebalan tubuh untuk melindungi Anda dari infeksi tanpa mengakibatkan efek samping yang membahayakan.
        Vaksinasi Covid-19 merupakan salah satu upaya pemerintah Indonesia dalam menangani masalah Covid-19. Vaksinasi Covid-19 bertujuan 
        untuk menciptakan kekebalan kelompok (herd immunity) agar masyarakat menjadi lebih produktif dalam menjalankan aktivitas kesehariannya.
        </p>
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
<?php /**PATH D:\XAMPP\htdocs\MODUL5 HADI\resources\views/home.blade.php ENDPATH**/ ?>