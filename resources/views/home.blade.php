<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
<div class="header">
    <div class="linker-helft">
        <a href="/"><img src="/images/.png" alt="Logo" width="" height=""></a>
        <h2>home</h2>
    </div>
    <div class="rechter-helft">
        <h2>Welkom {{ auth()->user()->name }}</h2>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
</body>
</html>
