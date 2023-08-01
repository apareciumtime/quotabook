@extends('components.header')
<style>
    .book_all {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4.23vw;
        align-self: stretch;

        /* background: pink; */
    }

    .info_frame {
        display: flex;
        padding: 4.23vw 1.05vw;
        flex-direction: column;
        align-items: flex-start;
        gap: 2.11vw;
        align-self: stretch;

        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
        margin: 0;
        border-radius: 0.53vw;
        border: 0.26vw solid var(--click, #CAC0A8);
    }

    .info_frame h2 {
        display: flex;
        padding: 0px 2.11vw;
        align-items: center;
        align-self: stretch;
        margin: 0;

        font-size: 1.58vw;
        /* background: green; */
    }

    .info_frame p {
        display: flex;
        flex-direction: column;
        padding: 2.11vw 4.23vw;
        justify-content: center;
        align-items: flex-start;
        align-self: stretch;
        margin: 0;
        /* background: blueviolet; */
        font-size: 1.19vw;
    }

    .info_frame ul {
        display: grid;
        grid-template-columns: 11.37vw 16.93vw;
        grid-row-gap: 0.48vw;
        /* flex-direction: column; */
        padding: 2.11vw 4.23vw;
        /* justify-content: center;
        align-items: flex-start;
        align-self: stretch; */
        margin: 0;
        /* background: blueviolet; */
        font-size: 1.19vw;
        list-style: none;
    }
</style>

@section('body')
        <x-dec-frame choice="book_detail"/>
        <div class="book_all">
            <x-paginate-bar choice="book_detail" id="{{ $book->id }}" title="{{ $book->title }}"/>
            <div class="info_frame">
                <h2>{{ $book->title }}</h2>
            </div>
            <div class="info_frame">
                <h2>info</h2>
                <ul>
                    <li>Created at:</li>
                    <li>{{ $book->created_at }}</li>
                    <li>Book Shelf:</li>
                    <li>BookShelf Name</li>
                    <li>Pages:</li>
                    <li>{{ $book->page }}</li>
                    <li>Publisher:</li>
                    <li>{{ $book->publisher }}</li>
                    <li>Author:</li>
                    <li>{{ $book->author }}</li>
                    <li>Translator:</li>
                    <li>{{ $book->translator }}</li>
                    <li>Original Language:</li>
                    <li>{{ $book->ori_lan }}</li>
                    <li>Book Language:</li>
                    <li>{{ $book->trans_lan }}</li>
                    <li>ISBN:</li>
                    <li>{{ $book->ISBN }}</li>
                    <li>Edition:</li>
                    <li>{{ $book->edition }}</li>
                    <li>Artist:</li>
                    <li>{{ $book->artist }}</li>
                    <li>Details:</li>
                    <li>{{ $book->details }}</li>
                </ul>
            </div>
        </div>
@endsection

