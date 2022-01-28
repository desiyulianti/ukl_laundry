<?php 
    if($_GET['id_transaksi']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
        if($qry_hapus){
            echo "<script>alert('Succes delete transaction ');location.href='tampil_transaksi.php';</script>";
        } else {
            echo "<script>alert('Fail delete transaction');location.href='tampil_transaksi.php';</script>";
        }
    }
