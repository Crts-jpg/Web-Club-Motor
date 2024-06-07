<?php include 'layout/header.php' ?>
<div>
            <?php include 'layout/sidebar.php' ?>
<div class="container">
    <h2>Kontak Kami</h2>
    <div class="row mt-4">
    <div class="col-md-6">
        <!-- form untuk menghubungi kami/dev -->
        <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <!-- kontak Me -->
    <div class="col-md-6 p-3 container">
        <h3>Alamat</h3>
        <p>Jl. Malioboro, Yogyakarta</p>
        <h3>Telepon</h3>
        <p>08123456789</p>
        <h3>Email</h3>
        <p>
            <a href="andi.akbar@student,unismuh.ac.id">andi.akbar@student,unismuh.ac.id</a>
        </p>
    </div>
</div>
</div>
</div>
<?php include 'layout/footer.php' ?>