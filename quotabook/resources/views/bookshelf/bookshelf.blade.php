@extends('components.header')
<style>
    /* quote_frame */
    #shelf_all {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4.23vw;
        align-self: stretch;


        /* background: pink; */
    }

    #shelf_frame {
        display: grid;
        /* flex-direction: column; */
        grid-template-columns: auto auto auto auto;
        justify-items: center;

        width:unset;
        height: unset;
        /* margin-top: 5vh; */
        gap:1.05vw;
        /* background: green; */
    }
</style>

@section('body')
        <x-dec-frame choice="bookshelf"/>
        <div id="shelf_all">
            <x-paginate-bar choice="bookshelf"/>
            <div id="shelf_frame">

            </div>
        </div>
@endsection

