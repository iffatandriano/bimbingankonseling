<?php
    session_start();

    if(empty($_SESSION['level'] == 'Guru')) {
        header("location:../index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bimbingan Konseling - Guru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    <header>
            <h1>Bimbingan Konseling</h1>
            <div class="box-profile">
                <img src="" class="profile-img">
                <p>Iffat Andriano</p>
                <p>Guru</p>

                <nav>
                    <ul>
                        <li><a href="">Logout</a></li>  
                    </ul>
                </nav>
            </div>
    </header>

    <main class="container">
        <sidebar>
            <div class="menu-sidebar">
                <ul>
                    <li class="dashboard active"><a href="">DashBoard</a></li>
                    <li class="AddPelanggaran"><a href="">Tambah Pelanggaran</a></li>
                </ul>
            </div>
        </sidebar>
        
        <main class="content">
            <main class="box-container">
                    <div class="jum siswa">
                        <p class="KetSiswa">Siswa</p>
                        <p class="JumSiswa">10</p>
                    </div>

                    <div class="jum guru">
                        <p class="KetGuru">Guru</p>
                        <p class="JumGuru">10</p>    
                    </div>

                    <div class="jum pelanggaran">
                        <p class="KetPelanggaran">Pelanggaran</p>
                        <p class="JumPelanggaran">10</p>
                    </div>  
            </main>
            <main class="box-info">
                <div class="topwarning">
                    <h1>5 Top Pelanggaran Siswa Yang Dilakukan :</h1>
                </div>
                <div class="melanggartoday">
                    <h1>Siswa Melanggar Hari Ini :</h1>
                </div>
            </main>  
        </main>
    </main>  

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>