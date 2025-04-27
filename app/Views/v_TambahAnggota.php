<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Formulir Tambah Anggota
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
                Anggota berhasil ditambahkan!
            </div>

            <form id="formTambahAnggota">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" required>
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat Lengkap" required></textarea>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="">Pilih Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success" id="btnSimpan">Simpan Anggota</button>
                <a href="<?= base_url('admin/anggota') ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('formTambahAnggota').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir secara langsung

        // Tampilkan alert Bootstrap
        document.getElementById('alertBerhasil').classList.remove('d-none');

        // Anda bisa menambahkan logika untuk menyembunyikan alert setelah beberapa detik
        setTimeout(function() {
            document.getElementById('alertBerhasil').classList.add('d-none');
             this.submit();
        }.bind(this), 2000);


    });
</script>

<?= $this->endSection() ?>
