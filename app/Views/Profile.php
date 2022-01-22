<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/profile.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

  <link rel="icon" href="/gambar/plane.png">
  <title>Profile</title>

</head>

<body>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="logo"></div>
      <!-- <button><a href="HomeAccControlle">Home</a></button> -->
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

                </select>

              </div>

            </div>
          </div>
        </div>

      </div>


    </div>
  </nav>
  <div class="wrapper">
    <div class="left">
      <img src="https://i.imgur.com/cMy8V5j.png" alt="user" width="100">
      <h4><?= $nama_lengkap ?></h4>
      <p><?= session()->get('username') ?></p>
    </div>
    <div class="right">
      <div class="info">
        <h3>Information</h3>
        <div class="info_data">
          <div class="data">
            <h4>Email</h4>
            <p><?= session()->get('email') ?></p>
          </div>
          <div class="data">
            <h4>Phone</h4>
            <p><?= session()->get('no_telepon') ?></p>
          </div>
        </div>
      </div>

      <div class="projects">
        <h3>Projects</h3>
        <div class="projects_data">
          <div class="data">
            <h4>Recent</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="data">
            <h4>Most Viewed</h4>
            <p>dolor sit amet.</p>
          </div>
        </div>
      </div>

      <div class="social_media">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

</body>

</html>