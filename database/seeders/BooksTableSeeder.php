<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        Book::create(['title' => 'Y si lo probamos...?', 'author' => 'Megan Maxwell']);
        Book::create(['title' => 'El Libro Negro de las Horas', 'author' => 'Eva García']);
    }
}
