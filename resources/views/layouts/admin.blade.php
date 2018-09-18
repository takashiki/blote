<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <link rel="stylesheet" href="{{ cix('css/admin.css') }}">

    <!-- Scripts -->
    <script>
        window.Language = '{{ config('app.locale') }}';

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('styles')
</head>
<body>
<div id="app">
    <div class="container">
        <div id="app">
            <el-container>
                <el-header>
                </el-header>
                <el-main>
                    @yield('content')
                </el-main>
                <el-footer>
                </el-footer>
            </el-container>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ cix('js/manifest.js') }}"></script>
<script src="{{ cix('js/blote-vendor.js') }}"></script>
<script src="{{ cix('js/admin.js') }}"></script>

@stack('scripts')

</body>
</html>
