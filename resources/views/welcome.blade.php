<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/app.js"></script>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container" id="app">
            <h1>Xinder</h1>
            <a class="btn" href="/login/github">Login with GitHub</a>
            <qr-code text="Text to encode"></qr-code>
        </div>
    </body>
</html>
