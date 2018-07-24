<!-- cek apakah sudah login -->
<?php
session_start();
if(empty($_SESSION['level'] == 'Guru')) {
    header("location:../index.php");
} 
$conn = mysqli_connect("localhost","root","","bimbingankonseling");
$id_plg = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bimbingan Konseling - Guru</title>
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
        <sidebar>
            <?php include 'component/sidebar.html'?>
        </sidebar>
        </sidebar>

       <main class="box-info">
            <div class="form">
                <form class="add" action="proses-edit-pelanggaran.php" method="POST">
                    <?php 
                        $row = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM t_pelanggaran where id_pelanggaran = '$id_plg'"));
                        list($id_plg,$id_guru,$nis,$plg_jenis,$plg_ket,$plg_tgl,$point)=$row;
                        $_SESSION['id_plg'] = $id_plg;
                            echo "
                                    <h2 class='judulform'>Input Form Pelanggaran</h2>
                                    <input type='text' name='jenis' value='$plg_jenis' placeholder='Jenis Pelanggaran'>
                                    <textarea name='keterangan' placeholder='Keterangan'>$plg_ket</textarea>      
                                    <input type='number' name='point' value='$point' placeholder='Point Pelanggaran'> 
                                    <input type='submit' value='Add Data' class='button'>
                                ";
                        
                    ?>
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