<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembatalan Tiket</title>
  <style>
  * {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }

  body {
    background: #e8f0ff;
  }

  .navbar-menu {
    width: auto;
  }

  .navbar {
    width: auto;
    height: 70px;
    background: rgb(9, 30, 68);
    border-radius: 5px;
  }

  .logo {
    width: 50px;
    margin: 7px 190px;
    height: 50px;
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
    color: #FFFFFF;
    font-weight: bold;
    font-size: xx-large;
    margin: 10px 10px;
    letter-spacing: 2px;
  }

  .navbar-right {
    float: right;
    width: 290px;
    padding-right: 10px;
  }

  .top-container {
    width: auto;
    height: 180px;
    background-color: #FFFFFF;
    border: 1px solid 091E44;
    border-radius: 5px;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
    padding: 10px;
  }

  .top-container .top-right {
    float: right;
    height: auto;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 40px;

    color: #377EFF;
  }

  .top-container .top-left {
    float: left;
    height: auto;
    font-style: normal;
    font-weight: bold;
    font-size: 25px;
    line-height: 48px;

    color: rgba(9, 30, 68, 0.8);
  }

  .top-right img {
    width: 15px;
    height: 15px;
  }

  .top-right {
    margin-right: 30px;
  }

  .top-left {
    margin-left: 30px;
  }

  .top-bottom {
    margin-top: 70px;
    margin-left: 30px;
    border-bottom: 1px solid rgba(9, 30, 68, 0.2);
  }

  .top-bottom img {
    width: 20px;
  }

  .top-bottom span {
    color: #005BFF;
    font-weight: bold;
    border-bottom: 2px solid #377EFF;
  }

  .sorting-by {
    float: right;
    margin-top: 20px;
    margin-right: 30px;
    font-size: 15px;
    color: rgba(9, 30, 68, 0.6);
  }

  .sorting-by select {
    width: 150px;
    height: 30px;
    font-size: 15px;
  }

  .sorting-by button {
    font-size: 15px;
    font-weight: bold;
    background-color: white;
    border: 0px;
    color: #377EFF;
  }

  .list-pesanan {
    width: auto;
    height: 180px;
    background-color: #FFFFFF;
    border: 1px solid 091E44;
    border-radius: 5px;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 20px;
    padding: 10px;
  }

  .list-pesanan .top-right {
    float: right;
    margin-right: 30px;
  }

  .list-pesanan .top-left {
    float: left;
    margin-left: 30px;
    margin-top: 20px;
    font-size: 30px;
  }

  .list-pesanan .top-left img {
    width: 35px;
  }
  </style>
</head>

<body>
  <nav class="navbar-menu">
    <div class="navbar">
      <div class="navbar-left">
        SWINGS.com
      </div>

      <div class="navbar-right">
        <div class="logo">
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="top-container">
      <div class="top-left">
        Pesanan Saya
      </div>
      <div class="top-right">
        <img src="img/bills.png"><span> Riwayat Transaksi </span>

      </div>
      <div class="top-bottom">
        <img src="img/plane.png"><span> Pesawat </span>
      </div>
      <div class="sorting-by">
        Sort by
        <select name="sort">
          <option value=""></option>
          <option value="Terbaru">Terbaru</option>
          <option value="Terlama">Terlama</option>
        </select>
        <button>RESET</button>
      </div>
    </div>
    <div class="list-pesanan">
      <div class="top-right">

      </div>
      <div class="top-left">
        <img src="img/plane.png"><span> Pesawat </span>
      </div>
    </div>
  </div>
</body>

</html>