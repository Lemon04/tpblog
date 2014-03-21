    <h1>Administration de la news : <?= $news->titre(); ?></h1>
    <form action="POST">
        <div class="form-group">    
            <label>Titre</label>
            <input type="text" class="form-control" id="titre" value="<?= $news->titre(); ?>">
        </div>
        <div class="form-group">  
            <label>Contenu</label>
            <textarea name="" id="contenu" class="form-control" rows="3"><?= $news->contenu(); ?></textarea>
        </div>
        <input type="submit"  class="btn btn-default">
    </form>
    <a href="?page=adminComm&id=<?= $news->id(); ?>">Administrer les commentaires</a>
    <p><a href="?page=adminNews">Retour à la liste des News</a></p>
