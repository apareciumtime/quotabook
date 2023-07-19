@extends('components.header')
<style>
    /* quote_frame */
    #quote_all {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4.23vw;
        align-self: stretch;


        /* background: pink; */
    }

    #quote_frame {
        display: grid;
        grid-template-columns: 19.97vw 19.97vw 19.97vw 19.97vw;
        justify-items: center;
        gap:1vw;
        align-self:stretch;
        /* border:1px red solid; */
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

