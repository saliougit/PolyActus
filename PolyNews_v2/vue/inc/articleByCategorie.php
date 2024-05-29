<?php require_once 'header.php' ?>

<div>
    
        <?php 
            if(!empty($articles)){
                foreach ($articles as $article) { ?>
                    <div id="article">
                        <h3><a href="index.php?action=article&id=<?= $article->id?>"><?= $article->titre?></a></h3>
                        <p><?= $article->contenu?></p>
                    </div>
                <?php 
                } 
            }else{ ?>
                <div>Aucun article trouvée</div>
            <?php }
        ?>

</div>

<?php require_once 'footer.php' ?>