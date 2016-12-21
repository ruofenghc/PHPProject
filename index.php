<?php
   /**
    * File: index.php
    * ----------------
    * This project use mvc structure to organize the code.
    *
    * Author: Chao Hu
    * Date: 11/28/2016
    */
    
    // Enable session
    session_start();
    
    define('FOLDER', '');
    define('M', FOLDER . 'model/');
    define('V', FOLDER . 'view/');
    define('C', FOLDER . 'controller/');
    define('H', FOLDER . 'helper/');
    
    require(C . 'controller.php');
