<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pemesanan Tiket Pesawat</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
        }

        input [type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }

        input [type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #44a049;
        }
    </style>
</head>

<body>
    <h1>Pemesanan Tiket Pemesanan</h1>
    <form action="proses.php" method="post">
        <label for="nama">Nama Penumpang:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="asal">Kota Asal</label>
        <input type="text" id="asal" name="asal" required> <br><br>

        <label for="tujuan">Kota Tujuan</label>
        <input type="text" id="tujuan" name="tujuan" required> <br><br>

        <label for="tanggal">Tanggal Penerbangan</label>
        <input type="date" id="tanggal" name="tanggal" required> <br><br>

        <input type="submit" value="Pesan Tiket">

    </form>
</body>

</html>