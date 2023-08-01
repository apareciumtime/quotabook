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
        /* border: 1px solid rgba(0, 0, 0, 0.8); */
        position: relative;
    }

    .grid_item{
        /* border: 1px solid rgba(0, 0, 0, 0.8); */
    }

    .alert-no-shelf{
        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
        font-size: 1.19vw;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        display: flex;
        justify-content: center;
        align-self: stretch;
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        /* border:1px red solid; */
    }
</style>

@section('body')
        <x-dec-frame choice="bookshelf"/>
        <div id="bookshelf_playground">
            <x-paginate-bar choice="bookshelf"/>
            <div id="shelf_frame">
                    @if(is_null($bookshelves))
                        <div class="alert-no-shelf">
                            ยังไม่มีชั้นวางหนังสือ
                        </div>
                    @else
                        @foreach ($bookshelves as $bookshelf)
                            <div class="grid_item">
                                <x-bookshelf-item id="{{ $bookshelf->id }}"/>
                            </div>
                        @endforeach
                    @endif
                </div>
        </div>
@endsection

