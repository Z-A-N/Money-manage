<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Manage</title>
    <link rel="icon" href="Dollar.jpeg">
    <style>
        body {
            background-color: rgba(125, 206, 174, 0.7);
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-top: 50px;
            text-align: center;
        }

        hr {
            width: 80%;
            margin-top: 10px;
            border: 1px solid #000;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            margin-top: 10px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }

        button {
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            color: #fff;
            border: none;
            padding: 15px 25px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: #5B42F3">Money Manage</h1>
    <hr>
    <center>
    <h2>Pengeluaran</h2>
    <form method="post" action="index.php">
        <table>
        <tr><td>Keperluan <input type="text" name="Keperluan"required></td></tr>
        <tr><td>Nominal <input type="number" name="keluar"required></td></tr>
        <tr><td>Tanggal <input type="date" name="tlk"required></td></tr>
        <tr><td>Catatan <input type="text" name="ck"></td></tr>
        <tr><td><center><button type="submit" class="keluar" role="button">keluar</button> <button onclick="window.location.href='index.php'">Back</button></td></tr>
    </table>
    </center>
    </form>
</body> 
</html>