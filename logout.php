<?php
    /**
     * File: logout.php
     * ---------------
     * Clearing the information from shopping cart.
     */
   
    session_start();
    
    session_destroy();

    echo "<h1>You have cleared shopping cart</h1>";
    echo "<h1>Go back <a href='index.php'>homepage</a></h1>";
?>
