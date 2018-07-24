<?php 
    $digits = 9;
    $id = rand(pow(10, $digits-1), pow(10, $digits)-1);
    $nama = $_POST['nama_guru'];
    $alamat = $_POST['alamat_guru'];
    $nohp= $_POST['nohp_guru'];
    $jabatan = $_POST['jabatan_guru'];
    $username = $_POST['guru_username'];
    $password = $_POST['guru_password'];

    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="INSERT INTO t_guru VALUE('$id','$nama','$alamat','$nohp','$jabatan')";
        $sql2 = "INSERT INTO t_user value ('$id','$username','$password','Guru')";
        if(($upload = mysqli_query($conn,$sql)) && ($upload2 = mysqli_query($conn,$sql2))){
            header("Location:tampil-guru.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>