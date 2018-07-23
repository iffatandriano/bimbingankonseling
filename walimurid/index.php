<?php
    session_start();

    if(empty($_SESSION['level'] == 'Wali')) {
        header("Location:../index.php");
    }

    $id_wali = $_SESSION['id'];
    // echo $id_wali;
    $conn = $conn = mysqli_connect("localhost","root","","bimbingankonseling");
    $sql = "SELECT * FROM t_murid WHERE id_wali = '$id_wali'";

    $sql_point = "SELECT SUM(point) AS point_sum FROM t_murid WHERE id_wali = '$id_wali'";
    $sumpoint = mysqli_query($conn,$sql_point);
    $rowpoint = mysqli_fetch_row($sumpoint);
    $total_point = $rowpoint['point_sum'];

    $hasil = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($hasil);
    list($nis,$id_wali,$mrd_nama,$mrd_kelas,$mrd_alamat,$mrd_nohp)=$row;
    // echo "$nis, $id_wali, $nama, $kelas, $alamat, $nohp";
?>

<!DOCTYPE html>
<html>
<head>      
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bimbingan Konseling - Wali Murid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    <header>
            <?php include '../function/header.php'; ?>
    </header>

    <main class="container">
        <sidebar>
            <div class="menu sidebar">
                <div class="top">
                    <p class="walimurid">Wali Murid Dari Siswa</p>
                </div>
                <div class="flex">
                    <figure class="profile-img">
                        <img src="../images/intellectual.png" alt="">
                    </figure>
                    <div class="info">
                        <p class="name">Nama : <?php echo $mrd_nama ?></p>
                        <p class="kelas">Kelas : <?php echo $mrd_kelas ?></p>
                    </div>
                </div><!-- /.profile -->
                
                <div class="pelanggaran flex">
                    <p class="total">Total Pelanggaran</p>
                    <p class="jumtotal"><?php echo mysqli_num_rows($hasil)?></p>
                </div>
                
                <div class="pelanggaran flex">
                    <p class="point">Point Pelanggaran</p>
                    <p class="jumpoint"><?php echo $total_point ?></p>  
                </div>
            </div>
        </sidebar>
        <div class="menu siswa">
            <p>Pelanggaran Iffat Andriano</p>
            <table cellspacing="0">
            <?php 
                $sql = "SELECT * FROM t_pelanggaran WHERE nis = '$nis'";
                $hasil = mysqli_query($conn,$sql);
                $row = mysqli_fetch_row($hasil);
                do{
                    list($id_plg,$id_guru,$nis,$jenis,$ket,$tgl)=$row;
                    $sql_guru = "SELECT gru_nama FROM t_guru where id_guru='$id_guru'";
                    $hasil_guru = mysqli_query($conn,$sql_guru);
                    $row_guru = mysqli_fetch_row($hasil_guru);
                    list($namaguru)=$row_guru;
                    echo "
                    <tr>
                    <td>$jenis</td>
                    <td>$namaguru</td>
                    <td>$tgl</td>
                    </tr>
                    ";
                }while($row = mysqli_fetch_row($hasil));    
            ?>
            </table>
        </div>        
    </main>

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>
