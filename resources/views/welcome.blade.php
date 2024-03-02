<!doctype html>
<html lang="{{ config('app.locale')  }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-w-2xl mx-auto py-16">
    <div class="grid gap-3">
        <h2 class="text-5xl font-extrabold ">Separator</h2>

        <x-sperator />

        <div class="flex gap-4">
            Home
            <x-sperator vertical />
            About
            <x-sperator vertical />
            Team
        </div>
    </div>
</div>
</body>
</html>
