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
    <?php include '../../function/header.php' ?>
    </header>

    <main class="container">
        <sidebar>
                <?php include '../component/sidebar.html'; ?>
        </sidebar>
        <main>
            <label class="buttonAdd"><a href="tambah-guru.php">Tambah Guru</a></label>
            <table border=1>
                <tr>
                    <td>#</td>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Password</td>
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
                        
                        $sql2 = "select * from t_user where id_user= '$id'";
                        $hasil2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_array($hasil2);    

                        $username = $row2['username'];
                        $password = $row2['password'];

                        echo "
                                <tr>
                                    <td>$i</td>
                                    <td>$id</td>
                                    <td>$username</td>
                                    <td>$password</td>
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
               <?php 
             
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