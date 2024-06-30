@php
use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Some Little Try</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

        /* .left-side-top-title {
            animation: blinker 1s step-end infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        } */

        .left-side-top-title {
            position: relative;
            /* This allows absolute positioning for animation */
            animation: move-and-fade 5s ease-in-out infinite alternate;
            /* Animation definition */
        }

        @keyframes move-and-fade {
            0% {
                opacity: 0;
                transform: translateX(0);
                /* Start from left */
            }

            50% {
                opacity: 1;
                transform: translateX(100%);
                /* Move to right at halfway */
            }

            100% {
                opacity: 0;
                transform: translateX(0);
                /* Move back to left and fade out */
            }
        }

        /* Cards Design */

        .post-card {
            border-radius: 8px;
        }

        .keywords-text-card {
            background: linear-gradient(220.55deg, #FFD439 0%, #FF7A00 100%);
        }

        .long-text-card {
            background: linear-gradient(220.55deg, #3793FF 0%, #0017E4 100%);
        }

        .paid-text-card {
            background: linear-gradient(220.55deg, #FF896D 0%, #D02020 100%);
        }


        a.login-to-see-more:hover {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }



        .swiper-section {
            margin-top: 50px;
            overflow: auto;
            overflow-x: hidden;
            margin-bottom: 50px;
        }

        .swiper {
            /* aspect-ratio:4/1; */
            /* min-height: 400px;
        max-height: 450px; */
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */
            display: flex !important;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        .swiper-container {
            max-width: 1200px;
            padding: 0 20px;
            margin: 0 auto;
        }

        .keywords-text-card {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            min-height: 400px;
            border-radius: 4px;
        }

        .long-text-card {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            min-height: 800px;
            border-radius: 4px;
        }

        .post-title {
            font-size: 18px;
            margin-bottom: 20px;
            margin-top: 10px;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }

        .post-content {
            padding: 0 20px;
            text-align: justify;
        }

        .view-more-btn {
            display: none;
            /* Initially hide the button */
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            margin: 10px 0 0 0;
        }

        .view-more-btn:hover {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .sticky-top {
                padding: 0 0 0 0 !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .contact-info {
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 0px;
                font-size: 14px;
            }

            .navbar-brand {
                padding-bottom: 0px;
            }

            .brand-logo {
                font-size: 22px;
            }

            .navbar-custom.container {
                padding-left: 30px;
                padding-right: 30px;
            }

            .sticky-top {
                padding: 0 0 8px 0 !important;
            }
        }

        /* New Hero Section */
        section.hero-section {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin: 42px 0;
            border: 5px solid white;
            padding: 20px;
        }

        h4.hero-text {
            margin-bottom: 42px;
            font-family: "Brush Script MT", cursive;
            font-size: 42px;
            color: #ffffff;
            text-transform: capitalize;
        }

        .hero-boxes {
            display: flex;
            gap: 42px;
            justify-content: center;
            align-items: center;
        }

        .hero-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .hero-box-shape {
            width: 42px;
            height: 42px;
            border-radius: 4px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .hero-box-shape.yellow {
            background: linear-gradient(220.55deg, #FFD439 0%, #FF7A00 100%);
        }

        .hero-box-shape.blue {
            background: linear-gradient(220.55deg, #3793FF 0%, #0017E4 100%);
        }

        .hero-box-shape.red {
            background: linear-gradient(220.55deg, #FF896D 0%, #D02020 100%);
        }

        .hero-box-shape.green {
            background: linear-gradient(220.55deg, #00FF00 0%, #007D00 100%);
        }

        p.read-instruction {
            margin-bottom: 20px;
        }

        .hero-box p {
            text-align: center;
        }

        .hero-box p a:hover {
            color: #ffffff;
            opacity: 0.8;
            text-decoration: none;
        }

        @media only screen and (max-width: 768px) {

            h4.hero-text {
                margin-bottom: 24px;
                font-size: 24px;
            }

            .hero-boxes {
                gap: 15px;
            }

            .hero-box p {
                text-align: center;
            }

            .swiper-container {
                padding: 0 10px;
            }
        }

        @media only screen and (max-width: 420px) { 
            h4.hero-text {
                margin-bottom: 20px;
                font-size: 20px;
            }

            p.read-instruction{
                font-size: 14px;
            }

            .hero-box-shape {
                height: 34px;
                width: 34px;
            }

            .hero-boxes {
                gap: 8px;
            }

            .hero-box p {
                text-align: center;
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 370px) { 
            .hero-box p {
                text-align: center;
                font-size: 12px;
            }
        }

    </style>
</head>

<body class="antialiased">
    <div class="sticky-top" style="background-color: #121214;">

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
            <a class="navbar-brand brand-logo" href="{{ route('index') }}">Anyonow</a>
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
        <section class="hero-section">
            <h4 class="hero-text">Creation is anything you are.</h4>
            <p class="read-instruction">
                Note: Please choose your interest area to read.
            </p>
            <div class="hero-boxes">
                <div class="hero-box">
                    <div id="yellowBox" class="hero-box-shape yellow"></div>
                    <p><a href="#" id="moveYellowLink">Keywords Section</a></p>
                </div>
                <div class="hero-box">
                    <div id="blueBox" class="hero-box-shape blue"></div>
                    <p><a href="#" id="moveBlueLink">Long Text Section</a></p>
                </div>
                <div class="hero-box">
                    <div id="redBox" class="hero-box-shape red"></div>
                    <p><a href="#" id="moveRedLink">Premium Text Section</a></p>
                </div>
                <div class="hero-box">
                    <div id="greenBox" class="hero-box-shape green"></div>
                    <p><a href="#" id="moveGreenLink">Graphics Section</a></p>
                </div>
            </div>
        </section>

        <section id="keywords" class="swiper-section">
            <div class="swiper-container">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($wordstextPosts as $post)
                        <div class="swiper-slide">
                            <div class="keywords-text-card">
                                <p class="post-title">{{ $post->title }}</p>
                                <div class="post-content" style="font-size: 14px;" data-full-content="{{ $post->body }}">
                                    {!! Str::limit($post->body, 550) !!}
                                </div>
                                @if(Str::length($post->body) > 550)
                                <a class="view-more-btn">View More</a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

        <section id="longtext" class="swiper-section">
            <div class="swiper-container">
                <div class="swiper1">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($longtextPosts as $post)
                        <div class="swiper-slide">
                            <div class="long-text-card">
                                <p class="post-title">{{ $post->title }}</p>
                                <div class="post-content" style="font-size: 14px;" data-full-content="{{ $post->body }}">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper1-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper1-button-prev"></div>
                    <div class="swiper1-button-next"></div>
                </div>
            </div>
        </section>


        <section id="longtext" style="width:100%; height: 600px; margin: 42px 0; background: blue;">
            This is blue
        </section>

        <section id="premiumtext" style="width:100%; height: 600px; margin: 42px 0; background: red;">
            This is red
        </section>

        <section id="graphicstext" style="width:100%; height: 600px; margin: 42px 0; background: green;">
            This is green
        </section>



        <div class="row">
            <div class="col-md-4">
                test
            </div>
            <div class="col-md-4">
                @foreach($longtextPosts as $post)
                <div class="card post-card long-text-card">
                    <div class="card-header post-title">{{ $post->title }}</div>
                    <div class="card-body" style="font-size: 14px;">
                        <p class="card-text post-body">{!! $post->body !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($paidtextPosts as $post)
                <div class="card post-card paid-text-card">
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
                        <a href="#" class="show-more">Read more</a>
                        @else
                        <a href="{{ route('login') }}" class="login-to-see-more">Read more</a>
                        @endauth
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- JS to move boxes to specific section -->
    <script>
        $(document).ready(function(){
            function scrollToSection(sectionId) {
                var offset = 130; // Adjust this value as needed
                $('html, body').animate({
                    scrollTop: $(sectionId).offset().top - offset
                }, 1000); // Adjust the speed (in milliseconds) as needed
            }

            $("#yellowBox").click(function(){
                scrollToSection("#keywords");
            });

            $("#moveYellowLink").click(function(event){
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#keywords");
            });

            $("#blueBox").click(function(){
                scrollToSection("#longtext");
            });

            $("#moveBlueLink").click(function(event){
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#longtext");
            });

            $("#redBox").click(function(){
                scrollToSection("#premiumtext");
            });

            $("#moveRedLink").click(function(event){
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#premiumtext");
            });

            $("#greenBox").click(function(){
                scrollToSection("#graphicstext");
            });

            $("#moveGreenLink").click(function(event){
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#graphicstext");
            });
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const swiper = new Swiper(".swiper", {
            // Optional parameters
            slidesPerView: 1,
            // spaceBetween: 30,
            loop: true,
            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            mousewheel: {
                releaseOnEdges: true,
                eventsTarget: "container",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    // spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>

    <script>
        const swiper1 = new Swiper(".swiper1", {
            // Optional parameters
            pagination: {
                el: ".swiper1-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper1-button-next",
                prevEl: ".swiper1-button-prev",
            },
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.post-content').forEach(function(content) {
                const fullContent = content.getAttribute('data-full-content');
                const viewMoreBtn = content.nextElementSibling;

                if (fullContent.length > 550) {
                    viewMoreBtn.style.display = 'inline-block';
                }

                // viewMoreBtn.addEventListener('click', function() {
                //     if (viewMoreBtn.textContent === 'View More') {
                //         content.textContent = fullContent;
                //         viewMoreBtn.textContent = 'View Less';
                //     } else {
                //         content.textContent = fullContent.substring(0, 400) + '...';
                //         viewMoreBtn.textContent = 'View More';
                //     }
                // });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.show-more').forEach(function(link) {
                link.addEventListener('click', function(event) {
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