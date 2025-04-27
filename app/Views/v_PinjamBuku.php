<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Formulir Peminjaman Buku
        </div>
        <div class="card-body">
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger"><?= session('error') ?></div>
            <?php endif; ?>

            <div id="alertBerhasil" class="alert alert-success d-none" role="alert">
                Buku berhasil dipinjam!
            </div>

            <form action="<?= base_url('peminjaman/proses') ?>" method="post" id="formPeminjaman">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="id_anggota">ID Anggota</label>
                    <input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Masukkan ID Anggota" required>
                </div>

                <div class="form-group">
                    <label for="isbn_buku">ISBN Buku</label>
                    <input type="text" class="form-control" id="isbn_buku" name="isbn_buku" placeholder="Masukkan ISBN Buku" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= date('Y-m-d') ?>" readonly>
                    <small class="form-text text-muted">Tanggal pinjam akan diisi otomatis.</small>
                </div>

                <div class="form-group">
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                    <small class="form-text text-muted">Pilih tanggal kembali yang diinginkan.</small>
                </div>

                <button type="submit" class="btn btn-success" id="btnPinjam">Pinjam Buku</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('formPeminjaman').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir secara langsung

        // Tampilkan alert Bootstrap
        document.getElementById('alertBerhasil').classList.remove('d-none');

        // Anda bisa menambahkan logika untuk menyembunyikan alert setelah beberapa detik
        // setTimeout(function() {
        //     document.getElementById('alertBerhasil').classList.add('d-none');
        // }, 3000);

        // Jika Anda ingin formulir tetap dikirim setelah alert (misalnya setelah beberapa detik)
        // setTimeout(function() {
        //     this.submit();
        // }.bind(this), 3500);
    });
</script>

<?= $this->endSection() ?>