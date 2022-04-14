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

    <div class="card">

        <div class="textincard">

            <img src="images/pecunia.png" class=logo>

            <div class="spaardoelen" action="spaardoelen" method="get">
                <form action="{{route("spaardoelen.store")}}" method="POST">
                    @csrf
                    <b>

                        <div class="label">
                            <label for="Voor">Spaaren voor</label>
                            <input type="text" name="spaarenvoor">
                        </div>

                        <div class="label">
                            <label for="streven">Streefbedrag</label>
                            <input type="number" name="amount">
                        </div>

                        <div class="label">
                            <label>Datum om spaardoelen te bereiken</label>
                            <input type="date" name="date">
                        </div>

                        <div class="label">
                            <label for="Begin">Startbedrag</label>
                            <input type="amount" name="startbedrag">
                        </div>


                        <div class="label">
                            <label for="choice">Deposit reminder</label>
                            <input class="checky" type="checkbox" name="deposit reminder">
                        </div>

                        <div class="buttons">

                            <input class="inputenreset" type="submit" id="submit" name="submit">
                            <input class="inputenreset" type="reset" id="reset" name="reset">

                        </div>
                    </b>
                </form>
            </div>

        </div>
    </div>

    <script src="js/vanilla-tilt.js"></script>
</div>
</body>
</html>
