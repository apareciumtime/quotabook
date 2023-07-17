@extends('components.header')
<style>
    /* quote_frame */
    #quote_all {
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 85vw;
        height: unset;
        padding: 0;
        margin-top: 1.5%;

        /* background: pink; */
    }

    #quote_frame {
        display: grid;
        /* flex-direction: column; */
        grid-template-columns: auto auto auto;
        justify-items: center;

        width: 100%;
        height: unset;
        margin-top: 5vh;

        gap: 20px;
        /* background: green; */
    }
</style>

@section('body')
        <x-dec-frame choice="quote"/>
        <div id="quote_all">
            <x-paginate-bar choice="quote"/>
            <div id="quote_frame">
                @if(count($quotes) > 0)
                    @foreach($quotes as $quote)
                        <x-quote-item id="{{ $quote->id }}"/>
                    @endforeach
                @else
                    No quotes in database.
                @endif
            </div>
        </div>
@endsection

