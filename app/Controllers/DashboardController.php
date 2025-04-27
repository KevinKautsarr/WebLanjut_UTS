<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function TambahBuku()
    {
        return view('v_TambahBuku'); // View khusus admin
    }
    public function TambahAnggota()
    {
        return view('v_TambahAnggota'); // View khusus admin
    }
    public function PinjamBuku()
    {
        return view('v_PinjamBuku'); // View khusus user
    }
    public function DaftarBuku()
    {
        return view('v_DaftarBuku'); // View khusus user
    }
    public function home()
    {
        return view('v_home'); // View untuk halaman utama
    }
}