<?php

require('../../resources/db/connect-db.php');

if(isset($_GET['action'])) {
    $action = $_GET['action'];

    // Acciones basadas en el valor de "action"
    switch($action) {

        case 'list_all':
            //listar todos los productos
            show_list_products($dbh);
            break;


    }
} else {
    show_list_products($dbh);
}


function show_list_products($dbh)
{
    include('../../includes/header.php');
    require('../../app/Models/product_model.php');


    $products = list_products($dbh);

    include('../../app/Views/product/products.php');
    include("../../includes/footer.php");
}


