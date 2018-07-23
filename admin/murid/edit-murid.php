<!-- cek apakah sudah login -->
<?php
session_start();
if(empty($_SESSION['level'] == 'Admin')) {
	header("location:../index.php");
}else{
    $nis = $_GET['nis'];
    $conn = mysqli_connect("localhost","root","","bimbingankonseling");
    $sql = "SELECT * FROM t_murid where nis='$nis'";
    $hasil = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($hasil);
    list($nis,$id,$nama,$kelas,$alamat,$nohp)=$row;
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
                <form class="add" action="proses-edit-murid.php" method="POST">
                    <h2 class="judulform">Form Edit Data wali</h2>
                        <input type="text" name="nis" readonly value="<?php echo $nis?>">
                        <input type="text" name="id_wali" readonly value="<?php echo $id?>">
                        <input class="namewali" type="text" name="nama_murid" value="<?php echo $nama?>">
                        <input class="namewali" type="text" name="kelas_murid" value="<?php echo $kelas?>">
                        <textarea name="alamat_murid"><?php echo $alamat?></textarea>
                        <input type="number" name="nohp_murid" value="<?php echo $nohp?>">
                    <input type="submit" value="Edit Data" class="button">
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