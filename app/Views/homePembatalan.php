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
    margin-top: 30px;
    overflow: hidden;
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

  .top-list-pesanan {
    width: auto;
    height: 80px;
    border-bottom: 1px solid rgba(9, 30, 68, 0.1);
  }

  .order-id {
    margin-left: 30px;
    margin-top: 20px;
  }

  .resume-rute {
    margin-left: 30px;
    margin-top: 10px;
    font-weight: bold;
  }

  .keberangkatan {
    margin-left: 30px;
    margin-top: 10px;
  }

  .row-bottom button {
    margin-top: 10px;
    font-size: 10px;
  }

  .e-ticket {
    margin-left: 30px;
  }

  .refund {
    margin-left: 20px;
  }

  .lihat-detail {
    float: right;
    font-size: 17px;
    font-weight: bolder;
    border: none;
    background-color: #FFFFFF;
    color: #005BFF;
    text-decoration: none;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 30px;
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
      <!-- <div class="top-right">
        <img src="img/bills.png"><span> Riwayat Transaksi </span>

      </div> -->
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
      <div class="top-list-pesanan">
        <div class="top-right">
          <select name="dot-three">
            <img src="img/more.png">
          </select>
        </div>
        <div class="top-left">
          <img src="img/plane.png"><span> Pesawat </span>
        </div>
      </div>
      <div class="top-border"></div>
      <div class="middle-list-pesanan">
        <div class="order-id">
          <table>
            <tr>
              <td>Order ID : </td>
              <td>1234567</td>
            </tr>
          </table>
        </div>
        <div class="resume-rute">
          <table>
            <tr>
              <td>Jakarta</td>
              <td><img src="img/right-arrow.png" width="10px"></td>
              <td>Surabaya</td>
            </tr>
          </table>
        </div>
        <div class="keberangkatan">
          <table>
            <tr>
              <td>2 Dewasa</td>
              <td><img src="img/line.png" width="18px"></td>
              <td>Sen, 3 Jan 2022</td>
              <td><img src="img/record.png" width="5px"></td>
              <td>04:30</td>
            </tr>
          </table>
        </div>
        <div class="row-bottom">
          <div class="info-batal-tiket">
            <button class="e-ticket">E-ticket sudah terbit</button>
            <button class="refund">Refund sebagian</button>
            <a class="lihat-detail" href="#">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="list-pesanan">
      <div class="top-list-pesanan">
        <div class="top-right">
          <select name="dot-three">
            <img src="img/more.png">
          </select>
        </div>
        <div class="top-left">
          <img src="img/plane.png"><span> Pesawat </span>
        </div>
      </div>
      <div class="top-border"></div>
      <div class="middle-list-pesanan">
        <div class="order-id">
          <table>
            <tr>
              <td>Order ID : </td>
              <td>1213567</td>
            </tr>
          </table>
        </div>
        <div class="resume-rute">
          <table>
            <tr>
              <td>Jakarta</td>
              <td><img src="img/right-arrow.png" width="10px"></td>
              <td>Semarang</td>
            </tr>
          </table>
        </div>
        <div class="keberangkatan">
          <table>
            <tr>
              <td>1 Dewasa</td>
              <td><img src="img/line.png" width="18px"></td>
              <td>Sen, 3 Jan 2021</td>
              <td><img src="img/record.png" width="5px"></td>
              <td>04:30</td>
            </tr>
          </table>
        </div>
        <div class="row-bottom">
          <div class="info-batal-tiket">
            <button class="e-ticket">E-ticket sudah terbit</button>
            <button class="refund">Refund sebagian</button>
            <a class="lihat-detail" href="#">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="list-pesanan">
      <div class="top-list-pesanan">
        <div class="top-right">
          <select name="dot-three">
            <img src="img/more.png">
          </select>
        </div>
        <div class="top-left">
          <img src="img/plane.png"><span> Pesawat </span>
        </div>
      </div>
      <div class="top-border"></div>
      <div class="middle-list-pesanan">
        <div class="order-id">
          <table>
            <tr>
              <td>Order ID : </td>
              <td>1223567</td>
            </tr>
          </table>
        </div>
        <div class="resume-rute">
          <table>
            <tr>
              <td>Semarang</td>
              <td><img src="img/right-arrow.png" width="10px"></td>
              <td>Jakarta</td>
            </tr>
          </table>
        </div>
        <div class="keberangkatan">
          <table>
            <tr>
              <td>1 Dewasa</td>
              <td><img src="img/line.png" width="18px"></td>
              <td>Sen, 12 Maret 2021</td>
              <td><img src="img/record.png" width="5px"></td>
              <td>13:30</td>
            </tr>
          </table>
        </div>
        <div class="row-bottom">
          <div class="info-batal-tiket">
            <button class="e-ticket">E-ticket sudah terbit</button>
            <button class="refund">Refund sebagian</button>
            <a class="lihat-detail" href="#">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>