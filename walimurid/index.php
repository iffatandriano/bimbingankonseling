<?php
    session_start();

    if(empty($_SESSION['level'] == 'Wali')) {
        header("Location:../index.php");
    }

    $id_wali = $_SESSION['id'];
    echo $id_wali;
    $conn = $conn = mysqli_connect("localhost","root","","bimbingankonseling");
    $sql = "SELECT * FROM t_murid WHERE id_wali = '$id_wali'";
    $hasil = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($hasil);
    list($nis,$id_wali,$nama,$kelas,$alamat,$nohp)=$row;
    echo "$nis, $id_wali, $nama, $kelas, $alamat, $nohp";
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
                <p class="walimurid">Wali Murid Dari Siswa</p>
                <p class="name"><?php echo $nama ?></p>
                <p class="kelas"><?php echo $kelas ?></p>
                <hr>
                <p class="total">Total Pelanggaran</p>
                <p class="jumtotal"><? php echo mysqli_num_rows($hasil) ?></p>
                <hr>
                <p class="point">Point Pelanggaran</p>
                <p class="jumpoint">50</p>  
            </div>
        </sidebar>
        <div class="menu siswa">
            <p>Pelanggaran Iffat Andriano</p>
        </div>        
    </main>

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>
