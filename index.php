<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 0;
}

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
}

if (!isset($_SESSION['data2'])) {
    $_SESSION['data2'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['keluar'])) {
        $data = [
            'Keperluan' => $_POST['Keperluan'],
            'keluar' => $_POST['keluar'],
            'tlk' => $_POST['tlk'],
            'ck' => $_POST['ck']
        ];

        $_SESSION['saldo'] -= $_POST['keluar'];
        array_push($_SESSION['data'], $data);
    } elseif (isset($_POST['masuk'])) {
        $data2 = [
            'sumber' => $_POST['sumber'],
            'masuk' => $_POST['masuk'],
            'tlm' => $_POST['tlm'],
            'cm' => $_POST['cm']
        ];

        $_SESSION['saldo'] += $_POST['masuk'];
        array_push($_SESSION['data2'], $data2);
    }

    header('Location: index.php');
}
$totalMasuk = 0;
foreach ($_SESSION['data2'] as $item2) {
    $totalMasuk += $item2['masuk'];
}
$totalKeluar = 0;
foreach ($_SESSION['data'] as $item) {
    $totalKeluar += $item['keluar'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="Dollar.jpeg">
    <title>Money Manage</title>
      <style>
        body {
            background-image: url('logo.png');
  background-size: 500px 500px; 
  background-repeat: no-repeat;
  background-position: center center;
  min-height: 115vh;
            background-color: rgba(125, 206, 174, 0.7);
            margin: 0; 
            font-family: Arial, sans-serif; 
        }

    .kiri {
      font-family: fantasy;  
      float: left;
      margin-right: 10px;
      padding: 10px;
      border: 1px solid #ccc;
    }

    .kanan {
        font-family: fantasy;
      float: right;
      margin-left: 10px; 
      padding: 10px;
      border: 1px solid #ccc;
    }

 .table-container {
    display: flex;
    margin-top: 15px;
    justify-content: space-around;
 }

 .left-table {
    margin-right: 10px;
 }

 .right-table {
    margin-left: 10px;
 }
 button {
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            color: #fff;
            border: none;
            padding: 15px 25px;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
        }


        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 23px;
        }

        th {
            background-color: #5B42F3;
        }
        #leftNavButton {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            z-index: 2;
        }

        #leftNavButton {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            z-index: 2;
        }

        #leftNav {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #10776e;
            padding-top: 60px;
            transition: left 0.3s;
            z-index: 1;
        }

        #leftNav ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #leftNav li {
            margin: 15px 0;
        }

        #leftNav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        #leftNav a:hover {
            color: #5B42F3;
        }

        
        #leftNav.open {
            left: 0;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: #5B42F3">Money Manage</h1>
    <hr>
    <div class="kiri">Selamat Datang<br> <?php echo $_SESSION['username']; ?></div>
    <div class="kanan">Saldo<br>Rp. <?php echo $_SESSION['saldo']; ?></div>
  <div class="kanan">Masuk<br>Rp. <?php echo $totalMasuk; ?></div>
  <div class="kanan">Keluar<br>Rp. <?php echo $totalKeluar; ?></div>

    <div id="leftNavButton" onclick="toggleLeftNav()">
        &#9776;
    </div>
    <center>
    <button onclick="window.location.href='pengeluaran.php'">Pengeluaran</button>
    <button onclick="window.location.href='pemasukkan.php'">Pemasukkan</button>
</center>
    <div class="table-container">
     <table class="right-table">
        <tr>
            <th>No</th>
            <th>Keperluan</th>
            <th>Nominal</th>
            <th>Tanggal</th>
            <th>Catatan</th>
        </tr>
        <?php foreach ($_SESSION['data'] as $index => $item): ?>
            <tr>
        <td><?php echo $index + 1; ?></td>
                <td><?php echo $item['Keperluan']; ?></td>
                <td>Rp.<?php echo $item['keluar']; ?></td>
                <td><?php echo $item['tlk']; ?></td>
                <td><?php echo $item['ck']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table class="left-table">
        <tr>
            <th>No</th>
            <th>Sumber Dana</th>
            <th>Nominal</th>
            <th>Tanggal</th>
            <th>Catatan</th>
        </tr>
        <?php foreach ($_SESSION['data2'] as $index2 => $item2): ?>
            <tr>
        <td><?php echo $index2 + 1; ?></td>
                <td><?php echo $item2['sumber']; ?></td>
                <td>Rp.<?php echo $item2['masuk']; ?></td>
                <td><?php echo $item2['tlm']; ?></td>
                <td><?php echo $item2['cm']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
    <script>
        function toggleLeftNav() {
            var leftNav = document.getElementById('leftNav');
            leftNav.classList.toggle('open');
        }

        function closeLeftNav() {
            var leftNav = document.getElementById('leftNav');
            leftNav.classList.remove('open');
        }
    </script>
    <div id="leftNav">
        <ul>
            <li><a href="pemasukkan.php" onclick="closeLeftNav()">Pemasukan</a></li>
            <li><a href="pengeluaran.php" onclick="closeLeftNav()">Pengeluaran</a></li>
            <li><a href="clear_data.php" onclick="clearAllData()">Clear All Data</a></li>
            <li><a href="logout.php" onclick="logout()">Logout</a></li>
            <li>Saldo:Rp.<?php echo $_SESSION['saldo']; ?></li>

        </ul>
    </div>

</body>
</html>
