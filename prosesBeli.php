<?php
    session_start();
    include 'db_config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $produkName = $_POST['produkName'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $services = isset($_POST['services']) ? $_POST['services'] : [];
        $totalHarga = $_POST['hargaTotal'];
        $totalProduk = $_POST['totalProduk'];

        if (empty($name) || empty($email) || empty($services) || empty($totalProduk)){
            echo "Semua form harus terisi untuk melanjutkan transaksi.";
            return;
        }
        $packageName = '';
        switch ($produkName) {
            case 'Produk 1':
                $packageName = 'Produk 1';
                break;
            case 'Produk 2':
                $packageName = 'Produk 2';
                break;
            case 'Produk 3':
                $packageName = 'Produk 3';
                break;
            default:
                $packageName = 'Unknown Package';
                break;
        }

        $totalHargaNumber = floatval(str_replace(',', '', str_replace('Rp ', '', $totalHarga)));

        $stmt = $conn->prepare("INSERT INTO pembelian (name, email, produk, total_harga, total_produk) VALUES (?, ?, ?, ?, ?)"); 
        $stmt->bind_param("ssisi", $name, $email,  $packageName, $totalHargaNumber, $totalProduk); // Changed from $produkName to $packageName and $totalHarganya to $totalHargaNumber

        if ($stmt->execute()) {
            $_SESSION['booking'] = [
                'packageName' => $packageName,
                'name' => $name,
                'email' => $email,
                'totalProduk' => $totalProduk,
                'totalHarga' => $totalHarga
            ];

            header("Location: riwayatPemesanan.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close(); 
    }
?>