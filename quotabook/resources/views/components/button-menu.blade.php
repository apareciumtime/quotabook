<style>
.button_menu_box{
    display: inline-block;
    padding: 16px 32px;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    border-bottom: 2px solid var(--click, #CAC0A8);
    background-color: #FEFEFE;
    /* border: 1px red solid; */
}

.button_menu_box_label{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
    display: inline-block;
    font-family: "K2D";
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* border: 1px red solid; */
}

</style>

<a href='{{route($link_to)}}'>
<div class="button_menu_box">
    <div class="button_menu_box_label">
        {{$label}}
    </div>
</div>
</a>