<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // получает все записи
        // $books = Book::all();

        // find
        
        // $books = Book::find([1,2]);

        // echo $book->id.' '.$book->name.' '.$book->author;

        // 1й способ обращения
        // $books = Book::where('active', 1)
        //         ->orderBy('name', 'asc')
        //         ->get();

        // 2й способ обращения
        // $booksModel = new Book;
        // $booksModel->where('active', 1)->get();

        // foreach ($books as $book) {
        //     echo $book->name.'<br>';
        // }

        /*echo '<b>Автор книги: </b>'.Book::find(5)->author.'<br>';

        echo "<b>Активные книги:</b><br>";
        $booksActive = Book::where('active', 1)->get();
        foreach ($booksActive as $book) {
            echo $book->name.'<br>';
        }

        echo "<b>Неактивные книги:</b><br>";
        $booksNonActive = Book::where('active', 0)->get();
        foreach ($booksNonActive as $book) {
            echo $book->name.'<br>';
        }*/

        // $book = Book::findOrFail(1);

        /*$book = Book::find(5);
        $book->name = 'newname';
        $book->active = 0;
        $book->save();*/

        /*$bookModel = new Book;
        $bookModel->name = 'new booknew';
        $bookModel->author = 'hfahsagdsaasdg';
        $bookModel->active = 0;
        $bookModel->save();*/

        /*$bookModel = new Book;
        $bookModel->find(1)->delete();
        $bookModel->destroy([15,16]);
        $bookModel->where('name', 'newname')->delete();*/


        // $book = Book::active()->del()->orderBy('created_at')->get();
        // dd($book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
