<?php

if(!empty($_GET['action'])):
    switch($_GET['action']):
    
    case 'personne' :
        include('view/personne.php');
        break;

    case 'form' :
        include('view/form.php');
        break;

    default :
        include('view/404.php');
        break;

endswitch;
else : include('view/form.php'); endif;

?>