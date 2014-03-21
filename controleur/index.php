<?php
function chargerClasse($classname)
{
  require 'modele/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');

$manager = new NewsManager($db);
$managercomm = new CommentairesManager($db);

$news = $manager->getList();

// On affiche la page (vue)
include_once('vue/index.php');