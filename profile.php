<!-- buatkan tamplate profilenya -->
<?php include 'layout/header.php' ?>

<div>
    <?php include 'layout/sidebar.php' ?>
    <div class="container">
        <h2>Profil</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <form>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telepon" placeholder="Masukkan telepon">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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