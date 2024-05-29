<?php require_once 'header.php' ?>

<div id="article">
    <h3><a href="index.php?action=article&id=<?= $article[0]->id?>"><?= $article[0]->titre?></a></h3>
    <p><?= $article[0]->contenu?></p>
    <div>
        <span><?= $article[0]->dateCreation?></span><br>
        <span><?= $article[0]->dateModification?></span>
    </div>
    
</div>
