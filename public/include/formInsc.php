<div class="modal fade text-center" id="inscriptionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">User login</h1>
            </div>
            <div class="modal-body">
                <!-- Formulaire HTML -->
                <form id="inscription" action="" method="post">
                    <label for="nom">Nom</label><input type="text" name="nom" value="<?php echo $nom ?? ""; ?>">
                    <br><br>
                    <label for="prenom">Prénom</label><input type="text" name="prenom"
                        value="<?php echo $prenom ?? ""; ?>">
                    <br><br>
                    <label for="pseudo">Pseudo</label><input type="text" name="pseudo"
                        value="<?php echo $pseudo ?? ""; ?>">
                    <br><br>
                    <label for="naissance">Date de naissance</label><input type="date" name="naissance" id=""
                        value="<?php echo $naissance ?? ""; ?>">
                    <br><br>
                    <label for="email">Adresse Mail</label><input type="email" name="email" id=""
                        value="<?php echo $email ?? ""; ?>">
                    <br><br>
                    <label for="mdp">Mot de passe</label><input type="password" name="mdp" id="">
                    <br><br>
                    <label for="mdpc">Mot de passe confirmé</label><input type="password" name="mdpc" id="">
                    <br><br>
                    <input type="submit" name="submit" value="S'inscrire">
                </form>
            </div>
        </div>
    </div>
    <button type="button" class="btn back" data-bs-dismiss="modal">Retourner à
        l'accueil</button>
</div>

<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupère les valeurs saisies par l'utilisateur
    $nom = htmlentities($_POST["nom"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $motdepasse = $_POST["mdp"]; // Pas besoin de nettoyer le mot de passe ici
    $motDePasseConfirmer = $_POST["mdpc"];
    $prenom = htmlentities($_POST["prenom"]);
    $naissance = $_POST["naissance"];
    $pseudo = $_POST["pseudo"];
    // Valide les champs
    if (empty($nom) || empty($email) || empty($motdepasse) || empty($prenom) || empty($pseudo) || empty($motDePasseConfirmer) || empty($naissance)) {
        $erreur = "Veuillez remplir tous les champs.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = "Adresse e-mail invalide.";
    } else {

        // Réinitialise les valeurs des champs
        $nom = "";
        $prenom = "";
        $pseudo = "";
        $naissance = "";
        $email = "";
        $motdepasse = "";
        $motDePasseConfirmer = "";

        // Affiche un message de succès
        $message = "Inscription réussie !";
    }
}


if (isset($erreur)) {
    echo "<p style='color: red;'>Erreur : " . $erreur . "</p>";
} elseif (isset($message)) {
    echo "<p style='color: green;'>" . $message . "</p>";
}
?>