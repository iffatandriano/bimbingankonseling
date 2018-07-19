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
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
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
            <h1>Bimbingan Konseling</h1>
            <div class="box-profile">
                <img src="" class="profile-img">
                <p>Iffat Andriano</p>
                <p>Admin</p>

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
                    <li class="AddSiswa"><a href="">Siswa</a></li>
                    <div class="topnav">
                    <!-- Navigation links (hidden by default) -->
                    <li class="addData"><a href="#" onclick="myFunction()">Master Data</a></li>
                    <div id="myLinks" class="myLinks">
                        <a href="../guru/tampil-guru.php">Guru</a>
                        <a href="../kelas/tampil-kelas.php">Kelas</a>
                        <a href="../murid/tampil-murid.php">Murid</a>
                        <a href="tampil-wali.php">Wali Murid</a>
                        <a href="../pelanggaran/tampil-pelanggaran.php">Pelanggaran</a>
                    </div>
                    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                    </div>             
                </ul>
            </div>
        </sidebar>

       <main class="box-info">
            <div class="form">
                <form class="add" action="proses-tambah-wali.php" method="POST">
                    <h2 class="judulform">Input Form wali</h2>
                        <input type="text" name="id_wali" placeholder="Masukkan Id wali">
                        <input type="text" autocomplete="off" name="wali_username" placeholder="Masukkan Username">
                        <input type="password" autocomplete="off" name="wali_password" placeholder="Masukkan Password">
                        <input class="namewali" type="text" name="nama_wali" placeholder="Nama wali">
                        <textarea name="alamat_wali" placeholder="write your address here"></textarea>
                        <input type="number" name="nohp_wali" placeholder="Phone number here">
                    <input type="submit" value="Add Data" class="button">
                </form>
            </div>
        </main>     
        </main>
            
        

    </main>

        
    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>