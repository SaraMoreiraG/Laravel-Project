<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Función para mostrar una lista de libros
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Función para mostrar el formulario de creación de libros
    public function create()
    {
        return view('books.create');
    }

    // Función para guardar un nuevo libro en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Libro creado exitosamente.');
    }

    // Función para mostrar el formulario de edición de un libro
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Función para actualizar un libro en la base de datos
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Libro actualizado exitosamente.');
    }

    // Función para eliminar un libro de la base de datos
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Libro eliminado exitosamente.');
    }
}
