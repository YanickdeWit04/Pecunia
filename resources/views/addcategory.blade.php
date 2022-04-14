<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/addcategory.css">
    <title>Add a Category</title>
</head>
<header>
    <div class="categorie">
        <h1>Categorie maken </h1>
    </div>
</header>

<body>
<div class="container">
    <div class="card" data-tilt>
<div class="main">
    <form class="add-category" action="{{route('category.store')}}" method="POST">
        @csrf
        <input class="create2" type="text" name="name" placeholder="name">
        <label for="img">Select image:</label>
        <input class="create2" type="file" id="img" name="img" accept="image/*">
        <input class="inputenreset" type="submit" id="submit" name="submit">
        <input class="inputenreset" type="reset" id="reset" name="reset">
    </form>
</div>
    </div>
</div>
</body>
</html>
