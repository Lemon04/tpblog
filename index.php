<?php
include_once('modele/connexion_sql.php');
include_once('vue/header.php');
if (!empty($_GET['page']) && is_file('controleur/'.$_GET['page'].'.php'))
{
        include 'controleur/'.$_GET['page'].'.php';
}
else
{
        include 'controleur/index.php';
}
include_once('vue/footer.php');
testeuuuuh