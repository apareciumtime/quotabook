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
        grid-template-rows: 28.6vw;
        justify-items: center;
        gap:1vw;
        align-self:stretch;
        /* border: 1px red solid; */
    }

    .grid_item{
        /* border: 1px solid rgba(0, 0, 0, 0.8); */
    }
</style>

@section('body')
        <x-dec-frame choice="bookshelf"/>
        <div id="bookshelf_playground">
            <x-paginate-bar choice="bookshelf"/>
            <div id="shelf_frame">
                
                    @if(count($bookshelfList) > 0)
                            @foreach($bookshelfList as $bookshelf)
                                @foreach($bookcounts as $bookcount)
                                    @if($bookcount->bookshelf_name === $bookshelf->bookshelf_name)
                                    <div class="grid_item">
                                        <x-bookshelf-item id="{{ $bookshelf->id }}" bookAmount="{{$bookcount->total_books}}"/>
                                    </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @else
                            No quotes in database.
                        @endif
                
            </div>
        </div>
@endsection

