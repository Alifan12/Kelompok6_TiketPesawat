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
<nav class="navbar">
    <div class="navbar-left"><div class="logo"></div></div>

    <div class="navbar-right">
        <?php $i=1;?>
        <?php  foreach($account as $a): ?>
        <?php $username; ?>
        <?php endforeach; ?>
        
    </div>
</nav>
<div class="main">
  <div class="intro">
    <br>

    <div class="text-intro">
      <h2>SWINGS.com</h2>
      <p>Pesan tiket pesawat tanpa antre, harga murah dan proses sangat mudah</p>
      <p>Ayo pesan tiket perjalanan kamu sekarang!</p>
    </div>
  </div>
  <div class="content-top">
    <img src="plane.png"><span> Tiket Pesawat </span>
  </div>
  <div class="main-content">
    <div class="menu">
      <button class="sub-menu">Pesan Tiket</button>
      <button class="sub-menu">Pesanan Saya</button>
    </div>
  </div>
</div>
</body>
</html>