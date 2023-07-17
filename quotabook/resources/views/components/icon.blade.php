<style>
    .icon_frame_m {
        display: flex;
        justify-content: center;
        align-items: center;
        pad: .26vw;

        /* background: blue; */
    }

    .icon_frame_s {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1.85vw;
        height: 1.32vw;

        /* background: blue; */
    }

    .quote_bar_icon_m {
        display: flex;
        justify-content: center;
        align-items: center;

        padding: .8vw;

        background: #FFF;
        border-radius: .8vw;
        border: .2vw solid var(--click, #CAC0A8);
        width: 1.85vw;
        height: 1.85vw;
    }

    .quote_bar_icon_s {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        padding: .26vw;

        background: #FFF;
        border-radius: .26vw;
        border: .13vw solid var(--click, #CAC0A8);
    }

    #bookmark{
        width: 1vw;
        height: 1.32vw;
    }
</style>

<a href="{{route($link_to)}}">
    @if ($icon === "bookmark")
        <div class="quote_bar_icon_m">
            <div class="icon_frame_m">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none" id="bookmark">
                    <path d="M0.5 1.875V19.0508C0.5 19.5742 0.925781 20 1.44922 20C1.64453 20 1.83594 19.9414 1.99609 19.8281L8 15.625L14.0039 19.8281C14.1641 19.9414 14.3555 20 14.5508 20C15.0742 20 15.5 19.5742 15.5 19.0508V1.875C15.5 0.839844 14.6602 0 13.625 0H2.375C1.33984 0 0.5 0.839844 0.5 1.875Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "book")
        <div class="quote_bar_icon_m" >
            <div class="icon_frame_m">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none" id="openbook">
                    <path d="M8.66667 15.6135C9.04167 15.7454 9.44444 15.4711 9.44444 15.0753V1.97111C9.44444 1.82528 9.38889 1.67944 9.27083 1.58917C8.59028 1.0475 7.02778 0.353054 5 0.353054C3.24653 0.353054 1.60764 0.81486 0.628472 1.18986C0.236111 1.34264 0 1.73153 0 2.15167V15.0093C0 15.4225 0.444444 15.7107 0.836806 15.5822C1.93056 15.2176 3.66319 14.7975 5 14.7975C6.17708 14.7975 7.74306 15.2836 8.66667 15.6135ZM11.3333 15.6135C12.2569 15.2836 13.8229 14.7975 15 14.7975C16.3368 14.7975 18.0694 15.2176 19.1632 15.5822C19.5556 15.7142 20 15.4225 20 15.0093V2.15167C20 1.73153 19.7639 1.34264 19.3715 1.19333C18.3924 0.81486 16.7535 0.353054 15 0.353054C12.9722 0.353054 11.4097 1.0475 10.7292 1.58917C10.6146 1.67944 10.5556 1.82528 10.5556 1.97111V15.0753C10.5556 15.4711 10.9618 15.7454 11.3333 15.6135Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "calendar")
        <div class="quote_bar_icon_m" >
            <div class="icon_frame_m">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="calendar">
                    <path d="M5.71429 0C6.50446 0 7.14286 0.558594 7.14286 1.25V2.5H12.8571V1.25C12.8571 0.558594 13.4955 0 14.2857 0C15.0759 0 15.7143 0.558594 15.7143 1.25V2.5H17.8571C19.0402 2.5 20 3.33984 20 4.375V6.25H0V4.375C0 3.33984 0.959821 2.5 2.14286 2.5H4.28571V1.25C4.28571 0.558594 4.92411 0 5.71429 0ZM0 7.5H20V18.125C20 19.1602 19.0402 20 17.8571 20H2.14286C0.959821 20 0 19.1602 0 18.125V7.5ZM2.85714 10.625V11.875C2.85714 12.2188 3.17857 12.5 3.57143 12.5H5C5.39286 12.5 5.71429 12.2188 5.71429 11.875V10.625C5.71429 10.2812 5.39286 10 5 10H3.57143C3.17857 10 2.85714 10.2812 2.85714 10.625ZM8.57143 10.625V11.875C8.57143 12.2188 8.89286 12.5 9.28571 12.5H10.7143C11.1071 12.5 11.4286 12.2188 11.4286 11.875V10.625C11.4286 10.2812 11.1071 10 10.7143 10H9.28571C8.89286 10 8.57143 10.2812 8.57143 10.625ZM15 10C14.6071 10 14.2857 10.2812 14.2857 10.625V11.875C14.2857 12.2188 14.6071 12.5 15 12.5H16.4286C16.8214 12.5 17.1429 12.2188 17.1429 11.875V10.625C17.1429 10.2812 16.8214 10 16.4286 10H15ZM2.85714 15.625V16.875C2.85714 17.2188 3.17857 17.5 3.57143 17.5H5C5.39286 17.5 5.71429 17.2188 5.71429 16.875V15.625C5.71429 15.2812 5.39286 15 5 15H3.57143C3.17857 15 2.85714 15.2812 2.85714 15.625ZM9.28571 15C8.89286 15 8.57143 15.2812 8.57143 15.625V16.875C8.57143 17.2188 8.89286 17.5 9.28571 17.5H10.7143C11.1071 17.5 11.4286 17.2188 11.4286 16.875V15.625C11.4286 15.2812 11.1071 15 10.7143 15H9.28571ZM14.2857 15.625V16.875C14.2857 17.2188 14.6071 17.5 15 17.5H16.4286C16.8214 17.5 17.1429 17.2188 17.1429 16.875V15.625C17.1429 15.2812 16.8214 15 16.4286 15H15C14.6071 15 14.2857 15.2812 14.2857 15.625Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "create")
        <div class="quote_bar_icon_m" >
            <div class="icon_frame_m">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="create">
                    <path d="M11.5385 1.53846C11.5385 0.6875 10.851 0 10 0C9.14904 0 8.46154 0.6875 8.46154 1.53846V8.46154H1.53846C0.6875 8.46154 0 9.14904 0 10C0 10.851 0.6875 11.5385 1.53846 11.5385H8.46154V18.4615C8.46154 19.3125 9.14904 20 10 20C10.851 20 11.5385 19.3125 11.5385 18.4615V11.5385H18.4615C19.3125 11.5385 20 10.851 20 10C20 9.14904 19.3125 8.46154 18.4615 8.46154H11.5385V1.53846Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "edit")
        <div class="quote_bar_icon_m" >
            <div class="icon_frame_m">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="edit">
                    <path d="M16.0476 9.03452L16.4896 8.59266L15.1637 7.26711L12.7348 4.83887L11.4089 3.51331L10.9669 3.95517L10.0829 4.83887L2.29167 12.628C1.88489 13.0346 1.58764 13.5391 1.42336 14.0904L0.0387675 18.7983C-0.0590145 19.1267 0.030945 19.4826 0.277356 19.725C0.523767 19.9674 0.875782 20.0574 1.20433 19.9635L5.9096 18.5793C6.46109 18.4151 6.96565 18.1179 7.37242 17.7112L15.1637 9.92213L16.0476 9.03452ZM6.25771 15.6193L5.90178 16.5069C5.74533 16.6281 5.56932 16.7181 5.38158 16.7767L2.32296 17.6761L3.22255 14.6222C3.27731 14.4306 3.37118 14.2546 3.49243 14.1021L4.38029 13.7463V14.9976C4.38029 15.3417 4.6619 15.6232 5.0061 15.6232H6.25771V15.6193ZM14.1859 0.733162L13.6227 1.30014L12.7387 2.18385L12.2928 2.6257L13.6187 3.95126L16.0476 6.37949L17.3736 7.70505L17.8155 7.2632L18.6995 6.37949L19.2666 5.81251C20.2445 4.83496 20.2445 3.25133 19.2666 2.27378L17.7295 0.733162C16.7517 -0.244387 15.1676 -0.244387 14.1898 0.733162H14.1859ZM12.3319 7.3023L6.69968 12.933C6.45718 13.1754 6.05823 13.1754 5.81573 12.933C5.57323 12.6906 5.57323 12.2917 5.81573 12.0493L11.448 6.41859C11.6905 6.17616 12.0894 6.17616 12.3319 6.41859C12.5744 6.66102 12.5744 7.05986 12.3319 7.3023Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "delete")
        <div class="quote_bar_icon_m" >
            <div class="icon_frame_m">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none" id="delete">
                    <path d="M5.53125 0.691406C5.74219 0.265625 6.17578 0 6.64844 0H11.3516C11.8242 0 12.2578 0.265625 12.4688 0.691406L12.75 1.25H16.5C17.1914 1.25 17.75 1.80859 17.75 2.5C17.75 3.19141 17.1914 3.75 16.5 3.75H1.5C0.808594 3.75 0.25 3.19141 0.25 2.5C0.25 1.80859 0.808594 1.25 1.5 1.25H5.25L5.53125 0.691406ZM1.5 5H16.5V17.5C16.5 18.8789 15.3789 20 14 20H4C2.62109 20 1.5 18.8789 1.5 17.5V5ZM5.25 7.5C4.90625 7.5 4.625 7.78125 4.625 8.125V16.875C4.625 17.2188 4.90625 17.5 5.25 17.5C5.59375 17.5 5.875 17.2188 5.875 16.875V8.125C5.875 7.78125 5.59375 7.5 5.25 7.5ZM9 7.5C8.65625 7.5 8.375 7.78125 8.375 8.125V16.875C8.375 17.2188 8.65625 17.5 9 17.5C9.34375 17.5 9.625 17.2188 9.625 16.875V8.125C9.625 7.78125 9.34375 7.5 9 7.5ZM12.75 7.5C12.4062 7.5 12.125 7.78125 12.125 8.125V16.875C12.125 17.2188 12.4062 17.5 12.75 17.5C13.0938 17.5 13.375 17.2188 13.375 16.875V8.125C13.375 7.78125 13.0938 7.5 12.75 7.5Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "firstpage")
        <div class="quote_bar_icon_s" >
            <div class="icon_frame_s">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none" id="firstpage">
                    <path d="M19.2812 15.3823C18.8438 15.5893 18.3242 15.5229 17.9492 15.2104L11.25 9.62837V14.2495C11.25 14.7338 10.9688 15.1752 10.5312 15.3823C10.0938 15.5893 9.57422 15.5229 9.19922 15.2104L2.5 9.62837V14.2495C2.5 14.9409 1.94141 15.4995 1.25 15.4995C0.558594 15.4995 0 14.9409 0 14.2495V1.74946C0 1.05806 0.558594 0.499463 1.25 0.499463C1.94141 0.499463 2.5 1.05806 2.5 1.74946V6.37056L9.19922 0.788526C9.57031 0.479932 10.0898 0.409619 10.5312 0.616651C10.9727 0.823682 11.25 1.26509 11.25 1.74946V6.37056L17.9492 0.788526C18.3203 0.479932 18.8398 0.409619 19.2812 0.616651C19.7227 0.823682 20 1.26509 20 1.74946V14.2495C20 14.7338 19.7188 15.1752 19.2812 15.3823Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "previouspage")
        <div class="quote_bar_icon_s" >
            <div class="icon_frame_s">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none" id="previouspage">
                    <path d="M0.939392 9.05945C0.353699 8.47376 0.353699 7.52259 0.939392 6.9369L6.93689 0.9394C7.36796 0.50833 8.00988 0.38182 8.57215 0.616097C9.13441 0.850375 9.49989 1.3939 9.49989 2.00302V13.998C9.49989 14.6025 9.13441 15.1507 8.57215 15.3849C8.00988 15.6192 7.36796 15.488 6.93689 15.0616L0.939392 9.06414V9.05945Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "nextpage")
        <div class="quote_bar_icon_s" >
            <div class="icon_frame_s">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none" id="nextpage">
                    <path d="M9.06062 9.05945C9.64631 8.47376 9.64631 7.52259 9.06062 6.9369L3.06312 0.9394C2.63205 0.50833 1.99013 0.38182 1.42786 0.616097C0.865594 0.850375 0.500122 1.3939 0.500122 2.00302V13.998C0.500122 14.6025 0.865594 15.1507 1.42786 15.3849C1.99013 15.6192 2.63205 15.488 3.06312 15.0616L9.06062 9.06414V9.05945Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @elseif ($icon === "lastpage")
        <div class="quote_bar_icon_s" >
            <div class="icon_frame_s">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none" id="p">
                    <path d="M0.71875 15.3823C1.15625 15.5893 1.67578 15.5229 2.05078 15.2104L8.75 9.62837V14.2495C8.75 14.7338 9.03125 15.1752 9.46875 15.3823C9.90625 15.5893 10.4258 15.5229 10.8008 15.2104L17.5 9.62837V14.2495C17.5 14.9409 18.0586 15.4995 18.75 15.4995C19.4414 15.4995 20 14.9409 20 14.2495V1.74946C20 1.05806 19.4414 0.499463 18.75 0.499463C18.0586 0.499463 17.5 1.05806 17.5 1.74946V6.37056L10.8008 0.788526C10.4297 0.479932 9.91016 0.409619 9.46875 0.616651C9.02734 0.823682 8.75 1.26509 8.75 1.74946V6.37056L2.05078 0.788526C1.67969 0.479932 1.16016 0.409619 0.71875 0.616651C0.277344 0.823682 0 1.26509 0 1.74946V14.2495C0 14.7338 0.28125 15.1752 0.71875 15.3823Z" fill="#CAC0A8"/>
                </svg>
            </div>
        </div>
    @endif
</a>
