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

            add_shop($dbh);
            return;
        case 'delete_shop':
            delete_shop($dbh);
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

function delete_shop($dbh)
{
    require('../../app/Models/shop_model.php');

    if (isset($_POST['shop_id'])) {
        $shop_id = $_POST['shop_id'];
        try {
            delete_shopById($dbh, $shop_id);
            header('Location: shop_controller.php?action=list_all&status=success');
        } catch (Exception $e) {
            header('Location: shop_controller.php?action=list_all&status=error&message=' . urlencode($e->getMessage()));
        }
    } else {
        header('Location: shop_controller.php?action=list_all&status=error&message=' . urlencode('Shop ID not provided'));
    }
    exit();
}
