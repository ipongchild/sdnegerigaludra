<!-- sambungkan ke function-->
<?php
    require '../function/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title> Login SDN Galudra </title>
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

        <!-- animasi css AOS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div align="center">
                                    <img src="../img/animations/undraw_folder_39kl.svg" height="50%" width="50%" style="padding:10px" >
                                    <div align="center">
                                        <h1 class="text-muted"><strong>SELAMAT DATANG !</strong></h1> 
                                        <small>Silahkan login terlbih dahulu untuk mengetahui detail SDN Galudra</small>
                                    </div>  
                                </div>     
                            </div>
                            <div class="col-lg-6" style="background: #283048; background: -webkit-linear-gradient(to right, #859398, #283048); background: linear-gradient(to right, #859398, #283048);">
                                <div class="p-5">
                                    <div class="text-center">
                                    <img class="mb-4" src="../img/logo/logo-tutwuri-handayani.png" alt="" width="72" height="72">
                                        <h1 class="h4 text-gray-900 mb-4 text-warning" style="text-shadow: 1px 1px 9px white;">MANAJEMEN SEKOLAH</h1>
                                        <div>
                                            <div class="text-warning">
                                            <marquee><h6>Sistem Informasi SDN Galudra (<strong>Sisforsaga</strong>)</h6></marquee>
                                            </div>
                                        </div>
                                    <br>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <select id="inputState" class="form-select">
                                                <option selected>Login sebagai...</option>
                                                <option>Admin</option>
                                                <option>Sekolah</option>
                                            </select>
                                        <br>
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label> <a href="index00.php">Kembali</a>
                                            </div>
                                        </div>
                                        <a href="#" type="submit" class="btn btn-grad btn-grad:hover"><strong class="text-white">Login</strong></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- animasi js AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>