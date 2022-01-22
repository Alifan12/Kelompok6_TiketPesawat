<?php
  $arrival = $_GET['arrival'];
    $arriv=null;
    switch ($arrival) {
      case "ACHC":
        $arriv= "Banda Aceh";
        break;
      case "DPSC":
        $arriv="Bali";
        break;
      case "JKTC":
        $arriv= "Jakarta";
        break;
      case "JOGC":
        $arriv= "Yogyakarta";
        break;        
      case "KUPC":
        $arriv= "Kupang";
        break;
      case "MESC":
        $arriv= "Medan";
        break;
        case "MKSC":
          $arriv= "Makassar";
          break;
        case "PDGC":
          $arriv="Padang";
          break;
        case "PLGC":
          $arriv= "Palembang";
          break;
        case "SRIC":
          $arriv= "Samarinda";
          break;        
      default:
         $arriv="Surabaya";
    }
  $depart = $_GET['departure'];
  $departure=null;
  switch ($depart) {
    case "ACHC":
      $departure= "Banda Aceh";
      break;
    case "DPSC":
      $departure="Bali";
      break;
    case "JKTC":
      $departure= "Jakarta";
      break;
    case "JOGC":
      $departure= "Yogyakarta";
      break;        
    case "KUPC":
      $departure= "Kupang";
      break;
    case "MESC":
      $departure= "Medan";
      break;
      case "MKSC":
        $departure= "Makassar";
        break;
      case "PDGC":
        $departure="Padang";
        break;
      case "PLGC":
        $departure= "Palembang";
        break;
      case "SRIC":
        $departure= "Samarinda";
        break;        
    default:
       $departure="Surabaya";
  }

  $tanggal=$_GET['tanggalberangkat'];
  $dewasa=$_GET['Dewasa'];
  $anak=$_GET['anak-anakk'];
  $bayi=$_GET['bayi'];
  $kelas=$_GET['kelaskabin'];
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
  <title> SWINGS.com</title>

</head>

<body>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="Judul"> <a class="Swing" href="HomeAccController" style="text-decoration: none;">SWINGS.com</a></div>
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
        <span><?= $departure ?></span>
        <span><img src="https://cdn-icons.flaticon.com/png/512/664/premium/664866.png?token=exp=1642852163~hmac=861623af0e79b7d1a5de2f0d3707d068" width="14px"></span>
        <span><?= $arriv ?></span>
        <span><img src="https://cdn-icons.flaticon.com/png/512/717/premium/717219.png?token=exp=1642852331~hmac=e6fe2472e752bf9cb946e6d806e4f403" width="10px"></span>
        <span><?= $tanggal ?></span>
        <span><img src="https://cdn-icons.flaticon.com/png/512/717/premium/717219.png?token=exp=1642852331~hmac=e6fe2472e752bf9cb946e6d806e4f403" width="10px"></span>
        <span><?= $dewasa ?></span>
        <span>Dewasa</span>
        <span>  </span>
        <span><?= $anak ?></span>
        <span>Anak anak</span>
        <span>  </span>
        <span><?= $bayi ?></span>
        <span>Bayi</span>
        <span><img src="https://cdn-icons.flaticon.com/png/512/717/premium/717219.png?token=exp=1642852331~hmac=e6fe2472e752bf9cb946e6d806e4f403" width="10px"></span>
        <span><?= $kelas ?></span>
      </div>
    </div>
    <div class="item2">
      <a href="   ">Cari Penelusuran</a>
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