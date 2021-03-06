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
                    <li class="dashboard"><a href="index.php">DashBoard</a></li>
                    <li class="AddSiswa"><a href="">Siswa</a></li>
                    <div class="topnav">
                    <!-- Navigation links (hidden by default) -->
                    <li class="addData"><a href="#" onclick="myFunction()">Master Data</a></li>
                    <div id="myLinks" class="myLinks">
                        <a class="active" href="tampil-guru.php">Guru</a>
                        <a href="#class">Kelas</a>
                        <a href="#contact">Siswa</a>
                        <a href="#about">Wali Murid</a>
                        <a href="#tatatertib">Pelanggaran</a>
                    </div>
                    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                    </div>             
                </ul>
            </div>
        </sidebar>
        
        <main>
        <a class="adddata" href="tambah-guru.php">Tambah Guru</a>
        </main>

        <main class="box-info">
            <table border=1>
                <tr>
                    <td>#</td>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>No HP</td>
                    <td>Jabatan</td>
                    <td>Aksi</td>
                </tr>
               
               <?php 
                    $conn = mysqli_connect("localhost","root","","bimbingankonseling");
                    $sql  = "SELECT * FROM t_guru";
                    $hasil = mysqli_query($conn,$sql);

                    $row = mysqli_fetch_row($hasil);
                    $i = 1;
                    do{
                        list($id,$nama,$alamat,$nohp,$jabatan)=$row;    
                        echo "
                                <tr>
                                    <td>$i</td>
                                    <td>$id</td>
                                    <td>$nama</td>
                                    <td>$alamat</td>
                                    <td>$nohp</td>
                                    <td>$jabatan</td>
                                    <td><a href='edit-guru.php?id=$id'>Edit</a>  <a href='hapus-guru.php?id=$id'>Hapus</a></td>
                                </tr>
                            ";

                            $i++;
                    }while($row = mysqli_fetch_row($hasil));
               ?>
            </table>
        </main>    
        </main>
    </main>

        
    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>