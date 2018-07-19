<?php 
    $id = $_POST['id_wali'];
    $nama = $_POST['nama_wali'];
    $alamat = $_POST['alamat_wali'];
    $nohp= $_POST['nohp_wali'];

    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="INSERT INTO t_wali VALUE('$id','$nama','$alamat','$nohp')";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-wali.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>