<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href={{ asset('css/style.css') }}>
    <title>Sample List | @yield('title')</title>
</head>
<body>
    <div id="app">
        @yield('body')
        <script src={{ asset('js/main.js') }}></script>
    </div>
</body>
</html>