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
                <form class="add" action="proses-tambah-murid.php" method="POST">
                    <h2 class="judulform">Input Form Murid</h2>
                        <input class="namewali" type="text" name="nis" placeholder="NIS">
                        <select name="id_wali" class="idwali">
                            <option>PILIH ID WALI</option>
                            <?php 
                                $conn = mysqli_connect("localhost","root","","bimbingankonseling");
                                $sql  = "SELECT * FROM t_wali";
                                $hasil = mysqli_query($conn,$sql);
            
                                $row = mysqli_fetch_row($hasil);
                                do{
                                    list($id_wali)=$row;
                                    echo "<option>$id_wali</option>";
                                }while($row = mysqli_fetch_row($hasil));
                            ?>
                        </select>
                        <input class="namewali" type="text" name="nama_murid" placeholder="Nama Murid">
                        <input type="text" name="kelas_murid" placeholder="Kelas Murid">
                        <textarea name="alamat_murid" placeholder="write your address here"></textarea>
                        <input type="number" name="nohp_murid" placeholder="Phone number here">
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