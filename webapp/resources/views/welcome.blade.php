<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="540px" viewBox="0 0 836.000000 254.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="hsl(230, 50%, 56%)"></stop>
                            <stop offset="100%" stop-color="hsl(227, 100%, 50%)"></stop>
                          </linearGradient>
                        <g transform="translate(0.000000,254.000000) scale(0.100000,-0.100000)"
                        fill="url(#grad1)" stroke="none">
                        <path d="M743 2140 c-90 -21 -164 -94 -203 -197 -20 -54 -21 -71 -18 -572 3
                        -500 4 -517 24 -562 28 -60 76 -114 133 -147 l46 -27 805 0 c780 0 806 1 845
                        20 56 28 113 88 144 154 l26 56 3 498 c2 434 1 506 -13 554 -20 69 -50 118
                        -103 165 -77 70 -57 68 -901 67 -416 -1 -770 -4 -788 -9z m1549 -110 c83 -23
                        138 -101 138 -195 l0 -55 -901 0 -902 0 6 60 c9 99 63 172 142 191 49 12 1474
                        10 1517 -1z m146 -757 c-3 -379 -4 -389 -25 -430 -27 -49 -63 -79 -112 -94
                        -24 -7 -285 -9 -793 -7 l-756 3 -38 31 c-21 16 -47 48 -58 70 -20 37 -21 57
                        -24 427 l-3 387 906 0 906 0 -3 -387z"/>
                        <path d="M1695 1955 c-30 -30 -31 -54 -4 -89 42 -54 123 -23 121 46 -2 63 -72
                        89 -117 43z"/>
                        <path d="M1915 1955 c-30 -30 -31 -54 -4 -89 42 -53 122 -23 122 46 0 62 -73
                        89 -118 43z"/>
                        <path d="M2145 1955 c-47 -46 -17 -115 49 -115 42 0 69 29 68 72 -2 63 -72 89
                        -117 43z"/>
                        <path d="M1520 1591 c0 -5 -21 -32 -46 -60 -51 -56 -110 -81 -195 -81 -26 0
                        -51 -5 -55 -11 -3 -6 -8 -48 -11 -92 -9 -160 44 -314 143 -413 58 -58 146
                        -114 180 -114 28 0 133 69 182 119 48 50 97 139 117 216 15 59 20 206 9 263
                        -6 29 -8 30 -73 34 -91 5 -156 38 -196 100 -27 42 -55 62 -55 39z m83 -443
                        l-93 -93 -55 55 c-30 30 -55 59 -55 65 0 7 11 22 25 35 l25 24 30 -29 31 -29
                        62 62 62 62 30 -30 30 -30 -92 -92z"/>
                        <path d="M4962 1768 c-9 -9 -12 -106 -12 -374 0 -199 3 -369 6 -378 4 -12 20
                        -16 54 -16 87 0 80 -34 80 384 0 276 -3 375 -12 384 -7 7 -33 12 -58 12 -25 0
                        -51 -5 -58 -12z"/>
                        <path d="M7442 1768 c-9 -9 -12 -106 -12 -374 0 -199 3 -369 6 -378 4 -12 20
                        -16 54 -16 87 0 80 -34 80 384 0 276 -3 375 -12 384 -7 7 -33 12 -58 12 -25 0
                        -51 -5 -58 -12z"/>
                        <path d="M3443 1759 c-78 -10 -124 -37 -151 -89 -22 -44 -22 -50 -20 -355 l3
                        -310 53 -3 c81 -5 82 -4 82 174 l0 154 133 0 c72 0 138 4 145 9 9 5 12 25 10
                        57 l-3 49 -142 3 -143 3 0 77 c0 116 0 116 164 120 l136 4 0 49 c0 47 -1 48
                        -32 53 -60 9 -182 12 -235 5z"/>
                        <path d="M5605 1748 c-6 -15 157 -644 176 -684 22 -44 61 -66 117 -66 61 0
                        100 17 127 58 20 30 185 638 185 683 0 19 -5 21 -57 21 -32 0 -63 -4 -69 -8
                        -7 -4 -46 -148 -88 -321 -41 -172 -78 -316 -81 -319 -15 -16 -33 41 -101 323
                        -41 169 -76 311 -80 316 -8 14 -124 11 -129 -3z"/>
                        <path d="M5360 1686 l-55 -11 -5 -50 -5 -50 -58 -3 -58 -3 3 -37 c3 -36 4 -37
                        58 -48 l55 -10 5 -205 c6 -234 11 -252 77 -266 43 -9 147 -8 163 2 12 7 13 64
                        2 82 -4 6 -30 13 -57 15 l-50 3 -3 188 -2 187 55 0 55 0 0 44 0 45 -52 3 -53
                        3 -3 55 c-2 30 -6 58 -10 61 -4 3 -32 1 -62 -5z"/>
                        <path d="M7840 1686 l-55 -11 -5 -50 -5 -50 -58 -3 -58 -3 3 -37 c3 -36 4 -37
                        58 -48 l55 -10 5 -205 c6 -232 12 -252 78 -266 42 -9 146 -8 162 2 12 7 13 64
                        2 82 -4 6 -30 13 -57 15 l-50 3 -3 188 -2 187 55 0 55 0 0 44 0 45 -52 3 -53
                        3 -3 55 c-2 30 -6 58 -10 61 -4 3 -32 1 -62 -5z"/>
                        <path d="M3840 1571 c-34 -6 -35 -8 -38 -53 -2 -34 1 -48 10 -49 7 0 60 0 118
                        1 123 1 134 -5 145 -81 l7 -46 -99 -5 c-63 -3 -109 -11 -130 -21 -119 -62
                        -121 -246 -4 -307 35 -18 139 -16 184 3 34 15 40 15 54 2 21 -21 109 -20 117
                        1 11 28 6 397 -5 439 -15 52 -66 99 -123 114 -47 11 -176 13 -236 2z m240
                        -381 c0 -59 0 -60 -36 -75 -46 -19 -118 -20 -133 -1 -7 8 -11 36 -9 62 4 60
                        25 74 116 74 l62 0 0 -60z"/>
                        <path d="M6320 1571 c-34 -6 -35 -8 -38 -53 -2 -34 1 -48 10 -49 7 0 60 0 118
                        1 123 1 136 -6 146 -83 l7 -47 -75 0 c-97 0 -169 -22 -202 -61 -71 -85 -49
                        -227 42 -266 48 -21 137 -20 185 0 34 15 40 15 54 2 21 -21 109 -20 117 1 3 9
                        6 106 6 217 0 175 -3 207 -19 243 -21 47 -59 77 -116 93 -42 11 -175 13 -235
                        2z m240 -381 c0 -59 0 -60 -36 -75 -46 -19 -118 -20 -133 -1 -7 8 -11 36 -9
                        62 4 60 25 74 116 74 l62 0 0 -60z"/>
                        <path d="M4352 1333 c3 -233 4 -239 27 -272 13 -18 40 -40 59 -48 51 -21 142
                        -18 193 6 51 25 49 25 49 7 0 -19 22 -26 81 -26 l49 0 0 285 0 286 -62 -3 -63
                        -3 -3 -211 -2 -212 -43 -17 c-54 -22 -114 -23 -135 -1 -15 14 -18 48 -22 229
                        l-5 212 -63 3 -63 3 3 -238z"/>
                        <path d="M6830 1348 c0 -212 1 -226 23 -268 15 -31 34 -51 59 -63 52 -26 144
                        -24 199 2 51 25 49 25 49 7 0 -19 22 -26 81 -26 l49 0 0 285 0 286 -62 -3 -63
                        -3 -3 -211 -2 -212 -43 -17 c-54 -22 -114 -23 -135 -1 -15 14 -18 48 -22 229
                        l-5 212 -62 3 -63 3 0 -223z"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </body>
</html>
