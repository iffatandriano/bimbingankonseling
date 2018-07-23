<?php 
    $nis = $_POST['nis'];
    $id = $_POST['id_wali'];
    $nama = $_POST['nama_murid'];
    $kelas = $_POST['kelas_murid'];
    $alamat = $_POST['alamat_murid'];
    $nohp= $_POST['nohp_murid'];
    echo "<script>console.log($id);</script>";
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql=
            "UPDATE t_murid
            SET mrd_nama='$nama',mrd_alamat='$alamat',mrd_nohp='$nohp',mrd_kelas='$kelas'
            WHERE nis ='$nis' 
            ";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-murid.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>