        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
        <?php foreach ($news as $new)
            {
            ?>
        <div>
            <h3>
                <?php echo $new->titre(); ?>
            </h3>
            <p>
                <?php echo $new->contenu(); ?>
                <br />
                <em><a href="?page=news&id=<?php echo $new->id(); ?>">Commentaires(<?php echo $managercomm->count($new->id());?>)</a></em>
            </p>
        </div>
        <?php
            }
            ?>