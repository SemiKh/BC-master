<!DOCTYPE html>
<html lang="fr">
<?php
$pageTitle = 'Ma collection';
include 'include/head.php';
?>
<head><script src="https://cdn.jsdelivr.net/npm/chart.js"></script></head>

<body>
    <?php include 'include/header.php' ?>
    <main id="vitre">
        <?php include 'include/nav.php' ?>
        <div id="reglage">
            <img src="img/icon/reglage.svg" alt="">
        </div>
        <section id="collectionPerso">
            <ul>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" style="width: 18rem;">
                        <img src="img/nft/crabnebula3.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>
                </li>

            </ul>
        </section>
        <div id="tabBilan">
            <table id="bilan">
                <tbody>
                    <tr>
                        <td>Valeur actuelle :</td>
                        <td>2.84 ETH</td>
                    </tr>
                    <tr>
                        <td>Achat total :</td>
                        <td>1.41 ETH</td>
                    </tr>
                    <tr>
                        <td>Performance :</td>
                        <td>15 %</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="courEth">
            <h2>Etherium</h2>
            <canvas id="ethereumChart"></canvas>
        </div>
    </main>


    <?php include 'include/footer.php' ?>
    <script src="js/eth.js"></script>
</body>

</html>