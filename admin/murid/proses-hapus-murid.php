<?php 
    $nis = $_GET['nis'];
    
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="DELETE FROM t_murid where nis='$nis'";
        if($hapus = mysqli_query($conn,$sql)){
            header("Location:tampil-murid.php");
        }else{
            echo "Penghapusann Gagal";
        }   
    }else{
        echo "Connection Error";
    }    
?>