<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/addcategory.css">
    <title>Categorie maken</title>
</head>
<header>
    <div class="categorie">
        <h1>Categorie maken </h1>
    </div>
</header>

<body>
<div class="nobo"><b>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <input class="lll" type="text" name="name" placeholder="name" width="100" height="450"><br><br>

            <input class="lll" type="text" name="icon" placeholder="icon"><br>
            <input type="submit">

        </form>
    </b>
</div>
</body>
</html>

