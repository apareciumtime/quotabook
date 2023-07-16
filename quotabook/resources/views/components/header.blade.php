<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=K2D:400|Fahkwang:300|Kanit:300|DM Sans:400" rel="stylesheet">
        <link rel = "stylesheet" href = "/css/home.css">
    <style>
        body{
            margin:0;
            font-family: "K2D";
            /* border: 1px red solid; */
        }
        a{
            text-decoration: none;
        }

        .header_box{
            display:flex;
            padding: 4px 32px;
            align-items: center;
            background-color: #F0F0F0;
            gap:32px;
            min-width: fit-content;
            /* border: 1px red solid; */
        }
        .header_box_menu_list{
            display: flex;
            justify-content:center;
            align-items: center;
            gap:32px;
            align-self: stretch;
            flex: 1 0 0;
            /* border: 1px red solid; */
        }

        .header_box_user_bar{
            display: flex;
            flex-direction: column;
            gap: 4px;
            /* border: 1px red solid; */
        }

        .user_bar_profilePic_name{
            display: flex;
            gap: 8px;
            /* border: 1px red solid; */
        }
        
        .profilePic{
            width: 28px;
            height: 28px;
            border-radius: 4px;
            background: var(--font-white, #EAEAEA);
            /* border: 1px red solid; */
        }

        .name{
            display: flex;
            flex-direction: column;
            gap: 4px;

            overflow: hidden;
            color: var(--font-primary-black, #0E0E0E);

            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;

            /* border: 1px red solid; */
        }

        .displayname{
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            /* border: 1px red solid; */
        }

        .username{
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;

            overflow: hidden;
            color: rgba(14, 14, 14, 0.20);

            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            /* border: 1px red solid; */
        }

        .user_bar_menu{
            display: flex;
            flex-direction: column;
            gap: 8px;
            /* border: 1px red solid;   */
        }

        .menu{
            color: var(--click, #CAC0A8);

            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            /* border: 1px red solid; */
        }

        .body_box {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 90vw;
            /* border: 1px blue solid; */
        }
    </style>
</head>
<body>
<!-- @if (Auth::guest())
hello
@else -->
    <div class="header_box">
        <a href="/">
            <div class="header_box_logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                    <path d="M64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32Z" fill="#CAC0A8"/>
                    <path d="M42.888 50.44C41.896 50.44 40.984 50.2 40.152 49.72C39.32 49.24 38.648 48.6 38.136 47.8C35.96 48.888 33.608 49.432 31.08 49.432C28.456 49.432 26.056 48.904 23.88 47.848C21.736 46.792 20.04 45.368 18.792 43.576C17.544 41.784 16.92 39.816 16.92 37.672V26.68C16.92 24.536 17.528 22.568 18.744 20.776C19.992 18.984 21.688 17.576 23.832 16.552C26.008 15.496 28.424 14.968 31.08 14.968C33.736 14.968 36.136 15.496 38.28 16.552C40.456 17.576 42.152 18.984 43.368 20.776C44.616 22.568 45.24 24.536 45.24 26.68V37.672C45.24 39.112 44.952 40.488 44.376 41.8C43.832 43.08 43.032 44.2 41.976 45.16C42.424 45.768 43.016 46.232 43.752 46.552C44.52 46.84 45.32 46.952 46.152 46.888C46.152 48.104 45.88 49 45.336 49.576C44.824 50.152 44.008 50.44 42.888 50.44ZM38.424 40.696C39.128 39.896 39.48 38.872 39.48 37.624V26.776C39.48 24.728 38.712 23.096 37.176 21.88C35.672 20.632 33.64 20.008 31.08 20.008C28.52 20.008 26.472 20.632 24.936 21.88C23.432 23.096 22.68 24.728 22.68 26.776V35.32C23.928 34.904 25.112 34.696 26.232 34.696C28.824 34.696 31.064 35.144 32.952 36.04C34.872 36.936 36.696 38.488 38.424 40.696ZM31.08 44.44C32.488 44.44 33.864 44.2 35.208 43.72C33.896 41.832 32.552 40.568 31.176 39.928C29.8 39.288 28.056 38.968 25.944 38.968C25.112 38.968 24.12 39.144 22.968 39.496C23.448 41 24.392 42.2 25.8 43.096C27.24 43.992 29 44.44 31.08 44.44Z" fill="white"/>
                </svg>
            </div>
        </a>
        <div class="header_box_menu_list">
            <x-button-menu label="QUOTE"/>
            <x-button-menu label="BOOK SHELF"/>
            <x-button-menu label="WRITING"/>
            <x-button-menu label="MANAGE LIBRARY"/>
        </div>
        <div class="header_box_user_bar">
            <div class="user_bar_profilePic_name">
                <div class="profilePic">

                </div>
                <div class="name">
                    <div class="displayname">
                        Displayname
                    </div>
                    <div class="username">
                        @username
                    </div>
                </div>
            </div>
            <div class="user_bar_menu">
                <div class="menu">
                    ตั้งค่าบัญชีผู้ใช้
                </div>
                <div class="menu">
                    ออกจากระบบ
                </div>
            </div>
        </div>
    </div>
    <!-- @endif -->

    <div class="body_box">
        @yield('body')
    </div>
</body>
