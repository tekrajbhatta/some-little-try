<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Some Little Try</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #37373d;
            font-family: "Open Sans", sans-serif;
            color: #ffffff;
        }

        .top-bar {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
        }

        .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .contact-info .phone,
        .contact-info .email {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-info a:hover {
            color: #e2e8f0;
        }

        .contact-info .phone {
            font-weight: 400;
        }

        .navbar-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-logo {
            font-family: "Brush Script MT", cursive;
            font-size: 28px;
            color: #ffffff;
        }

        .brand-logo:hover {
            color: #ffffff;
            opacity: 0.8;
        }

        .dashboard-text:hover {
            color: #ffffff;
            opacity: 0.8;
        }

        .login-button {
            float: right;
        }

        .post-card {
            background-color: #242529;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .post-title {
            font-size: 20px;
            font-weight: bold;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .post-body {
            font-size: 14px;
            /* line-height: 1; */
            padding-bottom: 5px;
        }

        @media (max-width: 768px) {
            .navbar-nav .dropdown-menu {
                width: 20%;
                padding-left: 10px;
                float: left;
            }
        }

        .left-side-top-title {
            animation: blinker 1s step-end infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

    </style>
</head>

<body class="antialiased">
    <div class="sticky-top" style="background-color: #121214; padding: 0 0 8px 0;">

        <div class="" style="background-color: #37373d; padding: 6px 0;">
            <div class="container">
                <div class="contact-info">
                    <span>You may have anything:</span>
                    <span class="phone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <a href="tel:+977 9841879827" class="phone">+977 9841879827</a>
                    </span>
                    <span class="email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <a href="mailto:omuamua07@gmail.com" class="email">omuamua07@gmail.com</a>
                    </span>
                </div>
            </div>
        </div>

        <div class="navbar-custom container">
            <a class="navbar-brand brand-logo" href="{{ route('index') }}">Some Little Try</a>
            <a class="login-button">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-white-700 light:text-white-500 underline dashboard-text">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-white light:text-white-500 underline">Log In</a>
                @endauth
                @endif
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="left-side-top-title" style="padding: 20px 0; font-weight: bold; text-decoration: underline;">WORDS</h4>
                @foreach($wordstextPosts as $post)
                <div class="card post-card">
                    <div class="card-header post-title">{{ $post->title }}</div>
                    <div class="card-body" style="font-size: 14px;">
                        <p class="card-text post-body">{!! $post->body !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <h4 class="left-side-top-title" style="padding: 20px 0; font-weight: bold; text-decoration: underline;"></h4>
                @foreach($longtextPosts as $post)
                <div class="card post-card">
                    <div class="card-header post-title">{{ $post->title }}</div>
                    <div class="card-body" style="font-size: 14px;">
                        <p class="card-text post-body">{!! $post->body !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($paidtextPosts as $post)
                <div class="card post-card">
                    <div class="card-header post-title">{{ $post->title }}</div>
                    <div class="card-body" style="font-size: 14px;">
                        @php
                            $truncatedBody = Str::limit(strip_tags($post->body), 200);
                            $isTruncated = strlen(strip_tags($post->body)) > 200;
                        @endphp
                        <p class="card-text post-body" data-full-text="{!! htmlentities($post->body) !!}" data-truncated-text="{!! htmlentities($truncatedBody) !!}">
                            {!! $truncatedBody !!}
                        </p>
                        @if($isTruncated)
                            @auth
                                <a href="#" class="show-more">Show more</a>
                            @else
                                <a href="{{ route('login') }}" class="login-to-see-more">Show more</a>
                            @endauth
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.show-more').forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const p = link.previousElementSibling;
                    const fullText = p.getAttribute('data-full-text');
                    const truncatedText = p.getAttribute('data-truncated-text');
                    if (link.textContent === 'Show more') {
                        p.innerHTML = fullText;
                        link.textContent = 'Show less';
                    } else {
                        p.innerHTML = truncatedText;
                        link.textContent = 'Show more';
                    }
                });
            });
        });
    </script>
</body>
</html>