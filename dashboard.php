<?php
session_start();
include('koneksi.php');

if(isset($_SESSION['username'])){
    
}else{
    header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;

        }

        .content p{
            font-size: 30px;
            text-align: center;
            color: #333;
            font-weight: bold;
        }
        
        .content img{
            align-items: center;
        }

    </style>
  </head>
  <body>
        <div class="head">
            <nav class="navbar bg-dark" data-bs-theme="dark">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Halaman Aspirasi</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="aspirasi.php">Create Aspirasi</a>
                            <a class="nav-link" href="viewAspirasi.php">Riwayat</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Lainnya
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="exit.php">Exit</a></li>
                                </ul>
                            </li>
                        </div>
                        </div>
                    </div>
                </nav>
            </nav>
        </div>
        <div class="content">
            <br><br>
            <p>Selamat datang di Ruang Aspirasi Himpunan Mahasiswa Jurusan Teknik.</p><br><br>
            <center><img src="gambar/Logo Generasi.png" alt="Logo Teknik" width="300px"></center>
            
        </div>
        <div class="footer">

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>