<!-- cek apakah sudah login -->
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
            <?php require '../function/header.php'; ?>
    </header>

    <main class="container">
        <sidebar>
            <?php include 'component/sidebar.html'?>
        </sidebar>
            
        <main class="box-container">
                <?php include '../function/datacount.php'; ?>
        </main>
    </main>

        <main class="box-info">
            <div class="melanggartoday">
                <h1>Siswa Melanggar Hari Ini :</h1>
            </div>
        </main>    

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>