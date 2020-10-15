<!-- TABLEAU DE BORD -->
<!DOCTYPE html>
<html lang="fr">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tableaudebord.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <title>Profil</title>
    </head>

    <body>


        <main class="container row justify-content-around px-0">
            <div class="sectionProfil col-md-4">

                <img src="../img/avatar.jpg" alt="Photo de Jane Doe" />



                <h3>*Pseudo*</h3>
                <h3>*Ville*</h3>
                <h3>*Age*</h3>


                <!-- PARTIE LIENS DU PROFIL -->

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">




                    <a class="nav-link active" id="v-pills-ludo-tab" data-toggle="pill" href="#v-pills-ludo" role="tab"
                        aria-controls="v-pills-ludo" aria-selected="true">Mon Hexaludo</a>




                    <a class="nav-link" id="v-pills-membres-tab" data-toggle="pill" href="#v-pills-membres" role="tab"
                        aria-controls="v-pills-membres" aria-selected="false">Mes Hexapotes</a>




                    <a class="nav-link" id="v-pills-sessions-tab" data-toggle="pill" href="#v-pills-sessions" role="tab"
                        aria-controls="v-pills-sessions" aria-selected="false">Sessions de jeu</a>




                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">(Ma Messagerie)</a>




                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Paramètres</a>




                </div>

                <!-- FIN PARTIE LIENS DU PROFIL-->

                <!-- FIN TEABLEAU DE BORD -->





                <!-- Ce qui apparait quand on clique sur les liens du tableau de bord-->

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-ludo" role="tabpanel"
                        aria-labelledby="v-pills-ludo-tab">
                        Voici les jeux que tu possèdes dans ta ludothèque personnelle.
                    </div>


                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        Voici ta messagerie, où les autres mambres d'Hexagame peuvent te contacter pour te proposer de
                        débuter une
                        partie par exemple !
                    </div>

                    <div class="tab-pane fade" id="v-pills-membres" role="tabpanel"
                        aria-labelledby="v-pills-membres-tab">
                        Voici les autres membres d'Hexagames qui font partie de ton cercle personnel, tes Hexapotes.
                    </div>

                    <div class="tab-pane fade" id="v-pills-sessions" role="tabpanel"
                        aria-labelledby="v-pills-sessions-tab">
                        Voici tes annonces pour des sessions de jeux.
                        Si tu possèdes un jeu mais que tu cherchers d'autres joueurs pour jouer avec toi, tu peux poster
                        une annonce pour proposer à d'autres Hexapotes une partie de
                        jeu dans votre ville.
                        Au contraire, si tu ne possèdes pas le jeu auquel tu souhaiterais jouer, regarde les annonces
                        postées par les autres Hexapotes pour rejoindre une partie !
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        Voici les paramètres de ton compte Hexagame. Tu peux les modifier à tout moment ici.</div>
                </div>

            </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!-- <script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="css/bootstrap.min.css"></script> -->
    </body>

</html>