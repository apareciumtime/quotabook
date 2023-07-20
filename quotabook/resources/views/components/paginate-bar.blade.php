<style>
    #paginate_bar {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 4.23vw;
        align-self: stretch;

        /* background: blue; */
    }

    #paginate_bar_left_group {
        display: flex;
        flex-direction: row;
        align-items: center;

        width: 10vw;
        gap:.8vw;
        /* background: lightseagreen; */
    }

    #paginate_bar_middle_group {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        flex-grow: 1;


        gap: 2.11vw;

        /* background: seagreen; */
    }

    #paginate_bar_right_group {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;

        width: 10vw;
        gap:.8vw;
        /* background: lightseagreen; */
    }

    /* quote_bar_2 1/2 */
    #paginate_bar_middle_back_group {
        display: flex;
        flex-direction: row;

        gap: .26vw;
    }

    #paginate_bar_middle_next_group {
        display: flex;
        flex-direction: row;

        gap: .26vw;
    }

    #paginate_bar_middle_text_group {
        display: flex;
        justify-content: center;

        /* background: red; */
    }

    #paginate_bar_middle_text_group p {
        text-align: center;
        color: var(--click, #CAC0A8);
        color: var(--click, #CAC0A8);

        font-size: 1vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    #paginate_bar_middle_text_group input {
        text-align: right;
        width: 2.64vw;
        padding:.52vw;
        color: var(--click, #CAC0A8);
        border-radius: .26vw;
        border: .13vw solid var(--click, #CAC0A8);

        font-size: 1vw;
    }

</style>

<div id="paginate_bar">
    <div id="paginate_bar_left_group">
        @if($choice === "quote")
            <x-icon icon="bookmark"/>
            <x-icon icon="book"/>
            <x-icon icon="calendar"/>
        @elseif($choice === "quote_detail")
        @elseif($choice === "bookshelf")
        @elseif($choice === "bookshelf_detail")
        @elseif($choice === "book")
        @elseif($choice === "book_detail")
        @endif
    </div>
    <div id="paginate_bar_middle_group">
        <div id="paginate_bar_middle_back_group">
            <x-icon icon="firstpage"/>
            <x-icon icon="previouspage"/>
        </div>
        <div id="paginate_bar_middle_text_group">
            <p>
                Page <input placeholder="1" autocomplete=”off” readonly> / xxxx
            </p>
        </div>
        <div id="paginate_bar_middle_next_group">
            <x-icon icon="nextpage"/>
            <x-icon icon="lastpage"/>
        </div>
    </div>
    <div id="paginate_bar_right_group">
        @if($choice === "quote")
            <x-icon icon="create" model="quote"/>

        @elseif($choice === "quote_detail")
            <x-icon icon="edit" model="quote" id="{{ $id }}"/>
            <x-icon icon="delete" model="quote" id="{{ $id }}"/>

        @elseif($choice === "bookshelf")
            <x-icon icon="create" model="bookshelf"/>
        @elseif($choice === "bookshelf_detail")
        @elseif($choice === "book")
        @elseif($choice === "book_detail")
        @endif
    </div>
</div>
