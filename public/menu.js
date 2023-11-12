<!DOCTYPE html>
<html>
<head>
    <title>Menu JavaScript</title>
</head>
<body>

<select id="menu">
    <option value="accueil">Accueil</option>
    <option value="produits">Produits</option>
    <option value="services">Services</option>
    <option value="contact">Contact</option>
</select>

<button id="afficher">Afficher</button>

<script>

var menu = document.getElementById("menu");
var boutonAfficher = document.getElementById("afficher");


boutonAfficher.addEventListener("click", function() {
    
    var optionSelectionnee = menu.options[menu.selectedIndex];
    var valeurSelectionnee = optionSelectionnee.value;

    
    alert("Menu sélectionné : " + valeurSelectionnee);
});
</script>

</body>
</html>

