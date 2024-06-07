<?php
session_start();

if (!isset($_SESSION['booking'])) { // check jika session booking tidak ada maka redirect ke index.php
    header("Location: index.php");
    exit;
}

$booking = $_SESSION['booking']; // ambil data booking dari session booking dan simpan ke variabel $booking untuk digunakan di halaman ini 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'layout/header.php'; ?>

<!-- menampilkan hasil pembelian produknya -->
<div class="container mt-5">
    <h2>Riwayat Pemesanan Anda</h2>
    <p>Terima Kasih Telah Memesan : </p>
    <ul>
        <li>Nama: <?php echo htmlspecialchars($booking['name']); ?></li>
        <li>Email: <?php echo htmlspecialchars($booking['email']); ?></li>
        <li>Paket: <?php echo htmlspecialchars($booking['packageName']); ?></li>
        <li>Total Produk: <?php echo htmlspecialchars($booking['totalProduk']); ?></li>
        <li>Total Harga: <?php echo htmlspecialchars($booking['totalHarga']); ?></li>
    </ul>
    <a href="index.php" class="btn btn-primary">Selesai</a>
    <a href="produk.php" class="btn btn-primary">Pesan Lagi</a>
</div>

<?php include 'layout/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
