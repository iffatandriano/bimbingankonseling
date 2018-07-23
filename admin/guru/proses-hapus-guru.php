<?php 
    $id = $_GET['id'];
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql = "DELETE FROM t_guru where id_guru='$id'";
        if($hapus = mysqli_query($conn,$sql)){
            header("Location:tampil-guru.php");
        }else{
            echo "Penghapusann Gagal";
        }
    }else{
        echo "Connection Error";
    }    
?>