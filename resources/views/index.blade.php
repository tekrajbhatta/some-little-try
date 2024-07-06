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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
            background-color: #111111f2;
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
            /* background: linear-gradient(220.55deg, #FFD439 0%, #FF7A00 100%); */
            background-color: #00000063;
            color: #ffffffd9;
        }

        .long-text-card {
            /* background: linear-gradient(220.55deg, #3793FF 0%, #0017E4 100%); */
            background-color: #00000063;
            color: #ffffffd9;
        }

        .paid-text-card {
            /* background: linear-gradient(220.55deg, #FF896D 0%, #D02020 100%); */
            background-color: #00000063;
            color: #ffffffd9;
        }

        #graphicstext {
            /* background: linear-gradient(220.55deg, #00FF00 0%, #007D00 100%); */
            background-color: #00000063 !important;
            color: #ffffffd9 !important;
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
            min-height: 560px;
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
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
            /* margin: 0 0 42px 0; */
            margin: 42px 0;
            /* border: 5px solid white; */
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
            font-size: larger;
        }

        .hero-box p {
            text-align: center;
        }

        .hero-box p a:hover {
            color: #ffffff;
            opacity: 0.8;
            text-decoration: none;
        }

        /* Moving Words */
        /* .scroll-section {
            width: 300px; 
            overflow: hidden;
            white-space: nowrap;
            border: 1px solid #ccc;
            margin: 20px auto;
        }

        .scroll-content {
            display: inline-block;
            white-space: nowrap;
            transition: transform 1s ease-in-out;
        }

        .scroll-content span {
            display: inline-block;
            width: 100px; 
            text-align: center;
        } */

        /* @keyframes infiniteScroll {
        from {transform: translateX(0)}
        to {transform: translateX(-50%)}
        }
        .moving-container {
        width: 400px;
        overflow-x: hidden;
        }
        .horizontal-scrolling-items {
        display: flex;
        gap: 30px;
        font-size: 20px;
        width: 2600px;
        animation-name: infiniteScroll;
        animation-duration: 20s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        }
        .horizontal-scrolling-items__item {
        white-space: nowrap;
        } */

        section.moving-section {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
            margin: 42px 0;
            padding: 2px;
        }

        .scroller {
            /* width: 100%; */
            max-width: 600px;
        }

        .scroller__inner {
            padding-block: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .scroller[data-animated="true"] {
            overflow: hidden;
            -webkit-mask: linear-gradient(90deg,
                    transparent,
                    white 20%,
                    white 80%,
                    transparent);
            mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
        }

        .scroller[data-animated="true"] .scroller__inner {
            width: max-content;
            flex-wrap: nowrap;
            animation: scroll var(--_animation-duration, 40s) var(--_animation-direction, forwards) linear infinite;
        }

        .scroller[data-direction="right"] {
            --_animation-direction: reverse;
        }

        .scroller[data-direction="left"] {
            --_animation-direction: forwards;
        }

        .scroller[data-speed="fast"] {
            --_animation-duration: 20s;
        }

        .scroller[data-speed="slow"] {
            --_animation-duration: 60s;
        }

        @keyframes scroll {
            to {
                transform: translate(calc(-50% - 0.5rem));
            }
        }

        /* general styles */

        :root {
            --clr-neutral-100: hsl(0, 0%, 100%);
            --clr-primary-100: hsl(205, 15%, 58%);
            --clr-primary-400: hsl(215, 25%, 27%);
            --clr-primary-800: hsl(217, 33%, 17%);
            --clr-primary-900: hsl(218, 33%, 9%);
        }

        .tag-list {
            margin: 0;
            padding-inline: 0;
            list-style: none;
        }

        .tag-list li {
            padding: 4px 12px;
            background: #f0f0f0;
            border-radius: 0.5rem;
            color: #333;
            box-shadow: 0 0.5rem 1rem -0.25rem var(--clr-primary-900);
        }




        /* Hero Right */
        /* Styling the container */

        .hero-left {
            flex-basis: 70%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .hero-right {
            flex-basis: 30%;
            /* padding: 20px; */
            background-color: #fff;
            /* Background color for the container */
            border-radius: 10px;
            /* Rounded corners for the container */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow for the container */
        }

        /* Styling the unordered list */
        .hero-right-items {
            list-style-type: none;
            /* Remove default bullets */
            padding: 0;
            /* Remove default padding */
            margin: 0;
            /* Remove default margin */
        }

        /* Styling the list items */
        .hero-right-item {
            background-color: #f0f0f0;
            /* Light grey background for list items */
            margin: 5px 0;
            /* Space between list items */
            padding: 5px 15px;
            /* Padding inside list items */
            border-radius: 5px;
            /* Rounded corners */
            color: #333;
            /* Text color */
            font-size: 16px;
            /* Font size */
            transition: background-color 0.3s;
            /* Smooth transition for background color */
        }

        /* Add hover effect to list items */
        .hero-right-item:hover {
            background-color: #ccc;
            /* Darker grey background on hover */
            cursor: pointer;
            /* Pointer cursor on hover */
        }

        @media only screen and (min-width: 1202px) {
            .hero-boxes {
                justify-content: flex-start;
            }
            
        }

        @media only screen and (max-width: 1202px) {
            .hero-left {
                /* flex-basis: unset; */
                /* display: flex;
                flex-direction: column;
                align-items: flex-start; */
            }

            .hero-boxes {
                justify-content: flex-start;
            }

            .hero-right {
                /* flex-basis: unset; */
            }

            .scroller {
                /* width: 100%; */
                max-width: 400px;
            }
         }


        @media only screen and (max-width: 992px) {
        
            h4.hero-text {
                font-size: 32px;
            }

            .hero-left {
                /* flex-basis: unset; */
                /* display: flex;
                flex-direction: column;
                align-items: flex-start; */
            }

            .hero-right {
                /* flex-basis: unset; */
            }

            .scroller {
                /* width: 100%; */
                max-width: 350px;
            }
        }

        @media only screen and (max-width: 778px) {

            section.hero-section {
                flex-direction: column;
                align-items: center;
            }
        
            .hero-left {
                flex-basis: unset;
                /* align-items: center; */
                /* display: flex;
                flex-direction: column;
                align-items: flex-start; */
            }

            .hero-right {
                flex-basis: unset;
            }

            .hero-right-items {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .scroller {
                /* width: 100%; */
                max-width: 270px;
            }
        }

        @media only screen and (max-width: 576px) {
        
            .hero-left {
                flex-basis: unset;
                /* display: flex;
                flex-direction: column;
                align-items: flex-start; */
            }

            .hero-right {
                flex-basis: unset;
            }

            .hero-right-items {
                gap: 5px;
            }

            .scroller {
                /* width: 100%; */
                max-width: 240px;
            }
        }

        .swiper-container {
            padding: 0px 0px !important;
        }

        @media only screen and (max-width: 768px) {

            section.hero-section {
                border: 1px solid white;
                gap: 20px;
            }

            .swiper-container {
                padding: 0px 0px !important;
            }

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

            p.read-instruction {
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

        /* Multiple swiperjs instances */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff !important;
        }

        .swiper-button-next.s2,
        .swiper-button-prev.s2 {
            color: #fff !important;
        }


        /* Footer CSS */
        footer {
            background: #111;
            height: auto;
            width: 100vw;
            padding-top: 40px;
            color: #fff;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .footer-content h3 {
            font-size: 2.1rem;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 3rem;
        }

        .footer-content p {
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
            color: #cacdd2;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: #fff;
            padding: 5px;
        }

        .socials a i {
            font-size: 1.1rem;
            width: 20px;
            transition: color 0.4s ease;
        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            background: #000;
            width: 100vw;
            padding: 20px;
            padding-bottom: 40px;
            text-align: center;
        }

        .footer-bottom p {
            float: left;
            font-size: 14px;
            word-spacing: 2px;
        }

        .footer-bottom p a {
            color: #ccc;
            font-size: 16px;
            text-decoration: none;
        }

        .footer-bottom span {
            text-transform: uppercase;
        }

        .footer-menu {
            float: right;
        }

        .footer-menu ul {
            display: flex;
        }

        .footer-menu ul li {
            padding-right: 10px;

            display: block;
        }

        .footer-menu ul li a {
            color: #cfd2d6;

            text-decoration: none;
        }

        .footer-menu ul li a:hover {
            color: #27bcda;
        }

        @media (max-width: 500px) {
            .footer-bottom p {
                float: none;
            }

            .footer-menu ul {
                display: flex;
                margin-top: 10px;
                margin-bottom: 20px;
                text-align: center;
            }
        }

        /* New Header and Topbar Design */
        .sticky-top {
            background-color: #000;
        }

        .topbar {
            background-color: #111;
            padding: 4px 0;
        }

        a#moveYellowLink,
        a#moveBlueLink,
        a#moveRedLink,
        a#moveGreenLink {
            transition: background 0.3s ease, -webkit-text-fill-color 0.3s ease;
        }

        a#moveYellowLink:hover {
            background: linear-gradient(220.55deg, #FFD439 0%, #FF7A00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        a#moveBlueLink:hover {
            background: linear-gradient(220.55deg, #3793FF 0%, #0017E4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        a#moveRedLink:hover {
            background: linear-gradient(220.55deg, #FF896D 0%, #D02020 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        a#moveGreenLink:hover {
            background: linear-gradient(220.55deg, #00FF00 0%, #007D00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Paid Course Cards */

        .paid-text-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 210px;
        }

        .card-header.post-title {
            min-height: 65px;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .f-menu li:not(:last-child)::after {
            content: '|';
            padding-left: 10px;
        }

        .footer-bottom {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer-bottom .container p {
            margin-bottom: 0px;
        }

        .footer-menu .f-menu {
            margin-bottom: 0px;
        }

        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media only screen and (max-width: 1000px) {
            .footer-bottom .container {
                display: flex;
                flex-direction: column;
            }
        }

        @media only screen and (max-width: 768px) {

            .footer-bottom {
                padding-top: 30px;
                padding-bottom: 30px;
            }

            .f-menu li:not(:last-child)::after {
                content: '';
                padding-left: 10px;
            }

            .footer-menu .f-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 5px;
            }
        }

        /* Scroll to top */
        #scrollToTopBtn {
            display: none;
            position: fixed;
            bottom: 60px;
            right: 60px;
            z-index: 99;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            background-color: white;
            color: black;
            justify-content: center;
            align-items: center;
        }

        #scrollToTopBtn svg {
            fill: black;
            /* SVG icon color */
            width: 16px;
            height: 16px;
        }

        #scrollToTopBtn:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body class="antialiased">
    <div class="sticky-top">
        <div class="topbar">
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
                        <a href="mailto:naherukever@gmail.com" class="email">naherukever@gmail.com</a>
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
        <!-- <section class="moving-section">
            <div class="scroller" data-speed="fast">
                <ul class="tag-list scroller__inner">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>SSG</li>
                    <li>webdev</li>
                    <li>animation</li>
                    <li>UI/UX</li>
                </ul>
            </div>
        </section> -->
        <section class="hero-section">
            <!-- <div class="hero-container"> -->
            <div class="hero-left">
                <h4 class="hero-text">Creation is anything you are.</h4>
                <div class="box-area">
                    <p class="read-instruction">
                        Spaces you click
                    </p>
                    <div class="hero-boxes">
                        <div class="hero-box">
                            <div id="yellowBox" class="hero-box-shape yellow"></div>
                            <p><a href="#" id="moveYellowLink">Illusion</a></p>
                        </div>
                        <div class="hero-box">
                            <div id="blueBox" class="hero-box-shape blue"></div>
                            <p><a href="#" id="moveBlueLink">Any Time</a></p>
                        </div>
                        <div class="hero-box">
                            <div id="redBox" class="hero-box-shape red"></div>
                            <p><a href="#" id="moveRedLink">Energy</a></p>
                        </div>
                        <div class="hero-box">
                            <div id="greenBox" class="hero-box-shape green"></div>
                            <p><a href="#" id="moveGreenLink">Graphics</a></p>
                        </div>
                    </div>
                    <!-- Moving Words -->
                    <div class="moving-words">
                        <!-- <div class="moving-container">
                            <div class="horizontal-scrolling-items">
                                <div class="horizontal-scrolling-items__item">
                                    Word 1
                                </div>
                                <div class="horizontal-scrolling-items__item">
                                    Word 2
                                </div>
                                <div class="horizontal-scrolling-items__item">
                                    Word 3
                                </div>
                                <div class="horizontal-scrolling-items__item">
                                    Word 11
                                </div><div class="horizontal-scrolling-items__item">
                                    Word 22
                                </div>
                                <div class="horizontal-scrolling-items__item">
                                    Word 33
                                </div><div class="horizontal-scrolling-items__item">
                                    Word 111
                                </div>
                                <div class="horizontal-scrolling-items__item">
                                    Word 222
                                </div><div class="horizontal-scrolling-items__item">
                                    Word 333
                                </div>
                            </div>
                        </div> -->
                        <div class="scroller" data-speed="fast">
                            <ul class="tag-list scroller__inner">
                                <li>Spaces</li>
                                <li>Anything</li>
                                <li>Motion</li>
                                <li>Blank</li>
                                <li>Silence</li>
                                <li>Sounds</li>
                                <li>Colors</li>
                                <li>Illution</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="hero-right">
                <ul class="hero-right-items">
                    <li class="hero-right-item">Any life a while</li>
                    <li class="hero-right-item">You know are not</li>
                    <li class="hero-right-item">Anything - motion</li>
                    <li class="hero-right-item">Know yourself</li>
                    <li class="hero-right-item">Time and energy</li>
                    <li class="hero-right-item">Sounds, sensation</li>
                    <li class="hero-right-item">Links silence</li>
                    <li class="hero-right-item">Among life</li>
                    <li class="hero-right-item">Could be anything</li>
                    <li class="hero-right-item">Gravity</li>
                </ul>
            </div>
            <!-- </div> -->
        </section>

        <section id="keywords" class="swiper-section">
            <div class="swiper-container">
                <div class="swiper s1">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($wordstextPosts as $post)
                        <div class="swiper-slide">
                            <div class="keywords-text-card">
                                <p class="post-title">{{ $post->title }}</p>
                                <div class="post-content" style="font-size: 14px;">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev s1"></div>
                    <div class="swiper-button-next s1"></div>
                </div>
            </div>
        </section>


        <section id="longtext" class="swiper-section">
            <div class="swiper-container">
                <div class="swiper s2">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($longtextPosts as $post)
                        <div class="swiper-slide">
                            <div class="long-text-card">
                                <p class="post-title">{{ $post->title }}</p>
                                <div class="post-content" style="font-size: 14px;">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev s2"></div>
                    <div class="swiper-button-next s2"></div>
                </div>
            </div>
        </section>

        <section id="premiumtext">
            <div class="row">
                @foreach($paidtextPosts as $post)
                <div class="col-md-4">
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
                </div>
                @endforeach
            </div>
        </section>

        <section id="graphicstext" style="width:100%; height: 600px; margin: 42px 0; background: green; display: flex; align-items:center; justify-content: center; ">
            <p style="font-size: 24px; ">
                Graphics are coming soon...
            </p>
        </section>

    </div>

    <footer>
        <div class="footer-content">
            <div class="container">
                <h3>Get Connected</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae felis scelerisque, gravida sapien non, cursus augue. Aenean id pretium turpis. Suspendisse eros nunc, sollicitudin nec.</p>
                <ul class="socials">
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                                <path d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright &copy <span id="year"></span> <a href="#">@anyonow</a> </p>
                <div class="footer-menu">
                    <ul class="f-menu">
                        <li><a href="" id="moveYellowLink">Illusion</a></li>
                        <li><a href="" id="moveBlueLink">Any Time</a></li>
                        <li><a href="" id="moveRedLink">Energy</a></li>
                        <li><a href="" id="moveGreenLink">Graphics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to top -->
    <button id="scrollToTopBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24px" height="24px" style="fill:black;">
            <g>
                <path d="M511.5,353.5C511.5,358.5,511.5,363.5,511.5,368.5C509.546,373.065,507.046,377.398,504,381.5C497.136,388.698,489.97,395.532,482.5,402C471.318,408.229,460.318,407.895,449.5,401C384.986,336.32,320.32,271.82,255.5,207.5C190.32,272.514,124.986,337.347,59.5,402C48.6818,407.971,38.0151,407.637,27.5,401C19.6667,393.167,11.8333,385.333,4,377.5C2.45406,374.408,0.95406,371.408-0.5,368.5C-0.5,363.5-0.5,358.5-0.5,353.5C1.4539,348.935,3.9539,344.602,7,340.5C82.8333,264.667,158.667,188.833,234.5,113C246.474,103.086,259.141,102.086,272.5,110C350.667,188.167,428.833,266.333,507,344.5C508.546,347.592,510.046,350.592,511.5,353.5Z" />
            </g>
        </svg>
    </button>

    <!-- jQuery CDN -->512
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Footer JS -->
    <script>
        const year = document.getElementById("year");
        year.textContent = new Date().getFullYear();
    </script>

    <!-- Moving Words -->
    <script>
        const scrollers = document.querySelectorAll(".scroller");

        // If a user hasn't opted in for recuded motion, then we add the animation
        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                // add data-animated="true" to every `.scroller` on the page
                scroller.setAttribute("data-animated", true);

                // Make an array from the elements within `.scroller-inner`
                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                // For each item in the array, clone it
                // add aria-hidden to it
                // add it into the `.scroller-inner`
                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }
    </script>

    <!-- Scroll to top -->
    <script>
        // Get the button
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = 'flex';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <!-- JS to move boxes to specific section -->
    <script>
        $(document).ready(function() {
            function scrollToSection(sectionId) {
                var offset = 130; // Adjust this value as needed
                $('html, body').animate({
                    scrollTop: $(sectionId).offset().top - offset
                }, 1000); // Adjust the speed (in milliseconds) as needed
            }

            $("#yellowBox").click(function() {
                scrollToSection("#keywords");
            });

            $("#moveYellowLink").click(function(event) {
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#keywords");
            });

            $("#blueBox").click(function() {
                scrollToSection("#longtext");
            });

            $("#moveBlueLink").click(function(event) {
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#longtext");
            });

            $("#redBox").click(function() {
                scrollToSection("#premiumtext");
            });

            $("#moveRedLink").click(function(event) {
                event.preventDefault(); // Prevent the default anchor behavior
                scrollToSection("#premiumtext");
            });

            $("#greenBox").click(function() {
                scrollToSection("#graphicstext");
            });

            $("#moveGreenLink").click(function(event) {
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

        const s2 = new Swiper(".s2", {
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
                    slidesPerView: 1,
                    // spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 1,
                    // spaceBetween: 30,
                },
            },
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