<style>
    .button_menu_box{
        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
        display: inline-block;

        justify-content: center;
        padding: 4px 48px;
        border-radius: 4px;
        border-bottom: 2px solid var(--click, #CAC0A8);
        background-color: #FEFEFE;

        font-family: "K2D";
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        white-space: nowrap;
    }

    .button_menu_box:hover{
        border-bottom: 2px solid var(--click, #CAC0A8);
        background: var(--click, #CAC0A8);
        color: var(--font-white, #EAEAEA);
    }

    .button_menu_box:active{
        border-bottom: 2px solid var(--click, #CAC0A8);
        background: var(--font-white, #EAEAEA);
        color: var(--click, #CAC0A8);
    }

    </style>

    <a href='{{route($link_to)}}'>
        <div class="button_menu_box">
            {{$label}}
        </div>
    </a>
