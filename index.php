<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon premier site</title>
        <style>
            * {
            -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                    box-sizing: border-box;
            }
            .flex-container {
                display: flex;
                flex-direction: row;
            }
            div.flex-container {
                justify-content: center;
            }
            .bloc {
                background-color: #f1f1f1;
                margin: 30px;
                padding: 100px;
            }
            header div {
                margin: auto 30px auto 30px;
            }
            a {
                text-decoration: none;
                color: black;
            }
    </style>
    </head>
    <body>
        <header class="flex-container">
            <div>Logo</div>
            <div><a href="http://localhost/monpremiersite/">Accueil</a></div>
            <div><a href="http://localhost/monpremiersite/cgu.php">CGU</a></div>
        </header>
        <div class="flex-container">
            <div class="bloc"></div>
            <div class="bloc"></div>
            <div class="bloc"></div>
        </div>
        <div class="flex-container">
            <button id="bouton">Action</button>
        </div>
    </body>
</html>