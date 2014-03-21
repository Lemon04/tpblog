<?php
function chargerClasse($classname)
{
  require 'modele/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');



// On affiche la page (vue)
include_once('vue/admin.php');