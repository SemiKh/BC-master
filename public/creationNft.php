<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Ajout de Nft';
include 'include/head.php';
?>


<body>
    <?php include 'include/header.php'; ?>

    <main><!--  contenu -->
        <?php include 'include/nav.php';
        include 'model/nft.php';
        ?>

        <div id="enregistrementNft">
            <form method="post" enctype="multipart/form-data">

                <h2>Informations sur l'artiste ou le créateur</h2>
                <label for="nom">Nom complet :</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <h2>Informations sur l'œuvre NFT</h2>
                <label for="titre">Titre de l'œuvre :</label>
                <input type="text" id="titre" name="titre" required><br><br>

                <label for="description">Description de l'œuvre :</label>
                <textarea id="description" name="description" required></textarea><br><br>

                <label for="categorie">Catégorie de l'œuvre :</label>
                <select name="pets" id="pet-select">
                    <option value="">--Sélectionner une catégorie--</option>
                    <option value="texte">Texte</option>
                    <option value="image">Image</option>
                    <option value="video">Vidéo</option>
                    <option value="son">Son</option>

                </select><br><br>

                <label for="date">Date de création de l'œuvre :</label>
                <input type="date" id="date" name="date" required><br><br>

                <label for="prix">Prix de vente (en ETH) :</label>
                <input type="text" id="prix" name="prix" required><br><br>

                <input type="hidden" name="MAX_FILE_SIZE" value="2000000"> <!-- 2 mo -->
                <input id="imageInput" type="file" name="image" accept="image/*" onchange="previewImage(event)"><br /><br />
                <img id="preview" src="#" alt="Aperçu de l'image" style="max-width: 300px;"><br /><br />

                <h2>Conditions générales</h2>
                <input type="checkbox" id="conditions" name="conditions" required>
                <label for="conditions">J'atteste que j'ai les droits d'auteur nécessaires pour enregistrer cette œuvre en tant que NFT.</label><br><br>


                <input type="submit" value="Enregistrer le NFT">



            </form>
        </div>


        <script>
            function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var preview = document.getElementById('preview');
                    preview.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
        <!-- Chercher comment convertir n'importe quel img en svg -->
        <?php
        if (!empty($_FILES['image'])) {
            if ($_FILES['image']['error'] === 0) { // Vérifier s'il y a une erreur lors de l'envoi du fichier
                if ($_FILES['image']['size'] > 1000 && $_FILES['image']['size'] <= 7000000) {

                    if ((getimagesize($_FILES['image']['tmp_name'])[0] > 50 &&
                            getimagesize($_FILES['image']['tmp_name'])[1] > 50) ||
                        (getimagesize($_FILES['image']['tmp_name'])[0] < 8000 &&
                            getimagesize($_FILES['image']['tmp_name'])[1] < 8000)
                    ) {
                        echo 'Fichier envoyé avec succès';
                    } else {
                        echo 'Taille de fichier invalide';
                    }
                } else {
                    echo "Fichier trop volumineux";
                }
            } else {
                echo "Une erreur s'est produite lors de l'envoi du fichier. Veuillez réessayer.";
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        ?>
    </main>

    <?php include 'include/footer.php' ?>
</body>