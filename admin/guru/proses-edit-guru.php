<?php 
    $id = $_POST['id_guru'];
    $nama = $_POST['nama_guru'];
    $alamat = $_POST['alamat_guru'];
    $nohp= $_POST['nohp_guru'];
    $jabatan = $_POST['jabatan_guru'];
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql=
            "UPDATE t_guru 
            SET gru_nama='$nama',gru_alamat='$alamat',gru_nohp='$nohp',gru_jabatan='$jabatan' 
            WHERE id_guru ='$id' 
            ";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-guru.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>