<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Book::create([
            'title' => 'Jujutsu Kaisen',
            'publisher' => 'Elex Media Komputindo',
            'stock' => 200,
            'image' => 'book-image/cover.jpg',
            'desc' => 'Manga Jujutsu Kaisen yang dibuat oleh komikus bernama Akutami Gege ini bercerita tentang Yuuji adalah seorang jenius di trek dan lapangan. Tapi dia sama sekali tidak tertarik untuk berputar-putar, dia bahagia sebagai seorang clam di Klub Penelitian Ilmu Gaib. Meskipun dia hanya ada di klub untuk iseng, keadaan menjadi serius ketika semangat nyata muncul di sekolah! Hidup akan menjadi sangat aneh di SMA Kota Sugisawa!',
            'writer' => 'Gege Akutami',
            'type' => 'Manga'
        ]);
    }
}
