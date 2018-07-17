<?php
    session_start();

    if(empty($_SESSION['level'] == 'Walimurid')) {
        header("Location:../index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bimbingan Konseling - Wali Murid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    <header>
            <h1>Bimbingan Konseling</h1>
            <div class="box-profile">
                <img src="" class="profile-img">
                <p>Iffat Andriano</p>
                <p>Wali Murid</p>

                <nav>
                    <ul>
                        <li><a href="">Logout</a></li>  
                    </ul>
                </nav>
            </div>
    </header>

    <main class="container">
        <sidebar>
            <div class="menu sidebar">
                <p class="walimurid">Wali Murid Dari Siswa</p>
                <p class="name">Iffat Andriano</p>
                <p class="kelas">XII MIA 3</p>
                <hr>
                <p class="total">Total Pelanggaran</p>
                <p class="jumtotal">10</p>
                <hr>
                <p class="point">Point Pelanggaran</p>
                <p class="jumpoint">50</p>  
            </div>
        </sidebar>
        <div class="menu siswa">
            <p>Pelanggaran Iffat Andriano</p>
        </div>        
    </main>

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>
