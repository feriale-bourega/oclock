<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/minuteur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS script link -->
    <script type="text/javascript" src="js/minuteur.js"></script>

    <title>Minuteur</title>

</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Horloge</a></li>
                <li><a class="active" href="minuteur.php">Minuteur</a></li>
                <li><a href="reveil.php">Réveil</a></li>
                <li><a href="chrono.php">Chronomètre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Minuteur</h1>

        <div id="clockdiv">
            <div>
                <input class="hours" id="hour-input" type="number" min="0" max="23" />
                <span class="hours" id="hour"></span>
                <div class="smalltext">Heures</div>
            </div>
            <div>
                <input class="minutes" id="minute-input" type="number" min="0" max="59" />
                <span class="hours" id="minute"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <input class="seconds" id="second-input" type="number" min="0" max="59" />
                <span class="hours" id="second"></span>
                <div class="smalltext">Secondes</div>
            </div>

        </div>

        <div id="timer">
            <p id="timerDisplay"></p>
        </div>

            <button type="button" id="start">Départ</button>
            <button type="button" id="stop">Arrêt</button>

        <p id="alert"></p>
    </main>

</body>

</html>