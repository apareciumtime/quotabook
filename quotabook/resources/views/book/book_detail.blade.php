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

    .book_frame {
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
        display: flex;
        flex-direction: column;
        padding: 2.11vw 4.23vw;
        justify-content: center;
        align-items: flex-start;
        align-self: stretch;
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
                    <li>{{ $book->created_at }}</li>
                    <li>{{ $book->pages }}</li>
                    <li>{{ $book->publisher }}</li>
                </ul>
            </div>
        </div>
@endsection
