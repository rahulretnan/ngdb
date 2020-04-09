<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--        <meta http-equiv="refresh" content="5" />--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>

        /* Track */
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: none !important;
            background-color: transparent;
        }
        ::-webkit-scrollbar {
            width: 3px !important;
            background-color: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
        .btn:focus,.btn:active {
            outline: none !important;
            box-shadow: none;
        }
        button.power-button{
            display: block;
            width: 200px;
            height: 200px;
            font-size: 8em;
            background-color: transparent;
            text-align: center;
            line-height: 200px;
            color: red;
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 50%;
            text-decoration:none;
            transition: color 0.8s;
            transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
        }
        button:focus, button:active .power-button{
            outline: none !important;
            box-shadow: none;
        }
        .power-button.on{
            color: #0acc3f;
        }
    </style>
</head>
<body>
<div id="app">
    <main style="background: #0d293e">
        <div class="row w-100">
            <div class="col">
                <div id="speedtest2">
                    <svg id="voltage" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                        <path style="fill: #e31212;" d="M12.9,75.5c0.3,0.5,0.7,0.9,1,1.4l7.6-5.7c-0.3-0.4-0.5-0.7-0.8-1.1L12.9,75.5z"/>
                        <path style="fill: #ea1f39; display: none;" d="M9.3,69.3c0.3,0.5,0.5,1,0.8,1.5l8.4-4.4c-0.2-0.4-0.4-0.8-0.6-1.2L9.3,69.3z"/>
                        <path style="fill: #f12d60; display: none;" d="M6.7,62.4C6.9,62.9,7,63.5,7.2,64l9.1-3c-0.1-0.4-0.3-0.8-0.4-1.2L6.7,62.4z"/>
                        <path style="fill: #f83c85; display: none;" d="M5.3,55.2c0,0.6,0.1,1.1,0.2,1.7l9.4-1.5c-0.1-0.4-0.1-0.9-0.2-1.3L5.3,55.2z"/>
                        <path style="fill: #ff4ba8; display: none;" d="M5,47.9c0,0.6,0,1.1,0,1.7l9.5,0.1c0-0.5,0-0.9,0-1.4L5,47.9z"/>
                        <path style="fill: #fb3eb2; display: none;" d="M5.9,40.7c-0.1,0.6-0.2,1.1-0.3,1.7L15,44c0.1-0.4,0.2-0.9,0.2-1.3L5.9,40.7z"/>
                        <path style="fill: #f732bf; display: none;" d="M8,33.7c-0.2,0.5-0.4,1.1-0.6,1.6l9,3.1c0.1-0.4,0.3-0.9,0.5-1.3L8,33.7z"/>
                        <path style="fill: #f226cd; display: none;" d="M11.2,27.1c-0.3,0.5-0.5,1-0.8,1.5l8.3,4.6c0.2-0.4,0.4-0.8,0.7-1.2L11.2,27.1z"/>
                        <path style="fill: #ee1adc; display: none;" d="M15.5,21.2c-0.4,0.4-0.8,0.9-1.1,1.3l7.5,5.8c0.3-0.4,0.6-0.7,0.9-1.1L15.5,21.2z"/>
                        <path style="fill: #ae19de; display: none;" d="M20.6,16c-0.5,0.3-0.9,0.7-1.3,1.1l6.5,7c0.3-0.3,0.6-0.6,1-0.9L20.6,16z"/>
                        <path style="fill: #6618cd; display: none;" d="M26.4,11.7c-0.5,0.3-0.9,0.6-1.4,0.9l5.3,7.9c0.3-0.2,0.7-0.5,1-0.7L26.4,11.7z"/>
                        <path style="fill: #2716bd; display: none;" d="M33,8.3c-0.6,0.2-1.1,0.5-1.6,0.7l3.9,8.7c0.4-0.2,0.9-0.4,1.3-0.6L33,8.3z"/>
                        <path style="fill: #1537ac; display: none;" d="M39.9,6.1c-0.5,0.1-1.1,0.3-1.6,0.4l2.5,9.2c0.4-0.1,0.8-0.2,1.2-0.3L39.9,6.1z"/>
                        <path style="fill: #2061c1; display: none;" d="M47.2,5.2c-0.6,0-1.1,0-1.7,0.1l0.9,9.4c0.4,0,0.9-0.1,1.3-0.1L47.2,5.2z"/>
                        <path style="fill: #2c90d5; display: none;" d="M54.5,5.2c-0.6,0-1.1-0.1-1.7-0.1l-0.6,9.5c0.4,0,0.9,0.1,1.3,0.1L54.5,5.2z"/>
                        <path style="fill: #3bc2ea; display: none;" d="M61.6,6.5c-0.5-0.1-1.1-0.3-1.6-0.4l-2.2,9.3c0.4,0.1,0.9,0.2,1.3,0.3L61.6,6.5z"/>
                        <path style="fill: #4bf7ff; display: none;" d="M68.6,9C68,8.7,67.5,8.5,67,8.3l-3.6,8.8c0.4,0.2,0.8,0.3,1.2,0.5L68.6,9z"/>
                        <path style="fill: #39f6d2; display: none;" d="M74.9,12.5c-0.4-0.3-0.9-0.6-1.4-0.9l-5,8.1c0.4,0.2,0.7,0.5,1.1,0.7L74.9,12.5z"/>
                        <path style="fill: #28ed99; display: none;" d="M80.6,17c-0.5-0.4-0.9-0.7-1.3-1.1l-6.2,7.2c0.3,0.3,0.7,0.6,1,0.9L80.6,17z"/>
                        <path style="fill: #19e55d; display: none;" d="M85.7,22.4c-0.4-0.4-0.7-0.9-1.1-1.3l-7.4,6.1c0.3,0.3,0.5,0.7,0.8,1L85.7,22.4z"/>
                        <path style="fill: #0adc1e; display: none;" d="M89.6,28.6c-0.2-0.5-0.5-1-0.8-1.5L80.6,32c0.2,0.4,0.4,0.7,0.6,1.1L89.6,28.6z"/>
                        <path style="fill: #0adc1e; display: none;" d="M92.5,35.3c-0.2-0.5-0.4-1.1-0.6-1.6l-8.8,3.4c0.2,0.4,0.3,0.8,0.5,1.2L92.5,35.3z"/>
                        <path style="fill: #0adc1e; display: none;" d="M94.4,42.2c-0.1-0.5-0.2-1.1-0.3-1.6l-9.4,2c0.1,0.4,0.2,0.9,0.2,1.3L94.4,42.2z"/>
                        <path style="fill: #0adc1e; display: none;" d="M95,47.8l-9.5,0.5c0,0.4,0,0.9,0,1.3l9.5-0.1C95,48.9,95,48.4,95,47.8z"/>
                        <path style="fill: #0adc1e; display: none;" d="M94.5,56.8c0.1-0.5,0.1-1.1,0.2-1.7l-9.4-1c-0.1,0.4-0.1,0.9-0.2,1.3L94.5,56.8z"/>
                        <path style="fill: #0adc1e; display: none;" d="M92.8,63.9c0.2-0.5,0.3-1,0.5-1.7l-9.1-2.6c-0.1,0.4-0.3,0.9-0.4,1.3L92.8,63.9z"/>
                        <path style="fill: #0adc1e; display: none;" d="M90,70.7c0.2-0.5,0.5-1,0.8-1.5l-8.7-4.1c-0.2,0.4-0.4,0.8-0.6,1.2L90,70.7z"/>
                        <path style="fill: #0adc1e; display: none;" d="M89.9,80.1c0.5-0.7,1-1.3,1.4-1.9l-12-8.2c-0.3,0.4-0.6,0.9-0.9,1.3L89.9,80.1z"/>
                    </svg>
                    <div id="voltage-label">0</div>
                </div>
            </div>
            <div class="col">
                <div id="speedtest1">
                    <svg id="current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                        <path style="fill: #e31212;" d="M12.9,75.5c0.3,0.5,0.7,0.9,1,1.4l7.6-5.7c-0.3-0.4-0.5-0.7-0.8-1.1L12.9,75.5z"/>
                        <path style="fill: #ea1f39; display: none;" d="M9.3,69.3c0.3,0.5,0.5,1,0.8,1.5l8.4-4.4c-0.2-0.4-0.4-0.8-0.6-1.2L9.3,69.3z"/>
                        <path style="fill: #f12d60; display: none;" d="M6.7,62.4C6.9,62.9,7,63.5,7.2,64l9.1-3c-0.1-0.4-0.3-0.8-0.4-1.2L6.7,62.4z"/>
                        <path style="fill: #f83c85; display: none;" d="M5.3,55.2c0,0.6,0.1,1.1,0.2,1.7l9.4-1.5c-0.1-0.4-0.1-0.9-0.2-1.3L5.3,55.2z"/>
                        <path style="fill: #ff4ba8; display: none;" d="M5,47.9c0,0.6,0,1.1,0,1.7l9.5,0.1c0-0.5,0-0.9,0-1.4L5,47.9z"/>
                        <path style="fill: #fb3eb2; display: none;" d="M5.9,40.7c-0.1,0.6-0.2,1.1-0.3,1.7L15,44c0.1-0.4,0.2-0.9,0.2-1.3L5.9,40.7z"/>
                        <path style="fill: #f732bf; display: none;" d="M8,33.7c-0.2,0.5-0.4,1.1-0.6,1.6l9,3.1c0.1-0.4,0.3-0.9,0.5-1.3L8,33.7z"/>
                        <path style="fill: #f226cd; display: none;" d="M11.2,27.1c-0.3,0.5-0.5,1-0.8,1.5l8.3,4.6c0.2-0.4,0.4-0.8,0.7-1.2L11.2,27.1z"/>
                        <path style="fill: #ee1adc; display: none;" d="M15.5,21.2c-0.4,0.4-0.8,0.9-1.1,1.3l7.5,5.8c0.3-0.4,0.6-0.7,0.9-1.1L15.5,21.2z"/>
                        <path style="fill: #ae19de; display: none;" d="M20.6,16c-0.5,0.3-0.9,0.7-1.3,1.1l6.5,7c0.3-0.3,0.6-0.6,1-0.9L20.6,16z"/>
                        <path style="fill: #6618cd; display: none;" d="M26.4,11.7c-0.5,0.3-0.9,0.6-1.4,0.9l5.3,7.9c0.3-0.2,0.7-0.5,1-0.7L26.4,11.7z"/>
                        <path style="fill: #2716bd; display: none;" d="M33,8.3c-0.6,0.2-1.1,0.5-1.6,0.7l3.9,8.7c0.4-0.2,0.9-0.4,1.3-0.6L33,8.3z"/>
                        <path style="fill: #1537ac; display: none;" d="M39.9,6.1c-0.5,0.1-1.1,0.3-1.6,0.4l2.5,9.2c0.4-0.1,0.8-0.2,1.2-0.3L39.9,6.1z"/>
                        <path style="fill: #2061c1; display: none;" d="M47.2,5.2c-0.6,0-1.1,0-1.7,0.1l0.9,9.4c0.4,0,0.9-0.1,1.3-0.1L47.2,5.2z"/>
                        <path style="fill: #2c90d5; display: none;" d="M54.5,5.2c-0.6,0-1.1-0.1-1.7-0.1l-0.6,9.5c0.4,0,0.9,0.1,1.3,0.1L54.5,5.2z"/>
                        <path style="fill: #3bc2ea; display: none;" d="M61.6,6.5c-0.5-0.1-1.1-0.3-1.6-0.4l-2.2,9.3c0.4,0.1,0.9,0.2,1.3,0.3L61.6,6.5z"/>
                        <path style="fill: #4bf7ff; display: none;" d="M68.6,9C68,8.7,67.5,8.5,67,8.3l-3.6,8.8c0.4,0.2,0.8,0.3,1.2,0.5L68.6,9z"/>
                        <path style="fill: #39f6d2; display: none;" d="M74.9,12.5c-0.4-0.3-0.9-0.6-1.4-0.9l-5,8.1c0.4,0.2,0.7,0.5,1.1,0.7L74.9,12.5z"/>
                        <path style="fill: #28ed99; display: none;" d="M80.6,17c-0.5-0.4-0.9-0.7-1.3-1.1l-6.2,7.2c0.3,0.3,0.7,0.6,1,0.9L80.6,17z"/>
                        <path style="fill: #19e55d; display: none;" d="M85.7,22.4c-0.4-0.4-0.7-0.9-1.1-1.3l-7.4,6.1c0.3,0.3,0.5,0.7,0.8,1L85.7,22.4z"/>
                        <path style="fill: #0adc1e; display: none;" d="M89.6,28.6c-0.2-0.5-0.5-1-0.8-1.5L80.6,32c0.2,0.4,0.4,0.7,0.6,1.1L89.6,28.6z"/>
                        <path style="fill: #0adc1e; display: none;" d="M92.5,35.3c-0.2-0.5-0.4-1.1-0.6-1.6l-8.8,3.4c0.2,0.4,0.3,0.8,0.5,1.2L92.5,35.3z"/>
                        <path style="fill: #0adc1e; display: none;" d="M94.4,42.2c-0.1-0.5-0.2-1.1-0.3-1.6l-9.4,2c0.1,0.4,0.2,0.9,0.2,1.3L94.4,42.2z"/>
                        <path style="fill: #0adc1e; display: none;" d="M95,47.8l-9.5,0.5c0,0.4,0,0.9,0,1.3l9.5-0.1C95,48.9,95,48.4,95,47.8z"/>
                        <path style="fill: #0adc1e; display: none;" d="M94.5,56.8c0.1-0.5,0.1-1.1,0.2-1.7l-9.4-1c-0.1,0.4-0.1,0.9-0.2,1.3L94.5,56.8z"/>
                        <path style="fill: #0adc1e; display: none;" d="M92.8,63.9c0.2-0.5,0.3-1,0.5-1.7l-9.1-2.6c-0.1,0.4-0.3,0.9-0.4,1.3L92.8,63.9z"/>
                        <path style="fill: #0adc1e; display: none;" d="M90,70.7c0.2-0.5,0.5-1,0.8-1.5l-8.7-4.1c-0.2,0.4-0.4,0.8-0.6,1.2L90,70.7z"/>
                        <path style="fill: #0adc1e; display: none;" d="M89.9,80.1c0.5-0.7,1-1.3,1.4-1.9l-12-8.2c-0.3,0.4-0.6,0.9-0.9,1.3L89.9,80.1z"/>
                    </svg>
                    <div id="current-label">0</div>
                </div>
            </div>
            <div class="col" style="margin: auto">
                <button class="power-button bg-transparent"><i class="fa fa-power-off"></i></button>
            </div>
        </div>

        @yield('content')
    </main>
</div>
</body>
</html>
