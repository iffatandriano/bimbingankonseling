<?php 
    session_start();
    $id = $_POST['id'];
    $digits = 9;
    $id_plg = rand(pow(10, $digits-1), pow(10, $digits)-1);
    $nis = $_SESSION['newnis'];
    $jenis = $_POST['jenis'];
    $ket = $_POST['keterangan'];
    $tgl = date("Y/m/d");
    $point = $_POST['point'];

    if($conn = mysqli_connect("localhost","root","","bimbingankonseling")){ 
        $sql = "INSERT INTO t_pelanggaran VALUE('$id_plg','$id','$nis','$jenis','$ket','$tgl','$point')";
        if($hasil = mysqli_query($conn,$sql)){
            header("Location: tampil-pelanggaran.php");
        }else{
            echo "Upload Error";
            echo "<table>
                    <tr><td>ID GURU : $id
                    <tr><td>ID PLGG : $id_plg
                    <tr><td>NIS : $nis
                    <tr><td>Jenis : $jenis
                    <tr><td>Ket : $ket
                    <tr><td>Tgl : $tgl
            </table>";
        }
    }else{
        echo "not connected";
    }
?>