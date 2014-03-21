<?php
function chargerClasse($classname)
{
  require 'modele/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');

$manager = new NewsManager($db);
$id = $_GET['id'];
$news = $manager->get($id);

// On affiche la page (vue)
include_once('vue/modifNews.php');