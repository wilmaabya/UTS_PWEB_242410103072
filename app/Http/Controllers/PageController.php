<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('layouts.login');
    }

    public function processLogin(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username && $password) {
        session(['username' => $username]);
        return redirect()->route('dashboard');
    }

    return back()->with('error', 'Username / password salah');
}


    public function dashboard()
{
    $snakes = [
        [
            'nama' => 'Ular Hijau Ekor Panjang',
            'jenis' => 'Ahaetulla prasina',
            'gambar' => 'http://localhost:8000/images/ijo panjang.jpg'
        ],
        [
            'nama' => 'Python Albino',
            'jenis' => 'Python bivittatus',
            'gambar' => 'http://localhost:8000/images/python albino.jpg'
        ],
        [
            'nama' => 'Serpentis',
            'jenis' => 'Boa constrictor',
            'gambar' => 'http://localhost:8000/images/boa.jpg'
        ],
        [
            'nama' => 'Kobra Jawa',
            'jenis' => 'Naja sputatrix',
            'gambar' => 'http://localhost:8000/images/king cobra.jpg'
        ],
        [
            'nama' => 'Sanca Batik',
            'jenis' => 'Python reticulatus',
            'gambar' => 'http://localhost:8000/images/sanca-batik.jpg'
        ],
        [
            'nama' => 'Ular Karang',
            'jenis' => 'Micrurus fulvius',
            'gambar' => 'http://localhost:8000/images/timber.jpg'
        ],
        [
            'nama' => 'Ular Weling',
            'jenis' => 'Bungarus candidus',
            'gambar' => 'http://localhost:8000/images/ular weling.jpg'
        ],
        [
            'nama' => 'Ular Pelangi',
            'jenis' => 'Xenopeltis unicolor',
            'gambar' => 'http://localhost:8000/images/gaboon viper.jpg'
        ],
    ];

    return view('dashboard', compact('snakes'));
}

public function pengelolaan()
{
    $data = [
        [
            'nama' => 'Ular Hijau Ekor Panjang',
            'jenis' => 'Ahaetulla prasina',
            'umur' => '2 tahun',
            'asal' => 'Kalimantan',
            'gambar' => 'http://localhost:8000/images/ijo panjang.jpg'
        ],
        [
            'nama' => 'Python Albino',
            'jenis' => 'Python bivittatus',
            'umur' => '3 tahun',
            'asal' => 'Sumatera',
            'gambar' => 'http://localhost:8000/images/python albino.jpg'
        ],
        [
            'nama' => 'Serpentis',
            'jenis' => 'Boa constrictor',
            'umur' => '11 bulan',
            'asal' => 'Papua',
            'gambar' => 'http://localhost:8000/images/boa.jpg'
        ],
        [
            'nama' => 'Kobra Jawa',
            'jenis' => 'Naja sputatrix',
            'umur' => '1 tahun',
            'asal' => 'Jawa Timur',
            'gambar' => 'http://localhost:8000/images/king cobra.jpg'
        ],
        [
            'nama' => 'Sanca Batik',
            'jenis' => 'Python reticulatus',
            'umur' => '5 tahun',
            'asal' => 'Sulawesi',
            'gambar' => 'http://localhost:8000/images/sanca-batik.jpg'
        ],
        [
            'nama' => 'Ular Karang',
            'jenis' => 'Micrurus fulvius',
            'umur' => '8 bulan',
            'asal' => 'Maluku',
            'gambar' => 'http://localhost:8000/images/timber.jpg'
        ],
        [
            'nama' => 'Ular Weling',
            'jenis' => 'Bungarus candidus',
            'umur' => '2 tahun',
            'asal' => 'Bali',
            'gambar' => 'http://localhost:8000/images/ular weling.jpg'
        ],
        [
            'nama' => 'Ular Pelangi',
            'jenis' => 'Xenopeltis unicolor',
            'umur' => '3 tahun',
            'asal' => 'NTT',
            'gambar' => 'http://localhost:8000/images/gaboon viper.jpg'
        ],
    ];

    return view('layouts.pengelolaan', compact('data'));
}

public function logout()
{
    session()->flush();
    return redirect()->route('login');
}


    public function profile()
    {
        return view('layouts.profile');
    }
}

