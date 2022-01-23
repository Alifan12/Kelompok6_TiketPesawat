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

        h1 {
            border-bottom: 1pt solid black;
            margin: 30px;
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
            height: 80px;
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
                'info detail '
                'kode detail ';
            grid-gap: 0px;
            padding: 5px;
        }

        .grid-detail-penumpang {
            display: grid;
            grid-template-areas: "detail detail detail detail detail";
            grid-gap: 0px;
            padding: 10px;
        }

        .grid-detail-penumpang>div {
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }

        .container.detail-penumpang {
            width: 80%;
            margin: 0pt 0 20pt 10%;
            padding: 2%;
            border: 1pt solid gray;
            border-radius: 2px;
            display: grid;
            grid-template-areas:
                "detail detail detail detail detail";
            grid-gap: 0px;
        }

        .no {
            grid-area: detail;
            padding-right: 30pt;
            font-size: 12pt;
            margin-left: -0cm;
            margin-top: -10px;
        }

        .nama-penumpang {
            grid-area: detail;
            font-size: 12pt;
            margin-left: 0cm;
            margin-top: -10px;
        }

        .no-tiket {
            grid-area: detail;
            font-size: 12pt;
            margin-left: -0cm;
            margin-top: -10px;
        }

        .no-penerbangan {
            grid-area: detail;
            font-size: 12pt;
            margin-left: -0cm;
            margin-top: -10px;
        }

        .bagasi {
            grid-area: detail;
            font-size: 12pt;
            margin-left: -0cm;
            margin-top: -10px;
        }

        .layout1 {
            grid-area: info;
            width: 50%;
            height: 50pt;
            margin-top: 5%;
            background-color: white;
            grid-gap: 1px;
            padding: 5px;
        }

        .layout p {
            padding: 20%;

            border: 1pt solid white;
        }

        .layout2 {
            grid-area: kode;
            width: 50%;
            height: 50pt;
            background-color: white;
            padding: 5px;
            grid-gap: 1px;

        }

        .layout3 {
            grid-area: detail;
            width: auto;
            background-color: white;
            padding: 10px;
            grid-gap: 10px;
            font-weight: bold;

            text-align: center;
            padding-top: 2%;
            border: 1pt solid white;
            background: #e8f0ff;
        }

        .layout4 {
            grid-area: penumpang;
            width: 80%;
            height: 80pt;
            margin-top: 20%;
            text-align: center;
            grid-gap: 2px;
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

        .br {
            font-weight: normal;
        }

        .metode h2 {
            margin: 0 20px 20px 10px;
            ;
        }

        .h3 {
            font-size: medium;
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
            <p>Citilink Indonesia</p>
            <p>Subclass S(Economy)</p>
        </div>
        <div class="layout2">
            <p>Kode Booking</p>
            <p>WAXCJ</p>
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
            <div class="no">
                <p>No</p>
            </div>
            <div class="nama-penumpang">
                <p>Nama Penumpang</p>
            </div>
            <div class="no-tiket">
                <p>No Tiket</p>
            </div>
            <div class="no-penerbangan">
                <p>No Penerbangan</p>
            </div>
            <div class="bagasi">
                <p>Bagasi</p>
            </div>
        </div>

    </div>
    <input type="submit" value="Back" />


</body>

</html>