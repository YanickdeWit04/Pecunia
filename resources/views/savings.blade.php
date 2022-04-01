<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spaardoelen</title>
    <link rel="stylesheet" href="spaar.css">
</head>
<header>
    <div class="logo">
        <img class="logo" src="images/beng.svg" alt="logo" height="400px" width="400px">
    </div>
</header>
<body>
<div class="menu">
    <h1>Spaar doelen menu </h1>
</div>
<div class="spaaren">
    <div class="container">
        <label for="Voor">Spaaren voor:</label>
        <input type="text" id="fname" name="fname" value=""><br><br>
        <label for="streven">Streefbedrag:<input type="number"></label><br><br>

        <div class action="spaardoelen" method="get">
            Name
            <label>
                Start om spaardoelen te bereiken:
                <input type="date" name="bday">
            </label><br><br>
            <label for="Begin">Startbedrag:<input type="number"></label><br><br>
            <label for="start">Spaar rekening:</label>

            <form action="{{route("spaardoelen.store")}}" method="POST" >
                @csrf
                <label for="Rekening 1">Rekening 1</label>
                <input type="radio" id="html" name="Rekening1" value="HTML">
                <label for="Rekening 2">Rekening 2</label>
                <input type="radio" id="javascript" name="Rekening2" value="JavaScript">
                <label for="Rekening 3">Rekening 3</label>
                <input type="radio" id="html" name="Rekening3" value="HTML">
                <br> <br><label for="choice">Deposit reminder</label>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br><br>
                <label for="submit">Submit</label>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
