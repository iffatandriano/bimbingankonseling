<?php 
    $id = $_POST['id_wali'];
    $nama = $_POST['nama_wali'];
    $alamat = $_POST['alamat_wali'];
    $nohp= $_POST['nohp_wali'];
    $username = $_POST['wali_username'];
    $password = $_POST['wali_password'];

    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="INSERT INTO t_wali VALUE('$id','$nama','$alamat','$nohp')";
        $sql2 = "INSERT INTO t_user VALUE('$id','$username','$password','Wali')";
        if(($upload = mysqli_query($conn,$sql)) && ($upload2 = mysqli_query($conn,$sql2))){
            header("Location:tampil-wali.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>