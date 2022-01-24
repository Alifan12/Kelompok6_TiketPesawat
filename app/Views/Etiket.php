<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/MetodeBayar.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/plane.png">
    <title>SWINGS.com</title>
    <style>
        body {
            position: relative;
            width: auto;
            height: 600px;
            font-family: sans-serif;
            background: #e8f0ff;
            overflow: auto;
            font-size: auto;
        }

        h3 {
            border-bottom: 1pt solid black;
            margin: 5px;
        }

        .navbar {
            width: auto;
            height: 50px;
            background: rgb(9, 30, 68);
            border-radius: 2px;
        }

        .navbar-right {
            float: right;
            width: 290px;
            padding-right: 10px;
        }

        .navbar-left {
            float: left;
            width: 290px;
            padding-top: 10pt;
            padding-left: 10pt;
            font-family: sans-serif;
            color: white;
            font-size: 24px;
            font-weight: 500;
        }

        .navbar {
            width: auto;
            height: 50px;
            background: rgb(9, 30, 68);
            border-radius: 2px;
        }

        .navbar ul {
            float: left;
            margin-top: 5px;
            padding: 0;
            width: 300px;
            margin-right: 0px;
        }

        .navbar li {
            float: right;
            list-style: none;
            margin: 0 20% 0 0;
        }

        .navbar button {
            display: block;
            height: 5px;
            margin-top: 5px;
            border: 1px solid blue;
            font-weight: bold;
            color: white;
            height: 30px;
            width: 90px;
            border-radius: 20px;
            margin-right: 10px;
            background-color: blue;
            cursor: pointer;
            font-size: 24pt;
        }

        .navbar li a,
        .navbar li a:link {
            text-decoration: none;
            width: 0px;
            height: 30px;
        }

        .navbar li a button:hover {
            background: white;
            color: #444;
        }

        /* 
        .item1 {
            grid-area: menu;
            width: auto;
            height: 25px;
            margin: 20px -150px 20px 100px;
            background: white;
            border: none;
            box-sizing: content-box;
            border-radius: 20px;
        }

        .item1 .detail {
            text-align: center;
            font-size: 14pt;
        }

        .item2 {
            grid-area: right;
        }

        .item2 button {
            background-color: #2196f3;
            border: none;
            color: white;
            padding: 12px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 24px;
            margin-left: 20pt;
            border-radius: 20pt;
        }

        .grid-container {
            display: grid;
            grid-template-areas: "menu menu right";
            grid-gap: 0px;
            padding: 10px;
        }

        .grid-container>div {
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        } */
        .styling {
            width: auto;
            height: 50px;
            background-color: #B5CEFF;

        }

        .container {
            width: auto;
            margin: 10pt 20%;
            height: 500px;
            top: 1500px;
            background: #e8f0ff;

            box-sizing: content-box;


            display: grid;
            grid-template-areas:
                'info detail'
                'info none'
                'penumpang penumpang';
            grid-gap: 0px;
            padding: 5px;
        }

        .layout1 {
            grid-area: info;
            width: 50%;
            height: 200pt;
            margin-top: 5%;
            grid-gap: 5px;
            padding: 1px;
            background-color: white;
        }

        .layout p {
            padding: 20%;
            border: 1pt solid white;
        }

        .layout3 {
            grid-area: detail;
            width: 50%;
            background-color: white;
            padding: 1px;
            grid-gap: 1px;
            font-weight: bold;

            text-align: center;
            padding-top: 2%;
            background: #e8f0ff;
        }

        .detail-penumpang {
            grid-area: penumpang;
            height: 130pt;
            background-color: white;
            width: 89%;
            padding: 5px;
            grid-gap: 1px;

        }

        .judul {
            width: auto;
            height: 60px;
            left: 0px;
            padding-top: 2px;
            padding-left: 20pt;
            background: #B5CEFF;
            border-radius: 0px 90px 0px 0px;
            margin: 23pt 20%;

        }

        .metode h2 {
            margin: 0 10px 10px 5px;
        }

        .h3 {
            font-size: small;
        }

        p {
            font-size: smaller;
        }

        input[type=submit] {
            font-size: 15px;
            margin-top: -300cm;
            margin-bottom: 50px;
            margin-left: 25cm;
            font-family: sans-serif;
            background: #22a4cf;
            color: white;
            border: white 3px solid;
            border-radius: 5px;
            padding: 11px 20px;
        }

        input[type=submit]:hover {
            opacity: 0.9;
        }

        table {
            width: auto;
            border: 0px;
            background-color: white;
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
    <div class="styling"></div>
    <div class="judul">
        <h2>E-Ticket</h2>
    </div>
    <div class="container">
        <div class="layout1">
            <img src="/gambar/Maskapai/Citilink.png" width="150px">
            <div class='class-maskapai'>
                <p>Subclass S(Economy)</p>
            </div>
            <div class="kode-maskapai">
                <tr>
                    <h4>Kode Booking</h4>
                    <h2>WAXCJ</h2>
                </tr>
            </div>
        </div>
        <div class="layout3">
            <p>03 January 2022<span></span>
            <p>04.00 <span> - </span>Jakarta (CKG)</p>
            <br>|<br>|<br>|<br>2 jam 0 menit<br>|<br>|<br>|<br>v<br>
            <p>03 January 2022<span></span>
            <p>06.00 <span> - </span>Surabaya (SUB)</p>
        </div>
        <div class="detail-penumpang">
            <h3>Detail Penumpang</h3>
            <div class='table-penumpang'>
                <table>
                    <tr>
                        <div class="no">
                            <th>No</th>
                        </div>
                        <div class="nama-penumpang">
                            <th>Nama Penumpang</th>
                        </div>
                        <div class="tipe-tiket">
                            <th>Tipe Tiket</th>
                        </div>
                        <div class="no-tiket">
                            <th>No Tiket</th>
                        </div>
                        <div class="no-penerbangan">
                            <th>No Penerbangan</th>
                        </div>
                        <div class="bagasi">
                            <th>Bagasi</th>
                        </div>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Faris</td>
                        <td>Dewasa</td>
                        <td>18976</td>
                        <td>QG877</td>
                        <td>20Kg</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Farhan</td>
                        <td>Dewasa</td>
                        <td>18977</td>
                        <td>QG877</td>
                        <td>20Kg</td>
                    </tr>
            </div>
        </div>
        </table>

    </div>
    <input type="submit" value="Back" />


</body>

</html>