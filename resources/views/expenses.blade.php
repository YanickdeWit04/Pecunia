<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bankstatements</title>
    <link rel="stylesheet" href="/css/expenses.css">
</head>
<body>
<div class="main-container">
    <div id="linker">
        <a href="/"><img class="pecunia-logo" src="images/pecunia.png" alt=""></a>
    </div>
    <div id="rechter">
        <hr id="line">
        <div id="knoppen">
            <a style="margin: 25px" href="/" id="home-button">Home<div></div></Home></a>
            <a style="margin: 25px" href="/bankstatement">Transacties</a>
            <a style="margin: 25px" href="/category">Categorieën</a>
            <a style="margin: 25px" href="/spaardoelen">Spaardoelen</a>
            <a style="margin: 25px" href="/graphs">Grafieken</a>
        </div>
        <div id="rechter-rechter">
            <div class="display">
                <a href="/account"><img class="avatar" src="images/beng.svg" alt=""></a>
                <div class="dropdown">
                    <button class="dropbtn">Welkom {{ auth()->user()->name }}</button>
                    <div class="dropdown-content">
                        <a class="dropdown-menu-links" href="/account">account</a>
                        <a href="/instellingen">instellingen</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="logout-button logout-button-primary" type="submit">uitloggen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
   <a href="/bankstatement/create"> <button>Add a Bankstatement!</button></a>
</div>
<div class="selector">
    <a href="/bankstatement/?amount=1">
        <button type="submit" name="amount" value="1">1</button></a>
    <a href="/bankstatement/?amount=5">
        <button type="submit" name="amount" value="5">5</button></a>
    <a href="/bankstatement/?amount=25">
        <button type="submit" name="amount" value="25">25</button></a>
    <a href="/bankstatement/?amount=50">
        <button type="submit" name="amount" value="50">50</button></a>
    <a href="/bankstatement/?amount=100">
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
            <td>{{$transactie->category->icon}}</td>
            <td>{{$transactie->category->name}}</td>
            <td>{{$transactie->name}}</td>
            <td>{{$transactie->date}}</td>
            @if($transactie->amount > 0)
            <td style="color:green">+{{$transactie->amount}}</td>
                @else
                    <td style="color:red">{{$transactie->amount}}</td>
            @endif
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
