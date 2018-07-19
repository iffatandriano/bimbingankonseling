<?php 
    $id = $_POST['id_wali'];
    $nama = $_POST['nama_wali'];
    $alamat = $_POST['alamat_wali'];
    $nohp= $_POST['nohp_wali'];
    echo "<script>console.log($id);</script>";
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql=
            "UPDATE t_wali
            SET wli_nama='$nama',wli_alamat='$alamat',wli_nohp='$nohp'
            WHERE id_wali ='$id' 
            ";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-wali.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>