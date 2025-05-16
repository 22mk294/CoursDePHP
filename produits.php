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

<h1>Tous nos produits</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
    <!-- Boucle pour parcourir les produits -->
    <?php foreach ($produits as $produit): ?>
        <div class="flex flex-col items-center my-3 bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-2xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="<?php echo 'uploads/' . $produit['image']; ?>" alt="<?php echo $produit['nom']; ?>">

            <div class="flex flex-col justify-between p-4 leading-normal text-white">
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
                <p>
                    <?php if ($etudiant_associe): ?>
                        <strong>Étudiant :</strong>
                        <a href="filtre.php?etudiant=<?php echo $etudiant_associe['id']; ?>" class="text-blue-500 hover:underline">
                            <?php echo $etudiant_associe['nom']; ?>
                        </a><br>
                        <strong>Promotion :</strong> <?php echo $etudiant_associe['promotion']; ?><br>
                        <strong>Téléphone :</strong> <?php echo $etudiant_associe['tel']; ?><br>
                    <?php endif; ?>
                </p>

                <hr>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Boucle pour parcourir les produits -->
    <?php foreach ($produits as $produit): ?>
        <div class="flex flex-col items-center my-3 bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-2xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="<?php echo "uploads/" . $produit['image']; ?>" alt="<?php echo $produit['nom']; ?>">

            <div class="flex flex-col justify-between p-4 leading-normal text-white">
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
                    <strong>Téléphone :</strong> <?php echo $etudiant_associe['tel']; ?><br>
                <?php endif; ?>

                <hr>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require 'composants/footer.php'; ?>