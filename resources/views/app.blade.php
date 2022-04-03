<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/vendor.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;200;500&display=swap" rel="stylesheet">
        @inertiaHead
        @env('local')
            <script src="http://localhost:35729/livereload.js"></script>
        @endenv

        <style>
            .splide__pagination__page {
                background: #af3246!important;
            }
            .splide__pagination__page.is-active{
                background: #4f9c88!important;
            }
        </style>
    </head>
    <body class="font-k2d font-extralight bg-primary text-complement">
        @inertia
    </body>
</html>