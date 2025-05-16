<?php
session_start();
$title = "Produits";
$header = "Decouvrez tout nos produits";
?>
<?php require 'composants/head.php'; ?>
<?php require 'composants/nav.php'; ?>
<?php require 'composants/main.php'; ?>

<!-- importation des données -->
<?php require 'models/produits-data.php'; ?>

<h1 class="mb-4 text-4xl text-white">Tous nos produits</h1>
<section class="bg-white rounded-xl dark:bg-gray-900">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-auto">
        <!-- Boucle pour parcourir les produits -->
        <?php foreach ($produits as $produit): ?>
            <div class="flex flex-col items-center my-4 mx-auto bg-white border border-gray-700 rounded-lg shadow-sm md:flex-row md:max-w-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-3">
                <img class="object-cover w-full rounded-t-lg h-64 md:h-auto md:w-40 md:rounded-none md:rounded-s-lg"
                    src="<?php echo "uploads/" . $produit['image']; ?>" alt="<?php echo $produit['nom']; ?>">

                <div class="flex flex-col justify-between p-4 leading-normal text-white">
                    <p>
                        <strong>Nom :</strong> <?php echo $produit['nom']; ?><br>
                        <strong>Prix :</strong> <?php echo $produit['prix'] . ' ' . $produit['devise']; ?><br>
                        <?php
                        // Recherche de l'étudiant associé
                        $etudiant_associe = null;
                        foreach ($etudiants as $etudiant) {
                            if ($etudiant['id'] === $produit['etudiant_id']) {
                                $etudiant_associe = $etudiant;
                                break;
                            }
                        }
                        ?>
                        <?php if ($etudiant_associe): ?>
                            <strong>Étudiant :</strong>
                            <a href="filtre.php?etudiant=<?php echo $etudiant_associe['id']; ?>" class="text-blue-500 hover:underline">
                                <?php echo $etudiant_associe['nom']; ?>
                            </a><br>
                            <strong>Promotion :</strong> <?php echo $etudiant_associe['promotion']; ?><br>
                            <strong>Téléphone :</strong> <?php echo $etudiant_associe['tel']; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php require 'composants/footer.php'; ?>