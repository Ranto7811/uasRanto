<?php
include('koneksi.php');

//menampung data dari form register
if(isset($_POST['Daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $noHP = $_POST['noHP'];
    $npm = $_POST['npm'];

    $sql = "select * from pengguna where username = '$username';";
    $result = $koneksi->query($sql);
    if($result->num_rows>0){
        echo "<script>alert('Username telah ada')</script>";
    }else{
        $query = "insert into pengguna (username,password,noHP,npm) values('$username','$password','$noHP','$npm');";
        $result = $koneksi->query($query);
        if($result){
            echo "<script>alert('Berhasil mendaftar akun')</script>";
        }else{
            echo "<script>alert('Gagal mendaftar akun')</script>";
        }
    }
    
}


?>

<!DOCTYPE html>
<html>
<script>
    <?php 
    if (isset($error)) { ?>
        window.addEventListener('DOMContentLoaded', (event) => {
            alert('<?php echo $error; ?>');
    });
    <?php } ?>
  </script>
<head>
  <title>Halaman Login</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        color: black;
        background-image: url(gambar/latar.jpg);
        margin: 0;
        padding: 0;
    }

    .container {
        width: 350px;
        background-color: white;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        margin-top: 50px;
    }

    h2 {
        text-align: center;
    }

    label {
        display: block;
        font-weight: bold;
        margin-top: 12px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border: 1px solid black;
        border-radius: 3px;
        box-sizing: border-box;
    }

    textarea{
        margin-top: 20px;
        width: 100%;

    }

    input[type="submit"],
    input[type="button"] {
        background-color: black;
        color: #fff;
        margin-top: 20px;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        width: 45%;
        margin-left: 10px;
    }
    p{
        margin-top: 20px;
        text-align: center;
    }

  </style>
</head>
<body>
  <div class="container">
    <h2>Register Account</h2>
    <center><img src="gambar/Logo Generasi.png" alt="logo Teknik" width="50px"></center> 
    <form action="" method="POST">

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Masukkan Username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

      <label for="npm">NPM:</label>
      <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required>

      <label for="noHP">No HP:</label>
      <input type="text" id="noHP" name="noHP" placeholder="Masukkan noHP" required>

      <input type="submit" name="Daftar" value="Daftar"><a href="login.php"><input type="button" name="back" value="Kembali"></a>
      
    </form>
</body>
</html>
