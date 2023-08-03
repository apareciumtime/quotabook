@extends('components.header')
<style>
    .quote_all {
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
        <x-dec-frame choice="quote_detail"/>
        <div class="quote_all">
            <x-paginate-bar choice="quote_detail" id="{{ $quote->id }}"/>
            <div class="info_frame">
                <h2>{{ $book->title }}</h2>
                <p>{{ $quote->quote }}</p>
            </div>
            <div class="info_frame">
                <h2>Comment</h2>
                @if(is_null($quote->comment))
                    <p>No comment</p>
                @else
                    <p>{{ $quote->comment }}</p>
                @endif
            </div>
            <div class="info_frame">
                <h2>info</h2>
                <ul>
                    <li>Created at:</li>
                    <li>{{ $quote->created_at }}</li>
                    <li>Book:</li>
                    <li>{{ $book->title }}</li>
                    <li>Chapter:</li>
                    <li>{{ $quote->chapter }}</li>
                    <li>Page:</li>
                    <li>{{ $quote->page }}</li>
                    <li>Author:</li>
                    <li>{{ $book_detail->author }}</li>
                    <li>Translator:</li>
                    <li>{{ $book_detail->translator }}</li>
                    <li>Original Language:</li>
                    <li>{{ $book_detail->ori_lan }}</li>
                    <li>Book Language:</li>
                    <li>{{ $book_detail->trans_lan }}</li>
                    <li>Publisher:</li>
                    <li>{{ $book_detail->publisher }}</li>
                </ul>
            </div>
        </div>
@endsection

