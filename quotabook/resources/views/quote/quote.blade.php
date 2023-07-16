@extends('components.header')
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

    #dec_frame img {
        display: unset;

        width: 20%;
        min-width: 100px;
        height: 100%;

        /* background: blue; */
    }

    /* quote_bar_frame */
    #quote_all {
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 85%;
        height: 100%;
        padding: 0;
        margin-top: 1.5%;

            /* background: pink; */
    }

    #quote_bar {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-items: flex-start;

        width: 100%;
        padding: 0;

            /* background: blue; */
    }

    #quote_bar_1 {
        display: flex;
        flex-direction: row;
        align-items: center;

        width: 30vw;
        /* height: 100vh; */
        padding: 0;

        gap: 5%;
            /* background: lightseagreen; */
    }

    #quote_bar_2 {
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

    #quote_bar_3 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;

        width: 30vw;
        /* height: 100vh; */
        padding: 0;

        /* background: lightseagreen; */
    }

    /* quote_bar_2 1/2 */
    #quote_bar_21 {
        display: flex;
        flex-direction: row;

        gap: 4px;
    }

    #quote_bar_23 {
        display: flex;
        flex-direction: row;

        gap: 4px;
    }

    #quote_bar_22 {
        display: flex;
        justify-content: center;

        width: 20vw;
        min-width: 200px;
        padding: 0;
        margin: 0;

        /* background: red; */
    }

    #quote_bar_22 p {
        text-align: center;

        width: 70%;
        padding: 0;
        margin: 0;

        color: var(--click, #CAC0A8);
    }

    #quote_bar_22 input {
        text-align: right;

        width: 20%;

        font-family: "K2D";
        color: var(--click, #CAC0A8);
        border-radius: 4px;
        border: 2px solid var(--click, #CAC0A8);
    }


    /* quote frame */
    .quote_frame {
        display: flex;
        /* grid-template-columns: auto auto auto auto auto; */

        background: green;
    }
</style>

@section('body')
        <h1>Quote</h1>
        <div id="dec_frame">
            <img src="{% static 'pics/memo_man.png' %}">
        </div>
        <div id="quote_all">
            <div id="quote_bar">
                <div id="quote_bar_1">
                    <x-icon icon="bookmark"/>
                    <x-icon icon="book"/>
                    <x-icon icon="calendar"/>
                </div>
                <div id="quote_bar_2">
                    <div id="quote_bar_21">
                        <x-icon icon="firstpage"/>
                        <x-icon icon="previouspage"/>
                    </div>
                    <div id="quote_bar_22">
                        <p>
                            Page <input placeholder="1"> / xxxx
                        </p>
                    </div>
                    <div id="quote_bar_23">
                        <x-icon icon="nextpage"/>
                        <x-icon icon="lastpage"/>
                    </div>
                </div>
                <div id="quote_bar_3">
                    <x-icon icon="create"/>
                </div>
            </div>

            <div id="quote_frame">
                <x-quote-item content="This is content"/>
            </div>
        </div>
@endsection

