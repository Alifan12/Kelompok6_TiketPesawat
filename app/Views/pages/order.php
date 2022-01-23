<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/OrderStyle.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title> SWINGS.com</title>

</head>
<?php
dd($this->data);
?>
<body>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="Judul"> <a class="Swing" href="HomeAccController" style="text-decoration: none;">SWINGS.com</a></div>
    </div>
    <div class="navbar-right">
      <ul>
        <li>
          <img src="/gambar/DetailPemesan/user.png" width="40px">
        </li>
      </ul>
    </div>
  </nav>
  <div class="grid-container">
    <div class="item1">
      <div class="detail">
        <span><?= $this->data['$departure'] ?></span>
        <span><img src="/gambar/DetailPemesan/right-arrow.png" width="14px"></span>
        <span><?= $arriv ?></span>
        <span><img src="/gambar/DetailPemesan/record.png" width="10px"></span>
        <span><?= $tanggal ?></span>
        <span><img src="/gambar/DetailPemesan/record.png" width="10px"></span>
        <span><?= $dewasa ?></span>
        <span>Dewasa</span>
        <span> </span>
        <span><?= $anak ?></span>
        <span>Anak anak</span>
        <span> </span>
        <span><?= $bayi ?></span>
        <span>Bayi</span>
        <span><img src="/gambar/DetailPemesan/record.png" width="10px"></span>
        <span><?= $kelas ?></span>
      </div>
    </div>
    <div class="item2">
      <a href="">Cari Penelusuran</a>
    </div>
  </div>

  <!-- Body Pencarian Maskapai -->

  <div class="container">
    <?php foreach ($tampil as $index => $value) : ?>
    <div class="card-penerbangan">
      <p class="kol6">
        <?= $value->nama ?>
      </p>
      <img src="<?= $value->lambang ?> " width="150px" outline="black" class="kol1">
      <div class="kol2">
        <p class="bold"><?= $value->waktu_berangkat ?></p>
        <p><?= $value->kode_bandara_asal ?></p>
      </div>
      <div class="kol3">
        <p style="border-bottom: 1pt solid" align="center">1j 30m</p>
        <p align="center">Langsung</p>
      </div>
      <div class="kol4">
        <p class="bold"><?= $value->waktu_sampai ?></p>
        <p><?= $value->kode_bandara_tujuan ?></p>
      </div>
      <div class="kol5">
        <span class="bold-blue">IDR</span>
        <span class="bold-blue"><?= $value->harga ?></span>
        <span style="color:gray">/pax</span>
      </div>
      <a class="kol7" href="PDD">Pilih
      </a>
    </div>
    <?php endforeach; ?>

  </div>
  </div>
</body>

</html>