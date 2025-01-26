<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">


    <title>{{ $title ?? 'Todo List' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#f1f0f0]">
    {{ $slot }}
</body>

</html>
