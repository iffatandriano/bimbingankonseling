    <?php 
        $conn = mysqli_connect("localhost","root","","bimbingankonseling");
        $id = $_SESSION['id'];
        if($_SESSION['level'] == 'Admin'){
            $nama = "Admin";
        }else if($_SESSION['level'] == 'Guru'){
            $sql = "SELECT * FROM t_guru WHERE id_guru = '$id'";
            $hasil = mysqli_query($conn,$sql);
            $row = mysqli_fetch_row($hasil);
            list($id,$nama)=$row;
        }else if($_SESSION['level'] == 'Wali'){
            $sql = "SELECT * FROM t_guru WHERE id_wali = '$id'";
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
                        <li><a href="../logout.php">Logout</a></li>  
                    </ul>
                </nav>
            </div>