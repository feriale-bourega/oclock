<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/chrono.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS script link -->
    <script type="text/javascript" src="js/chrono.js"></script>

    <title>Chronomètre</title>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Horloge</a></li>
                <li><a href="minuteur.php">Minuteur</a></li>
                <li><a href="reveil.php">Réveil</a></li>
                <li><a class="active" href="#">Chronomètre</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            
            <div class="display">
                <p class="timerDisplay" id="timerHrs">00</p> :
                <p class="timerDisplay" id="timerMins">00</p> :
                <p class="timerDisplay" id="timerSec">00</p>
            </div>

            <div class="buttons">
                <button type="button" id="startBtn">Marche</button>
                <button type="button" id="resetBtn">Reset</button>
                <button type="button" id="lapBtn">Tour</button>
            </div>

            <h1>Temps :</h1>

            <div id="laps">
                <p id="lapRecord"></p>
            </div>
        </div>

    </main>
</body>

</html>