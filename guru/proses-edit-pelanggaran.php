<?php 
    session_start();

    $id_plg = $_SESSION['id_plg'];
    $jenis = $_POST['jenis'];
    $ket = $_POST['keterangan'];
    $point = $_POST['point'];
    
    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){
        $sql=
            "UPDATE t_pelanggaran
            SET plg_jenis='$jenis', plg_keterangan='$ket', point='$point' 
            WHERE id_pelanggaran ='$id_plg' 
            ";
        if($upload = mysqli_query($conn,$sql)){
            header("Location:daftar-pelanggaran.php");
        }else{
            echo "Upload Failed<br>";
            echo "<table>
                <tr><td>Jenis : $jenis
                <tr><td>Keterangan : $ket
                <tr><td>Point : $point
            </table>";

        }
    }else{
        echo "Connection Error";
    }
    
    
    
?>