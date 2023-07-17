<style>
    #dec_frame{
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 50%;
        hieght: 100%;
        padding: 0 5%;

        /*     background: blue;  */
    }

    #dec_frame h1 {

    }
    #dec_frame img {
        display: unset;

        width: 20%;
        min-width: 100px;
        height: 100%;

        /* background: blue; */
    }
</style>

<div id="dec_frame">
    @if($choice === "quote")
        <h1>QUOTE</h1>
        <img src="{% static 'pics/memo_man.png' %}">
    @elseif($choice === "bookshelf")
        <h1>BOOK SHELF</h1>
        <img src="{% static 'pics/memo_man.png' %}">
    @elseif($choice === "writing")
        <h1>WRITING</h1>
        <img src="{% static 'pics/memo_man.png' %}">
    @elseif($choice === "managelib")
        <h1>MANAGE LIBRARY</h1>
        <img src="{% static 'pics/memo_man.png' %}">
    @endif
</div>
