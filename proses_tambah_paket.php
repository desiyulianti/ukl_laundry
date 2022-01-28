<?php

if($_POST){

    $nama_paket=$_POST['nama_paket'];
    $harga=$_POST['harga'];

    if(empty($nama_paket)){
        echo "<script>alert('type package cannot be empty');location.href='tambah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('price cannot be empty');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into paket (nama_paket, harga) value ('".$nama_paket."','".$harga."')");
        if($insert){
            echo "<script>alert('Success add package');location.href='tambah_paket.php';</script>";
        } else {
            echo "<script>alert('Fail add package');location.href='tambah_paket.php';</script>";
        }
    }
}

?>