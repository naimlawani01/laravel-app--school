<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    html, body{
        background-image: url("im1.jpg");
        background-repeat: no-repeat;
          height: 0%;
          margin: 0px;

        }
        #hogwarts-background{
          width: 100%;
          height: 70%;
          background-repeat: no-repeat;
          background-size: cover;
        }
        #form-wrapper{
          width:90%;
          max-width: 900px;
          height: 900px;
          background-color: rgba(0, 0, 0, 0.5);
          margin:auto;
        }
        #form-wrapper > form{
          color:white;
          padding: 40px;
          font-family: 'Jolly Lodger';
          font-size: 26px;
          letter-spacing: 1px;
        }
        #form-wrapper > form > input{
          font-family: 'Jolly Lodger';
          font-size: 22px;
          letter-spacing: 1px;
        }
        h1 {
            color: white;
            text-align: center;
        }

</style>
<body>
    </head>

    <body id="hogwarts-background">
        <h1>DEMANDE DADMISSION AU CENTRE INFORMATIQUE</h1>
        <div id="form-wrapper">
            <form>
                <label for="wizard-name">Nom: </label>
                <input type="text" id="wizard-name" name="wizard-name">
                <br><br>
                <label for="wizard-name">Prenom: </label>
                <input type="text" id="wizard-name" name="wizard-name">
                <br><br>
                <label for="wizard-name">Date de naissance: </label>
                <input type="date" id="wizard-name" name="wizard-name">
                <br><br>
                <label for="wizard-name">Année scolaire<br> pour laquelle vous candidatez: </label>
                <input type="text" id="wizard-name" name="wizard-name">
                <br><br>
                <label for="wizard-name">Nom du tuteur légal: </label>
                <input type="text" id="wizard-name" name="wizard-name">
                <br><br>
                <label for="wizard-name">Adresse Actuelle: </label>
                <input type="text" id="wizard-name" name="wizard-name">
                <br><br> Ya t-il des informationS medicales a partager avec le corps enseignant?
                <br>
                <input type="radio" id="yes-muggle" name="muggle-parent" value="OUI">
                <label>OUI</label>
                <br>
                <input type="radio" id="no-muggle" name="muggle-parent" value="NON">
                <label>NON</label>
                <br><br> Dossier a fournir:
                <ul>
                    <li>Extrait de naisance <input type="file" name="" id=""></li>
                    <li>Copie legalisée du diplome de BAC(SM/SE) <input type="file" name="" id=""> </li>
                    <li>Copie legalisée du rélevé de notes au BAC <input type="file" name="" id=""></li>
                    <li> Quatre(4) photos didentités <input type="file" name="" id=""></li>
                    <li> Demande d'admission <input type="file" name="" id=""></li>

                </ul>

                <br>

                <input type="submit" value="Envoyer">

            </form>
        </div>
    </body>

</html>
