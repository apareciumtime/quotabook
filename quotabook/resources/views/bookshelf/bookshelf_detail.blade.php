@extends('components.header')

<style>

</style>

@section('body')

<x-DecFrame choice='bookshelf'/>
<x-paginate-bar choice="book_shelf_detail" id="{{ $bookshelves->id }}"/>
@endsection