<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/addstatement.css">
    <title>Add money</title>
</head>
<body>
    <div class="main">
    <form class="add-funds" action="/add1" method="POST">
        @csrf
        <input type="number" placeholder="amount" name="amount">
        <input type="text" placeholder="name" name="name">
        <input type="number" placeholder="category" name="category">
        <input type="date" placeholder="date" name="date">
        <p>check if expense<input type="checkbox" name="type_of_statement"></p>
        <input type="submit">
    </form>
    </div>
</body>
</html>
