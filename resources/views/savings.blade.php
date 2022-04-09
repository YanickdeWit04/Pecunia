<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spaardoel opgeslagen</title>
    <link rel="stylesheet" href="/css/spaardoel.css">
</head>
<body>

<div class="container">
    <div class="card" data-tilt >
    <div class="getir">
        <img  src="images/pecunia.png" class=drr>
        <div class action="spaardoelen" method="get">
            <form action="{{route("spaardoelen.store")}}" method="POST">
                @csrf <b>
                    <input name="spaarenvoor" type="hidden"><br>
                    <label for="Voor">Sparen voor</label>
                    <input type="text" name="name" ><br><br>
                    <label for="streven">Streefbedrag<input type="number" name="amount"></label><br><br>
                    <label>Datum om spaardoelen<br>te bereiken<input type="date" name="date" id="date"></label><br><br>
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
            </form>
        </div>
        </div>
        </div>


<script src="js/vanilla-tilt.js"></script>
</body>
</html>
