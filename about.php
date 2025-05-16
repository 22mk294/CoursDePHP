<?php
session_start();
$title = "À propos";
$header = "À propos de nous";
require 'composants/head.php';
require 'composants/nav.php';
require 'composants/main.php';
?>

<section class="bg-white mt-12 rounded-xl dark:bg-gray-900 px-6 py-8">
    <div class="max-w-3xl mx-auto text-center">
        <h1 class="mb-6 text-4xl font-bold text-gray-900 dark:text-white">À propos de TrucsPasChers</h1>
        <p class="text-gray-600 dark:text-gray-300 text-lg">
            Bienvenue sur <strong>TrucsPasChers</strong> ! Nous sommes une équipe passionnée qui vous propose les 
            **meilleurs produits, astuces et bons plans** à des prix imbattables. Notre mission est de rendre le 
            shopping accessible à tous en sélectionnant des articles abordables et de qualité.
        </p>
    </div>
</section>

<section class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="mb-4 text-3xl font-semibold text-gray-900 dark:text-white">Notre engagement</h2>
        <p class="text-black dark:text-gray-300 text-lg">
            Chez <strong>TrucsPasChers</strong>, nous croyons en **l’accessibilité et la transparence**. Notre équipe
            travaille chaque jour pour vous offrir une sélection de produits vérifiés et des conseils utiles pour 
            optimiser votre budget.
        </p>
    </div>
</section>

<section class="bg-gray-700 py-8">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="mb-4 text-3xl font-semibold text-gray-900 dark:text-gray-300">Contactez-nous</h2>
        <p class="text-gray- dark:text-gray-300 text-lg">
            Vous avez des questions ou souhaitez collaborer avec nous ? N’hésitez pas à nous 
            <a href="contact.php" class="text-blue-500 hover:underline">contacter</a>.
        </p>
    </div>
</section>

<?php require 'composants/footer.php'; ?>