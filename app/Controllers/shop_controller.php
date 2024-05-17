<?php

require('../../resources/db/connect-db.php');

if(isset($_GET['action'])) {
    $action = $_GET['action'];

    // Acciones basadas en el valor de "action"
    switch($action) {

        case 'list_all':
            //listar todos las tiendas
            show_list_shops($dbh);
            break;



    }
} else {
    show_list_shops($dbh);
}


function show_list_shops($dbh)
{
    include('../../includes/header.php');
    require('../../app/Models/shop_model.php');


    $shops = list_shops($dbh);

    include('../../app/Views/shop/shops.php');
    include("../../includes/footer.php");
}

