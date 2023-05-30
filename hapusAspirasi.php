<?php
//buka koneksi dengan MYSQL
session_start();
include('koneksi.php');

//mengecek apakah di url ada get npm
if (isset($_GET['id_aspirasi'])){

    echo "aku";

    // menyimpan variabel id dari url ke dalam variabel $npm
    $id = $_GET['id_aspirasi'];

    echo "aku";

    //jalankan query delete untuk menghapus data
    $query = "delete from t_aspirasi where id_aspirasi='$id';";
    $result = mysqli_query($koneksi,$query);

    //periksa query, apakah ada kesalahan
    if(!$result){
        die("Gagal menghapus data: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }
}
// melakukan redirect ke halaman viewdosen.php
header("Location:viewAspirasi.php")
?>