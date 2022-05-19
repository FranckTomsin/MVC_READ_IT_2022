<?php 

if (isset($_GET['postID'])) :

    // DETAILS D'UN POST
    // PATTERN : ?postID=x
    // CTRL : postsController
    // ACTION : showAction

    include_once '../app/controllers/postsController.php';
    showAction($connexion, $_GET['postID']);

else:
    // ROUTE PAR DEFAUT
    // PATTERN : /
    // CONTROLLER : postsController
    // ACTION : index
    include_once '../app/controllers/postsController.php';
    indexAction($connexion);
endif;



