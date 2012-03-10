<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.ui.all.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jstyle.js"></script>
    </head>

    <body>
    <div class="wrap">
        <div class="header">
            <div class="panel_header">
                <ul style="z-index: 2" id="menu_list">
                    <li><a href="<?php echo base_url(); ?>index.php/cpage">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/cprofil">Profil</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/cguru">Guru</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/csiswa">Siswa</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/calumni">Alumni</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/cfitur">Fitur</a></li>

                </ul>
                <ul id="menu_list_hide">

                    <li>
                        <table style="margin-left: 50px;">
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=mot">Motto, Visi dan Misi</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sej">Sejarah Singkat</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=kep">Kepala Sekolah</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sar">Sarana & Prasarana</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=pres">Prestasi</a></td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 135px;">
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirG">Direktori Guru</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sil">Silabus</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=aja">Materi Ajar</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=kal">Kalender Akademik</a></td>
                            </tr>

                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 225px;">
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirS">Direktori Siswa</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=prest">Prestasi Siswa</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=eks">Ektrakurikuler</a></td>
                        </tr>
                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 310px; ">
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirA">Direktori Alumni</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=inf">Info Alumni</a></td>
                        </tr>
                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 400px;">
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=age">Agenda</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=art">Artikel</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=ber">Berita</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=opi">Opini</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=tam">Buku Tamu</a></td>
                        </tr>
                        </table>
                    </li>

                </ul>
                <div class="img_header" style="z-index: 0">

                </div>
            </div>
        </div>

