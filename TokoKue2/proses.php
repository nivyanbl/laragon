<?php

$nama_kue = $_POST['nama'];
$jumlah_beli = $_POST['jumlah'];


switch ($nama_kue) {
    case 'Bolu';
        $harga = 20000;
        break;
    case 'Brownies';
        $harga = 25000;
        break;
    case 'Donat';
        $harga = 10000;
        break;
    default;
        $harga = 0;
        break;
}


$total_harga = $harga * $jumlah_beli;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Total Pembayaran</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <h1>Total Pembayaran</h1>
    <p> Nama Kue : <?php echo $nama_kue; ?></p>
    <p> jumlah Beli :<?php echo $jumlah_beli; ?></p>
    <p> Total_Harga: Rp <?php echo number_format($total_harga, 0, ', ', '.'); ?></p>
    <a href="index.php">Kembali</a>
</body>

</html>