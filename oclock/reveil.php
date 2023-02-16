<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reveil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- JS script link -->
    <script type="text/javascript" src="js/reveil.js"></script>

    <title>Réveil</title>

</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Horloge</a></li>
                <li><a href="minuteur.php">Minuteur</a></li>
                <li><a class="active" href="reveil.php">Réveil</a></li>
                <li><a href="chrono.php">Chronomètre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Heure actuelle :</h1>
            <div class="time" id="myClock"></div>
        </div>


        <div class="container">

            <h1>Vos alarmes :</h1>

            <table id="table" style="border: 1px solid black; width: 100%;">

                <thead>
                    <tr>
                        <td>Alarme</td>
                        <td>Message</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>

                </tbody>

            </table>

        </div>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn"><i class="fa fa-plus-square-o" style="font-size:36px;"></i></button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <h1>Ajouter une alarme</h1>


                <div id="clockdiv">
                    <div>
                        <input type="time" id="setAlarm" />
                    </div>
                    <div>
                        <input type="text" id="setTitle" placeholder="Entrez un titre" />
                    </div>

                </div>

                <div>
                    <button type="button" id="add">Ajouter</button>
                    <button type="button" id="cancel">Annuler</button>
                </div>



            </div>

        </div>
    </main>


</body>

</html>