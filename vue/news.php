        <h1>Mon super blog !</h1>
        <p><a href="?page=index">Retour à la liste des billets</a></p>
        <div class="news">
            <h3>
                <?= $news->titre(); ?>
            </h3>
            <p>
                <?= $news->contenu(); ?>
            </p>
        </div>
        <h2>Commentaires</h2>
        <?php
            foreach($comms as $comm)
            {
            ?>
        <p><strong><?= $comm->auteur(); ?></strong></p>
        <p><?= $comm->commentaire(); ?></p>
        <?php
            }
            ?>