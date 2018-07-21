<?php 
    $digits = 9;
    $id_plg = rand(pow(10, $digits-1), pow(10, $digits)-1);
    $tanggal = date("F j, Y");
    
    $id_guru = $_POST['id_guru'];
    $nis = $_POST['nis'];
    $jenis = $_POST['jenis'];
    $ket = $_POST['keterangan'];

    $conn= mysqli_connect("localhost","root","","bimbingankonseling");

    if($conn){
         $sql="INSERT INTO t_pelanggaran VALUE('$id_plg','$id_guru','$nis','$jenis','$ket','$tanggal')";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:tampil-pelanggaran.php");
        }else{
            echo "Upload Failed";
        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>