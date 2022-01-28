<?php 
    if($_GET['id_paket']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from paket where id_paket='".$_GET['id_paket']."'");
        if($qry_hapus){
            echo "<script>alert('Succes delete package');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Fail delete package');location.href='tampil_paket.php';</script>";
        }
    }