<?php
include('koneksi.php');
session_start();

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
}

if(isset($_POST['login'])){
    $username =$_POST["username"];
    $password =($_POST["password"]);

    $query = "select * from pengguna where username = '$username' and password = '$password'";
    $result = $koneksi->query($query);
    if($result->num_rows==1){
      $_SESSION['username'] = $username;
      header("Location: dashboard.php");
    }else{
      echo "<script>alert('Username atau password salah')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      color: black;
      background-image: url(gambar/latar.jpg);
      background-size: cover;
      margin: 0;
      padding: 0;
      
    }

    .container {
      width: 350px;
      background-color: white;
      background-position: center;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid black;
      border-radius: 5px;
      margin-top: 100px;
    }

    h2 {
      text-align: center;
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

    input[type="submit"] {
      width: 100%;
      background-color: black;
      color: #fff;
      margin-top: 20px;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    p{
      text-align: center;
      margin-top: 20px;
    }

  </style>
</head>
<body>
  <div class="container">
    <h2>Login to Aspirasi HMJT</h2>
    <center><img src="gambar/Logo Generasi.png" alt="logo Generasi" width="50px"></center> 
    <form action="" method="POST">
      <input type="text" id="username" name="username" placeholder="Masukkan Username" required>

      <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

      <input type="submit" name="login" value="Login">
    </form>
    <p>No account? <a href="register.php">Create one</a></p>
  </div>
</body>
</html>
