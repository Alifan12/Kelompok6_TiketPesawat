<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/cariTiketStyle.css">
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
                    <img src="https://cdn-icons.flaticon.com/png/128/2102/premium/2102633.png?token=exp=1641823828~hmac=0ea66dd49c4f772b4e2993d861f32230" width="40px">
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Beli Tiket</h1>
        <form method="post">
            <div class="txtfield">
                <div class="input-box">
                    <label>Dari</label><br>
                    <label for="departure">
                        <img src="/gambar/Cari/departures.png"></label>
                    <select name="departure" id="departure">
                        <option>Kota Asal</option>
                    </select>
                </div>

                <div class="label2">
                    <label>Ke</label><br>
                    <label for="arrival">
                        <img src="/gambar/Cari/arrivals.png" margin-right="5px" width="20px"></label>
                    <select name="arrival" id="arrival">
                        <option>Kota Tujuan</option>
                    </select>
                </div>

            </div>
            <span></span>
            <br>
            <div class="tanggalberangkat">
                <label for="date">Berangkat</label><br>
                <input type="date" name="tanggalberangkat">
            </div>
            <span></span><br><br>
            <label>Jumlah Penumpang</label>
            <div class="penumpang ">
                <label class="grid-1">Dewasa</label>
                <input type="number" name="Dewasa" id="Dewasa">

                <label class="grid-2">Anak-Anak</label>
                <input type="number" name="anak-anakk" id="anak-anakk">

                <label class="grid-3">Bayi</label>
                <input type="number" name="bayi" id="bayi">

            </div>
            <br><br>
            <span>Kelas Kabin</span>
            <div class="kabin">
                <label for="kelaskabin">
                    <img src="/gambar/Cari/cabin.png" width="30px"></label>
                <select name="kelaskabin">
                    <option>Kelas Kabin</option>
                </select>
            </div>
            <br><br>
        </form>
        <div class="cari">
            <a href="Ordertiket">
                <button class="sub-menu" type="submit">
                    <img src="/gambar/Cari/search.png" width="20px" margin-top="2px">Cari Penerbangan
                </button>
            </a>
        </div>
    </div>
</body>

</html>