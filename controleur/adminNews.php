<?php
function chargerClasse($classname)
{
  require 'modele/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');

$manager = new NewsManager($db);
$managercomm = new CommentairesManager($db);

$news = $manager->getList();

include_once('vue/adminNews.php');