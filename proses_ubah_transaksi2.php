<?php
if($_POST){
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_transaksi=$_POST['id_transaksi'];

  if(empty($tgl_bayar)){
        echo "<script>alert('Payment date cannot be empty');location.href='transaksi2.php';</script>";
    }elseif(empty($status)){
        echo "<script>alert('status cannot be empty');location.href='transaksi2.php';</script>";
    }elseif(empty($dibayar)){
        echo "<script>alert('paid cannot be empty');location.href='transaksi2.php';</script>";
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update transaksi set  tgl_bayar='".$tgl_bayar."', status='".$status."', dibayar='".$dibayar."' where id_transaksi = '".$id_transaksi."'");
        
        if($update){
            echo "<script>alert('Succes update transaction');location.href='tampil_transaksi2.php';</script>";
        } else {
            echo "<script>alert('Fail update transaction');location.href='ubah_transaksi2.php?id_transaksi=".$id_transaksi."';</script>";
        }
    }
}

?>