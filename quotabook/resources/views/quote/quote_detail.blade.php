@extends('components.header')
<style>
    .content_frame {
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 85vw;
        height: unset;
        padding: 0;
        margin-top: 1.5%;

        /* background: pink; */
    }


</style>

@section('body')
        <x-dec-frame choice="quote"/>
        <div class="content_frame">
            <x-paginate-bar choice="quote_detail"/>
            <div class="quote_frame">
                <div class="book_and_quote">
                    {{ $quote->book }}
                    {{ $quote->quote }}
                </div>
                <div class="comment">
                    {{ $quote->comment }}
                </div>
                <div class="info">
                    {{ $quote->chapter }}
                    {{ $quote->page }}
                </div>
            </div>
        </div>
@endsection

