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
    <form class="add-funds" action="BankstatementController.php">
        @csrf
        <input type="number" placeholder="amount">
        <input type="text" placeholder="name">
        <input type="text" placeholder="category">
        <p>check if expense<input type="checkbox"></p>
        <input type="submit">
    </div>
</form>
</body>
</html>
