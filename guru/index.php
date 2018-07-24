<!-- cek apakah sudah login -->
<?php
session_start();
if(empty($_SESSION['level'] == 'Guru')) {
	header("location:../index.php");
}

//Get Nis Pertama yang melanggar Hari Ini
$conn = mysqli_connect("localhost","root","","bimbingankonseling");
$curdate = date("Y/m/d");
$row_today = mysqli_fetch_row(mysqli_query($conn,"SELECT nis FROM t_pelanggaran where plg_tgl = '$curdate'"));
$nis_today = $row_today[0];

//Get Info dari NIS pertama hari ini
$row = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM t_murid where nis = '$nis_today'"));
list($nis,$id_wali,$nama_murid,$kelas,$alamat,$nohp)=$row;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bimbingan Konseling - Guru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script>
        function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        }
    </script>
</head>
<body>
    <header>
            <?php require '../function/header.php'; ?>
    </header>

    <main class="container">
        <sidebar>
            <?php include 'component/sidebar.html'?>
        </sidebar>
            
        <main class="box-container">
                <?php include '../function/datacount.php'; ?>
        </main>

    <main class="box-langgar">
    <div class="menulanggar siswalanggar">
            <p>Siswa Melanggar Hari Ini :</p>
            <table cellspacing="0">
                <tr>
                    <td>Iffat Andriano</td>
                    <td>XII IPA 3</td>
                    <td>Pelanggaran : Merokok didalam kelas</td>
                    <td>Point Pelanggaran : 50</td>
                </tr>
                <tr>
                    <td>Iffat Andriano</td>
                    <td>Pelanggaran : Merokok didalam kelas</td>
                    <td>Point Pelanggaran : 50</td>
                </tr>
                <tr>
                    <td>Iffat Andriano</td>
                    <td>Pelanggaran : Merokok didalam kelas</td>
                    <td>Point Pelanggaran : 50</td>
                </tr>
            </table>
        </div>          
    </main>        
    </main>

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>