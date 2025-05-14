<?php
require 'models/produits-data.php';


$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = $_POST["nom"];
  $prix = $_POST["prix"];
  $devise = $_POST["devise"];
  $etudiant_id = $_POST["etudiant_id"];

  $image_name = $_FILES["image"]["name"];
  $image_tmp_name = $_FILES["image"]["tmp_name"];

  //déplacer l'imgage dans le dossier uploads
  move_uploaded_file($image_tmp_name, "uploads/" . $image_name);

  //Enregistrer les information du produit dans la bdd
  $db->query("INSERT INTO produits(etudiant_id, nom, prix, devise, image) VALUES(:etudiant_id, :nom, :prix, :devise, :image)", [
    "etudiant_id" => $etudiant_id,
    "nom" => $nom,
    "prix" => $prix,
    "devise" => $devise,
    "image" => $image_name

  ]);
  $success = true;
}

$title = "create.php";
$header = "Ajouter un nouveau produit";
?>
<?php require 'composants/head.php'; ?>
<?php require 'composants/nav.php'; ?>
<?php require 'composants/main.php'; ?>

<?php ?>


<form class="max-w-sm mx-auto" action="create.php" method="POST" enctype="multipart/form-data">
  <?php if ($success): ?>

    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <span class="font-medium">Le produit</span> a été ajouté.

    <?php endif; ?>
    <div class="mb-5">
      <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du produitd</label>
      <input type="text" id="nom" name="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex: bracelet" required />
    </div>

    <div class="mb-5">
      <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
      <input type="number" id="prix" name="prix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex: 100" required />
    </div>

    <div class="mb-5">
      <label for="devise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sectionner la dévise</label>
      <select id="devise" name="devise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

        <option>FC</option>
        <option>$</option>
        <option>£</option>

      </select>
    </div>

    <div class="mb-5 max-w-lg mx-auto">
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Choisissez l'image </label>
      <input name="image" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="image" type="file">
      <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>

    </div>

    <div class="mb-5">
      <label for="etudiant_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produit etudiant</label>
      <select id="etudiant_id" name="etudiant_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <?php foreach ($etudiants as $etudiant): ?>

          <option value="<?php echo $etudiant['id'] ?>">

            <?php echo $etudiant['nom'] ?>

          </option>

        <?php endforeach; ?>
      </select>
    </div>

    <div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
    </div>
</form>


<?php require 'composants/footer.php'; ?>