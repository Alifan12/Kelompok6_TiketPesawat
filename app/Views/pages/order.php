<?php
// foreach ($tampil as $index => $value) : 
//   $awal  = $value->waktu_berangkat;
//   $akhir = $value->waktu_sampai; // waktu sekarang
//   $diff  = date_diff( $awal, $akhir );
  
// echo 'Selisih waktu: ';
// echo $diff->y . ' tahun, ';
// echo $diff->m . ' bulan, ';
// echo $diff->d . ' hari, ';
// echo $diff->h . ' jam, ';
// echo $diff->i . ' menit, ';
// echo $diff->s . ' detik, ';
//   endforeach;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/OrderStyle.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title>SWINGS.com</title>

</head>

<body>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="Judul">SWINGS.com</div>
    </div>
    <div class="navbar-right">
      <ul>
        <li>
          <img
            src="https://cdn-icons.flaticon.com/png/128/2102/premium/2102633.png?token=exp=1641823828~hmac=0ea66dd49c4f772b4e2993d861f32230"
            width="40px">
        </li>
      </ul>
    </div>
  </nav>
  <div class="grid-container">
    <div class="item1">
      <div class="detail">
        <span>Jakarta</span>
        <span>---></span>
        <span>.</span>
        <span>Tanggal</span>
        <span>.</span>
        <span>Penumpang</span>
        <span>.</span>
        <span>Kelas</span>
      </div>
    </div>
    <div class="item2">
      <button>Cari Penelusuran</button>
    </div>
  </div>

  <!-- Body Pencarian Maskapai -->

  <div class="container">
    <?php foreach ($tampil as $index => $value) : ?>
    <div class="card-penerbangan">
      <p class="kol6">
        <?=$value->nama?>
      </p>
      <img
        src="<?= $value->lambang ?> "
        width="150px" outline="black" class="kol1">
      <div class="kol2">
        <p class="bold"><?= $value->waktu_berangkat?></p>
        <p><?= $value->kode_bandara_asal?></p>
      </div>
      <div class="kol3">
        <p style="border-bottom: 1pt solid" align="center">1j 30m</p>
        <p align="center">Langsung</p>
      </div>
      <div class="kol4">
        <p class="bold"><?= $value->waktu_sampai?></p>
        <p><?= $value->kode_bandara_tujuan?></p>
      </div>
      <div class="kol5">
        <span class="bold-blue">IDR</span>
        <span class="bold-blue"><?= $value->harga?></span>
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