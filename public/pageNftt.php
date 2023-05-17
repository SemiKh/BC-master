<!DOCTYPE html>
<html lang="fr">
<?php 
    $pageTitle = 'NFT';
    include 'include/head.php';
?>

<body>
    <?php include 'include/header.php' ?>

    <main id="vitre">
        <?php include 'include/nav.php' ?>
        <section id="presentation-nft">
            <div id="cible"><img src="img/nft/cosmos.svg" alt=""></div>
            <div id="sum">
                <section id="titreNft">
                    <h2>Titre nft</h2>
                    <h4>Auteur</h4>
                </section>
                <div id="trans">
                    <div id="vente">

                        <table id="valueNft">
                            <tbody>
                                <tr>
                                    <td>Prix actuel</td>
                                </tr>
                                <tr>
                                    <td>5 ETH 4000€</td>
                                </tr>
                                <tr>
                                    <td><input type="button" value="Ajouter au panier"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" value="Faire une offre"></td>
                                </tr>
                                <tr>
                                    <td>Exemplaire en vente : 7</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                    <div id="detail">
                              <div>Détails</div>
                        
                        <table>
                            
                            <tbody>
                                <tr>
                                    <td>Adresse du contrat</td>
                                    <td>zertyuioiuytre</td>
                                </tr>
                                <tr>
                                    <td>ID jeton</td>
                                    <td>4501</td>
                                </tr>
                                <tr>
                                    <td>Norme jeton</td>
                                    <td>ERC-54</td>
                                </tr>
                                <tr>
                                    <td>Blockchain</td>
                                    <td>Eth</td>
                                </tr>
                                <tr>
                                    <td>Revenu de Création</td>
                                    <td>0.1%</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Dernière update : 6h</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div id="history">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Activité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Offre en Cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </main>

    <?php include 'include/footer.php'?>
</body>

</html>