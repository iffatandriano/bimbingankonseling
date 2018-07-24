<!-- cek apakah sudah login -->
<?php
session_start();
if(empty($_SESSION['level'] == 'Admin')) {
	header("location:../index.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bimbingan Konseling - Admin</title>
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
    <?php include '../function/header.php' ?>
    </header>

    <main class="container">
        <sidebar>
            <div class="menu-sidebar">
            <ul>
                
                    <li class="dashboard active">
                        <a href="index.php">DashBoard</a>
                    </li>
                    <div class="topnav">
                        <!-- Navigation links (hidden by default) -->
                        <li class="addData">
                            <a href="javascript:void(0);" onclick="myFunction()">Master Data</a>
                        </li>
                        <div id="myLinks" class="myLinks">
                            <a href="guru/tampil-guru.php">Guru</a>
                            <a href="murid/tampil-murid.php">Murid</a>
                            <a href="wali/tampil-wali.php">Wali Murid</a>
                            <a href="pelanggaran/tampil-pelanggaran.php">Pelanggaran</a>
                        </div>
                    </div>
                
            </ul>
            </div>
        </sidebar>
            
        <main class="box-container">
                <?php include '../function/datacount.php'; ?>
        </main>

    <main class="box-info">
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