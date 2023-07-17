<style>
    .quote_item {
        display: flex;
        flex-direction: column;
        position: relative;

        width: 302px;
        height: 391px;
        padding: 24px;

        border-radius: 4px;
        border: 4px solid var(--click, #CAC0A8);
        background: #FFF;
        box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.10);
    }

    .quote_item_head {
        display: flex;
        flex-direction: row;
        align-items: center;

        height: 15%;

        /* background: blueviolet; */
    }

    .quote_item_head h2 {
        color: var(--click, #CAC0A8);
        width: 100%;
    }

    .quote_item_body {
        display: flex;
        flex-direction: column;

        height: 100%;

        color: var(--click, #CAC0A8);
        /* background: green; */
    }

    .quote_item_icon {
        display: flex;
        flex-direction: row;
        position: absolute;

        bottom: 24px;
        right: 24px;

        /* background: pink; */
    }
</style>
<div class="quote_item">
    <a href="{{route('quote_detail', $quote->id)}}">
        <div class="quote_item_head">
            <h2>{{ $quote->book }}</h2>
            <div id="bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                    <path d="M0.5 1.875V19.0508C0.5 19.5742 0.925781 20 1.44922 20C1.64453 20 1.83594 19.9414 1.99609 19.8281L8 15.625L14.0039 19.8281C14.1641 19.9414 14.3555 20 14.5508 20C15.0742 20 15.5 19.5742 15.5 19.0508V1.875C15.5 0.839844 14.6602 0 13.625 0H2.375C1.33984 0 0.5 0.839844 0.5 1.875Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
        <div class="quote_item_body">
            <p>{{ $quote->quote }}</p>
        </div>
    </a>
    <div class="quote_item_icon">
        <x-icon icon="edit"/>
        <x-icon icon="delete"/>
    </div>
</div>
