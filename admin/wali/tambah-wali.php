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
            <form action="proses-tambah-wali.php" method="POST">
                <h2>Input Form Wali</h2>
                <hr>
                <table>
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="id_wali"></td>
                    </tr>  
                    <tr>    
                        <td>Nama</td>
                        <td><input type="text" name="nama_wali"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat_wali"></textarea></td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td><input type="number" name="nohp_wali"></td>
                    </tr>
                </table>
                <hr>
                <input type="submit">
                <input type="reset">
            </form>
        </main>     
        </main>
            
        

    </main>

        
    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>