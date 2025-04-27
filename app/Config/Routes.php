<?php
//rute aplikasi
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login'); // Menampilkan halaman login
$routes->post('/login', 'AuthController::login'); //  Memproses data login dari form.
$routes->get('/logout', 'AuthController::logout'); // Menghapus session dan logout user.
// Rute untuk dashboard berdasarkan role
$routes->get('/admin', 'DashboardController::home', ['filter' => 'role:admin']); //menentukan bahwa halaman /admin hanya bisa diakses oleh pengguna dengan role admin
$routes->get('/user', 'DashboardController::home', ['filter' => 'role:user']); // Dashboard role user

// Rute untuk fitur Pinjam Buku dan Tambah Buku
$routes->get('/PinjamBuku', 'DashboardController::PinjamBuku', ['filter' => 'role:user']); // /PinjamBuku dan /DaftarBuku bisa diakses oleh pengguna dengan role user
$routes->get('/DaftarBuku', 'DashboardController::DaftarBuku', ['filter' => 'role:user']); // // Rute untuk fitur Tambah Buku dan Tambah
$routes->get('/TambahBuku', 'DashboardController::TambahBuku', ['filter' => 'role:admin']); // /TambahBuku dan /TambahAnggota hanya bisa diakses oleh admin saja
$routes->get('/TambahAnggota', 'DashboardController::TambahAnggota', ['filter' => 'role:admin']); // Fitur Tambah Buku (khusus admin)
