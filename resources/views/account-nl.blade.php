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
</body>
</html>
