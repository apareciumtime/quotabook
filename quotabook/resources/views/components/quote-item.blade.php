<style>
    .quote_item_frame{
        display: flex;
        height: 25.86vw;
        flex-direction: column;
        align-self:stretch;

        border-radius: .26vw;
        background: #FFF;
        position: relative;

        transition: 0.5s;
        transition-delay: 0.05s;
    }

    .quote_item_frame #bookmark{
        position: absolute;
        right: 1.58vw;
        top:1.58vw;

        z-index: 1;
        width: 1.85vw;
        height: 1.85vw;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .quote_item_frame_a{
        display: flex;
        position: relative;
        height: 25.86vw;
        padding: 1.58vw;
        flex-direction: column;
        align-self:stretch;

        border-radius: .26vw;
        border: .26vw solid var(--click, #CAC0A8);
        background: #FFF;

        overflow-y:hidden;
    }

    .quote_item{
        display: flex;
        flex-direction: column;
        gap:1vw;
    }

    .quote_item_head{
        color: var(--click, #CAC0A8);
        font-size: 1.19vw;
        width: 16.8vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .quote_item_body{
        color: var(--click, #CAC0A8);

        font-size: .92vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;


        /* to ellipsis 16 lines*/
        display: -webkit-box;
        word-break: break-all;
        -webkit-line-clamp: 17;
        -webkit-box-orient: vertical;
        overflow: hidden;

    }

    .quote_item_icon{
        position: absolute;
        bottom: 1.58vw;
        right:1.58vw;

        z-index: 1;

        gap:1.05vw;

        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;

        transition: 0.25s;
        transition-delay: 0.25s;
    }

    .quote_item_frame:hover{
        transform: translate(-0.25vw, -0.25vw);
        box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.10);
    }

    .quote_item_frame:hover .quote_item_icon{
        opacity: 100%;
    }


</style>
<div class="quote_item_frame">
    <a href="{{route('quote_detail', $quote->id)}}" class="quote_item_frame_a">
    <div class="quote_item">
            <div class="quote_item_head">
                {{ $book->title }}
            </div>
            <div class="quote_item_body">
                {{ $quote->quote }}
            </div>
        </div>
    </a>
    <div id="bookmark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
            <path d="M0.5 1.875V19.0508C0.5 19.5742 0.925781 20 1.44922 20C1.64453 20 1.83594 19.9414 1.99609 19.8281L8 15.625L14.0039 19.8281C14.1641 19.9414 14.3555 20 14.5508 20C15.0742 20 15.5 19.5742 15.5 19.0508V1.875C15.5 0.839844 14.6602 0 13.625 0H2.375C1.33984 0 0.5 0.839844 0.5 1.875Z" fill="#CAC0A8"/>
        </svg>
    </div>
    <div class="quote_item_icon">
        <x-icon icon="edit" model="quote" id="{{ $quote->id }}"/>
        <x-icon icon="delete" model="quote" id="{{ $quote->id }}"/>
    </div>
</div>
