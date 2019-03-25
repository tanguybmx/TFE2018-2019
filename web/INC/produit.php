<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 25-03-19
 * Time: 09:24
 */
?>
<link rel="stylesheet" href="../CSS/produit.css">


<div class="container-produit">

    <div class="row">
        <div class="col-md-4">
            <img src="../IMG/products/1.jpg" alt="image du produit" class="img-rounded">
        </div>
        <div class="col-md-4">
            <p class="promo text-center">PROMO</p>
            <h2>Filet pur</h2>
            <p>Code Produit: 1</p>
            <p><b>Description: </b>boeuf bbb</p>
            <p class="price">32,90€/kg</p>
            <p class="asterix">*bbb = aux bonnes boucheries brabançonnes</p>
        </div>
        <div class="col-md-4">
            <div id="ajoutPanier">
                <label for="cart">Quantité: </label>
                <input type="number" value="0" step="0.1" min="0" max="10" id="quant1">kg
                <button type="button" class="btn btn-default cart" id="cart">Ajouté au panier</button><br>
                <label>Prix: </label>
                <input type="text" readonly id="prixCalc1" value="0">€

            </div>
        </div>
    </div>



</div>

