<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <!-- animasi css AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Sambungkan ke my style custom-->
    <link href="css/style.css" rel="stylesheet">

    <title>SDN Galudra</title>
</head>
<body>
    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);" style= "background-color:#6610f2; position: Fixed; width:100%">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo/logo-tutwuri-handayani.png" alt="" width="30" height="30">
                </a>
                <a class="navbar-brand text-white" href="#"><strong>SDN GALUDRA</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sekolah
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#Profil">Profil</a></li>
                        <li><a class="dropdown-item" href="#VisiMisi">Visi Misi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#Organigram">Struktur Organisasi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#SambutanKS">Sambutan Kepala Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Berita
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#ANBK">ANBK</a></li>
                        <li><a class="dropdown-item" href="#Evaluasi">Evaluasi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#Libur">Libur Sekolah</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#Kegiatan">Kegiatan Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#Foto">Foto</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#Video">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Login</a>
                    </li>
                    </ul>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main style= "background-color:#6610f2">
        <div class="top-wrapper" style="text-align: center; background-size: cover">
            <br>
            <br>
            <br>
        </div>
        
        

        <section class="about-area pt-70" id="sambutan">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="300">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title text-white">SD NEGERI <span> GALUDRA</span></h3>
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
                        <img src="../img/header/example-12.svg" class="img-fluid" alt="..." align="center" style="background-size: cover">
                        <p class="text-white"><strong>"Terwujudnya penyelenggaraan pendidikan yang sehat, unggul dan berkarakter serta profesional dan agamis."</strong></p>
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
        
    </main>
    
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- animasi js AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
