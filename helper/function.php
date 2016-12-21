<?php

// This file contains some function to make
// all project more easy to organzie.

function deal_with_add() {
    // Store data in session.
    foreach ($_POST as $key=>$value) {
        if ($key == "add") continue; // Ignoring some submit button
        if(isset($_SESSION["shopping_cart"][$key])) {
            $_SESSION["shopping_cart"][$key] += 1;
        } else {
            $_SESSION["shopping_cart"][$key] = 1;
        }
    }
}   
