<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('login');
    }

    // Proses Login → redirect ke dashboard dengan parameter username
    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        // redirect ke dashboard dengan parameter username
        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Halaman Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    // Halaman Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');

        // Data profil dikirim ke view
        $profile = [
            'nama' => $username ?? 'Zian Alfina Ramadhani',
            'umur' => 20,
            'status' => 'Mahasiswa Universitas Jember',
            'akun' => 'Aktif'
        ];

        return view('profile', compact('profile', 'username'));
    }

    // Halaman Pengelolaan Produk
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username'); // ambil juga kalau mau dikirim ke view

        $produk = [
            ['nama' => 'DRW Glowing', 'harga' => 100000, 'stok' => 30],
            ['nama' => 'Moisturizer Wardah', 'harga' => 75000, 'stok' => 20],
            ['nama' => 'Toner G2G', 'harga' => 50000, 'stok' => 25],
            ['nama' => 'Face Wash DWR', 'harga' => 90000, 'stok' => 20],
            ['nama' => 'Skintific', 'harga' => 60000, 'stok' => 35],
            ['nama' => 'MS Glow', 'harga' => 150000, 'stok' => 15],
        ];

        return view('pengelolaan', compact('produk', 'username'));
    }
}
