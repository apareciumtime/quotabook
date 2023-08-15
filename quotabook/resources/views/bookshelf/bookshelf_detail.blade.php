@extends('components.header')

<style>
    .frame_all {
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

    .info_frame h3 {
        display: flex;
        flex-direction: column;
        padding: 0 4.23vw;
        padding-top: 2.11;
        justify-content: center;
        align-items: flex-start;
        align-self: stretch;
        margin: 0;
        /* background: blueviolet; */
        font-size: 1.19vw;
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
        /* list-style: none; */
    }

    .book_list {
        /* background: #CAC0A8; */
    }

</style>

@section('body')
    <x-DecFrame choice='bookshelf'/>
    <div class="frame_all">
        <x-paginate-bar choice="book_shelf_detail" id="{{ $bookshelf->id }}"/>
        <div class="info_frame">
            <h2>Bookshelf Detail</h2>
            <ul>
                <li>Created at</li>
                <li>{{ $bookshelf->created_at }}</li>
                <li>Book amount</li>
                <li>{{ $bookshelf->books_count }}</li>
            </ul>
        </div>
        <div class="info_frame">
            <h2>Book List</h2>
            <div class="book_list">
                <h3>1st Floor</h3>
                <ul>
                    @if (is_null($f1books))
                        <li>No book in 1st floor</li>
                    @else
                        @foreach ($f1books as $f1book)
                            <li>{{ $f1book->title }}</li>
                        @endforeach
                    @endif
                </ul>
                <h3>2nd Floor</h3>
                <ul>
                    @if (is_null($f2books))
                        <li>No book in 2nd floor</li>
                    @else
                        @foreach ($f2books as $f2book)
                            <li>{{ $f2book->title }}</li>
                        @endforeach
                    @endif
                </ul>
                <h3>3rd Floor</h3>
                <ul>
                    @if (is_null($f3books))
                        <li>No book in 3rd floor</li>
                    @else
                        @foreach ($f3books as $f3book)
                            <li>{{ $f3book->title }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
