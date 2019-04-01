<link rel="stylesheet" href="../CSS/produit.css">
<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 25-03-19
 * Time: 09:24
 */
include 'connectionDB.php';
$produits= produits();

foreach ($produits as $key=>$values) {
    echo
    "<div class='container-produit'>

    <div class='row'>
        <div class='col-md-4'>
            <img src='../IMG/products/".$values['id'].".jpg' alt='image de ".$values['nom']."' class='img-rounded'>
        </div>
        <div class='col-md-4'>";
             if($values['estPromo']==1){
                echo" <p class='promo text-center' > PROMO</p > ";
            }
            echo "<h2>".$values['nom']."</h2>
            <p>Code Produit:  ".$values['id']."</p>
            <p><b>Description: </b>".strtolower($values['description'])."</p>
            <p class='price'> ".$values['prix']."€/kg</p>
            <p class='asterix'>*bbb = aux bonnes boucheries brabançonnes</p>
        </div>
        <div class='col-md-4'>
            <div id='ajoutPanier'>
                <label for='cart'>Quantité: </label>
                <input type='number' value='0' step='0.1' min='0' max='10' id='quant1'>kg
                <button type='button' class='btn btn-default cart' id='cart'>Ajouté au panier</button><br>
                <label>Prix: </label>
                <input type='text' readonly id='prixCalc1' value='0'>€

            </div>
        </div>
    </div>


</div> <br>";
}


