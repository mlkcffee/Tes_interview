<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['level'])) {
    include "header.php";
    include "menu.php";
    ?>
    <!--/.span3-->
    <div class="span9">
        <div class="content">


            <div class="module">
                <div class="module-head">
                    <h3>Pengisian Data Penyakit</h3>
                </div>
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Nama Penyakit</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "select * from mk";
                            $b = mysqli_query($koneksi, $a);
                            $no = 1;
                            while ($c = mysqli_fetch_array($b)) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $c['kodemk']; ?></td>
                                    <td><?php echo $c['namamk']; ?></td>
                                    <td class="center"><?php echo $c['sks']; ?></td>
                                    <td class="center">
                                        <?php
                                        $s = "select * from krs where nim='$_SESSION[username]' 
                                        and kodemk='$c[kodemk]'";
                                        $q = mysqli_query($koneksi, $s);
                                        $l = mysqli_num_rows($q);
                                        if ($l > 0) {
                                            echo "<font color='green'><b>Sukses</b></font>";
                                        } else {
                                            echo "<a href='inputkrs.php?kodemk=$c[kodemk]&nim=$_SESSION[username]'>Pilih</a>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </tbody>

                    </table>
                </div>
            </div><!--/.module-->

            <br />

        </div><!--/.content-->
    </div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<?php
include "footer.php";
} else {
    echo "<script language='javascript'>
    alert('login dulu dong!');
    document.location='index.php';
</script>";
}
?>