<?php
    include "function/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="post">
                <h1 class="h1-admin">Halaman Login</h1>
                <hr>
                <br>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <select name="level">
                    <option value="Admin">Admin</option>
                    <option value="Guru">Guru</option>
                    <option value="Walimurid">Wali Murid</option>
                </select>
                <input type="submit" value="Login" name="submit" class="button">
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    session_start();
                    include "function/config.php";  
                    
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    
                    $sql = "select * from user where username = '$username' and password = '$password' and level = '$level'";
                    $hasil = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($hasil);
                    $cek = mysqli_num_rows($hasil);
                
                    if($cek > 0) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['level'] = $row['level']; 
                
                        if($_SESSION['level'] == 'Admin') {
                            header("Location:admin/index.php");
                        } else if($_SESSION['level'] == 'Guru') {
                            header("Location:guru/index.php");
                        } else if($_SESSION['level'] == 'Walimurid') {
                            header("Location:walimurid/index.php");
                        } else if($_SESSION['level'] == 'Siswa') {
                            header("Location:siswa/index.php");
                        }
                    } else {
                        echo "<font color='#e74c3c'><p>Username or Password is wrong, please try!</p></font>";
                    }                    
                }
            ?>
    </div>
</body>
</html>