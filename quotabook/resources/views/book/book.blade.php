@extends('components.header')
<style>
    #book_all {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4.23vw;
        align-self: stretch;

        /* background: pink; */
    }

    #book_frame {
        display: grid;
        grid-template-columns: 19.97vw 19.97vw 19.97vw 19.97vw;
        justify-items: center;
        gap: 1vw;
        align-self:stretch;
        /* border:1px red solid; */
    }

    .book_item {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-self:stretch;

        width: 13.22vw;
        height: 25.86vw;

        border-radius: .26vw;
        border: .26vw solid var(--click, #CAC0A8);
        background: #FFF;
    }

</style>

@section('body')
        <x-dec-frame choice="book"/>
        <div id="book_all">
            <x-paginate-bar choice="book"/>
            <div id="book_frame">
                @if(count($books) > 0)
                    @foreach($books as $book)
                        <div class="book_item">
                            <h1>{{ $book->title }}</h1>
                        </div>
                    @endforeach
                @else
                    No books in database.
                @endif
            </div>
        </div>
@endsection

