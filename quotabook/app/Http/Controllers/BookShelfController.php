<?php

namespace App\Http\Controllers;

use App\Models\BookShelf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class BookShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookshelfList = [];
        $bookshelfName = [];
        $bookshelves = Bookshelf::all();
        foreach($bookshelves as $bookshelf){
            if(!in_array($bookshelf->bookshelf_name,$bookshelfName)){
                array_push($bookshelfName,$bookshelf->bookshelf_name);
                array_push($bookshelfList,$bookshelf);
            }
        }

        $bookcounts = Bookshelf::select('bookshelf_name', DB::raw('count(*) as total_books'))
        ->groupBy('bookshelf_name')->get();

        return view('bookshelf.bookshelf', [
            'bookshelf'=>$bookshelves,
            'bookshelfList'=>$bookshelfList,
            'bookcounts'=>$bookcounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookshelf.bookshelf_create');
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
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(BookShelf $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(BookShelf $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookShelf $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookShelf $book)
    {
        //
    }
}
