<header>
    <div id="bandeau">
        <!-- TOFIX: Refaire le header avec un grid -->
        <!--  partie haut-gauche du header -->
        <div class="head">
            <a href="index.php"><img id="lg" src="img/logo.png"></a>

            <h1 id="firstname"><a href="index.php">CosmiCard</a></h1>

        </div>
        <!-- TOFIX: Centrer le formulaire -->
        <form method="post" action="#" class="cc-search">
            <div class="barre">
                <label for="search">Search</label>
                <input type="search" name="search" id="search" placeholder="Search">
            </div>
            <button type="submit" id="search" class="btn"><img src="img/icon/search.svg" alt=""></button>
        </form>
        <div class="head">
            <!-- partie haut droite du header liste verticale entre compte et menuprofil -->
            <div id="compte">
                <div class="compte-interactible">
                    <p><a href="#" data-bs-target="#inscriptionModal" data-bs-toggle="modal">Inscription</a> / 
                    <a href="#" data-bs-target="#connexionModal" data-bs-toggle="modal">Connexion</a></p>

                    <!-- Modal -->
                    
                    <?php 
                    include "include/formInsc.php";
                    include "include/formConnexion.php" 
                    ?>

                    <div id="menuprofil"><!--  Icones inline -->
                        <a href="galerieUtilisateur.php"><img src="img/icon/iconecollection.svg" alt="collection"></a>
                        <a href="market.php"><img src="img/icon/iconmarket.svg" alt="market"></a>
                        <a href="wallet.php"><img src="img/icon/iconwallet.svg" alt="wallet"></a>
                        <a href="message.php"><img src="img/icon/iconmessage.svg" alt="message"></a>
                    </div>

                </div>

                <a class="utilisateur" href="galerieUtilisateur.php"><img class="bulle" src="img/icon/profilutilisateur.svg"
                        alt="profil"></a>
            </div>

        </div>
    </div>


</header>