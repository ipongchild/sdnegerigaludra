<!-- sambungkan ke function-->
<?php
    require '../function/function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <title> <?PHP echo "$titlesekolah1"; ?> </title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Sambungkan ke my style custom-->
        <link href="css/my-style.css" rel="stylesheet">

        
    

        <!-- navbars core CSS -->
        <link href="../page12/navbars/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="navbar.css" rel="stylesheet">

        <!-- animasi css AOS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>


    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark navbar-background" aria-label="Third navbar example">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><strong>SDN GALUDRA</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample03">
                        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#berita">Asesmen dan Evaluasi</a></li>
                            <li><a class="dropdown-item" href="#berita">Libur Sekolah</a></li>
                            <li><a class="dropdown-item" href="#sambutan">Sambutan Kepala Sekolah</a></li>
                            <li><a class="dropdown-item" href="#kegiatan">Kegiatan Sekolah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#profil">Profil</a></li>
                            <li><a class="dropdown-item" href="#visi">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="organigram.php">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#sejarah">Sejarah Sekolah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Unduhan</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#">RPP</a></li>
                            <li><a class="dropdown-item" href="#">Kalender Pendidikan</a></li>
                            <li><a class="dropdown-item" href="#">KKO</a></li>
                            <li><a class="dropdown-item" href="#">Teori Para Ahli</a></li>
                            <li><a class="dropdown-item" href="#">Alat Peraga</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Galeri</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#foto">Album Foto</a></li>
                            <li><a class="dropdown-item" href="#video">Video</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                            <a href="login.php" class="btn btn-outline-warning" type="submit">Login</a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>


        <main>
        <!-- <div class="top-wrapper">
        <img class="img-fluid" align="right" src="../img/header/1617701047.jpg" alt="0">
        <img src="../img/header/Header-SD-MID-Week-2-NOV.jpg" class="img-fluid" alt="1">
        <img src="../img/header/53-2.jpg" class="img-fluid" alt="2">
        <img align="left" src="../img/animations/undraw_newspaper_k72w.svg" class="img-fluid" alt="3">
        <img align="left" src="../img/logo/logo-tutwuri-handayani.png" class="img-fluid" alt="4">
        <img class="img-fluid" src="../img/background/columbia_sunrise_sky_clouds_608235.jpg" class="card-img-top" alt="...">
        </div> -->
        


        <!-- <div class="col text-muted">
                            
            <div class="card-body">
            <div class="card bg-dark text-white">
            <div class="container">
                <strong class="card-title fs-5">Kepala Sekolah</strong>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner"> -->
                        <!-- memulai carousel -->
                        <!-- <div class="carousel-item active"> 
                            <img src="../img/album/ks/blank1.jpg" class="img-thumbnail" alt="0"
                            width="220px" style="height:280px;">
                            <p class="fst-italic">20..-2015</p>
                            <div class="font-monospace">
                                <h5 class="card-title" class="text-muted">R. Agus Sulikin, S.Pd.</h5>
                                <p class="card-text">NIP. 195905011978031001</p>
                            </div>
                        </div>
                        <div class="carousel-item"> 
                            <img src="../img/album/ks/nunung.jpg" class="img-thumbnail" alt="0"
                            width="220px" style="height:280px;">
                            <p class="fst-italic">2015-2018</p>
                            <div class="font-monospace">
                                <h5 class="card-title">Nunung, S.Pd.,SD.</h5>
                                <p class="card-text">NIP. 196008071982012003</p>
                            </div>
                        </div>
                        <div class="carousel-item"> 
                            <img src="../img/album/ks/E. Sumiati.jpeg" class="img-thumbnail" alt="0"
                            width="220px" style="height:280px;">
                            <p class="fst-italic">2018-2019</p>
                            <div class="font-monospace">
                                <h5 class="card-title">E. Sumiati, S.Pd.</h5>
                                <p class="card-text">NIP. 195810231978032005</p>
                            </div>
                        </div>
                        <div class="carousel-item"> 
                            <img src="../img/album/ks/blank1.jpg" class="img-thumbnail"alt="0"
                            width="220px" style="height:280px;">
                            <p class="fst-italic">2019-2020</p>
                            <div class="font-monospace">
                                <h5 class="card-title">Amin Soleh, S.Ag.</h5>
                                <p class="card-text">NIP. 196006021983081001</p>
                            </div>
                        </div>
                        <div class="carousel-item end"> 
                            <img src="../img/album/ks/ahmad.JPG" class="img-thumbnail" alt="0"
                            width="220px" style="height:280px;">
                            <p class="fst-italic">2020-2024</p>
                            <div class="font-monospace">
                                <h5 class="card-title">Ahmad Badri Sama, S.Pd.,M.M.</h5>
                                <p class="card-text">NIP. 197010132008011001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>

        </div> -->



        
        <div class="top-wrapper">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"> 
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">

                <div class="card bg-dark text-white">
                    <div class="container">
                        <div class="card-body" width="220px" style="height:280px;">
                            <div class="carousel-item active">
                            <div class="card-body">
                                <img class="img-fluid" align="right" src="../img/header/1617701047.jpg" alt="0">
                                <div class="carousel-caption text-start text-warning" style="text-shadow: 1px 1px 9px red;">
                                    <h1><strong>SD NEGERI GALUDRA</strong></h1>
                                    <a><small>Alamat: Kp. Slagombong Rt. 002/010 Desa Sukaresmi Kecamatan Sukaresmi (43254)</small></a>
                                    <p><small>Kabupaten Cianjur Provinsi Jawa Barat.</small></p>
                                    <p>
                                        <a href="https://www.google.co.id/maps/place/SDN+Galudra/@-6.7277477,107.1519162,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x2e69ac4d961bc399:0xfbaf70c7abec8cd4!2sSDN+Galudra!8m2!3d-6.7277477!4d107.1524634!3m4!1s0x2e69ac4d961bc399:0xfbaf70c7abec8cd4!8m2!3d-6.7277477!4d107.1524634?hl=id" target="blank" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat lokasi sekolah</strong></a>
                                    </p>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item" class="card">
                                <img src="../img/header/Header-SD-MID-Week-2-NOV.jpg" class="img-fluid" alt="1">
                                <div class="card-body">
                                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                    <div class="carousel-caption text-start text-info" style="text-shadow: 1px 1px 9px blue;">
                                    <h1 align="right"><strong>Profil Sekolah.</strong></h1>
                                    
                                    <p align="left" class="text-start text-info" style="text-shadow: 1px 1px 9px blue;">
                                    <small><?php echo "$sekolah"?> didirikan tahun 1979 diatas sebidang tanah dengan luas 2008 m2 dengan status kepemilikan tanah milik sekolah. 
                                        <?php echo "$sekolah"?> berada di daerah pedesaan dengan dikelilingi perbukitan dan persawahan milik masyarakat sekitar.
                                        <?php echo "$sekolah"?> berlokasi diwilayah desa Sukaresmi dengan perbatasan Kecamatan Sukaresmi dan Cikalongkulon.
                                        Jarak <?php echo "$sekolah"?> dengan pusat pemerintahan kecamatan Sukaresmi kira-kira 9,2 KM.</small>
                                    </p>
                                    <p align="left">
                                        <a href="#" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat selengkapnya</strong></a>
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                                <img src="../img/header/Header-SD-MID-Week-2-NOV.jpg" class="img-fluid" alt="1">
                                <div class="carousel-caption text-start text-info" style="text-shadow: 1px 1px 9px blue;">
                                    <h1 align="left"><strong>Profil Sekolah.</strong></h1>
                                    <p align="left">
                                    <small><?php echo "$sekolah"?> didirikan tahun 1979 diatas sebidang tanah dengan luas 2008 m2 dengan status kepemilikan tanah milik sekolah. 
                                        <?php echo "$sekolah"?> berada di daerah pedesaan dengan dikelilingi perbukitan dan persawahan milik masyarakat sekitar.
                                        <?php echo "$sekolah"?> berlokasi diwilayah desa Sukaresmi dengan perbatasan Kecamatan Sukaresmi dan Cikalongkulon.
                                        Jarak <?php echo "$sekolah"?> dengan pusat pemerintahan kecamatan Sukaresmi kira-kira 9,2 KM.</small>
                                    </p>
                                    <p align="left">
                                        <a href="#" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat selengkapnya</strong></a>
                                    </p>
                                </div>
                            </div> -->
                            <div class="carousel-item">
                                <!-- <img src="../img/header/53-2.jpg" class="img-fluid" alt="2"> -->
                            </div>
                            <div class="carousel-item">
                                <!-- <img align="left" src="../img/animations/undraw_newspaper_k72w.svg" class="img-fluid" alt="3"> -->
                            </div>
                            <div class="carousel-item">
                                <!-- <img align="left" src="../img/logo/logo-tutwuri-handayani.png" class="img-fluid" alt="4">   -->
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- <div class="carousel-item active">
                            <div class="card">
                                <img class="img-fluid" align="right" src="../img/header/1617701047.jpg" alt="0">
                            </div>
                            <div class="carousel-caption text-start text-warning" style="text-shadow: 1px 1px 9px red;">
                                <h1><strong>SD NEGERI GALUDRA</strong></h1>
                                <a><small>Alamat: Kp. Slagombong Rt. 002/010 Desa Sukaresmi Kecamatan Sukaresmi (43254)</small></a>
                                <p><small>Kabupaten Cianjur Provinsi Jawa Barat.</small></p>
                                <p>
                                    <a href="https://www.google.co.id/maps/place/SDN+Galudra/@-6.7277477,107.1519162,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x2e69ac4d961bc399:0xfbaf70c7abec8cd4!2sSDN+Galudra!8m2!3d-6.7277477!4d107.1524634!3m4!1s0x2e69ac4d961bc399:0xfbaf70c7abec8cd4!8m2!3d-6.7277477!4d107.1524634?hl=id" target="blank" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat lokasi sekolah</strong></a>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <img src="../img/header/Header-SD-MID-Week-2-NOV.jpg" class="img-fluid" alt="1">
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-start text-info" style="text-shadow: 1px 1px 9px blue;">
                                    <h1 align="left"><strong>Profil Sekolah.</strong></h1>
                                    <p align="left">
                                    <small><?php echo "$sekolah"?> didirikan tahun 1979 diatas sebidang tanah dengan luas 2008 m2 dengan status kepemilikan tanah milik sekolah. 
                                        <?php echo "$sekolah"?> berada di daerah pedesaan dengan dikelilingi perbukitan dan persawahan milik masyarakat sekitar.
                                        <?php echo "$sekolah"?> berlokasi diwilayah desa Sukaresmi dengan perbatasan Kecamatan Sukaresmi dan Cikalongkulon.
                                        Jarak <?php echo "$sekolah"?> dengan pusat pemerintahan kecamatan Sukaresmi kira-kira 9,2 KM.</small>
                                    </p>
                                    <p align="left">
                                        <a href="#" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat selengkapnya</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <img src="../img/header/53-2.jpg" class="img-fluid" alt="2">
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-primary" style="text-shadow: 1px 1px 9px yellow;">
                                    <h1 align="left"><strong>Instrumen Pembelajaran.</strong></h1>
                                    <p align="left"><small>Menyediakan buku pelajaran SD baik pegangan guru maupun siswa.</small>
                                    </p>
                                    <p align="left">
                                        <a href="#" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat selengkapnya</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card" style="background-image: linear-gradient(to right, #4776E6 0%, #8E54E9  51%, #4776E6  100%)">
                                <img align="left" src="../img/animations/undraw_newspaper_k72w.svg" class="img-fluid" alt="3">
                            </div>                                        
                            <div class="container">
                                <div class="carousel-caption
                                            text-white"
                                    style="text-shadow: 1px 1px 9px white;">
                                    <h1 align="right"><strong>Berita.</strong></h1>
                                    <p align="right"><small>Peraturan pemerintah tentang Belajar dari Rumah (BDR).</small>
                                    </p>
                                    <p align="right">
                                        <a href="#" class="btn btn-grad btn-grad:hover"><strong class="text-white">Lihat selengkapnya</strong></a>
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>

                                    <div class="carousel-item">
                                        <div class="card" style="background-image: linear-gradient(to right, #4776E6 0%, #8E54E9  51%, #4776E6  100%)">
                                            <div class="card-body">
                                            <img align="left" src="../img/logo/logo-tutwuri-handayani.png" class="img-fluid" alt="4">
                                            </div>
                                        </div>
                                        
                                        <div class="container">
                                            <div class="carousel-caption 
                                                        text-end
                                                        text-primary text-warning"
                                                style="text-shadow: 1px 1px 9px red;">
                                                <h1>
                                                    <strong>MANAJEMEN SEKOLAH.</strong>
                                                </h1>
                                                <p>SISFORSAGA (Sistem Informasi Galudra).</p>
                                                <p>
                                                    <a href="login.php" class="btn btn-grad btn-grad:hover"><strong class="text-white">Login</strong></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->
                    
                <a class="carousel-control-prev" 
                    href="#myCarousel" 
                    role="button" 
                    data-bs-slide="prev">
                    <span 
                        class="carousel-control-prev-icon" 
                        aria-hidden="true">
                    </span>
                    <span 
                        class="visually-hidden">Previous
                    </span>
                </a>
                <a 
                    class="carousel-control-next" 
                    href="#myCarousel" 
                    role="button" 
                    data-bs-slide="next">
                    <span 
                        class="carousel-control-next-icon" 
                        aria-hidden="true">
                    </span>
                    <span 
                        class="visually-hidden">Next
                    </span>
                </a>

                </div>
            </div>


            
        </div>
        </div>
        



        <div class="lesson-wrapper">
        <div class="container">

        <div class="row">
            <div class="col" class="col-lg-4">
                <a href="login.php" type="button" class="btn btn-grad btn-grad:hover text-white">
                    <div type="button" class="btn btn-grad btn-grad:hover text-white" class="border border-primary" style="background-color:#0a2351">
                        <div align="center">
                            <picture type="button">
                                <source srcset="../img/svg/exclude.svg" type="image/svg+xml">
                                <img src="../img/svg/exclude.svg" class="img-fluid img-thumbnail" alt="..." style="background-color:#17A589" width="200%">
                            </picture>
                            <span class="align-items-center text-warning"><strong>Menejemen Sekolah</strong></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col" class="col-lg-4">
                <a href="#berita" type="button" class="btn btn-grad btn-grad:hover text-white">
                    <div type="button" class="btn btn-grad btn-grad:hover text-white" class="border border-primary" style="background-color:#0a2351">
                        <div align="center">
                            <picture type="button">
                                <source srcset="../img/svg/front.svg" type="image/svg+xml">
                                <img src="../img/svg/front.svg" class="img-fluid img-thumbnail" alt="..." style="background-color:#17A589" width="200%">
                            </picture>
                            <span class="align-items-center text-warning"><strong>Kegiatan & Pengumuman</strong></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col" class="col-lg-4">
                <a href="ebook.php" type="button" id="#berita" class="btn btn-grad btn-grad:hover text-white">
                    <div type="button" class="btn btn-grad btn-grad:hover text-white" class="border border-primary" style="background-color:#0a2351">
                            <div align="center">
                                <picture type="button">
                                    <source srcset="../img/svg/book-half.svg" type="image/svg+xml">
                                    <img src="../img/svg/book-half.svg" class="img-fluid img-thumbnail" alt="..." style="background-color:#17A589" width="200%">
                                </picture>
                                <span class="align-items-center text-warning"><strong>E-Book Pembelajaran</strong></span>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
        
        </div>
        </div>
                

        <div class="lesson-wrapper">
        <br>
            <!-- Visi -->
            <!--====== ABOUT PART START ======-->
            <section class="about-area pt-70">
            <div class="font-monospace" data-aos="flip-up" data-aos-duration="3000" data-aos-offset="300" style="color:#4776E6">
                <h2><strong>VISI:</strong></h2>
                <marquee>
                    <h2><strong><?PHP echo "$visi" ?>.</strong></h2>
                </marquee>
            </div>
            </section>
            <!--====== ABOUT PART ENDS ======-->
            <div class="container">
                <!-- Fungsi Website -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                <div class="heading" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="500">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <h2>Apa Fungsi website sekolah?</h2>
                        <p> <?PHP echo "$tentang_aplikasi1"; ?> </p>
                    </div>
                </div>
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70" id="sambutan">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 order-lg-last">
                                <div class="about-content mt-50 wow fadeInLeftBig">
                                    <div class="section-title" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                        <div class="line"></div>
                                        <h3 class="title">Berita. <span> Kegiatan dan Aktivitas Pembelajaran.</span></h3>
                                    </div> <!-- section title -->
                                    <div class="row gx-6 text-white" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                        <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button class="btn btn-grad btn-grad:hover" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><strong class="text-white">Kegiatan Assesmen & Evaluasi</strong></button>
                                                <button class="btn btn-grad btn-grad:hover" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse2" aria-expanded="false" aria-controls="multiCollapseExample3 multiCollapseExample4"><strong class="text-white">Libur Sekolah</strong></button>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                        <div class="card card-body">
                                                            <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                                                <div class="p-3 border" style="background-color:#1B4F72" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300"><strong>Ujian Sekolah</strong></div>
                                                                <div class="p-3 border" style="background-color:#2E86C1" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Penilaian Akhir Tahun</div>
                                                                <div class="p-3 border" style="background-color:#5DADE2" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Kelulusan Kelas VI</div>
                                                                <div class="p-3 border" style="background-color:#85C1E9" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">Pembagian Rapot</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                        <div class="card card-body">
                                                            <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                                                <div class="p-3 border" style="background-color:#1B4F72" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300"><strong>24 - 29 Mei 2021</strong></div>
                                                                <div class="p-3 border" style="background-color:#2E86C1" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">7 - 11 Juni 2021</div>
                                                                <div class="p-3 border" style="background-color:#5DADE2" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">15 Juni 2021</div>
                                                                <div class="p-3 border" style="background-color:#85C1E9" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">25 Juni 2021</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="collapse multi-collapse2" id="multiCollapseExample3">
                                                        <div class="card card-body">
                                                            <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                                                <div class="p-3 border" style="background-color:#0E6251" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300"><strong>Libur Akhir Tapel</strong></div>
                                                                <div class="p-3 border" style="background-color:#17A589" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">Libur Awal Ramadhan</div>
                                                                <div class="p-3 border" style="background-color:#48C9B0" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">Libur Hari Raya Idul Fitri</div>
                                                                <div class="p-3 border" style="background-color:#76D7C4" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Penerimaan Siswa Baru</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="collapse multi-collapse2" id="multiCollapseExample4">
                                                        <div class="card card-body">
                                                            <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                                                <div class="p-3 border" style="background-color:#0E6251" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300"><strong>27 Juni - 18 Juli 2021</strong></div>
                                                                <div class="p-3 border" style="background-color:#17A589" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">12 - 14 April 2021</div>
                                                                <div class="p-3 border" style="background-color:#48C9B0" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">10 - 19 Mei 2021</div>
                                                                <div class="p-3 border" style="background-color:#76D7C4" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Mei - Juli 2021</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div> 
                                </div> <!-- about content -->
                            </div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                    <div class="shadow p-3 mb-5 bg-body rounded">
                                    <img width="70%" src="../img/animations/undraw_Online_information_re_erks.svg">
                                    </div>
                                </div> <!-- about image -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- info website sekolah -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                <div class="about-content mt-50 wow fadeInLeftBig">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title"><span>Mengapa</span> Website Sekolah Diperlukan?</h3>
                                    </div> <!-- section title -->
                                    <p class="lh-lg" align="justify" style="text-indent: 70px;" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                        <?PHP echo "$tentang_aplikasi2"; ?></p>
                                </div> <!-- about content -->
                            </div>
                            <div class="col-lg-6">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                    <img src="../img/animations/undraw_Faq_re_31cw.svg" alt="about">
                                </div> <!-- about image -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- sambutan kepala sekolah -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70" id="sambutan">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 order-lg-last">
                                <div class="about-content mt-50 wow fadeInLeftBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title">Sambutan <span> Kepala Sekolah</span></h3>
                                    </div> <!-- section title -->
                                    <p class="text" align="justify"> <?PHP echo "$sambutan1"; ?>
                                                    <?PHP echo "$sambutan2"; ?>.</p>
                                    <a href="#" class="btn btn-grad-button btn-icon-split">
                                        <span class="icon text-white-50">
                                            <img src="../img/svg/arrow-right.svg"></img>
                                        </span>
                                        <span class="text">Baca Selengkapnya</span>
                                    </a>
                                </div> <!-- about content -->
                            </div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                    <img src="../img/album/gtk/ahmad badri sama.JPG" class="rounded-circle" alt="" width="40%" width="40%" alt="shape">
                                    <p class="text-muted"><strong>Ahmad Badri Sama, S.Pd.,M.M.</strong></p>
                                </div> <!-- about image -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- profil sekolah -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                    <div class="container" id="profil">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content mt-50 wow fadeInLeftBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                    <div class="section-title">
                                        <div class="line"></div>
                                        <h3 class="title"><span>Mengenal</span> Profil Sekolah</h3>
                                    </div> <!-- section title -->
                                    <p class="text" align="justify"> <?php echo "$sekolah"?> didirikan tahun 1979 diatas sebidang tanah dengan luas 2008 m2 dengan status kepemilikan tanah milik sekolah. 
                                                    <?php echo "$sekolah"?> berada di daerah pedesaan dengan dikelilingi perbukitan dan persawahan milik masyarakat sekitar.
                                                    <?php echo "$sekolah"?> berlokasi diwilayah desa Sukaresmi dengan perbatasan Kecamatan Sukaresmi dan Cikalongkulon.
                                                    Jarak <?php echo "$sekolah"?> dengan pusat pemerintahan kecamatan Sukaresmi kira-kira 9,2 KM.</p>
                                    <button class="btn btn-grad btn-grad:hover" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse8" aria-expanded="false" aria-controls="multiCollapseExample9"><strong class="text-white">Lihat Selengkapnya</strong></button>
                                </div> <!-- about content -->
                            </div>
                            <div class="col-lg-6">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                    <img src="../img/animations/blog-3.jpg" alt="about">
                                </div> <!-- about image -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </section>
                <!--====== ABOUT PART ENDS ======-->
                
                <!-- rincian profil -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70" data-aos="fade-left">
                <div data-aos="fade-left">
                        <div class="card o-hidden border-0 shadow-lg my-5 collapse multi-collapse8" id="multiCollapseExample9">
                            <div class="p-5">
                            
                                <div class="text-center">
                                    <h1 class="text-muted" class="h4 text-gray-900 mb-4" class="collapse multi-collapse" id="multiCollapseExample5">Profil Sekolah</h1>
                                </div>
                                <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Mengenali Sekolah
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h3 class="text-muted" class="h4 text-gray-900 mb-4">Lingkungan dan Latar Belakang</h3>
                                            <code>Sekolah Dasar Negeri Galudra.</code> 
                                            <hr>
                                            <div>
                                                <p class="lh-lg" align="justify" style="text-indent: 50px;">
                                                    <?php echo "$sekolah"?> didirikan tahun 1979 diatas sebidang tanah dengan luas 2008 m2 dengan status kepemilikan tanah milik sekolah. 
                                                    <?php echo "$sekolah"?> berada di daerah pedesaan dengan dikelilingi perbukitan dan persawahan milik masyarakat sekitar.
                                                    <?php echo "$sekolah"?> berlokasi diwilayah desa Sukaresmi dengan perbatasan Kecamatan Sukaresmi dan Cikalongkulon.
                                                    Jarak <?php echo "$sekolah"?> dengan pusat pemerintahan kecamatan Sukaresmi kira-kira 9,2 KM.
                                                </p>
                                            </div>
                                                <p class="lh-lg" align="justify" style="text-indent: 50px;">
                                                    <?php echo "$sekolah"?> berstatus sekolah negeri yang dikelola oleh pemerintah daerah kabupaten Cianjur Jawa Barat. Sejak adanya Bantuan Operasional Sekolah (BOS) sekolah tidak lagi memungut iuran atau biaya operasional dari orang tua/ wali siswa dan sepenuhnya gratis tanpa dipungut biaya. 
                                                    Alhamdulillah sejak berdirinya sekolah ini sudah menorehkan berbagai prestasi baik dibidang akademik maupun bidang non akademik.
                                                    Walaupun demikian kami masih terus berjuang untuk mencapai hasil yang lebih maksimal, karena kami menyadari bahwasanya kami masih banyak kekurangan baik sarana dan prasarana ataupun pelayanan pendidikan guna mencapai SNP yang lebih baik lagi terutama dalam mencerdaskan siswa/i <?php echo "$sekolah"?>.
                                                </p>
                                                <p class="lh-lg" align="justify" style="text-indent: 50px;"> 
                                                    Peserta didik <?php echo "$sekolah"?> pada umumnya berasal dari keluarga menengah ke bawah  dengan berbagai latar belakang pekerjaan yang beragam, namun pada umumnya orang tua siswa bermatapencaharian sebagai buruh.
                                                </p>
                                                <p class="lh-lg" align="justify" style="text-indent: 50px;">
                                                    Di era globalisasi saat ini yang semakin pesat kami berusaha meningkatkan pelayanan pendidikan melalui layanan digital, baik melaui layanan yang disediakan pemerintah ataupun secara mandiri, salah satunya yaitu penyediaan layanan berbasis website ini.
                                                </p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Identitas Sekolah
                                        </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h3 class="text-muted" class="h4 text-gray-900 mb-4">Identitas</h3>
                                            <code>Sekolah Dasar Negeri Galudra.</code> 
                                            <hr>
                                            <table class="table table-hover table table-striped" align="left">
                                                <tbody>
                                                <tr>	
                                                    <td>Nama Sekolah<td>
                                                    <td>:<td>
                                                    <td><b>SD NEGERI GALUDRA</b><td>
                                                </tr>
                                                <tr>	
                                                    <td>Jenjang Pendidikan<td>
                                                    <td>:<td>
                                                    <td>SD<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Status Sekolah<td>
                                                    <td>:<td>
                                                    <td>Negeri<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Alamat Sekolah<td>
                                                    <td>:<td>
                                                    <td>Kp. Slagombong<td>
                                                </tr>	
                                                <tr>	
                                                    <td>RT / RW<td>
                                                    <td>:<td>
                                                    <td>2 / 10<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Kode Pos<td>
                                                    <td>:<td>
                                                    <td>43254<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Kelurahan<td>
                                                    <td>:<td>
                                                    <td>Sukaresmi<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Kecamatan<td>
                                                    <td>:<td>
                                                    <td>Kec. Sukaresmi<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Kabupaten/Kota<td>
                                                    <td>:<td>
                                                    <td>Kab. Cianjur<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Provinsi<td>
                                                    <td>:<td>
                                                    <td>Prov. Jawa Barat<td>
                                                </tr>	
                                                <tr>	
                                                    <td>Negara<td>
                                                    <td>:<td>
                                                    <td>Indonesia<td>
                                                </tr>
                                                <tr>	
                                                    <td>Posisi Geografis<td>
                                                    <td>:<td>
                                                    <td> <span>Lintang: -6,7278</span> <td>
                                                    <td> <span>Bujur: 107,1525</span> </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Kontak
                                        </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Kontak Kami.</strong> melalui chat <code>.whatsapp</code> <a href="https://wa.widget.web.id/be35b5" target="_blank">
                                            <strong>0859 3866 2929</strong></a> atau melalui <code>.Email</code>, <a href="mailto:sdnegerigaludra@gmail.com" target="_blank">
                                            <strong>sdnegerigaludra@gmail.com</strong></a>
                                            untuk sekedar bertanya atau mengetahui informasi sekolah.
                                        </a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Four">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            Data Periodik
                                        </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <tr>
                                            <td>Waktu Penyelenggaraan</td>
                                            <td>:</td>
                                            <td>Pagi/6 hari</td>
                                        </tr>
                                        <tr>				
                                            <td>Sumber Listrik</td>					
                                            <td>:</td>					
                                            <td>PLN</td>
                                        </tr>
                                        <tr><strong>
                                            <td>Akreditasi</td>			
                                            <td>:</td>
                                            <td><code>B</code></td>
                                        </tr></strong>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Libur Sekolah -->
                                <div class="form-check form-check-inline" data-bs-toggle="collapse" data-bs-target=".multi-collapse5" aria-expanded="false" aria-controls="multiCollapseExample5 multiCollapseExample6">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1" align="right">Libur Sekolah</label>
                                </div>
                                <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse multi-collapse5" id="multiCollapseExample6">
                                                <div class="card card-body">
                                                    <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                                        <div class="p-3 border" style="background-color:#0E6251" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300"><strong>Libur Akhir Tapel</strong></div>
                                                        <div class="p-3 border" style="background-color:#17A589" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">Libur Awal Ramadhan</div>
                                                        <div class="p-3 border" style="background-color:#48C9B0" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">Libur Hari Raya Idul Fitri</div>
                                                        <div class="p-3 border" style="background-color:#76D7C4" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Penerimaan Siswa Baru</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="collapse multi-collapse5" id="multiCollapseExample6">
                                                <div class="card card-body">
                                                    <div class="col" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                                        <div class="p-3 border" style="background-color:#0E6251" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300"><strong>27 Juni - 18 Juli 2021</strong></div>
                                                        <div class="p-3 border" style="background-color:#17A589" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">12 - 14 April 2021</div>
                                                        <div class="p-3 border" style="background-color:#48C9B0" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">10 - 19 Mei 2021</div>
                                                        <div class="p-3 border" style="background-color:#76D7C4" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Mei - Juli 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- Visi & Misi Sekolah -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                    <div class="container" id="visi">
                        <div class="section-title" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                            <div class="line"></div>
                            <h3 class="title"align="left">VISI <span> dan</span> MISI</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 order-lg-last">
                                <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                <br>
                                    <div data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                        <h3 class="title">VISI</h3>
                                        <p class="text"> <?php echo "$visi"?></p>
                                        <br>
                                    </div>
                                    <div data-aos="fade-up-left" data-aos-duration="3000" data-aos-offset="300">
                                        <h3 class="title">MISI</h3>
                                        <ul align="justify">
                                            <li class="text"> <?php echo "$misi1"?></li>
                                            <li class="text"> <?php echo "$misi2"?></li>
                                            <li class="text"> <?php echo "$misi3"?></li>
                                            <li class="text"> <?php echo "$misi4"?></li>
                                            <li class="text"> <?php echo "$misi5"?></li>
                                        </ul>
                                        <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="300">
                                            <h3 class="title">Filosofi</h3>
                                            <p class="text"> <strong>"<?php echo "$filosofi_sekolah"?>"</strong></p>
                                        </div>
                                    </div> 
                                </div> <!-- about content -->
                            </div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="about-image text-center mt-50 wow fadeInRightBig" data-aos="fade-left"data-aos="fade-left">
                                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                                    <img src="../img/animations/undraw_posting_photo.svg" width=80% alt="about">
                                    </div> <!-- about image -->
                                </div> <!-- about image -->
                                <br>
                                <div data-aos="fade-down" data-aos-duration="3000" data-aos-offset="300">
                                    <h3 class="title">Tujuan Sekolah</h3>
                                    <ul align="justify">
                                        <li class="text"> <?php echo "$tujuan1"?></li>
                                        <li class="text"> <?php echo "$tujuan2"?></li>
                                        <li class="text"> <?php echo "$tujuan3"?></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- Map Sekolah -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                <div class="row" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="section-title">
                        <div class="line"></div>
                        <h3 class="title" align="left"><span>Google</span> MAPS</h3>
                    </div> <!-- section title -->
                    <div data-aos="fade-left" data-aos-duration="3000" data-aos-offset="500">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="p-5">
                                <div class="text-center">
                                    <h3><strong>Lokasi Sekolah</strong></h3>
                                    <h4 class="small font-weight-bold" style="text-align:center"> <strong>Desa Sukaresmi, Kec. Sukaresmi, Kabupaten Cianjur, Jawa Barat (43254) </strong></h4>
                                <hr>
                                </div>
                                <br>
                                <div data-aos="zoom-in" data-aos-duration="3000" data-aos-offset="400">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1023.3436496716771!2d107.1519761!3d-6.7277617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ac4d961bc399%3A0xfbaf70c7abec8cd4!2sSDN%20Galudra!5e1!3m2!1sid!2sid!4v1612603281864!5m2!1sid!2sid" 
                                        width="100%" 
                                        height="448px" 
                                        frameborder="0" 
                                        style="border:0;" 
                                        allowfullscreen="10%" 
                                        aria-hidden="false" 
                                        tabindex="10"
                                        border="4">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- Galeri -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                <div class="row" align="right" id="foto">
                    <div class="section-title" data-aos="fade-down" data-aos-duration="3000" data-aos-offset="400">
                        <div class="line"></div>
                        <h3 class="title">Galeri</h3>
                        <p> <h4>Album kegiatan dan aktivitas guru dan peserta didik.</h4> </p>
                    </div> <!-- section title -->
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="300">
                        <img width="100%" width="100%" src="../img/svg/undraw_Photos_re_pvh3.svg">
                    </div>
                </div>
                <br>
                <br>
                
                <div class="container">
                    <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body"><h2 class="text-muted">ALBUM</h2>
                    <hr>

                    <div class="row align-items-start">
                        <div class="col text-muted">
                            
                            <div class="card-body">
                                <strong class="card-title fs-5">Kepala Sekolah</strong>
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- memulai carousel -->
                                        <div class="carousel-item active"> 
                                            <img src="../img/album/ks/blank1.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">20..-2015</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title" class="text-muted">R. Agus Sulikin, S.Pd.</h5>
                                                <p class="card-text">NIP. 195905011978031001</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/ks/nunung.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">2015-2018</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title">Nunung, S.Pd.,SD.</h5>
                                                <p class="card-text">NIP. 196008071982012003</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/ks/E. Sumiati.jpeg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">2018-2019</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title">E. Sumiati, S.Pd.</h5>
                                                <p class="card-text">NIP. 195810231978032005</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/ks/blank1.jpg" class="img-thumbnail"alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">2019-2020</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title">Amin Soleh, S.Ag.</h5>
                                                <p class="card-text">NIP. 196006021983081001</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item end"> 
                                            <img src="../img/album/ks/ahmad.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">2020-2024</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title">Ahmad Badri Sama, S.Pd.,M.M.</h5>
                                                <p class="card-text">NIP. 197010132008011001</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-muted">
                            
                            <div class="card-body">
                                <strong class="card-title fs-5">Pegawai</strong>
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- memulai carousel -->
                                        <div class="carousel-item active"> 
                                            <img src="../img/album/gtk/ahmad badri sama.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Kepala Sekolah</p>
                                            <div class="font-monospace">
                                                <h5>Ahmad Badri Sama, S.Pd.,M.M.</h5>
                                                <p>NIP. 197010132008011001</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/gtk/aida.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Kelas</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title fs-5">A. Ida, S.Pd.,SD.</h5>
                                                <p class="card-text">NIP. 196904091990032003</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/gtk/atikah.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Kelas</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title fs-5">Atikah, S.Pd.,M.M.</h5>
                                                <p class="card-text">NIP. 197108161997032004</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/gtk/deudeu.jpg" class="img-thumbnail"alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Kelas</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title fs-5">Deudeu Aisyah</h5>
                                                <p class="card-text">NUPTK. 8349758660300053 </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/gtk/suhendi.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Kelas</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title fs-5">Suhendi, S.Pd.,SD.</h5>
                                                <p class="card-text">NUPTK. 5140764666200013</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/gtk/rika.jpg" class="img-thumbnail"alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Kelas</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title fs-5">Rika Resmiantika, S.Pd.</h5>
                                                <p class="card-text">NUPTK. 1435763665210052 </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/gtk/tedi.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Kelas/Ops</p>
                                            <div class="font-monospace">
                                                <h5 class="card-title fs-5">Tedi Sopian, S.Pd.</h5>
                                                <p class="card-text">NUPTK. 8752766667130242</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item end"> 
                                            <img src="../img/album/gtk/denden.JPG" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Guru Mapel</p>
                                            <div class="font-monospace">
                                                <h5 class="font-monospace">Moch. Denden Darmawan, S.Pd.I.</h5>
                                                <p class="font-monospace">NUPTK. 4852759660130192</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-muted">
                            
                            <div class="card-body">
                                <strong class="card-title fs-5">Sertijab</strong>
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- memulai carousel -->
                                        <div class="carousel-item active"> 
                                            <img src="../img/album/sertijab/img1.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Penyerahan Jabatan KS dan Perpisahan</p>
                                            <h5 class="font-monospace">Serah Terima Jabatan</h5>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/sertijab/img2.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Penyerahan Jabatan KS dan Perpisahan</p>
                                            <h5 class="font-monospace">Serah Terima Jabatan</h5>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/sertijab/img3.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Penyerahan Jabatan KS dan Perpisahan</p>
                                            <h5 class="font-monospace">Serah Terima Jabatan</h5>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/sertijab/img4.jpg" class="img-thumbnail"alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Penyerahan Jabatan KS dan Perpisahan</p>
                                            <h5 class="font-monospace">Serah Terima Jabatan</h5>
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/sertijab/img5.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Penyerahan Jabatan KS dan Perpisahan</p>
                                            <h5 class="font-monospace">Serah Terima Jabatan</h5>
                                        </div>
                                        <div class="carousel-item end"> 
                                            <img src="../img/album/sertijab/img6.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                            <p class="fst-italic">Penyerahan Jabatan KS dan Perpisahan</p>
                                            <h5 class="font-monospace">Serah Terima Jabatan</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row align-items-center">
                        <div class="col text-muted">
                            
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- memulai carousel -->
                                        <div class="carousel-item active"> 
                                            <img src="../img/album/activity/pramuka/img1.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img2.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img3.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img4.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img5.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img6.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img7.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img8.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img9.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img10.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/pramuka/img11.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item end"> 
                                            <img src="../img/album/activity/pramuka/img12.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                    </div>
                                    <p class="fst-italic">Kegiatan Pramuka</p>
                                </div>
                            </div>
                        </div>
                        <div class="col text-muted">
                            
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- memulai carousel -->
                                        <div class="carousel-item active"> 
                                            <img src="../img/album/activity/bsm/img1.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item"> 
                                            <img src="../img/album/activity/bsm/img2.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item end"> 
                                            <img src="../img/album/activity/bsm/img3.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                    </div>
                                    <p class="fst-italic">Kegiatan Penyerahan Bantuan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col text-muted">
                            
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- memulai carousel -->
                                        <div class="carousel-item active"> 
                                            <img src="../img/album/activity/sanlat/a.Keg.Sanlat 2016.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                        <div class="carousel-item end"> 
                                            <img src="../img/album/activity/sanlat/b.Keg.Sanlat 2016.jpg" class="img-thumbnail" alt="0"
                                            width="220px" style="height:280px;">
                                        </div>
                                    </div>
                                    <p class="fst-italic">Kegiatan Pesantren Kilat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col">
                        One of three columns
                        </div>
                        <div class="col">
                        One of three columns
                        </div>
                        <div class="col">
                        One of three columns
                        </div>
                    </div>

                    </div>
                    </div>
                    </div>

                </div>
                    <div align="right">
                        <button class="btn btn-grad btn-grad:hover" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><strong class="text-white">Lihat Photo</strong></button>
                    </div>
                </div>
                </section>
                <!--====== ABOUT PART ENDS ======-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- <span id="kontak"> -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                <div class="row">
                    <div class="section-title" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="500">
                        <div class="line"></div>
                        <h3 class="title" align="left"><span>Kontak</span> Kami</h3>
                    </div> <!-- section title -->
                    <br>
                    <br>
                    <div class="col-sm-6" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="500">
                        <h4 id="kontak" class="title" align="left" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="500">Silahkan kirim masukan anda terhadap kami</h4>
                        <img width="100%" width="100%" src="../img/animations/undraw_message_sent_1030.svg">
                    </div>
                    <div class="col-sm-6" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="500">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="text-muted" class="h4 text-gray-900 mb-4">Kirim Pesan</h1>
                                </div>
                                <br>
                                <form class="user">
                                    <div class="text-muted" class="form-group" align="left"><strong>Nama Lengkap</strong>
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Tulis nama lengkap anda">
                                    </div>
                                    <br>
                                    <div class="text-muted" class="form-group" align="left"><strong>Email</strong>
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Tulis email anda">
                                    </div>
                                    <br>
                                    <div class="text-muted" class="form-group" align="left"><strong>Pesan</strong>
                                        <textarea type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Tulis email anda...">
                                        </textarea>
                                    </div>
                                    <br>
                                    <button class="btn btn-grad btn-grad:hover" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse2" aria-expanded="false" aria-controls="multiCollapseExample3 multiCollapseExample4"><strong class="text-white">Kirim</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </span> -->
                </section>
                <!--====== ABOUT PART ENDS ======-->

        </div>
    </div>
    </main>
    
    <!-- Footer -->
    <footer style="background-color: #1d1160; color:#007FFF; height: 230px; padding:40px;">
            <div class="container">
            <h5>KONTAK KAMI</h5>
            <hr>
                <a class="nav-link" href="https://www.google.co.id/maps/place/SDN+Galudra/@-6.7277477,107.1519162,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x2e69ac4d961bc399:0xfbaf70c7abec8cd4!2sSDN+Galudra!8m2!3d-6.7277477!4d107.1524634!3m4!1s0x2e69ac4d961bc399:0xfbaf70c7abec8cd4!8m2!3d-6.7277477!4d107.1524634?hl=id" target="_blank"><img src="../img/svg/geo-alt.svg" width="30" height="30"/>
                    <strong><?PHP echo "$sekolah"; ?></strong>
                </a>
                <span style="float:right">
                        <a class="nav-link" href="https://wa.widget.web.id/be35b5" target="_blank"><img src="../img/svg/whatsapp.svg" width="20" height="20"/>
                            <strong>0859 3866 2929</strong>
                        </a>
                        <a class="nav-link" href="mailto:sdnegerigaludra@gmail.com" target="_blank"><img src="../img/svg/envelope.svg" width="20" height="20"/>
                            <strong>sdnegerigaludra@gmail.com</strong>
                        </a>
                </span>
                <p>
                    <li style="list-style: none">Kp. Slagombong Rt.02/10.</li>
                    <li style="list-style: none">Desa Sukaresmi, Kec. Sukaresmi.</li>
                    <li style="list-style: none">Cianjur - Jawa Barat (43254).</li>
                </p>
            </div>
            <div class="footer-list" style="top: 93%; position: Fixed; right: 3.3%;" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">
                <a href="https://wa.widget.web.id/be35b5" target="_blank"><img src="../img/svg/whatsapp.svg"
                    width="30" height="30"/>
                </a>
            </div>
            <div class="footer-list" style="top: 93%; position: Fixed; right: 0.5%;" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">
                <a href="#top" target=""><img src="../img/svg/caret-up-square.svg" width="30" height="30"/>
                </a>
            </div>
        </footer>
        <div class="sticky-footer bg-dark text-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; sdngaludra 2021</span>
                </div>
            </div>
        </div>
    <!-- End of Footer -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- animasi js AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    </body>
</html>
