<?php
function chargerClasse($classname)
{
  require 'modele/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');

$manager = new NewsManager($db);
$managercomm = new CommentairesManager($db);
$id = $_GET['id'];
$news = $manager->get($id);
$comms = $managercomm->getList($id);
// On affiche la page (vue)
include_once('vue/news.php');