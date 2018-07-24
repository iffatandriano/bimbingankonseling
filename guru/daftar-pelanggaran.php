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
    <title>Bimbingan Konseling - Admin</title>
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
            <?php include '../function/header.php'?>
    </header>

    <main class="container">
        <sidebar>
                <?php include 'component/sidebar.html'; ?>
        </sidebar>

        <main>
            <label class="buttonAdd"><a href="cari-murid.php">Tambah Pelanggaran</a></label>
            <table border=1>
                <tr>
                    <td>#</td>
                    <td>Nomor Pelanggaran</td>
                    <td>NIS</td>
                    <td>Jenis</td>
                    <td>Keterangan</td>
                    <td>Point</td>
                    <td>Tanggal Pelanggaran</td>
                    <td>Aksi</td>
                </tr>
               
               <?php    
                    $id = $_SESSION['id'];
                    $conn = mysqli_connect("localhost","root","","bimbingankonseling");
                    $sql  = "SELECT * FROM t_pelanggaran where id_guru = $id";
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $i = 1;
                    do{
                        list($id_plg,$id_guru,$nis,$jenis,$keterangan,$tanggal,$point)=$row;
                        //Get Nama Murid
                        
                        echo "
                                <tr>
                                    <td>$i</td>
                                    <td>$id_plg</td>
                                    <td>$nis</td>
                                    <td>$jenis</td>
                                    <td>$keterangan</td>
                                    <td>$point</td>
                                    <td>$tanggal</td>
                                    <td><a href='edit-pelanggaran.php?id=$id_plg'>Edit</a>  <a href='proses-hapus-pelanggaran.php?id=$id_plg'>Hapus</a></td>
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