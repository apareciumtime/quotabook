<style>
    .quote_item {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-end;
        flex-shrink: 0;

        width: 302px;
        height: 391px;
        padding: 24px;
    }
</style>

<div class="quote_item">
    <div class="quote_item_head">
        <h2>Quote's name</h2>
        <x-icon icon="bookmark"/>
    </div>
    <div class="quote_item_body">
        <p>$content</p>
    </div>
    <div class="quote_item_icon">
        <x-icon icon="edit"/>
        <x-icon icon="delete"/>
    </div>
</div>
