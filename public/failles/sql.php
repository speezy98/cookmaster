<?php

// Utilisation de requêtes préparées avec MySQLi
$mysqli = new mysqli("localhost", "utilisateur", "mot_de_passe", "ma_base_de_donnees");

// Vérifiez la connexion
if ($mysqli->connect_error) {
    die("La connexion a échoué : " . $mysqli->connect_error);
}

// Utilisation d'une requête préparée
$sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = ?";
$stmt = $mysqli->prepare($sql);

// Liaison des paramètres
$stmt->bind_param("s", $nom_utilisateur);

// Définition des paramètres et exécution de la requête
$nom_utilisateur = "utilisateur123";
$stmt->execute();

// Récupération des résultats
$result = $stmt->get_result();

// Utilisation des résultats
while ($row = $result->fetch_assoc()) {
    // Traitement des résultats
}

// Fermeture de la requête
$stmt->close();

// Fermeture de la connexion
$mysqli->close();

