<?php

if ($_SESSION['level'] == "admin") {
    echo "
    <div class='wrapper'>
        <div class='container'>
            <div class='row'>
                <div class='span3'>
                    <div class='sidebar'>";
                        $x = mysqli_query($koneksi, "select * from mahasiswa");
                        $n = mysqli_num_rows($x);
                        $y = mysqli_query($koneksi, "select * from mk");
                        $m = mysqli_num_rows($y);
                        echo "<ul class='widget widget-menu unstyled'>
                        <li class='active'><a href='home.php'><i class='menu-icon icon-dashboard'></i>Beranda
                        </a></li>
                        <li><a href='datamhs.php'><i class='menu-icon icon-bullhorn'></i>Data Pasien <b class='label green pull-right'>
                            $n</b> </a>
                        </li>
                        <li><a href='datadosen.php'><i class='menu-icon icon-inbox'></i>Data Pegawai <b class='label green pull-right'>
                            1</b> </a></li>
                            <li><a href='datamk.php'><i class='menu-icon icon-tasks'></i>Macam-macam Penyakit <b class='label green pull-right'>
                                $m</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class='widget widget-menu unstyled'>
                                <li><a href='cetak_krs.php'><i class='menu-icon icon-book'></i>Cetak Analisa </a></li>
                                <!--
                                <li><a href='cetak_khs.php'><i class='menu-icon icon-book'></i>Cetak KHS </a></li>
                            -->

                        </ul>
                        <!--/.widget-nav-->
                        <ul class='widget widget-menu unstyled'>
                            <li><a href='#'><i class='menu-icon icon-signout'></i>Reset Password</a></li>
                            <li><a href='logout.php'><i class='menu-icon icon-signout'></i>Logout </a></li>
                        </ul>
                    </div>
                    <!--/.sidebar-->
                </div>";
            } elseif ($_SESSION['level'] == "dosen") {
                echo "
                <div class='wrapper'>
                    <div class='container'>
                        <div class='row'>
                            <div class='span3'>
                                <div class='sidebar'>
                                    <ul class='widget widget-menu unstyled'>
                                        <li class='active'><a href='home.php'><i class='menu-icon icon-dashboard'></i>Home
                                        </a></li>
                                        <li><a href='lihatprofildsn.php'><i class='menu-icon icon-bullhorn'></i>Profil Pegawai</a>
                                        </li>
                                        <li><a href='cetak_krs.php'><i class='menu-icon icon-book'></i>Cetak Analisa  </a></li>
                                        <!--
                                        <li><a href='#'><i class='menu-icon icon-tasks'></i>Input Nilai </a></li>
                                        -->
                                        <li><a href='#'><i class='menu-icon icon-tasks'></i>Ubah Password </a></li>
                                    </ul>
                                    <!--/.widget-nav-->



                                    <!--/.widget-nav-->
                                    <ul class='widget widget-menu unstyled'>

                                        <li><a href='logout.php'><i class='menu-icon icon-signout'></i>Logout </a></li>
                                    </ul>
                                </div>
                                <!--/.sidebar-->
                            </div>";
                        } else {
                            echo "
                            <div class='wrapper'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='span3'>
                                            <div class='sidebar'>
                                                <ul class='widget widget-menu unstyled'>
                                                    <li class='active'><a href='home.php'><i class='menu-icon icon-dashboard'></i>Home
                                                    </a></li>
                                                    <li><a href='lihatprofilmhs.php'><i class='menu-icon icon-bullhorn'></i>Profil Pasien</a>
                                                    </li>
                                                    <li><a href='krsmhs.php'><i class='menu-icon icon-inbox'></i>Data Keluhan </a></li>
                                                    <!--
                                                    <li><a href='#'><i class='menu-icon icon-tasks'></i>Lihat KHS </a></li>
                                                    -->
                                                    <li><a href='#'><i class='menu-icon icon-tasks'></i>Ubah Password</a></li>
                                                </ul>
                                                <!--/.widget-nav-->



                                                <!--/.widget-nav-->
                                                <ul class='widget widget-menu unstyled'>

                                                    <li><a href='logout.php'><i class='menu-icon icon-signout'></i>Logout </a></li>
                                                </ul>
                                            </div>
                                            <!--/.sidebar-->
                                        </div>";
                                    }
                                    ?>