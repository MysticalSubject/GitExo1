<?php
if (isset($_POST['prenom']) && isset($_POST['nom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    echo "Bonjour $prenom $nom.";
} else {
    echo "Veuillez remplir le formulaire correctement.";
}
?>

