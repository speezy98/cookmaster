<script>

// Utilisation de innerHTML (attention aux failles XSS)
document.getElementById("monElement").innerHTML = "<p>Contenu non fiable</p>";

// Utilisation de textContent (prévient les failles XSS)
document.getElementById("monElement").textContent = "<p>Contenu non fiable</p>";

// Utilisation de DOMPurify pour nettoyer les entrées HTML non fiables
const contenuNonFiable = "<p>Contenu non fiable</p>";
document.getElementById("monElement").innerHTML = DOMPurify.sanitize(contenuNonFiable);

</script>
