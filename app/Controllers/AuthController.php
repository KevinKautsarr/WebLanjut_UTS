<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    function __construct()
    {
        helper('form');
    }

    public function login() //Fungsi ini menangani proses login pengguna.
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');//Mengambil data username dan password dari form 
            $password = $this->request->getVar('password');

            // Hardcoded user data
            $users = [
                'admin1' => [
                    'password' => password_hash('123', PASSWORD_DEFAULT),
                    'role' => 'admin' //Password dienkripsi untuk meningkatkan keamanan.
                ],
                'user1' => [
                    'password' => password_hash('123', PASSWORD_DEFAULT),
                    'role' => 'user'
                ]
            ];

            if (array_key_exists($username, $users)) { //Mengecek apakah username yang dimasukkan ada di dalam array
                if (password_verify($password, $users[$username]['password'])) { //Jika username ditemukan, password diverifikasi menggunakan
                    session()->set([ //Jika username dan password valid, data pengguna (username, role, dan status login) disimpan dalam session menggunakan session()->set().
                        'username' => $username,
                        'role' => $users[$username]['role'],
                        'isLoggedIn' => TRUE
                    ]);

                    // Redirect based on role
                    if ($users[$username]['role'] === 'admin') { //Jika role pengguna adalah admin, pengguna diarahkan ke halaman /admin.
                        return redirect()->to(base_url('/admin'));
                    } else {
                        return redirect()->to(base_url('/user'));
                    }
                } else {
                    session()->setFlashdata('failed', 'Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            return view('v_login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    } //Menghapus semua data session . Redirect kembali ke halaman utama /
}