<?php

if($_POST){

    $id=$_POST['id_member'];

    $nama_member=$_POST['nama_member'];

    $alamat=$_POST['alamat'];

    $jenis_kelamin=$_POST['jenis_kelamin'];

    $telp=$_POST['telp'];


    if(empty($nama_member)){

        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member2.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member2.php';</script>";

    
    } elseif(empty($jenis_kelamin)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member2.php';</script>";
    } else {

        include "koneksi.php";

        if(empty($telp)){

      
            $update=mysqli_query($conn,"update member set nama_member='".$nama_member."',alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."' where id_member = '".$id."' ") or die(mysqli_error($conn));

            if($update){

               echo "<script>alert('Succes update member');location.href='tampil_member2.php';</script>";

            } else {

               echo "<script>alert('Fail update member');location.href='ubah_member2.php?id_member=".$id."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update member set nama_member='".$nama_member."',alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."' where id_member = '".$id."' ") or die(mysqli_error($conn));

            if($update){

               echo "<script>alert('Succes update member');location.href='tampil_member2.php';</script>";

            } else {

                echo "<script>alert('Fail update member');location.href='ubah_member2.php?id_member=".$id."';</script>";

            }

        }

       

    }

}

?>