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
                            <a class="nav-link" aria-current="page" href="index00.php">Beranda</a>
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
        <div class="lesson-wrapper">
            <div class="container">
            
                <!-- Map Sekolah -->
                <!--====== ABOUT PART START ======-->
                <section class="about-area pt-70">
                <div class="row" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="section-title">
                        <div class="line"></div>
                        <h3 class="title" align="left"><span>Struktur</span> ORGANISASI</h3>
                    </div> <!-- section title -->
                    <div data-aos="fade-left" data-aos-duration="3000" data-aos-offset="500">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="p-5">
                                <div class="text-center">
                                    <h3><strong>STRUKTUR ORGANISASI</strong></h3>
                                    <h4 class="small font-weight-bold" style="text-align:center"> <strong>SEKOLAH DASAR NEGERI GALUDRA</strong></h4>
                                </div>
                                <hr>
                                <br>
                                <div data-aos="zoom-in" data-aos-duration="3000" data-aos-offset="400">
                                    <img src="../img/struktur-organigram-lengkap.png" style="max-width: 100%; height: auto;">
                                    <small class="nav-link" align="right">email:sdngaludra@gmail.com
                                    </small>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->
    <!-- animasi js AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    </body>
</html>
