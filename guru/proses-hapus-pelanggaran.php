<?php 
    $id = $_GET['id'];
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql = "DELETE FROM t_pelanggaran where id_pelanggaran='$id'";
        if($hapus = mysqli_query($conn,$sql)){
            header("Location:daftar-pelanggaran.php");
        }else{
            echo "Penghapusann Gagal ";
            echo $id;
        }
    }else{
        echo "Connection Error";
    }    
?>  