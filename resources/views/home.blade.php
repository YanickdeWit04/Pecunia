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

<div class="navigation">
    <ul>
        <li class="list">
            <a href="#">
                <span class="icon"></span>
                <ion-icon name="home-outline"></ion-icon>
                <span class="title">Home</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"></span>
                <ion-icon name="wallet-outline"></ion-icon>
                <span class="title">Spaardoelen</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"></span>
                <ion-icon name="bar-chart-outline"></ion-icon>
                <span class="title">Graphs</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="icon"></span>
                <ion-icon name="menu-outline"></ion-icon>
                <span class="title">Category's</span>
            </a>   <li class="list">
            <a href="#">
                <span class="icon"></span>
                <ion-icon name="log-out-outline"></ion-icon>
                <span class="title">Uitloggen</span>
            </a>
        </li>
    </ul>
</div>


<div class="dashboardw">
    <b><h1> Dashboard</h1></b>
</div>
<div class="container">
    <div class="card" >
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
        </div>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/vanilla-tilt.js"></script>
</body>

</html>
