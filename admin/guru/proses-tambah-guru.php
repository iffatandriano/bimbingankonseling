<?php 
    $id = $_POST['id_guru'];
    $nama = $_POST['nama_guru'];
    $alamat = $_POST['alamat_guru'];
    $nohp= $_POST['nohp_guru'];
    $jabatan = $_POST['jabatan_guru'];

    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="INSERT INTO t_guru VALUE('$id','$nama','$alamat','$nohp','$jabatan')";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-guru.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>