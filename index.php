
    	<!-- Your content -->
        <!-- inclusion du fichier de navigation -->
    <?php require 'composants/nav.php'; ?>


<!-- declaration du titre -->
<h1 >Bienvenue sur notre site</h1>
<p>Nous vendos ici des <strong>trucs pas chers</strong></p>
<p>
    <?php
        // importation du fichier de données
        require 'models/articles-data.php';

        echo "Super $article pour dame "
    ?>
    <!-- mise en gras avec strong -->
    <strong>
        :<?php echo $prix . ' ' . $devise;?>
    </strong>
</p>

<hr>
<div>
    <h3>Les noms de tous les articles</h3>
    <ul>
        <?php
            // la boucle foreache qui permet de parcourir la liste des articles
            foreach($articles_names as $name):?>
            <li><?php echo $name; ?></li>
            <?php endforeach; ?>
    </ul>
</div>
<hr>
<div>
    
    <h3>prix des articles </h3>
    <ul>
        <!-- affichage de prix des articles  -->
        <?php foreach($articles_prix as $prix): ?>
            <li><?php echo $prix. 'FC'; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<hr>
<div>
    
    <h3>Le nom et prix des articles </h3>
    <ul>
        <!-- affichage de nom des article  -->
        <?php foreach($articles_prix as $name => $prix): ?>
            <li><?php echo $name. ' : ' .$prix. 'FC'; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<hr>
<div>
    
    <h3>Le nom et prix des articles de moin de 10000fc</h3>
    <ul>
        <!-- affichage de nom des article de moin de 10000FC -->
        <?php foreach($articles_prix as $name => $prix): ?>
            <?php if($prix < 10000): ?>
                <li><?php echo $name. ' : ' .$prix. 'FC'; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<hr>
    <h3>Le prix total de tous les articles</h3>
    <!-- appel du trainte d'affichage de la somme des articles  -->
    <?php echo "Le total des articles est: ", $total, "FC"?>
</div>
<div>
<h3>L'indentité du premier etudiant</h3>

</div>
    
