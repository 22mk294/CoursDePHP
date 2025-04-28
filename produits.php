<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits des Étudiants</title>
    
</head>
<body>
    <!-- inlusion des fifchier se trouvant sur d'autre dossiers -->
    <?php require 'composants/nav.php'; ?>
    <?php require 'models/produits-data.php'; ?>

    <h1>Tous les produits</h1>
    
    <div>
        <!-- boucle pour parcourir les produits -->
        <?php foreach($produits as $produit):?>
            <!-- affichage des information du produit le nom et le prix -->
            Nom : <?php echo $produit['nom'];?><br>
            Prix  : <?php echo $produit['prix']. ' '.$produit['devise'];?><br>
            <div>
                
                <?php foreach($etudiants as $etudiant):?>
                    <?php if($etudiant['id'] === $produit['etudiant_id']):?>
                        Etudiant : <?php echo $etudiant['nom'];?><br>
                        Promotion : <?php echo $etudiant['promotion'];?><br>
                        Telephone : <?php echo $etudiant['tel'];?><br>
                        <hr>
                    <?php endif ;?>
                <?php endforeach ; ?>
            </div>
        <?php endforeach ; ?>
    </div>
</body>
</html>
