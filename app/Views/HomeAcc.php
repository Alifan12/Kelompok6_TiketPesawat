<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="plane.png">
    <title>SWINGS.com</title>

</head>
<body>
<style>
  .intro {
      margin-top: 5px;
      background-image: url("/gambar/pesawat2.jpg");
      background-size: cover;
      height: 300px;
      background-repeat: no-repeat;
      background-position: center;
    }
    .intro img{
      margin-top: 5px;
      width: 900px;
      background-size: cover;
      height: 300px;
      background-repeat: no-repeat;
      background-position: center;
    }
    .menu img:first-child{
      position: relative;
      height: 125px;
      width: 115px;
      left: 525px;
      bottom: 50px;
    }
    .gambar2{
      position: relative;
      height: 125px;
      width: 115px;
      left: 720px;
      bottom: 52px;
    }
</style>

<nav class="navbar">
    <div class="navbar-left"><div class="logo"></div></div>

    <div class="navbar-right">
      <div class="profile">
        <h3>Selamat Datang</h3>
      </div>
        
        
    </div>
</nav>
<div class="main">
  <div class="intro"> 
    <br>
    <p>Selamat Datang <?= session()->get('username') ?></p>

    <div class="text-intro">
      <h2>SWINGS.com</h2>
      <p>Pesan tiket pesawat tanpa antre, harga murah dan proses sangat mudah</p>
      <p>Ayo pesan tiket perjalanan kamu sekarang!</p>
    </div>
  </div>
  <div class="content-top">
    <img src="/gambar/plane.png"><span> Tiket Pesawat </span>
  </div>
  <div class="main-content">
    <div class="menu">
      <img src="/gambar/booking.png" width="120">
      <img class="gambar2" src="/gambar/clipboard.png" width="120">
        
      <button class="sub-menu">Pesan Tiket</button>
      <button class="sub-menu">Pesanan Saya</button>
    </div>
  </div>
</div>
</body>
</html>