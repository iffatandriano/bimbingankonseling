<!-- cek apakah sudah login -->
<?php
session_start();
if(empty($_SESSION['level'] == 'Admin')) {
	header("location:../index.php");
}else{
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost","root","","bimbingankonseling");
    $sql = "SELECT * FROM t_guru where id_guru='$id'";
    $hasil = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($hasil);
    list($id,$nama,$alamat,$nohp,$jabatan)=$row;
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
                    <li class="dashboard active"><a href="">DashBoard</a></li>
                    <li class="AddSiswa"><a href="">Siswa</a></li>
                    <div class="topnav">
                    <!-- Navigation links (hidden by default) -->
                    <li class="addData"><a href="#" onclick="myFunction()">Master Data</a></li>
                    <div id="myLinks" class="myLinks">
                        <a href="tampil-guru.php">Guru</a>
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

       <main class="box-info">
            <form action="proses-edit-guru.php" method="POST">
                <h2>Form Edit Data Guru</h2>
                <hr>
                <table>
                    <tr>
                        <td>ID</td>
                        <td><input type="text"  readonly value="<?php echo $id?>" name="id_guru"></td>
                    </tr>  
                    <tr>    
                        <td>Nama</td>
                        <td><input type="text" value="<?php echo $nama?>" name="nama_guru"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat_guru"><?php echo $alamat?></textarea></td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td><input type="number" value="<?php echo $nohp?>" name="nohp_guru"></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><input type="text" value="<?php echo $jabatan?>" name="jabatan_guru"></td>     
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