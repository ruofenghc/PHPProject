<?php
    /**
     * File: model.php
     * --------------
     * This file use to deal with pizza.xml file, read the file,
     * loading all data to display in the index.php file.
     *
     * Author: Chao Hu
     * 12/17/2016
     */
     
     // Load data to $dom variable
     $dom = simplexml_load_file(M . "menu.xml");
     
     function shopping_cart_to_display() {
          global $dom; // Using global value
          $total_price = 0;
          $result = array();
          $result["pizzas_bought"] = array();
          if (isset($_SESSION["shopping_cart"])) {
             foreach ($_SESSION["shopping_cart"] as $key=>$val) {
                if($val == 0) continue;
 
                // We use xpath to get price
                // Some wired using
               
                $size = $dom->xpath("/menu/category/item/size[@id='".$key."']/text()");
                $per_price = $size[0];
                $price = $val * (double)$per_price;
                
                // Get item name
                $item = $dom->xpath("/menu/category/item/size[@id='".$key."']/parent::*");
                $name = $item[0]["name"];
                
                
                $temp = array();
                $temp["type"] = $size[0]["type"];
                $temp["number"] = $val;
                $temp["name"] = $name;
                $temp["price"] = $price;
                $result["pizzas_bought"][] = $temp;
                $total_price += $price;
             }
            
          }
          $result["total_price"] = $total_price;
          return $result;
     }
     
     function pizzas_to_display() {
        global $dom;
        return $dom->xpath("/menu/category");
     }
     
     foreach ($data as $query_name => $query_value) {
        if (function_exists($query_name)) {
            $data[$query_name] = call_user_func($query_name, $query_value);
        }
      }
    
     // $data vaiable will now be returned to the controller, 
     
