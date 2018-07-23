<div class="jum siswa">
                        <p class="KetSiswa">Siswa</p>
                        <p class="JumSiswa">
                        <?php 
                        $conn = mysqli_connect("localhost","root","","bimbingankonseling");
                        $sql = "SELECT * FROM t_murid";
                        $hasil = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($hasil);
                        echo $count;
                        ?></p>
                    </div>

                    <div class="jum guru">
                        <p class="KetGuru">Guru</p>
                        <p class="JumGuru"><?php 
                        $sql   = "SELECT * FROM t_guru";
                        $hasil = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($hasil);
                        echo $count;
                        ?></p></p>    
                    </div>

                    <div class="jum pelanggaran">
                        <p class="KetPelanggaran">Pelanggaran</p>
                        <p class="JumPelanggaran"><?php 
                        $sql = "SELECT * FROM t_pelanggaran";
                        $hasil = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($hasil);
                        echo $count;
                        ?></p></p>
                    </div>  