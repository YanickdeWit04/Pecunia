<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spaardoelen</title>
    <link rel="stylesheet" href="/css/spaar.css">
</head>
<header>
    <div class="main-container">
        <div id="linker">
            <a href="/"><img class="pecunia-logo" src="images/pecunia.png" alt=""></a>
        </div>
        <div id="rechter">
            <div id="knoppen">
                <b>
                    <a style="margin: 25px" href="/">Home</a>
                    <a style="margin: 25px" href="/bankstatement">Transacties</a>
                    <a style="margin: 25px" href="/category">Categorieën</a>
                    <a style="margin: 25px" href="/spaardoelen">Spaardoelen</a>
                    <a style="margin: 25px" href="/graphs">Grafieken</a>
                </b>
            </div>
            <div id="rechter-rechter">
                <div class="display">

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
</header>
<body>
<div class="menu">
    <h1>Spaardoelen menu </h1>
</div>
<div class="spaaren">
    <div class="container">
        <div class action="spaardoelen" method="get">
            <form action="{{route("spaardoelen.store")}}" method="POST">
                @csrf <b>
                    <input name="spaarenvoor" type="hidden"><br>
                    <label for="Voor">Sparen voor</label>
                    <input type="text" name="name" ><br><br>
                    <label for="streven">Streefbedrag<input type="number" name="amount"></label><br><br>
                    <label>Datum om spaardoelen te bereiken<input type="date" name="date" id="date"></label><br><br>
                    <label for="Begin">Startbedrag <input type="number" name="startbedrag"></label><br><br>
                    <label for="start">Spaarrekening</label>
                    <label for="Rekening 1">Rekening 1</label>
                    <input type="radio" name="Rekening1">
                    <label for="Rekening 2">Rekening 2</label>
                    <input type="radio" name="Rekening2">
                    <label for="Rekening 3">Rekening 3</label>
                    <input type="radio" name="Rekening3"><br><br>
                    <label for="choice">Deposit reminder</label>
                    <input type="checkbox" name="betalingsherrinering"><br><br></b>
                <div class="sbtn">
                    <button type="reset">Opniew</button>
                    <button type="submit">Indienen</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
