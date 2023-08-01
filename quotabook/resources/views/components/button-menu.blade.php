<style>
    .button_menu_box{
        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
        display: inline-block;

        justify-content: center;
        padding: 0.4vw 4.23vw;
        border-radius: .26vw;
        border-bottom: .13vw solid var(--click, #CAC0A8);
        background-color: #FEFEFE;

        font-size: 1.58vw;
        white-space: nowrap;

        transition: 0.5s;
        transition-delay: 0.05s;
    }

    .button_menu_box:hover{
        transform: translate(0.5vw, 0.5vw) rotate(2deg);

        border-bottom: .13vw solid var(--click, #CAC0A8);
        background: var(--click, #CAC0A8);
        color: var(--font-white, #EAEAEA);
    }

    .button_menu_box:active{
        border-bottom: .13vw solid var(--click, #CAC0A8);
        background: var(--font-white, #EAEAEA);
        color: var(--click, #CAC0A8);
    }

    </style>

    <a href='{{route($link_to)}}'>
        <div class="button_menu_box">
            {{$label}}
        </div>
    </a>
