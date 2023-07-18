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

        gap: 4px;
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

        width: 70%;
        padding: 0;
        margin: 0;

        color: var(--click, #CAC0A8);
    }

    #paginate_bar_middle_text_group input {
        text-align: right;

        width: 20%;

        font-family: "K2D";
        color: var(--click, #CAC0A8);
        border-radius: 4px;
        border: 2px solid var(--click, #CAC0A8);
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
                Page <input placeholder="1"> / xxxx
            </p>
        </div>
        <div id="paginate_bar_middle_next_group">
            <x-icon icon="nextpage"/>
            <x-icon icon="lastpage"/>
        </div>
    </div>
    <div id="paginate_bar_right_group">
        @if($choice === "quote")
            <x-icon icon="create"/>
        @elseif($choice === "quote_detail")
            <x-icon icon="edit"/>
            <x-icon icon="delete"/>
        @elseif($choice === "bookshelf")
        @elseif($choice === "bookshelf_detail")
        @elseif($choice === "book")
        @elseif($choice === "book_detail")
        @endif
    </div>
</div>
