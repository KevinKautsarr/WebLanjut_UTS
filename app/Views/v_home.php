<?= $this->extend('layout') ?> 
<!-- digunakan untuk menentukan template utama. -->
<?= $this->section('content') ?>
<!-- digunakan untuk mendefinisikan konten spesifik yang akan dimasukkan ke dalam template utama. -->
<!-- Load Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary"><i class="bi bi-book-half"></i> Dashboard Perpustakaan Kendal</h1>
    <div class="mt-4 text-center">
        <h4>Halo <strong><?= session()->get('username'); ?></strong>!</h4>

        <?php if (session()->get('role') == 'admin'): ?>
    <p class="text-dark">Anda login sebagai <strong>Admin</strong>. Kelola perpustakaan dengan mudah.</p>

<?php elseif (session()->get('role') == 'user'): ?>
    <p class="text-dark">Anda login sebagai <strong>User</strong>. Jelajahi koleksi buku dan pinjam buku dengan mudah.</p>
<?php endif; ?>
<!-- admin -->
    </div>
    <div class="row">
        <?php if (session()->get('role') == 'admin'): ?>
            <!-- Card Jumlah Buku -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5><i class="bi bi-journal-bookmark-fill"></i> Jumlah Buku</h5>
                    </div>
                    <div class="card-body text-center">
                        <h3><?= esc($jumlahBuku ?? '20') ?></h3>
                        <p>Total jumlah buku yang terdaftar di perpustakaan.</p>
                    </div>
                </div>
            </div>

            <!-- Card Jumlah Anggota -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h5><i class="bi bi-people-fill"></i> Jumlah Anggota</h5>
                    </div>
                    <div class="card-body text-center">
                        <h3><?= esc($jumlahAnggota ?? '7') ?></h3>
                        <p>Total anggota yang terdaftar di perpustakaan.</p>
                    </div>
                </div>
            </div>

            <!-- Card Buku Dipinjam -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5><i class="bi bi-journal-check"></i> Buku Dipinjam</h5>
                    </div>
                    <div class="card-body text-center">
                        <h3><?= esc($jumlahDipinjam ?? '11') ?></h3>
                        <p>Buku yang sedang dipinjam oleh anggota.</p>
                    </div>
                </div>
            </div>
<!-- ==== user =====  -->
        <?php elseif (session()->get('role') == 'user'): ?>
            <!-- Card Pinjam Buku -->
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header text-dark">
                        <h5><i class="bi bi-journal-arrow-up"></i> Pinjam Buku</h5>
                    </div>
                    <div class="card-body text-center">
                        <a href="<?= base_url('PinjamBuku'); ?>" class="btn btn-primary"><i class="bi bi-journal-arrow-up"></i> Pinjam Buku</a>
                    </div>
                </div>
            </div>

            <!-- Card Daftar Buku -->
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header text-dark">
                        <h5><i class="bi bi-journal-bookmark"></i> Daftar Buku</h5>
                    </div>
                    <div class="card-body text-center">
                        <a href="<?= base_url('DaftarBuku'); ?>" class="btn btn-info"><i class="bi bi-journal-bookmark"></i> Lihat Daftar Buku</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    
</div>

<?= $this->endSection() ?>
<!-- menandai akhir dari bagian konten halaman ini. -->
