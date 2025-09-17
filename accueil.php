<?php
if (isset($_POST['prenom']) && isset($_POST['nom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    echo "Bonjour $prenom $nom.";
} else {
    echo "Veuillez remplir le formulaire correctement.";
}
?>
<?php
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'admin' && $password === 'azerty') {
        header("Location: http://$host$uri/profil.html");
        exit();
    } else {
        header("Location: http://$host$uri/index.html");
        exit();
    }
} else {
    header("Location: http://$host$uri/index.html");
    exit();
}
?>


