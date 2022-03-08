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
    <script src="js/donutchart1.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="linker-helft">
            <a href="/"><img src="/images/beng.svg" alt="Logo" width="50px" height="50px"></a>
            <h2 style="margin-top: 10px">home</h2>
        </div>
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


            <div class="graphics">
                <div id="donutchart" style="width: 50%; height:300px"></div>
                <div id="donutchart2" style="width: 50%; height:300px"></div>
            </div>

            <div class="bank-statements-div">
                <table class="bank-statements">
                    <thead>
                        <tr>
                            <th>hoeveelheid</th>
                            <th>rekening naam</th>
                            <th>catogorie</th>
                            <th>datum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>test</td>
                            <td>test2</td>
                            <td>test3</td>
                            <td>test4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>
