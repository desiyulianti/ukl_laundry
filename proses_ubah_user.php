<?php

if($_POST){
    $id_user=$_POST['id_user'];
    $nama=$_POST['nama_user'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    if(empty($nama)) {
        echo "<script>alert('User name cannot be empty');location.href='tambah_user.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Username cannot be empty');location.href='tambah_user.php';</script>";

    } elseif(empty($password)){
        echo "<script>alert('Password cannot be empty');location.href='tambah_user.php';</script>";

    } else {

        include "koneksi.php";

            if(empty($username)){
            $update=mysqli_query($conn,"update user set nama_user='".$nama."', username='".$username."', password='".md5($password)."', role='".$role."', id_user='".$id_user."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";

            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";

            }

            } else {
            $update=mysqli_query($conn,"update user set nama_user='".$nama."', username='".$username."', password='".md5($password)."', role='".$role."', id_user='".$id_user."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";

            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";

            }
        }
    }
}
?>