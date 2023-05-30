<?php
session_start();
include('koneksi.php');

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    header("Location: login.php");
}

if(isset($_POST['kirim'])){
    $aspirasi = $_POST['aspirasi'];

    $query = "insert into t_aspirasi(aspirasi,username) values('$aspirasi','$username');";
    $result = mysqli_query($koneksi, $query);

    if ($result){
        echo "<script>alert('Berhasil mengirimkan aspirasi')</script>";
    }else{
        echo "<script>alert('Gagal mengirimkan aspirasi')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
        color: black;
        margin: 0;
        padding: 0;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .container {
        background-color: black;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        margin-top: 80px;
        width: 400px;
    }

    h2 {
        text-align: center;
        color: #fff;
        font-size: 30px;
    }

    textarea{
        margin-top: 20px;
        width: 100%;

    }

    input[type="submit"] {
        width: 30%;
        background-color: orangered;
        color: #fff;
        margin-top: 20px;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="reset"]{
        width: 30%;
        color: #fff;
        margin-top: 20px;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        background-color: purple;
        
    }

    p{
        text-align: center;
        margin-top: 20px;
    }

  </style>
</head>
<body>
    <div class="head">
        <nav class="navbar bg-dark" data-bs-theme="dark">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Aspirasi Mahasiswa Teknik</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
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
  <div class="container">
    <h2>Form Aspirasi</h2>
    <form action="" method="POST">
      <textarea name="aspirasi" id="aspirasi" cols="30" rows="10" placeholder="Masukkan aspirasi anda disini!"></textarea>
      <input type="submit" name="kirim" value="Kirim">
      <button type="reset">Reset</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>