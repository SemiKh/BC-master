<!DOCTYPE html>
<html lang="fr">
<?php include 'include/head.php' ?>

<body>
    <?php include 'include/header.php' ?>
    <main id=vitre>
        <?php include 'include/nav.php' ;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupère les valeurs saisies par l'utilisateur
            $nom = htmlentities($_POST["nom"]);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $message = htmlentities($_POST["message"]);

            // Valide les champs (vous pouvez ajouter d'autres validations selon vos besoins)
            if (empty($nom) || empty($email) || empty($message)) {
                $erreur = "Veuillez remplir tous les champs.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erreur = "Adresse e-mail invalide.";
            } else {
                // Adresse e-mail de destination
                $destinataire = "votre_email@example.com";

                // Sujet de l'e-mail
                $sujet = "Nouveau message depuis le formulaire de contact";

                // Corps de l'e-mail
                $corps = "Nom: " . $nom . "\n";
                $corps .= "Email: " . $email . "\n";
                $corps .= "Message: " . $message;

                // En-têtes de l'e-mail
                $headers = "From: " . $email . "\r\n";
                $headers .= "Reply-To: " . $email . "\r\n";

                // Envoi de l'e-mail
                if (mail($destinataire, $sujet, $corps, $headers)) {
                    $message = "Votre message a été envoyé avec succès.";
                } else {
                    $erreur = "Une erreur est survenue lors de l'envoi du message.";
                }
            }
        }
        ?>

        <!-- Formulaire HTML -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo isset($nom) ? $nom : ''; ?>">
            <br><br>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>">
            <br><br>
            <label for="message">Message :</label>
            <textarea name="message" id="message"><?php echo isset($message) ? $message : ''; ?></textarea>
            <br><br>
            <input type="submit" name="submit" value="Envoyer">
        </form>

        <!-- Affichage des messages d'erreur ou de succès -->
        <?php
        if (isset($erreur)) {
            echo "<p style='color: red;'>Erreur : " . $erreur . "</p>";
        } elseif (isset($message)) {
            echo "<p style='color: green;'>" . $message . "</p>";
        }
        ?>

    </main>
    <?php include 'include/footer.php' ?>
</body>

</html>