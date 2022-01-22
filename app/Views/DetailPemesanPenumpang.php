<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="DetailPemesanPenumpang.css"> -->
  <link rel="icon" href="/gambar/plane.png">
  <title>SWINGS.com</title>
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
      height: 200px;
      left: 0px;
      top: 0px;

      background: #B5CEFF;
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
      font-size: larger;
      margin: 10px 10px;
      letter-spacing: 2px;
    }

    .navbar-right {
      float: right;
      width: 290px;
      padding-right: 10px;
    }

    .rules-booking {
      width: 500px;
      margin: 0 auto;
      text-align: center;
      align-content: center;
      align-items: center;
    }

    .rules-booking ul {
      display: inline-block;
      margin-top: 50px;
      padding: 0;
      zoom: 1;
    }

    .rules-booking li {
      float: left;
      padding: 2px 5px;
      list-style: none;
    }

    .border {
      align-content: center;
      margin: 0 auto;
      width: 500px;
      border-width: 1px;
      align-items: center;
      border-bottom-style: solid;
      border-bottom-color: dimgray;
    }

    .detail {
      max-width: 100%;
      margin: 20px 100px;
      overflow: hidden;
      display: fixed;
    }

    .detail-penerbangan {
      width: 40%;
      height: 400px;
      float: right;
      background-color: #FFFFFF;
      border-radius: 5px;
    }

    .body-detail,
    .detail-bottom {
      margin-left: 30px;
      margin-right: 30px;
      margin-top: 20px;
    }

    .detail-order {
      float: right;
      font-size: 17px;
      font-weight: bolder;
      border: none;
      background-color: #FFFFFF;
      color: #005BFF;
      text-decoration: none;
    }

    .detail-bottom {
      border-top: 1px solid black;
    }

    .row1,
    .row2,
    .row3 {
      margin: 20px auto;
    }

    .row3 ul {
      padding: 0;
      zoom: 1;
    }

    .row3 li {
      list-style: none;
      margin: 20px auto;
    }

    .kebijakan {
      margin-top: 40px;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 1px;
      color: #091E44;
    }

    .col-left {
      float: left;
      margin-top: 20px;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 1px;
      color: #091E44;
    }

    .col-right {
      float: right;
      margin-top: 20px;
      font-size: 20px;
      letter-spacing: 1px;
      color: #005BFF;
    }

    .detail-pemesan {
      width: 59%;
      height: 400px;
      float: left;
      background-color: #FFFFFF;
      border-radius: 5px
    }

    .detail-penumpang {
      width: 59%;
      height: 400px;
      float: left;
      margin-top: 20px;
      background-color: white;
      border-radius: 5px
    }

    .logo-detail {
      margin-left: 30px;
      margin-top: 30px;
      font-weight: bold;
      font-size: 30px;
      letter-spacing: 1px;
      color: #091E44;
    }

    form {
      margin: 20px 30px;
    }

    .row-1,
    .row-2,
    .row-3 {
      overflow: hidden;
      margin-bottom: 30px;
    }

    .row-1 .sub1-row1,
    .row-3 .sub1-row3 {
      width: 30%;
      float: left;
    }

    .row-1 .sub2-row1,
    .row-3 .sub2-row3 {
      width: 60%;
      float: right;
    }

    .row-1 select {
      width: 100%;
      height: 50px;
      font-size: 20px;
      border: 1px solid rgba(9, 30, 68, 0.5);
      border-radius: 2px;
    }

    .row-1 input,
    .row-2 input,
    .row-3 input {
      width: 100%;
      height: 50px;
      font-size: 20px;
      border: 1px solid rgba(9, 30, 68, 0.5);
      border-radius: 2px;
    }

    .sub2-row1 p,
    .sub-row2 p {
      margin: 0;
      font-size: 15px;
      color: rgba(9, 30, 68, 0.5);
    }

    .row-2 .sub-row2 {
      width: 100%;
      float: left;
    }

    .row-1 label,
    .row-2 label,
    .row-3 label {
      display: block;
      color: rgba(9, 30, 68, 0.5);
    }

    .submit {
      width: auto;
      margin-top: 60px;
      position: absolute;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .submit button {
      width: 300px;
      height: 50px;
      padding: 10px;
      margin-bottom: 50px;
      border-radius: 30px;
      font-size: 20px;
      font-weight: bold;
      color: #FFFFFF;
      background-color: #FF9900;
      border: none;
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
    <div class="rules-booking">
      <ul>
        <li>1. Pesan</li>
        <li>></li>
        <li>2. Bayar</li>
        <li>></li>
        <li>3. Selesai</li>
      </ul>
      <div class="border"></div>
    </div>

  </nav>
  <div class="detail">
    <!-- Kolom Pemesan -->
    <div class="detail-pemesan">
      <div class="logo-detail">
        <img src="/gambar/DetailPemesan/contacts.png" width="21px">
        <span>Detail Pemesan</span>
      </div>

      <form action="">

        <div class="row-1">
          <div class="sub1-row1">
            <label for="titel">Titel</label>
            <select name="titel" id="titel">
              <option value=""></option>
              <option value="Tuan">Tuan</option>
              <option value="Nona">Nona</option>
              <option value="Nyonya">Nyonya</option>
            </select>
          </div>

          <div class="sub2-row1">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text">
            <p>Isi sesuai KTP/Paspor/SIM (tanpa tanda baca dan gelar)</p>
          </div>
        </div>

        <div class="row-2">
          <div class="sub-row2">
            <label for="Email">Alamat Email</label>
            <input type="email">
            <p>E-ticket akan dikirim ke alamat email ini</p>
          </div>
        </div>

        <div class="row-3">
          <div class="sub1-row3">
            <label for="kodeNegara">Kode Negara</label>
            <input type="text">
          </div>

          <div class="sub2-row3">
            <label for="noTelepon">No Telepon</label>
            <input type="text">
          </div>
        </div>

      </form>
    </div>

    <!-- Kolom Penerbangan -->
    <div class="detail-penerbangan">
      <div class="logo-detail">
        Penerbangan
      </div>
      <div class="body-detail">
        <div class="row1">
          Jakarta
          <img src="/gambar/DetailPemesan/right-arrow.png" width="13px">
          Surabaya

          <a href="homePembatalan.php" class="detail-order">Detail</a>
        </div>
        <div class="row2">
          <img src="/gambar/Maskapai/Citilink.png" width="23px">
          CKG - SUB <img src="/gambar/DetailPemesan/record.png" width="5px"> Sen, 3 Jan 2022 <img src="/gambar/DetailPemesan/record.png" width="5px"> 04:30
        </div>
        <div class="kebijakan">
          <h2>Kebijakan Tiket</h2>
        </div>
        <div class="row3">
          <ul>
            <li><img src="/gambar/DetailPemesan/cashback.png" width="18px"> Bisa Refund</li>
            <li>-</li>
          </ul>
        </div>
      </div>
      <div class="detail-bottom">
        <div class="col-left">
          Total Pembayaran
        </div>
        <div class="col-right">
          IDR 1.666.800
        </div>
      </div>
    </div>

    <!-- Kolom Penumpang -->
    <div class="detail-penumpang">
      <div class="logo-detail">
        <img src="/gambar/DetailPemesan/user.png" width="25px">
        <span>Detail Penumpang</span>
      </div>

      <form action="">

        <div class="row-1">
          <div class="sub1-row1">
            <label for="titel">Titel</label>
            <select name="titel" id="titel">
              <option value=""></option>
              <option value="Tuan">Tuan</option>
              <option value="Nona">Nona</option>
              <option value="Nyonya">Nyonya</option>
            </select>
          </div>

          <div class="sub2-row1">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text">
            <p>Isi sesuai KTP/Paspor/SIM (tanpa tanda baca dan gelar)</p>
          </div>
        </div>

        <div class="row-2">
          <div class="sub-row2">
            <label for="nik">NIK</label>
            <input type="text">
            <p>Isi sesuai KTP/KK</p>
          </div>
        </div>

        <div class="row-3">
          <div class="sub1-row3">
            <label for="kodeNegara">Kode Negara</label>
            <input type="text">
          </div>

          <div class="sub2-row3">
            <label for="noTelepon">No Telepon</label>
            <input type="text">
          </div>
        </div>

      </form>
    </div>

    <div class="detail-penumpang">
      <div class="logo-detail">
        <img src="/gambar/DetailPemesan/user.png" width="25px">
        <span>Detail Penumpang</span>
      </div>

      <form action="">

        <div class="row-1">
          <div class="sub1-row1">
            <label for="titel">Titel</label>
            <select name="titel" id="titel">
              <option value=""></option>
              <option value="Tuan">Tuan</option>
              <option value="Nona">Nona</option>
              <option value="Nyonya">Nyonya</option>
            </select>
          </div>

          <div class="sub2-row1">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text">
            <p>Isi sesuai KTP/Paspor/SIM (tanpa tanda baca dan gelar)</p>
          </div>
        </div>

        <div class="row-2">
          <div class="sub-row2">
            <label for="nik">NIK</label>
            <input type="text">
            <p>Isi sesuai KTP/KK</p>
          </div>
        </div>

        <div class="row-3">
          <div class="sub1-row3">
            <label for="kodeNegara">Kode Negara</label>
            <input type="text">
          </div>

          <div class="sub2-row3">
            <label for="noTelepon">No Telepon</label>
            <input type="text">
          </div>
        </div>

      </form>
    </div>
  </div>
  <div class="submit">
    <a href="MetodebayarControl"><button type="submit">SUBMIT</button></a>
  </div>
</body>

</html>