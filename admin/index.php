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
    <?php 
        $conn = mysqli_connect("localhost","root","","bimbingankonseling");
        $id = $_SESSION['id'];
        if($_SESSION['level'] == 'Admin'){
            $nama = "";
        }else if($_SESSION['level'] == 'Guru'){
            $sql = "SELECT * FROM t_guru WHERE id_guru = '$id'";
            $hasil = mysqli_query($conn,$sql);
            $row = mysqli_fetch_row($hasil);
            list($id,$nama)=$row;
        }else if($_SESSION['level'] == 'Wali'){
            $sql = "SELECT * FROM t_wali WHERE id_wali = '$id'";
            $hasil = mysqli_query($conn,$sql);
            $row = mysqli_fetch_row($hasil); 
            list($id,$nama)=$row;    
        }
    ?>
            <h1>Bimbingan Konseling</h1>
            <div class="box-profile">
                <img src="" class="profile-img">
                <p><?php echo $nama;?></p>
                <p><?php echo $_SESSION['level'];?></p>

                <nav>
                    <ul>
                        <li><a href='../logout.php'>Logout</a></li>
                    </ul>
                </nav>
            </div>
    </header>

    <main class="container">
        <sidebar>
            <div class="menu-sidebar">
            <ul>
                
                    <li class="dashboard active">
                        <a href="index.php">DashBoard</a>
                    </li>
                    <div class="topnav">
                        <!-- Navigation links (hidden by default) -->
                        <li class="addData">
                            <a href="javascript:void(0);" onclick="myFunction()">Master Data</a>
                        </li>
                        <div id="myLinks" class="myLinks">
                            <a href="guru/tampil-guru.php">Guru</a>
                            <a href="murid/tampil-murid.php">Murid</a>
                            <a href="wali/tampil-wali.php">Wali Murid</a>
                            <a href="pelanggaran/tampil-pelanggaran.php">Pelanggaran</a>
                        </div>
                    </div>
                
            </ul>
            </div>
        </sidebar>
            
        <main class="box-container">
                <?php include '../function/datacount.php'; ?>
        </main>

    <main class="box-langgar">
    <div class="menulanggar siswalanggar">
            <p>Siswa Melanggar Hari Ini :</p>
            <table cellspacing="0">
            <?php 
                //Untuk Batasi Max 3
                $i = 1;
                //Ambil Informasi Tanggal
                $curdate = date("Y/m/d");
                //Fetch Data dari Tabel pelanggaran
                $hasil = mysqli_query($conn,"SELECT * FROM t_pelanggaran where plg_tgl = '$curdate'");
                $row_today = mysqli_fetch_row($hasil);
                    
                do{    
                    //Simpan Data Dari Table Pelanggaran
                    list($id_plg,$id_guru,$nis_today,$plg_jenis,$ket,$tgl,$point)=$row_today;
                    //Fetch kembali data dengan informasi yang didapat dari table pelanggaran
                    $row = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM t_murid where nis = '$nis_today'"));
                    list($nis,$id_wali,$nama_murid,$kelas,$alamat,$nohp)=$row;    
                    
                    //Bila Data kosong tidak akan dicetak
                    if($kelas != '' && $ket != ''){
                    echo "
                        <tr>
                            <td>$nama_murid</td>
                            <td>Kelas   $kelas</td>
                            <td>$ket</td>
                            <td>Point $point</td>
                        </tr>
                        ";
                }
                $i++;
                //Kondisi Berhentinya ketika Sudah ada 3 Table atau sudah tidak ada row yang bisa di fetch
            }while(($row_today = mysqli_fetch_row($hasil)) && ($i <= 3));
            ?>
            </table>
        </div>          
    </main>
    </main>    

    <footer>
        Copyright &copy; 2018 <a href="">Bimbingan Konseling</a> All Right Reserved.
    </footer>
</body>
</html>