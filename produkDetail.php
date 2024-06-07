<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function perhitunganHargaTotal() {
            const hargaService = {
                Keamanan: 1000000,
                transportasi: 1200000
            };
    
            let selectService = document.querySelectorAll('input[name="services[]"]:checked');
            let totalProduk = document.getElementById('totalProduk').value;
            let hargaTotal = 0;
            selectService.forEach(service => {
                hargaTotal += hargaService[service.value];
            });
    
            hargaTotal = hargaTotal * totalProduk;
            document.getElementById('hargaTotal').value = 'Rp ' + hargaTotal.toLocaleString('id-ID');
        }
    </script>
</head>
<body>

<?php include 'layout/header.php'; ?>
<div class="container mt-5">
    <?php
    $package = isset($_GET['package']) ? $_GET['package'] : 'unknown'; // ambil data package dari query string jika ada, jika tidak maka set default value 'unknown' ke variabel $package, jika ada tampilkan detail paket sesuai package yang dipilih di halaman ini
    $packageDetails = [
        'Produk 1' => 'Produk 1',
        'Produk 2' => 'Produk 2',
        'produk 3' => 'Produk 3'
    ];

    if (!array_key_exists($package, $packageDetails)) {
        echo "<h2>Invalid Package Selected</h2>";
    } else {
        echo "<h2>Package Details: " . $packageDetails[$package] . "</h2>";
    }
    ?>
    <form action="prosesBeli.php" method="post">
        <input type="hidden" name="package" value="<?php echo htmlspecialchars($package); ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="totalProduk">Total Produk</label>
            <input type="number" class="form-control" id="totalProduk" name="totalProduk" required>
        </div>
        <div class="form-group">
            <label for="services">Services</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" id="service1" value="penginapan" onclick="calculatehargaTotal()">
                <label class="form-check-label" for="service1">Keamanan (Rp 1.000.000)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" id="service2" value="transportasi" onclick="calculatehargaTotal()">
                <label class="form-check-label" for="service2">Transportasi (Rp 1.200.000)</label>
            </div>
        </div>
        <div class="form-group">
            <label for="hargaTotal">Harga Total</label>
            <input type="text" class="form-control" id="hargaTotal" name="hargaTotal" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>