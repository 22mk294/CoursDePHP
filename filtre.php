<?php
session_start();
//require_once 'models/produits-data.php';
require 'models/EtudiantModel.php';
require 'models/Database.php';
require 'models/ProduitModel.php';

$etudiantModel = new EtudiantModel();
$etudiants = $etudiantModel->all();

$title = "Filtre";
$etudiant_id = isset($_GET["etudiant"]) ? intval($_GET["etudiant"]) : 1;

$etudiant = $etudiantModel->find($etudiant_id);
$nom_etudiant = $etudiant ? $etudiant['nom'] : "";
$nom_etudiant = "";
// Vérification simple que la liste des étudiants est bien définie et est un tableau

// Condition simple pour générer le titre
if (!$etudiant) {
    $header = "Aucun étudiant trouvé !";
} else {
    $header = "Filtre des produits de : " . $nom_etudiant;
}

$produitModel = new ProduitModel;
$produits = $produitModel->filterByEtudiantId($etudiant_id);
?>
<?php require_once 'composants/head.php'; ?>
<?php require_once 'composants/nav.php'; ?>

<h1 class="text-white text-2xl"><?php echo htmlspecialchars($header); ?></h1>

<!-- Liste des étudiants pour filtrage -->
<div class="my-4 flex flex-wrap gap-2 justify-center">
    <?php foreach ($etudiants as $etudiant) : ?>
        <?php if ($etudiant['id'] == $etudiant_id) : ?>
            <span class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-sm border border-blue-600">
                <?php echo htmlspecialchars($etudiant['nom']); ?>
            </span>
        <?php else : ?>
            <a
                class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded-sm border border-blue-400 inline-flex items-center justify-center"
                href="filtre.php?etudiant=<?php echo $etudiant['id']; ?>">
                <?php echo htmlspecialchars($etudiant['nom']); ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<!-- Liste des produits filtrés -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 justify-center">
    <?php foreach ($produits as $produit) : ?>
        <?php //if ($produit['etudiant_id'] == $etudiant_id) : 
        ?>
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="<?php echo "uploads/" . htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        <strong>Nom :</strong> <?php echo htmlspecialchars($produit['nom']); ?>
                    </h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">
                        <?php echo htmlspecialchars($produit['prix']) . ' ' . htmlspecialchars($produit['devise']); ?>
                    </span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Contact
                    </a>
                </div>
            </div>
        </div>
        <?php //endif; 
        ?>
    <?php endforeach; ?>
</div>

<?php require_once 'composants/footer.php'; ?>