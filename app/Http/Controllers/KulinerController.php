<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    private $kuliner = [
        [
            'nama' => 'Rendang',
            'slug' => 'rendang',
            'asal' => 'Sumatera Barat',
            'kategori' => 'Makanan Berat',
            'harga' => 25000,
            'gambar' => 'https://images.unsplash.com/photo-1547592180-85f173990554?w=800',
            'deskripsi' => 'Rendang adalah makanan khas Minangkabau yang terbuat dari daging sapi dan dimasak dengan santan serta rempah-rempah hingga bumbunya meresap.'
        ],
        [
            'nama' => 'Nasi Goreng',
            'slug' => 'nasi-goreng',
            'asal' => 'Indonesia',
            'kategori' => 'Makanan Berat',
            'harga' => 15000,
            'gambar' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?w=800',
            'deskripsi' => 'Nasi goreng merupakan makanan populer yang dibuat dari nasi, bumbu, kecap, dan pelengkap seperti telur atau ayam.'
        ],
        [
            'nama' => 'Sate Ayam',
            'slug' => 'sate-ayam',
            'asal' => 'Madura, Jawa Timur',
            'kategori' => 'Makanan Berat',
            'harga' => 20000,
            'gambar' => 'https://images.unsplash.com/photo-1529042410759-befb1204b468?w=800',
            'deskripsi' => 'Sate ayam terdiri dari potongan daging ayam yang ditusuk, dibakar, dan disajikan dengan bumbu kacang serta kecap.'
        ],
        [
            'nama' => 'Pempek',
            'slug' => 'pempek',
            'asal' => 'Palembang, Sumatera Selatan',
            'kategori' => 'Makanan Tradisional',
            'harga' => 18000,
            'gambar' => 'https://images.unsplash.com/photo-1626777552726-4a6b54c97e46?w=800',
            'deskripsi' => 'Pempek adalah makanan khas Palembang berbahan dasar ikan dan tepung sagu yang biasanya disajikan dengan kuah cuko.'
        ],
        [
            'nama' => 'Gudeg',
            'slug' => 'gudeg',
            'asal' => 'Yogyakarta',
            'kategori' => 'Makanan Tradisional',
            'harga' => 22000,
            'gambar' => 'https://images.unsplash.com/photo-1547592180-85f173990554?w=800',
            'deskripsi' => 'Gudeg dibuat dari nangka muda yang dimasak lama dengan santan dan gula merah, biasanya disajikan bersama nasi dan lauk.'
        ],
        [
            'nama' => 'Rawon',
            'slug' => 'rawon',
            'asal' => 'Jawa Timur',
            'kategori' => 'Sup Tradisional',
            'harga' => 20000,
            'gambar' => 'https://images.unsplash.com/photo-1547592180-85f173990554?w=800',
            'deskripsi' => 'Rawon adalah sup daging sapi dengan kuah hitam khas dari penggunaan kluwek dan rempah-rempah.'
        ],
    ];

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('kuliner.index', [
            'kuliner' => $this->kuliner
        ]);
    }

    public function show($slug)
    {
        $item = collect($this->kuliner)->firstWhere('slug', $slug);

        abort_if(!$item, 404);

        return view('kuliner.show', [
            'item' => $item
        ]);
    }
}