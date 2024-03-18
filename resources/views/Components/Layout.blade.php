<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
</head>
<body>
    <nav>
        <x-navlink href="/">Home</x-navlink>
        <x-navlink href="/about" style="color: green;">About</x-navlink>
        <x-navlink href="/contacts">Contact</x-navlink>
    </nav>
    {{--  --}}
    {{ $slot }}
</body>
</html>