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

        case 'add_one':
            //mostrar formulario
            show_add_form($dbh);
            return;
        case 'add_shop':
            //añadir un cliente
            add_shop($dbh);
            return;


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

function show_add_form($dbh)
{
    include('../../includes/header.php');
    include('../../app/Views/shop/addshopForm.php');
    include("../../includes/footer.php");
}
function add_shop($dbh)
{

    require('../../app/Models/shop_model.php');
    add_one_shop($dbh);
    header('Location: shop_controller.php?action=list_all');
    exit();

}