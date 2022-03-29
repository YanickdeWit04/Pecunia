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
    <table>
        <tr>
            <td>Categorie</td>
            <td>Rekening Naam</td>
            <td>Datum</td>
            <td>Hoeveelheid</td>
        </tr>
        @foreach($transacties as $transactie)
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
