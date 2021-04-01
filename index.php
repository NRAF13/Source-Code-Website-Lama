<?php

    //$Servername ="UNITY OF INDONESIA ROLEPLAY";

    $ip = "18.141.213.171";

    $port = 7777;

?>

<!DOCTYPE html>



<html>

<head>

<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width">

<meta name="keywords" content="DEWATA ROLEPLAY INDONESIA">

<link rel="stylesheet" href="styles/style.css">

<!--<link rel="stylesheet" href="styles/navbar.css">-->

<link rel="stylesheet" href="css/bootstrap.min.css">

<!--<link rel="stylesheet" href="css/bootstrap.css">-->

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

</style>

<style>

@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

</style>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

</style>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<title>DEWATA ROLEPLAY INDONESIA</title>

<link rel="shortcut icon" href="favicon.ico">

<meta property="og:site_name" content="DEWATA ROLEPLAY">

<meta property="og:url" content="http://dewatarp.xyz">

<meta property="og:type" content="Website">

<meta property="og:title" content="DEWATA ROLEPLAY INDONESIA">

<meta property="og:description" content="DEWATA ROLEPLAY INDONESIA merupakan komunitas game online dari GTA SA modifikasi untuk bermain roleplay">

<meta property="og:image" content="/images/BANNER.png">

<meta name="google-site-verification" content="RdzYgIrCOMLFOyrJJbOAs2DyzDOWO6NaXyd2Vp7qRZ8" />

</head>

<?php

/*require("samp_query.php");

$query = new SampQuery($ip, $port);

$Information = $query->GetInfo();*/

require("SampQueryAPI.php");

$query = new SampQueryAPI($ip, $port);

$isOnline = $query->isOnline();

$info = $query->getInfo();

/*require("sampsvr.php");

$monitor = new SACNR\Monitor;

//$obj = $monitor->get_info_by_id(1790345);

$obj = $monitor->get_info_by_ip('54.251.4.60','7777');

$players = $obj->Players;

$hostName = $obj->Hostname;

$Gamemode = $obj->Gamemode;

$Mapname = $obj ->Language;*/

?>

<body id="dark-mode">
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container">

    <a class="navbar-brand" style="font-family: Poppins;color: purple; font-weight:bold" href="index.php">DEWATARP</a>

    <label class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <i class="navbar-toggler-icon"></i>

    </label>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: Poppins;color: white;text-align: center">

        <li class="nav-item">

          <a class="nav-link" href="#home">HOME</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#statistik">STATISTIK</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#requirements">SYSTEM REQUIREMENTS</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#howtoplay">HOW TO PLAY</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="/donasi" target="_blank">DONASI</a>

        </li>

        <li class="nav-item">

            <a class="nav-link" href="/peraturan" target="_blank">PERATURAN</a>

        </li>

    </div>

  </div>

</nav></header><br>

<div class="container">
<div class="row">

<h1 id="home" style="font-weight: bold;"><b>DEWATA ROLEPLAY INDONESIA</b></h1>

<div class="robo">

<p>Merupakan komunitas mod dari GTA SA-MP untuk bermain roleplay</p>

<br>

<p><b>ROLEPLAY</b> merupakan permainan memerankan karakter yang kita buat. layaknya didunia nyata kita akan bertemu dengan player lain dengan cerita serta kehidupan yang kita atur sendiri</p>

<br>

<p><b>ROLEPLAY</b> tidak ada hubungannya sama sekali dengan kehidupan kita di dunia nyata. Baik karakter kita dengan apa yang ada di kehidupan nyata saat ini. Permainan ini adalah seni merangkai kreatifitas cerita</p>

</div>

<p><a class="btn btn-dark" href="/discord">DISCORD</a> <a class="btn btn-dark" href="dl/DEWATA.exe">CONNECT</a></p>

<img srcset="DEWATA.png" class="img-fluid" alt="dewatarp">

<br>

<hr>

<br>

<section id="statistik">

    <h1 class="center-normal">LIVE STATS</h1>

    <br>

    <div class="req center">

    <h3><?php echo $info['hostname'] ?><br><?php echo $info['players'] ?>/<?php echo $info['maxplayers'] ?></h3>
    <?php if($isOnline == 1)
    { ?>
    <h3>Server Online</h3>
    <?php } else { ?>
    <h3>Server Offline</h3>
    <?php } ?>

    </div>

</section>

<br>

<hr>

<br>

<section id="requirements">

<div class="center-title">

    <h1><b>SYSTEM REQUIREMENTS</b></h1>

</div>

<br>

<span data-text="true" style="font-family: Poppins;color: purple;">Minimum:</span>

<div class="req">

    <p>OS: Microsoft® Windows® 2000/XP</p><br>

    <p>CPU: 1Ghz Pentium III or AMD Athlon Processor</p><br>

    <p>RAM: 256MB</p><br>

    <p>VGA: 64MB Video Card (Geforce 3 or better)</p><br>

    <p>HDD: 3.6GB of free hard disk space (minimal install)</p>

</div>

<br>

<span data-text="true" style="font-family: Poppins;color: purple;">Recommended:</span>

<div class="req">

    <p>OS: Microsoft® Windows® 2000/XP</p><br>

    <p>CPU: Intel Pentium 4 or AMD Athlon XP Processor</p><br>

    <p>RAM: 384MB</p><br>

    <p>VGA: 128MB (or greater) Video Card (Geforce 6 Series Recommended)</p><br>

    <p>HDD: 4.7GB of free hard disk space (minimal install)</p>

</div>

</section>

<br>

<hr>

<br>

<section id="howtoplay">

<div class="center-title">

    <h1><b>HOW TO PLAY?</b></h1>

</div>

<br>

<span data-text="true" style="font-family: Poppins;color: purple;">Android:</span>

<div class="req">

    <p>[1] Silahkan download data client dan apknya melalui tombol di bawah</p><br>

    <p>[2] Setelah selesai didownload, ekstrak menggunakan Zarchiver atau alat pengekstrak lainnya</p><br>

    <p>[3] Lalu pindahkan com.rockstargames.gtasa ke Android/data</p><br>

    <p>[4] Lalu install apk seperti biasa</p>

</div>

<h1 class="center-normal"><a class="btn btn-dark" href="dl/CLIENTDEWATARPUNIVBYSANEX.zip">DOWNLOAD</a></h1>

<br>

<span data-text="true" style="font-family: Poppins;color: purple;">PC:</span>

<div class="req">

    <p>[1] Silahkan tekan tombol connect dibawah atau download launcher</p>

</div>

<h1 class="center-normal"><a class="btn btn-dark" href="samp://18.141.213.171:7777">CONNECT</a> <a class="btn btn-dark" href="dl/DEWATA.zip">LAUNCHER</a></h1>

</section>

<hr>

<footer>

    <h1 class="footer-title">DEWATA ROLEPLAY INDONESIA</h1>

    <p class="req center"><a class="btn btn-outline-dark" href="#home">HOME</a> <a class="btn btn-outline-dark" href="#statistik">STATISTIK</a> <a class="btn btn-outline-dark" href="#howtoplay">HOW TO PLAY</a> <a class="btn btn-outline-dark" href="#requirements">REQUIREMENTS</a></p>

    <p class="req center" style="font-size:20px">© DEWATA ROLEPLAY 2021</p>

</footer>

<script>

function updatemenu() {

  if (document.getElementById('responsive-menu').checked == true) {

    document.getElementById('menu').style.borderBottomRightRadius = '0';

    document.getElementById('menu').style.borderBottomLeftRadius = '0';

  }else{

    document.getElementById('menu').style.borderRadius = '0px';

  }

}

</script>

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="500e91fe74db4cdfec718691-|49" defer=""></script><script type="text/javascript">(function(){window['__CF$cv$params']={r:'629148d93ffafbd8',m:'38f44c5f9304508f857a2169847cd63d3031bd44-1614590167-1800-AVBiG7WQ6QiiDXzOnurdhxu95Fmck6w278OtATgFe6FcIz3GUjC6cIdBhFAtuAUP9mDtwGSp/Wx8N4cgiO6Lx755PfLGH05IFBa010XdZ7jsAjIs7PDw0uEZ9apjnFDFYQ==',s:[0xa5a7721a48,0x8a8b17f0ac],}})();</script>
</div>
</div>

</body>

</html>