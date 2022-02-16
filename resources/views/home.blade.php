<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overzicht</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
<div class="header">
    <a href="/"><img src="/images/.png" alt="Logo" width="" height=""></a>
    <h1>home</h1>
</div>
<div>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
</body>
</html>
