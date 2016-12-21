<?php 

    // Show some shopping cart information
    
    

    function display_shopping($data) {
        if (isset($_SESSION["shopping_cart"])) {
            foreach ($data["pizzas_bought"] as $item) {
                if($item["number"] == 0) continue;
                echo("<tr>");
                echo '<td>'.$item["name"].'</td>';
            
                echo '<td>'.$item["type"].'</td>';
                echo '<td>'.$item["number"].'</td>';
                echo '<td>'.$item["price"] / (double)$item["number"].'</td>';
                echo '<td>'.$item["price"].'</td>';
                echo '</tr>';
            }
            echo '<tr>';
            echo '<td>';
            echo '</td>';
            echo '<td>';
            echo '</td>';
            echo '<td>';
            echo (" total price ".$data["total_price"]);
            echo '</td>';
            echo '<td>';
            echo (' <a href="' . FOLDER.'logout.php' . '">Clearing shopping cart</a>');
            echo '</td>';
            echo '</tr>';

        }
    }  
        
    require(V . "template/header.php");
    require(V . "topbar.php");
    require(V . "cart.php"); 
    require(V . "template/footer.php");
 //   print_r($data["shopping_cart_to_display"]);
 //   display_shopping($data["shopping_cart_to_display"]);
