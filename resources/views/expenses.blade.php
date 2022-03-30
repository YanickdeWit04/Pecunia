<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <a href="/bankstatement/1">
        <button type="submit" name="amount" value="1">1</button></a>
    <a href="/bankstatement/5">
        <button type="submit" name="amount" value="5">5</button></a>
    <a href="/bankstatement/25">
        <button type="submit" name="amount" value="25">25</button></a>
    <a href="/bankstatement/50">
        <button type="submit" name="amount" value="50">50</button></a>
    <a href="/bankstatement/100">
        <button type="submit" name="amount" value="100">100</button>
    </a>
</div>
<div>
    <table>
        <tr>
            <td>Categorie</td>
            <td>Rekening Naam</td>
            <td>Datum</td>
            <td>Hoeveelheid</td>
        </tr>
        @foreach($transacties->take($amount) as $transactie)

            <tr>
            <td>{{$transactie->category->name}}</td>
            <td>{{$transactie->name}}</td>
            <td>{{$transactie->date}}</td>
            @if($transactie->type == 0)
            <td style="color:green">+{{$transactie->amount}}</td>
                @else
                    <td style="color:red">-{{$transactie->amount}}</td>
            @endif
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
