<?php
    require_once "core/init.php";
    
    function cek_data($nama, $pass)
    {
        global $link;

        $nama = mysqli_real_escape_string($link, $nama);
        $pass = mysqli_real_escape_string($link, $pass);

        $query = "SELECT * FROM user WHERE username = '$nama'";
        $result = mysqli_query($link, $query);
        $hash = mysqli_fetch_assoc($result);

        if(password_verify($pass, $hash['password']))
        {
            die("berhasil");
        } else {
            die("gagal");
        }
    }

?>