<?php 
session_start();
$title = "Contact";
$header = "Contactez-nous"
?>
<?php require 'composants/head.php'; ?>
<?php require 'composants/nav.php'; ?>
<?php require 'composants/main.php'; ?>

<h1 class="mb-4 text-4xl text-white">Contactez nous</h1>


<p class="text-gray-500 dark:text-gray-400">
    Bonjour à tous ! Nous sommes l'équipe <strong>OverWatch</strong> et nous sommes ravis de vous accueillir sur notre site <strong>"TRUCS-PS-CHERS"</strong>. <br> 
    Ici, nous vous proposons les meilleures astuces et solutions pour vos besoins technologiques, le tout avec passion et expertise !
</p>

<blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
    <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">
        "Je m'appelle <strong>JOEL MIKE MUKENDI</strong>, développeur web passionné. 
        Mon nom informatique est <strong>OverWatch</strong>, et à travers ce site, je partage mon savoir-faire et mon amour pour la programmation et la technologie.
    </p>

    <!-- Icône YouTube avec lien -->
    <a href="https://www.youtube.com/@gospelchantetparole" target="_blank" class="flex items-center gap-2 mt-4">
        <img src="assets/images/icones/youtube.png" alt="YouTube" class="w-6 h-6">
        <span class="text-blue-500 hover:underline">Suivez-nous sur notre chaîne YouTube, votre abonnement nous fera grandement du bien.</span>
    </a>
</blockquote>

<p class="text-gray-500 dark:text-gray-400">
    Notre objectif ? Vous offrir des outils, des conseils et des solutions pratiques. 
    Que vous soyez débutant ou expert, vous trouverez ici des informations précieuses pour optimiser votre expérience. 
    <br><br>
    🎯 <strong>Découvrir. Apprendre. Partager.</strong> C’est notre philosophie !


</p>

<?php require 'composants/footer.php'; ?>