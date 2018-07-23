<?php 
    $jenis = $_POST['jenis'];
    $ket = $_POST['ket'];
    $id = $_POST['id'];
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql=
            "UPDATE t_pelanggaran 
            SET plg_jenis='$jenis', plg_keterangan='$ket' 
            WHERE id_pelanggaran ='$id' 
            ";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-pelanggaran.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>