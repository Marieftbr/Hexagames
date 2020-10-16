<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/parametres.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <title>Paramètres</title>
</head>

<body>
    <header>
        <?php
        include "../navbar/navbar.php";
        ?>
    </header>
    <div class="container">


        <h1>Mes Paramètres</h1>

        <!-- FORMULAIRE DES PARAMETRES-->
        <form>


            <div class="row col-md-12">
                <div class="row form-inline col-md-8">
                    <label for="prenom" class="col-md-2">Prénom :</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
            </div>

            <br/>

            <div class="row col-md-12">
                <div class="row form-inline col-md-8">
                    <label for="nom" class="col-md-2">Nom :</label>
                    <input type="text" class="form-control" name="nom">
                </div>
            </div>

            <br/>

            <div class="row col-md-12">
                <div class="row form-inline col-md-8">
                    <label for="InputPseudo" class="col-md-2">Pseudo :</label>
                    <input type="text" class="form-control" name="pseudo">
                </div>
            </div>

            <br/>

            <div class="row col-md-12">
                <div class="row form-inline group col-md-8">
                    <label for="InputEmail1" class="col-md-2">Email :</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

            <br/>

            <!-- MDP -->



            <fieldset class=border>
                <legend>Modifier ton mot de passe :</legend>
                <div class="form-group">
                    <div class="form-inline col-md-4">
                        <label for="InputPassword1">Mot de passe actuel :</label>
                        <input type="password" class="form-control" id="InputPassword1">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline col-md-4">
                        <label for="InputPassword2">Nouveau mot de passe :</label>
                        <input type="password" class="form-control" id="InputPassword2">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline col-md-4">
                        <label for="InputPassword3">Confirmation du nouveau mot de passe :</label>
                        <input type="password" class="form-control" id="InputPassword3">
                    </div>
                </div>
            </fieldset>

            <br/>

            <!-- FIN MDP -->

            <div class="row col-md-12">
                <div class="row form-inline col-md-8">
                    <label for="city" class="col-md-2">Ville :</label>
                    <input type="text" class="form-control" name="city">
                </div>
            </div>

            <br/>

            <div class="row col-md-12">
                <div class="row form-inline col-md-8">
                    <label for="exampleFormControlSelect1" class="col-md-2">Âge :</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>

                    </select>
                </div>
            </div>

            <br/>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
        <!-- FIN FORMULAIRE DES PARAMETRES-->

        <br/>


        <!--BOUTON MODE SOMBRE-->

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Mode Sombre</label>
        </div>



    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>