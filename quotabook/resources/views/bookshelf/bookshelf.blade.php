@extends('components.header')
<style>
    /* quote_frame */
    #bookshelf_playground {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4.23vw;
        align-self: stretch;


        /* background: pink; */
    }

    #shelf_frame {
        display: grid;
        grid-template-columns: 19.97vw 19.97vw 19.97vw 19.97vw;
        justify-items: center;
        gap:1vw;
        align-self:stretch;
        border: 1px red solid;
    }
</style>

@section('body')
        <x-dec-frame choice="bookshelf"/>
        <div id="bookshelf_playground">
            <x-paginate-bar choice="bookshelf"/>
            <div id="shelf_frame">

            </div>
        </div>
@endsection

