<?php
    
    $data = array(
        // The data stores to diplay in shopping cart
        'shopping_cart_to_display' => '',
        
        // The variable stores data to display about 
        // all pizza information
        'pizzas_to_display' => '',
    );


    // Determine which page to be loaded.
    if (isset($_GET['page'])) 
        $page = $_GET["page"];
    else 
        $page = 'index';

    // Show page
    switch ($page)
    {
        case 'index':
             // The data variable will be filled in the model
             include(M . 'model.php');
    
             // Now the $data var contains the result of each 
             // information.
             include(V . "view.php");
             break;
        case 'shoppingCart':
             
             include(M . 'model.php');
             include(V . 'shoppingCart.php');
             break;
    }
