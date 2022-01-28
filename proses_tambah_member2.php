<?php

if($_POST){

    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['telp'];

    if(empty($nama_member)){
        echo "<script>alert('name member cannot be empty');location.href='tambah_member2.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('address member cannot be empty');location.href='tambah_member2.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('phone member cannot be empty');location.href='tambah_member2.php';</script>";
    }    elseif(empty($jenis_kelamin)){
            echo "<script>alert('gender member cannot be empty');location.href='tambah_member2.php';</script>";
        
    } else {
        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into member (nama_member, alamat, jenis_kelamin, telp) value ('".$nama_member."','".$alamat."','".$jenis_kelamin."','".$telp."')");
        if($insert){
            echo "<script>alert('Success add member');location.href='tambah_member2.php';</script>";
        } else {
            echo "<script>alert('Fail add member');location.href='tambah_member2.php';</script>";
        }
    }
}

?>