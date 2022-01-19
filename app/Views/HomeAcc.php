<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
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

    .intro img {
      margin-top: 5px;
      width: 900px;
      background-size: cover;
      height: 300px;
      background-repeat: no-repeat;
      background-position: center;
    }

    .menu img:first-child {
      position: relative;
      height: 125px;
      width: 115px;
      left: 425px;
      bottom: 50px;
    }

    .gambar2 {
      position: relative;
      height: 125px;
      width: 115px;
      left: 620px;
      bottom: 52px;
    }

    .profile {
      position: relative;
      right: 150px;
      width: 350px;
    }

    .profile_detail {
      display: flex;
      align-items: center;

    }

    .nama {
      display: inline-block;
      z-index: 5;


    }

    .select_profile {
      position: absolute;
      top: 20px;
      left: -80px;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 0;
      z-index: 5;

    }

    .select_profile select {
      box-sizing: border-box;
      border: 0px solid black;
      border-radius: 10px;


    }

    .select_profile option:last-child {
      background-color: red;
    }

    .select_profile option:last-child:hover {
      background-color: red;
    }

    .navbar-left nav {
      position: absolute;
      float: left;
      top: 25px;
      left: 100px;

    }

    .navbar-left a {
      text-decoration: none;
      font-size: 20px;
      font-family: sans-serif;
      padding: 13px 10px;
    }

    ul {
      padding: 15px;
      position: absolute;
      top: 18px;
      left: 110px;
    }

    li {
      list-style: none;
      display: inline;
    }

    li a {
      background: rgb(9, 30, 68);
      color: #d4d4d4;
    }

    li a:hover {
      background: #4da4ff;
      color: #fff;
      padding: 13px 10px;
    }
  </style>

  <nav class="navbar">
    <div class="navbar-left">
      <div class="logo"></div>
      <ul>
        <li><a href="/HomeAccController">Home</a></li>
      </ul>

    </div>

    <div class="navbar-right">
      <div class="profile">
        <div class="profile_detail">

          <div class="nama_profile">
            <div class="nama">
              <h4>Selamat Datang <?= $nama_lengkap ?></h4>
              <div class="select_profile">
                <select class="select" nama="pilihprofile" onchange="location = this.value;">
                  <option selected value="#">-Menu-</option>

                  <option value="/HomeAccController/profile">Profile</option>
                  <option value="/LoginController/logout">Sign Out</option>
                  <option value="/Carimaskapi">cari</option>


                </select>

              </div>

            </div>
          </div>
        </div>

      </div>


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
      <img src="/gambar/plane.png"><span> Tiket Pesawat </span>
    </div>
    <div class="main-content">
      <div class="menu">
        <img src="/gambar/booking.png" width="120">
        <img class="gambar2" src="/gambar/clipboard.png" width="120">

        <a href="Carimaskapi"> <button class="sub-menu">Pesan Tiket</button></a>
        <a href="Homepembatalan"> <button class="sub-menu">pesanan saya</button></a>
      </div>
    </div>
  </div>
</body>

</html>