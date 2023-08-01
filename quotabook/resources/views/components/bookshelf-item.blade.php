<style>
    .bookshelf_item_area{
        position: relative;
        width: 100%;
        /* border:1px blue solid; */
    }

    .bookshelf_item_area_a{
        display: flex;
        width: 19.2vw;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* border:1px palegreen solid; */
    }

    .bookshelf_item_topic{
        display: flex;
        max-width: 19.2vw;
        padding: 1.05vw 0vw;
        justify-content: center;
        align-items: center;

        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

        text-align: center;
        font-size: 1.19vw;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        /* border:1px red solid; */
    }

    .bookshelf_item_body{
        display: flex;
        padding: 1.05vw 0.26vw;
        width: 19.2vw;
        flex-direction: column;
        align-items: center;
        gap: .52vw;

        border-radius: .26vw;
        border-top: .52vw solid var(--click, #CAC0A8);
        border-right: .52vw solid var(--click, #CAC0A8);
        border-left: .52vw solid var(--click, #CAC0A8);
        box-sizing: border-box;
    }

    .bookmark{
        display: flex;
        position: absolute;
        left: 1.05vw;
        top: 1.05vw;
        width: 1.05vw;
        height: 1.32vw;
    }

    .floor_left{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        align-self: stretch;
        flex: 1 0 0;
        gap: .26vw;

        height: 7.932vw;
        border-radius: .26vw;
        border-bottom: .52vw solid var(--click, #CAC0A8);

        /* border:1px red solid; */
    }

    .floor_right{
        display: flex;
        justify-content: flex-end;
        align-items: center;
        align-self: stretch;
        flex: 1 0 0;
        gap: .26vw;

        height: 7.932vw;
        border-radius: .26vw;
        border-bottom: .52vw solid var(--click, #CAC0A8);

        /* border:1px red solid; */
    }

    .icon_list{
        display: none;
        padding: .8vw 1.05vw;
        justify-content: center;
        align-items: center;
        gap: .52vw;
        position: absolute;

        border-radius: .52vw;
        background-color: rgba(0, 0, 0, 0.50);

        top:12.33vw;
        left: 2.017vw;
    }

    .bookshelf_item_area:hover .icon_list{
        display: flex;
    }

</style>

<div class="bookshelf_item_area">
    <a href="{{route('book_shelf_detail', '$bookshelf->id')}}" class="bookshelf_item_area_a">
        <div class="bookshelf_item_topic">
            {{$bookshelf->name}}
            {{$bookAmount}}
        </div>
        <div class="bookshelf_item_body">
                @if($bookAmount >= 39)
                    <div class="floor_left">
                        <svg width="2.11vw" height="6.48vw" viewBox="0 0 2.11vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.1227vw" y="0.0225vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(10 16.9763 0.340027)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                    </div>
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.65vw" height="6.48vw" viewBox="0 0 1.65vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.1243vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-5 0 1.87988)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                    </div>
                    <div class="floor_right">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.72vw" height="6.48vw" viewBox="0 0 1.72vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x=".6094vw" y="0.0321vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(5 9.21387 0.485413)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                    </div>
                @elseif($bookAmount >= 20)
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#FFF"/>
                        </svg>
                    </div>
                    <div class="floor_right">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="2.11vw" height="6.48vw" viewBox="0 0 2.11vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.1227vw" y="0.0225vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(10 16.9763 0.340027)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.65vw" height="6.48vw" viewBox="0 0 1.65vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.1243vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-5 0 1.87988)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                    </div>
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.65vw" height="6.48vw" viewBox="0 0 1.65vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.1243vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-5 0 1.87988)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="2.11vw" height="6.48vw" viewBox="0 0 2.11vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.1227vw" y="0.0225vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(10 16.9763 0.340027)" fill="#CAC0A8"/>
                        </svg>
                    </div>
                @elseif($bookAmount >= 10)
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#FFF"/>
                        </svg>
                    </div>
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="2.7vw" height="6.48vw" viewBox="0 0 2.7vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y=".31vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-15 0 4.70612)" fill="#CAC0A8"/>
                        </svg>
                    </div>
                    <div class="floor_right">
                        <svg width="2.71vw" height="6.48vw" viewBox="0 0 2.71vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.66vw" y="0.04vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(15 25.2391 0.565002)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.65vw" height="6.48vw" viewBox="0 0 1.65vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.045vw" y=".12vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-5 0.693939 1.87988)" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                    </div>
                @elseif($bookAmount >= 5)
                    <div class="floor_right">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                    </div>
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="2.7vw" height="6.48vw" viewBox="0 0 2.7vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y=".31vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-15 0 4.70612)" fill="#CAC0A8"/>
                        </svg>
                    </div>
                    
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#FFF"/>
                        </svg>
                    </div>

                @elseif($bookAmount < 5)
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#CAC0A8"/>
                        </svg>
                        <svg width="2.7vw" height="6.48vw" viewBox="0 0 2.7vw 6.48vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y=".31vw" width="1.05vw" height="6.34vw" rx="2" transform="rotate(-15 0 4.70612)" fill="#CAC0A8"/>
                        </svg>

                    </div>
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#FFF"/>
                        </svg>
                    </div>
                    <div class="floor_left">
                        <svg width="1.05vw" height="6.34vw" viewBox="0 0 1.05vw 6.34vw" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="1.05vw" height="6.34vw" rx="2" fill="#FFF"/>
                        </svg></div>
                @endif
        </div>
    </a>
    <div class="bookmark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" fill="none">
            <path d="M0.5 1.875V19.0508C0.5 19.5742 0.925781 20 1.44922 20C1.64453 20 1.83594 19.9414 1.99609 19.8281L8 15.625L14.0039 19.8281C14.1641 19.9414 14.3555 20 14.5508 20C15.0742 20 15.5 19.5742 15.5 19.0508V1.875C15.5 0.839844 14.6602 0 13.625 0H2.375C1.33984 0 0.5 0.839844 0.5 1.875Z" fill="#CAC0A8"/>
        </svg>
    </div>

    <div class="icon_list">
        <x-icon icon=delete model="bookshelf"/>
        <x-icon icon=edit model="bookshelf"/>
        <x-icon icon=create model="bookshelf"/>
    </div>

</div>