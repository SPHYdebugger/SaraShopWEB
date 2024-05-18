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
        case 'list_section_products':
            list_section_products($dbh);
            break;

        case 'add_one':
            //mostrar formulario
            show_add_form($dbh);
            return;
        case 'add_product':

            add_product($dbh);
            return;
        case 'delete_product':
            delete_product($dbh);
            return;

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

function list_section_products($dbh)
{
    include('../../includes/header.php');
    require('../../app/Models/product_model.php');


    if (isset($_POST['section_id'])) {
        $section_id = $_POST['section_id'];
        $products = list_productsBySection($dbh, $section_id);
    } else {
        $products = [];
    }

    include('../../app/Views/product/products.php');
    include("../../includes/footer.php");
}

function show_add_form($dbh)
{
    include('../../includes/header.php');
    include('../../app/Views/product/addProductForm.php');
    include("../../includes/footer.php");
}
function add_product($dbh)
{

    require('../../app/Models/product_model.php');
    add_one_product($dbh);
    header('Location: product_controller.php?action=list_all');
    exit();

}

function delete_product($dbh)
{
    require('../../app/Models/product_model.php');

    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        try {
            delete_productById($dbh, $product_id);
            header('Location: product_controller.php?action=list_all&status=success');
        } catch (Exception $e) {
            header('Location: shop_controller.php?action=list_all&status=error&message=' . urlencode($e->getMessage()));
        }
    } else {
        header('Location: product_controller.php?action=list_all&status=error&message=' . urlencode('Product ID not provided'));
    }
    exit();
}
