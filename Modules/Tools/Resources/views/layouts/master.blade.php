<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Module Tools</title>

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ mix('css/tools.css') }}">

    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/tools.js') }}"></script>
    </body>
</html>
