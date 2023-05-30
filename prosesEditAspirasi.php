<?php
session_start();

if (isset($_POST['update'])){
    include("koneksi.php");

    $id = $_POST['id'];
    $aspirasi = $_POST['aspirasi'];

    echo $aspirasi;

    $query = "update t_aspirasi set aspirasi = '$aspirasi' where id_aspirasi='$id';";

    $result = mysqli_query($koneksi, $query);

    if(!$result){
        die("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }
}
header("location:viewAspirasi.php")
?>