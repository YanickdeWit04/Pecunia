<!DOCTYPE html>
<html lang="NL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/home.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/googlecharts.js"></script>
    <script src="js/googlecharts2.js"></script>
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
    <div class="main-content-container">
        <div class="left-container">
            <div class="total-amount">
                <h1 style="display: flex; justify-content: center;">Totaal bedrag</h1>
                @if ($sum < 0)
                    <h2 style="display: flex; justify-content: center; color: red;">€ {{ $sum }}</h2>
                @else
                    <h2 style="display: flex; justify-content: center; color: green">€ {{ $sum }}</h2>
                @endif
            </div>
            <div class="expense-chart">
                <div class="test">
                    <div id="donutchart" style=""></div>
                </div>
            </div>
        </div>

        <div class="right-container">
            <div class="total-amount-candlestickchart">
                <div id="linechart"></div>
                <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
                <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
                <script>
                    const chart = new Chartisan({
                        el: '#linechart',
                        url: "@chart('sample_chart')",
                        hooks: new ChartisanHooks()
                            .title({
                                  textAlign: 'center',
                                  left: '50%',
                                  text: 'Totaal bedrag per datum',
                                  textStyle: {
                                      fontSize: 20,
                                      fontWeight: 'bold',
                                      color: '#3498db'
                                  }
                              })
                            .tooltip(true)
                            .datasets([{ lineStyle: { width: 4 }, type: 'line', fill: false, color: '#3498db'},
                            ]),
                    });
                </script>
            </div>
            <div class="bankstatement-summary">
                <table>
                    <tr id="table-header">
                        <td>Categorie</td>
                        <td>Rekening Naam</td>
                        <td>Datum</td>
                        <td>Hoeveelheid</td>
                    </tr>
                    @foreach ($transacties->take(10) as $transactie)
                        <tr>
                            <td>{{ $transactie->category->name }}</td>
                            <td>{{ $transactie->name }}</td>
                            <td>{{ $transactie->date }}</td>
                            @if ($transactie->amount > 0)
                                <td style="color:green">+{{ $transactie->amount }}</td>
                            @else
                                <td style="color:red">{{ $transactie->amount }}</td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>
