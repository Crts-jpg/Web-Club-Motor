<?php include __DIR__ . '/layout/header.php'; ?>
<div>
<?php include 'layout/sidebar.php' ?>
<div class="container">
<h2>Produk Kami</h2>
<div class="row mt-4" id="paket">
        <div class="col-md-4">
            <div class="card">
                <img src="./assets/img/pakaian.jpg" class="card-img-top" alt="Produk 1">
                <div class="card-body">
                    <h5 class="card-title">Produk 1</h5>
                    <p class="card-text">pakiaan biking lengkap paket 1.</p>
                    <a href="produkDetail.php?package=Produk 1" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./assets/img/pakaian2.jpg" class="card-img-top" alt="Produk 2">
                <div class="card-body">
                    <h5 class="card-title">Produk 2</h5>
                    <p class="card-text">pakiaan biking lengkap paket 2.</p>
                    <a href="produkDetail.php?package=Produk 2" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./assets/img/pakaian3.jpg" class="card-img-top" alt="Produk 3">
                <div class="card-body">
                    <h5 class="card-title">Produk 3</h5>
                    <p class="card-text">pakiaan biking lengkap paket 3.</p>
                    <a href="produkDetail.php?package=Produk 3" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include __DIR__ . '/layout/footer.php'; ?>