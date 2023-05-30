<?php
    session_start();
    include('koneksi.php');

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        table{
            width: 600px;
            margin: auto;
            background-color: wheat;
            text-align: center;
        }
        h1{
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
                        <a class="nav-link" href="aspirasi.php">Create Aspirasi</a>
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
    <h1>Riwayat Aspirasi</h1>
    <br>
    <table border="1px">
        <tr>
            <th>N0</th>
            <th>Aspirasi</th>
            <th>Pilihan</th>
        </tr>
        <?php
        $query = "select * from t_aspirasi where username = '$username';";
        $result = mysqli_query($koneksi, $query);

        // mengecek apakah ada error ketika menjalankan query
        if(!$result){
            die("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($$koneksi));
        }


        //hasil query akan disimpan dalam variabel $data dalam bentuk array
        //kemudian dicetak dengan perulangan while
        while($data = mysqli_fetch_assoc($result)){
            //mencetak / menampilkan data
            echo "<tr>";
            echo "<td>$data[id_aspirasi]</td>"; 
            echo "<td>$data[aspirasi]</td>";
            // membuat koneksi untuk mengedit dan menghapus data
            echo '<td>
             <a href="editAspirasi.php?id_aspirasi='.$data['id_aspirasi'].'">Edit</a>
             <a href="hapusAspirasi.php?id_aspirasi='.$data['id_aspirasi'].'"
                onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
             </td>';
             echo "</tr>";
        }
        ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>