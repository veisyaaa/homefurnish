<<<<<<< HEAD
<?php
include "koneksi.php";
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori = '$id'");

if($hapus){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    header("refresh:0, kategori.php");
}else{
    echo "<script>alert('Data gagal dihapus!')</script>";
    header("refresh:0, kategori.php");
}
=======
<?php
include "koneksi.php";
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori = '$id'");

if($hapus){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    header("refresh:0, kategori.php");
}else{
    echo "<script>alert('Data gagal dihapus!')</script>";
    header("refresh:0, kategori.php");
}
>>>>>>> 94008fd (e_kategori, h_kategori)
?>