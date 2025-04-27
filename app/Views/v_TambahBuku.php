<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Formulir Tambah Buku Baru
        </div>
        <div class="card-body">
            <?php if (session()->has('errors')) : ?>
                <div class="alert alert-danger">
                    <?php foreach (session('errors') as $error) : ?>
                        <?= esc($error) ?><br>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <div id="alertBerhasil" class="alert alert-success d-none" role="alert">
                Buku berhasil ditambahkan!
            </div>

            <form action="<?= base_url('admin/buku/simpan') ?>" method="post" id="formTambahBuku">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" required>
                </div>

                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan Nama Pengarang" required>
                </div>

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukkan ISBN Buku (Unique)" required>
                </div>

                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_halaman">Jumlah Halaman</label>
                    <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" placeholder="Masukkan Jumlah Halaman">
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Fiksi">Fiksi</option>
                        <option value="Non-Fiksi">Non-Fiksi</option>
                        <option value="Ilmiah">Ilmiah</option>
                        <option value="Referensi">Referensi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jumlah_stok">Jumlah Stok</label>
                    <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukkan Jumlah Stok" value="1" required>
                    <small class="form-text text-muted">Jumlah buku yang tersedia.</small>
                </div>

                <button type="submit" class="btn btn-success" id="btnSimpan">Simpan Buku</button>
                <a href="<?= base_url('admin/buku') ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('formTambahBuku').addEventListener('submit', function(event) {
        event.preventDefault(); 
        document.getElementById('alertBerhasil').classList.remove('d-none');
    });
</script>

<?= $this->endSection() ?>