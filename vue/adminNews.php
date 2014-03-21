<h1>Administration des news</h1>
<table>
    
<?php foreach ($news as $new)
    {
    ?>
    <tr>
        <td><?php echo $new->titre(); ?></td>
        <td><a href="?page=news&id=<?=$new->id();?>">Consulter</a></td>
        <td><a href="?page=modifNews&id=<?=$new->id();?>">Administrer</a></td>
        <td><a href="?page=adminNews&action=supprimerNews&id=<?=$new->id();?>">Supprimer</a></td>
<?php
    }
    ?>
</table>
<a href="?page=index">retour</a>