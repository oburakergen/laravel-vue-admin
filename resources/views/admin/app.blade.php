<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('/administrator/css/app.css') }}" type="text/css">
</head>
<body>
<noscript>
    <strong
    >We're sorry but Laraplay Admin Dashboard Template doesn't work properly without JavaScript enabled. Please
        enable it to continue.</strong
    >
</noscript>
<div id="app"></div>
<!-- built files will be auto injected -->
<script src="{{ mix('/administrator/js/app.js') }}"></script>
</body>
</html>

