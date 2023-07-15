<style>
.button_menu_box{
    display: flex;
    padding: 16px 64px;
    align-items: center;
    border-radius: 4px;
    border-bottom: 2px solid var(--click, #CAC0A8);
    background-color: #FEFEFE;
}

.button_menu_box_label{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-family: "K2D";
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

</style>

<a href='{{route($link_to)}}'>
<div class="button_menu_box">
    <div class="button_menu_box_label">
        {{$label}}
    </div>
</div>
</a>