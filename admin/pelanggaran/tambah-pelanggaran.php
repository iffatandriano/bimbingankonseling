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

       <main class="box-info">
            <div class="form">
                <form class="add" action="proses-tambah-pelanggaran.php" method="POST">
                    <h2 class="judulform">Input Form Pelanggaran</h2>

                        <input type="text" name="id_guru" placeholder="Masukkan Id Guru">
                        <input class="nameguru" type="text" name="nis" placeholder="NIS Murid">
                        <input type="text" name="jenis" placeholder="Jenis Pelanggaran">
                        <textarea name="keterangan" placeholder="Keterangan"></textarea>      
                                 
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