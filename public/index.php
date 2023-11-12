<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de Recherche</title>
    <!-- Inclure jQuery depuis un CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        #resultats {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Ma Page de Recherche</h1>

    <!-- Barre de Recherche -->
    <input type="text" id="barreRecherche" placeholder="Rechercher...">
    
    <!-- Résultats de la Recherche -->
    <div id="resultats"></div>

    <script>
        // Attendre que le DOM soit prêt
        $(document).ready(function(){
            // Fonction de recherche
            function effectuerRecherche() {
                var termeRecherche = $('#barreRecherche').val();

                // Effectuer la recherche (simulée ici)
                // Remplacez cela par une requête AJAX vers votre serveur
                var resultatsSimules = [
                    "Résultat 1",
                    "Résultat 2",
                    "Résultat 3"
                ];

                // Afficher les résultats
                afficherResultats(resultatsSimules);
            }

            // Fonction pour afficher les résultats
            function afficherResultats(resultats) {
                var resultatsDiv = $('#resultats');
                resultatsDiv.empty(); // Effacer les résultats précédents

                if (resultats.length === 0) {
                    resultatsDiv.append('<p>Aucun résultat trouvé.</p>');
                } else {
                    resultatsDiv.append('<p>Résultats :</p><ul></ul>');
                    var listeResultats = resultatsDiv.find('ul');

                    resultats.forEach(function (resultat) {
                        listeResultats.append('<li>' + resultat + '</li>');
                    });
                }
            }

            // Attacher un gestionnaire d'événement à la barre de recherche
            $('#barreRecherche').on('input', function () {
                effectuerRecherche();
            });
        });
    </script>

</body>
</html>



Cookmaster Project
<?php
include("menu.js")
?>
