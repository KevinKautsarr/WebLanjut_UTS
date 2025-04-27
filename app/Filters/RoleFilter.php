<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    //filter yang digunakan untuk membatasi akses ke halaman tertentu berdasarkan role pengguna
    public function before(RequestInterface $request, $arguments = null)
    { //Metode ini dijalankan sebelum request diproses oleh controller.
//Tujuannya adalah untuk memeriksa role pengguna dan mengarahkan mereka 
//ke halaman yang sesuai jika mereka tidak memiliki izin.
        $role = session()->get('role');

        if ($arguments[0] === 'admin' && $role !== 'admin') {
            return redirect()->to('/user');
        }

        if ($arguments[0] === 'user' && $role !== 'user') {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}