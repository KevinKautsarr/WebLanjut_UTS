<!-- filepath: c:\xampp\htdocs\belajar-ci - UTS\app\Views\components\sidebar.php -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Menu Home -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" 
               href="<?= session()->get('role') == 'admin' ? base_url('admin') : base_url('user'); ?>">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <!-- Menu Daftar Buku -->
         
        <?php if (session()->get('role') == 'user'): ?>
    <li class="nav-item">
        <a class="nav-link <?= (uri_string() == 'DaftarBuku') ? '' : 'collapsed' ?>" href="<?= base_url('DaftarBuku'); ?>">
            <i class="bi bi-journal-bookmark"></i>
            <span>Daftar Buku</span>
        </a>
    </li><!-- End Daftar Buku Nav -->

    <!-- Menu Pinjam Buku -->
    <li class="nav-item">
        <a class="nav-link <?= (uri_string() == 'PinjamBuku') ? '' : 'collapsed' ?>" href="<?= base_url('PinjamBuku'); ?>">
            <i class="bi bi-journal-arrow-up"></i>
            <span>Pinjam Buku</span>
        </a>
    </li><!-- End Pinjam Buku Nav -->
<?php endif; ?>

        <!-- Menu Tambah Buku (Hanya untuk Admin) -->
        <?php if (session()->get('role') == 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'TambahBuku') ? '' : 'collapsed' ?>" href="<?= base_url('TambahBuku'); ?>">
                    <i class="bi bi-plus-square"></i>
                    <span>Tambah Buku</span>
                </a>
            </li><!-- End Tambah Buku Nav -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'TambahAnggota') ? '' : 'collapsed' ?>" href="<?= base_url('TambahAnggota'); ?>">
                    <i class="bi bi-person-plus"></i>
                    <span>Tambah Anggota</span>
                </a>
            </li><!-- End Tambah Buku Nav -->
        <?php endif; ?>

    </ul>

</aside><!-- End Sidebar -->