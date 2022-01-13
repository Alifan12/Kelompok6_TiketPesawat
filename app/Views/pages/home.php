<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="gambar/plane.png">
  <title>SWINGS.com</title>

</head>

<body>
  <style>
    * {
      font-family: sans-serif;
    }

    body {
      background: #E8F0FF;
    }

    .logo {
      width: 40px;
      margin: 4px 14px;
      height: 40px;
      background-size: 40px 40px;
      border: solid 2px #666;
      border-radius: 50px;
      background-color: #fff;
    }

    .navbar-left {
      float: left;
      width: 290px;
      padding-top: 10pt;
      padding-left: 10pt;
    }

    .Judul {
      color: white;
      font-size: 24px;
      font-weight: 500;
    }

    .navbar-right {
      float: right;
      width: 290px;
      padding-right: 10px;
    }

    .navbar {
      width: auto;
      height: 50px;
      background: rgb(9, 30, 68);
      border-radius: 2px;
    }

    .navbar ul {
      float: left;
      margin-top: 5px;
      padding: 0;
      width: 300px;
      margin-right: 0px;
    }

    .navbar li {
      float: left;
      list-style: none;
      margin: 0;
    }

    .navbar button {
      display: block;
      height: 5px;
      margin-top: 5px;
      border: 1px solid blue;
      font-weight: bold;
      color: white;
      height: 30px;
      width: 90px;
      border-radius: 20px;
      margin-right: 10px;
      background-color: blue;
      cursor: pointer;
    }

    .navbar li a,
    .navbar li a:link {
      text-decoration: none;
      width: 0px;
      height: 30px;
    }

    .navbar li a button:hover {
      background: white;
      color: #444;
    }

    div .main {
      width: auto;
    }

    .intro {
      margin-top: 5px;
      background-image: url("gambar/pesawatt.jpg");
      background-size: cover;
      height: 400px;
      background-repeat: no-repeat;
      background-position: center;
    }

    .text-intro {
      margin-top: 135px;
    }

    .text-intro h2,
    p {
      text-align: left;
      margin-left: 50px;
    }

    .content-top img {
      width: 12px;


    }

    .content-top {
      width: 150px;
      height: 20px;
      margin-top: 30px;
      margin-left: 142px;
      border: 1px solid black;
      border-radius: 2px;

    }

    .main-content {
      width: auto;
      margin: 0 auto;
    }

    .menu {
      width: auto;
      height: 150px;
      border: 1px solid black;
      border-radius: 2px;
      text-align: center;
      margin-left: 142px;
      margin-right: 142px;
      background: #d9e3f8e9;

    }

    .sub-menu {
      width: 150px;
      height: 50px;
      margin-bottom: 50px;
      margin-top: 50px;
      margin-right: 50px;
      margin-left: 50px;
      padding: 12px 24px;
      display: inline-block;
      opacity: 0.8;
      border-radius: 4px;
      background: #B5CEFF;
    }
  </style>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="Judul">SWINGS.com</div>
    </div>
    <div class="navbar-right">
      <ul>
        <li>
          <a href="/LoginController/"><button>Sign In</button></a>
        </li>
      </ul>
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
      <img src="gambar/plane.png"><span> Tiket Pesawat </span>
    </div>
    <div class="main-content">
      <div class="menu">
        <img src="gambar/booking.png" width="120">
        <img src="gambar/clipboard.png" width="120">
        <button class="sub-menu">Pesan Tiket</button>
        <button class="sub-menu">Pesanan Saya</button>
      </div>
    </div>
  </div>
</body>

</html>