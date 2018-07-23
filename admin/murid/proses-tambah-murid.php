<?php 
    $nis = $_POST['nis'];
    $id = $_POST['id_wali'];
    $nama = $_POST['nama_murid'];
    $kelas = $_POST['kelas_murid'];
    $alamat = $_POST['alamat_murid'];
    $nohp= $_POST['nohp_murid'];

    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql="INSERT INTO t_murid VALUE('$nis','$id','$nama','$kelas','$alamat','$nohp')";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-murid.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>