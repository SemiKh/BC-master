<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<?php
$pageTitle = 'Accueil';
include 'include/head.php';
?>

<body>
    <?php include 'include/header.php'; ?>

    <main id="vitre"><!--  contenu -->
        <?php include 'include/nav.php'; ?>

        <!------Accordeon---------->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Quel est ce projet?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet. Ab neque iste ut maxime illum quo quod enim in accusantium
                        distinctio cum soluta quam non quisquam quisquam? Ut provident voluptatem est deserunt beatae
                        cum sapiente pariatur est nihil eius. Ut nulla velit vel minus porro qui porro expedita sit enim
                        doloribus qui laudantium natus sit quae corporis.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Qui sommes-nous?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any php can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Qu'est-ce qu'un NFT?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Un NFT est une unité numérique qui permet de certifier l'authenticité et la propriété d'un actif
                        numérique sur une blockchain. Cela signifie qu'il permet de dire qui est le propriétaire d'un
                        objet numérique unique, comme une image ou une vidéo, et de s'assurer que cette copie ne peut
                        pas être dupliquée. Il permet aux utilisateurs d'acheter, vendre et échanger ces actifs
                        numériques.
                    </div>
                </div>
            </div>
        </div>

        <!-- Partie Tendances-->
        <section class="tendances">
            <h2 class="titre">TENDANCES</h2>
            <div class="presentation">

                <div class="boutnft">
                    <img src="img/nft/Omega_Nebula.jpg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="boutnft">
                    <img src="img/nft/cosmos.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="boutnft">
                    <img src="img/nft/cosmos2.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="btn-dir"><img src="img/icon/flechedir.svg" alt=""></div>
            </div>

        </section>

        <!--Partie dernieres visites-->
        <section class="derniereventes">
            <h2 class="titre">DERNIERES VENTES</h2>
            <div class="presentation">

                <div class="boutnft">
                    <img src="img/nft/crabnebula.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="boutnft">
                    <img src="img/nft/cosmos3.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="boutnft">
                    <img src="img/nft/crabnebula2.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="btn-dir"><img src="img/icon/flechedir.svg" alt=""></div>
            </div>


        </section>

        <!--Partie recemment ajouté-->
        <section class="recemmentajoute">
            <h2 class="titre">RECEMMENT AJOUTE</h2>
            <div class="presentation">

                <div class="boutnft">
                    <img src="img/nft/Omega_Nebula.jpg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="boutnft">
                    <img src="img/nft/crabnebula.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="boutnft">
                    <img src="img/nft/cosmos2.svg">
                    <div class="overlay"><span>description</span></div>
                </div>

                <div class="btn-dir"><img src="img/icon/flechedir.svg" alt=""></div>
            </div>


        </section>
    </main>

    <?php include 'include/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>