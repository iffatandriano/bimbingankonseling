<?php 
    $id = $_GET['id'];
    
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="DELETE FROM t_wali where id_wali='$id'";
        if($hapus = mysqli_query($conn,$sql)){
            header("Location:tampil-wali.php");
        }else{
            echo "Penghapusann Gagal";
        }   
    }else{
        echo "Connection Error";
    }    
?>