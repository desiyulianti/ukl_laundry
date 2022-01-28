<?php

if($_POST){
    $id_member=$_POST['nama_member'];
    $id_user=$_POST['nama_user'];
    $jenis=$_POST['jenis'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $qty=$_POST['qty'];
    

    if(empty($id_member)){
        echo "<script>alert('name member cannot be empty');location.href='transaksi.php';</script>";
    } elseif(empty($id_user)){
        echo "<script>alert('name user cannot be empty');location.href='transaksi.php';</script>";
    } elseif(empty($jenis)){
        echo "<script>alert('type cannot be empty');location.href='transaksi.php';</script>";
    }  elseif(empty($tgl)){
        echo "<script>alert('date cannot be empty');location.href='transaksi.php';</script>";
    } elseif(empty($batas_waktu)){
        echo "<script>alert('deadline cannot be empty');location.href='transaksi.php';</script>";
    } else {
        include "koneksi.php";
        $sql = "insert into transaksi (id_member, id_user, tgl, batas_waktu) value ('".$id_member."','".$id_user."','".$tgl."','".$batas_waktu."')";
        $insert=mysqli_query($conn,$sql);
        $last_id_transaksi = mysqli_insert_id($conn);
        //echo $sql;

        $sql_detail = 'insert into detail_transaksi values (NULL, '.$last_id_transaksi.', '.$jenis.', '.$qty.')';
        //echo $sql_detail;
        $insert_detail = mysqli_query($conn, $sql_detail);

        if($insert && $insert_detail){
           echo "<script>alert('Succes add data transaction');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Fail add data transaction');location.href='transaksi.php';</script>";
        }
    }
}
?>