<?php
    session_start();
    include 'koneksi.php';

    if (isset($_GET['id_aspirasi'])){
        // ambil nilai kodeMK dari url dan disimpan dalam variabel $id
        $id = ($_GET['id_aspirasi']);

        // menampilkan data t_matakuliah dari database yang mempunyai kodeMK=$id
        $query = "select * from t_aspirasi where id_aspirasi = '$id'";
        $result = mysqli_query($koneksi, $query);

        // mengecek apakah ada error ketika menjalankan query
        if(!$result){
            die("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
        // mengambil data dari database dan membuat variabel-variabel utk menampung data
        // variabel ini nantinya akan ditampilkan pada form
        $data = mysqli_fetch_assoc($result);
        $aspirasi = $data['aspirasi'];

    }else{
        //apabila tidak ada data GET id pada akan diredirect ke index.php
        header("location:viewAspirasi.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
        color: black;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        }

        .container {
            background-color: black;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            margin-top: 100px;
            width: 400px;
        }

        .container h2 {
            text-align: center;
            color: wheat;
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
        
    </style>
</head>
<body>
<div class="container">
    <h2>Form Aspirasi</h2>
    <form action="prosesEditAspirasi.php" method="POST">
        <center>
        <label for="kodeMK">id :</label>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="text" name="id" id="id" value="<?php echo $id ?>" disabled>
        </center>

        <textarea name="aspirasi" id="aspirasi" cols="30" rows="10"></textarea> <br>
        <script>
            document.getElementById("aspirasi").innerText = "<?php echo $aspirasi ?>";
        </script>

        <input type="submit" name="update" value="Update Data">
    </form>
  </div>
</body>
</html>