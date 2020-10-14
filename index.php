<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon premier site</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <nav>
                <ol class="flex-container">
                    <li class="navigation">
                        <img src="images/logo.png" alt="Logo" id="logo">
                    </li>
                    <li class="navigation">
                        <a href="http://localhost/monpremiersite/">Accueil</a>
                    </li>
                    <li class="navigation">
                        <a href="http://localhost/monpremiersite/cgu.php">CGU</a>
                    </li>
                </ol>
            </nav>
        </header>
        <main>
            <div class="flex-container">
                <div class="bloc"><img src="http://placehold.it/400x300" alt="" id="premiere" hidden></div>
                <div class="bloc"><img src="http://placehold.it/400x300" alt="" id="deuxieme" hidden></div>
                <div class="bloc"><img src="http://placehold.it/400x300" alt="" id="troisieme" hidden></div>
            </div>
            <div class="flex-container">
                <input type="button" value="Changer l'image" onclick="changeImage();">
            </div>
        </main>
        <script>

            compteur = 0;

            function changeImage() {
                premiere = document.getElementById("premiere");
                deuxieme = document.getElementById("deuxieme");
                troisieme = document.getElementById("troisieme");

                if (compteur == 0) {
                    premiere.style.display = 'block'
                    compteur ++;
                }
                else if (compteur == 1) {
                    premiere.style.display = 'none'
                    deuxieme.style.display = 'block'
                    compteur ++;
                }
                else if (compteur == 2) {
                    deuxieme.style.display = 'none'
                    troisieme.style.display = 'block'
                    compteur ++;
                }
                else if (compteur == 3) {
                    deuxieme.style.display = 'none'
                    troisieme.style.display = 'none'
                    compteur = 0;
                }
                console.log(compteur)              
            }
            
        </script>
    </body>
</html>