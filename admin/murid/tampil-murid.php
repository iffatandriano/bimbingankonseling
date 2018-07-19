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
            <?php include '../component/sidebar.html'; ?>
        </sidebar>

        <main>
            <label class="buttonAdd"><a href="tambah-murid.php">Tambah Murid</a></label>
            <table border=1>
                <tr>
                    <td>#</td>
                    <td>NIS</td>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Alamat</td>
                    <td>No HP</td>
                    <td>Aksi</td>
                </tr>
               
               <?php 
                    $conn = mysqli_connect("localhost","root","","bimbingankonseling");
                    $sql  = "SELECT * FROM t_murid";
                    $hasil = mysqli_query($conn,$sql);

                    $row = mysqli_fetch_row($hasil);
                    $i = 1;
                    do{
                        list($nis,$id,$nama,$kelas,$alamat,$nohp)=$row;    
                        echo "
                                <tr>
                                    <td>$i</td>
                                    <td>$nis</td>
                                    <td>$id</td>
                                    <td>$nama</td>
                                    <td>$kelas</td>
                                    <td>$alamat</td>
                                    <td>$nohp</td>
                                    
                                    <td><a href='edit-murid.php?id=$id'>Edit</a>  <a href='proses-hapus-murid.php?id=$id'>Hapus</a></td>
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