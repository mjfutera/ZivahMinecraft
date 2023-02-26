<!-- ZivahowyServer Wordpress template -->
<!-- v. 1.004 -->
<!-- By Michal Futera -->
<!-- http://linktr.ee/mjfutera -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="topMenu container text-center bg-white rounded">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 p-1"><input type="search" placeholder="Szukaj" class="minecraftFont text-center form-control"></div>
            <div class="col col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 p-1 minecraftFont">Menu</div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-white rounded mt-1 text-center p-2">
                <h1 class="minecraftFont glowingText">Serwer Zivahowo-Minecraftowy</h1>
                <span id="subtitle"></span>
            </div>
        </div>
    </div>
    <header class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-items-center text-center pt-5">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri()?>/img/zivahGames.png" alt="Moniczkowy Serwer" srcset="" class="logo">
                </a>
            </div>
            <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-items-center text-center p-5">
                <div class="bg-white p-5 rounded zoom minecraftFont" onclick="copyToClipboard('ipservera')">
                    <h3 class="h3"><b>Kliknij tutaj, aby skopiowac dane do serwera</b></h3>
                    <h5 class="h5">IP: <b id="ipservera" class="glowingText text-center">147.135.160.192:25598</b></h5>
                    Dla bedrocka:<br>
                    IP:147.135.160.192<br>
                    Port:8021
                </div>
            </div>
        </div>
    </header>
        <div class="container bg-white rounded">
            <div class="row p-3 text-center">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h5>Info o serwerze:</h5>
                        Status: <b id="serverStatus">offline</b>, Maxymalna ilość graczy: <b id="serverMaxPlayers">100</b>, Ilość aktualnie grających: <b id="serverCurrentPlayers">0</b><br>Aktualni gracze: <b id="serverCurrentPlayerList">NOBODY</b>
                </div>
                
            </div>
        </div>