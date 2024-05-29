
<nav>
    <div id="flex">
		<ul>
            <li><a href="index.php">Accueil</a></li>
            <?php 

            //afficher la liste des categories
            if(isset($categories)){
                
                foreach ($categories as $categorie) { ?>

                    <li><a href="index.php?action=categorie&id=<?= $categorie->id ?>"> <?= $categorie->libelle?> </a></li>
        
                <?php }
            } else{?>
                <div>Aucune categorie trouvé</div>
            <?php }
            ?>
		</ul>
	</div>	
</n>