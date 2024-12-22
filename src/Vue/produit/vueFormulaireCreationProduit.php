<h3>Créer un produit</h3>
<form method="get" action="" class="">
    <label>
        Nom du produit :
        <input type="text" name="nomProduit" required/>
    </label>
    <label>
        Description longue :
        <textarea name="descriptionLongue" required></textarea>
    </label>
    <label>
        Description rapide :
        <textarea name="descriptionRapide" required></textarea>
    </label>
    <label>
        Poids :
        <input type="number" step="0.01" name="poids" required/>
    </label>
    <label>
        Prix :
        <input type="number" step="0.01" name="prix" required/>
    </label>
    <label>
        Quantité :
        <input type="number" name="quantite" required/>
    </label>

    <input type="submit" value="Envoyer" />
    <input type='hidden' name='action' value='creerProduitDepuisFormulaire'>
    <input type='hidden' name='controleur' value='produit'>
</form>