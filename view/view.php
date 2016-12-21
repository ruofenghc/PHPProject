<?php
   /**
    * File: view.php
    * --------------
    * In view file, only having some variable to 
    * display, not having others to display.
    *
    * Author: Chao Hu
    * Date: 11/28/2016
    */

    
    include(H . 'function.php');
    // Check whether the user have posted data
    if (!empty($_POST)) {
        deal_with_add();
    }
 
   // print_r($_SESSION);
   //print_r($_POST);

    require(V . "template/header.php");
    require(V . "topbar.php");
    require(V . "carousel.php");
    require(V . "content.php");
   // include(V . "shoppingCart.php"); 
    require(V . "template/footer.php");
?>


