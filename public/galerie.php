<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Gallerie';
include 'include/head.php';
?>

<body class="galb">
    <?php include 'include/header.php' ?>

    <main id="vitre">
        <?php include 'include/nav.php' ?>
        <div class="filtre">
            <div class="filters-container">
                <div class="filter">
                    <label for="category">Catégories:</label>
                    <select id="category" name="category">
                        <option value="image">Image</option>
                        <option value="son">Son</option>
                        <option value="video">Vidéo</option>
                    </select>
                </div>
                <div class="filter">
                    <label for="format">Format:</label>
                    <select id="format" name="format">
                        <option value="mp3">mp3</option>
                        <option value="jpg">jpg</option>
                        <option value="png">png</option>
                        <option value="acc">acc</option>
                    </select>
                </div>
                <div class="filter">
                    <label for="devise">Devise:</label>
                    <select id="devise" name="devise">
                        <option value="eth">ETH</option>
                        <option value="euro">€</option>
                    </select>
                    <input type="range" id="valeur" name="valeur" min="0" max="500">
                    <input type="text" id="unite" placeholder="...">
                    <div id="btn-radio-lim">
                        <input type="radio" name="lim" id="lim" value="min">
                        <label for="min">Min</label>


                        <input type="radio" name="lim" id="max" value="max">
                        <label for="max">Max</label>


                    </div>

                </div>
                <input type="button" class="btn btn-outline-info " value="recherche">

            </div>
            <div id="border"></div>

        </div>
        <div id="galerie">

            <div id="scroller">
                <div id="checker"></div>
            </div>
        </div>
    </main>


    <?php include 'include/footer.php' ?>

    <script src="js/gal.js"></script>


</body>

</html>