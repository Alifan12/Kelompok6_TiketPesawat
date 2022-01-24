<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/MetodeBayar.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title>SWINGS.com</title>

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
  <div class="grid-container">

    <!-- <table>
          <tr>
            <td>Jakarta</td>
            <td><img src="/gambar/DetailPemesan/right-arrow.png" width="10px"></td>
            <td>Surabaya</td>
            <td><img src="/gambar/DetailPemesan/record.png" width="5px"></td>
            <td>Tanggal</td>
            <td><img src="/gambar/DetailPemesan/record.png" width="5px"></td>
            <td>JmlJns Penumpang</td>
            <td><img src="/gambar/DetailPemesan/record.png" width="5px"></td>
            <td>Kelass</td>
          </tr>
        </table> -->
  </div>
  </div>
  <div class="item2">
  </div>
  </div>
  <div class="container">
    <div class="kolom">
      <div class="metode">
        <h2>Metode pembayaran</h2>
      </div>
      <div class="id">
        <div class="lokasi">
          <table>
            <tr>
              <td>Jakarta</td>
              <td><img src="/gambar/DetailPemesan/right-arrow.png" width="10px"></td>
              <td>Surabaya</td>
            </tr>
          </table>
        </div>
        <div class="order_id">
          <table>
            <tr>
              <td>Order ID : </td>
              <td>1234567</td>
            </tr>
          </table>
        </div>

      </div>
      <div class="detail_harga">
        <div class="harga">
          <h3>Detail harga </h3>
        </div>
        <div class="total">
          <p>Total pembayaran IDR 1.666.800</p>
        </div>


      </div>
      <div class="virtual">
        <div class="virtual_content">
          <div class="virtual_acc">
            <h1>Virtual Account</h1>
            <small>Anda bisa membayar dengan transfer melalui ATM, Internet Banking & Mobile Banking</small>
          </div>

          <div class="BCA" onclick="menuToggle();">
            <span>BCA Virtual Account</span>
            <span><a class="choose"><img src="/gambar/BCA.jpeg" width="50px"></a></span>

            <div class="menu-bca">
              <ul>
                <li>
                  <p>Virtual Account</p>
                </li>
                <li>
                  <h4>7800 1010 0559 1862</h4>
                </li>
                <li>
                  <p>Total Pembayaran</p>
                </li>
                <li>
                  <h4>IDR total</h4>
                </li>
              </ul>
            </div>
          </div>


          <div class="BRI" onclick="menuToggle();">
            <span>BRI Virtual Account</span>
            <span><a class="choose"><img src="/gambar/BRI.jpeg" width="50px"></a></span>

            <div class="menu-bri">
              <ul>
                <li>
                  <p>Virtual Account</p>
                </li>
                <li>
                  <h4>8878 8000 0899 7599</h4>
                </li>
                <li>
                  <p>Total Pembayaran</p>
                </li>
                <li>
                  <h4>IDR total</h4>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="submit">
      <a href="EtiketController"><button>SAYA SUDAH MEMBAYAR</button></a>
    </div>
  </div>
  <script>
  function menuToggle() {
    const toggleMenu = document.querySelector('.menu-bca');
    toggleMenu.classList.toggle('active')
  }
  </script>
</body>

</html>