<style>
    #paginate_bar {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-items: flex-start;

        width: 100%;
        padding: 0;

            /* background: blue; */
    }

    #paginate_bar_left_group {
        display: flex;
        flex-direction: row;
        align-items: center;

        width: 358px;
        /* height: 100vh; */
        padding: 0;

        gap: 5%;
        /* background: lightseagreen; */
    }

    #paginate_bar_middle_group {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;

        width: unset;
        /* height: 100vh; */
        padding: 0;
        margin: 0;

        gap: 64px;

        /* background: seagreen; */
    }

    #paginate_bar_right_group {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;

        width: 358px;
        /* height: 100vh; */
        padding: 0;
        gap: 5%;

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

        gap: 4px;
    }

    #paginate_bar_middle_text_group {
        display: flex;
        justify-content: center;

        width: ;
        /* min-width: 200px; */
        padding: 0;
        margin: 0;

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
