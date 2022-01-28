<?php

if($_POST){

    $id=$_POST['id_paket'];

    $nama_paket=$_POST['nama_paket'];

    $harga=$_POST['harga'];


    if(empty($nama_paket)){

        echo "<script>alert('nama paket tidak boleh kosong');location.href='tambah_paket.php';</script>";

    }  else {

        include "koneksi.php";

        if(empty($harga)){

      
            $update=mysqli_query($conn,"update paket set nama_paket='".$nama_paket."',harga='".$harga."' where id_paket = '".$id."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Success update package');location.href='tampil_paket.php';</script>";

            } else {

                echo "<script>alert('Fail update package');location.href='ubah_paket.php?id_paket=".$id."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update paket set nama_paket='".$nama_paket."',harga='".$harga."' where id_paket = '".$id."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Succes update package');location.href='tampil_paket.php';</script>";

            } else {

                echo "<script>alert('Fail update package');location.href='ubah_paket.php?id_paket=".$id."';</script>";

            }

        }

       

    }

}

?>