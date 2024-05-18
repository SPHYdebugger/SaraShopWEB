<?php

require('../../resources/db/connect-db.php');

if(isset($_GET['action'])) {
    $action = $_GET['action'];

    // Acciones basadas en el valor de "action"
    switch($action) {
        case 'list_all':
            //listar todos los clientes
            list_all($dbh);
            break;
        case 'list_shop_sections':
            //listar todos los clientes
            list_shop_sections($dbh);
            break;

    }
} else {

    list_all($dbh);
}



function list_all($dbh)
{
    include('../../includes/header.php');
    require('../../app/Models/section_model.php');

    $resultado = list_all_sections($dbh);

    include('../../app/Views/section/sections.php');
    include("../../includes/footer.php");
}

function list_shop_sections($dbh)
{
    include('../../includes/header.php');
    require('../../app/Models/section_model.php');

    // Obtener el shop_id de los parámetros GET
    if (isset($_POST['shop_id'])) {
        $shop_id = $_POST['shop_id'];
        echo $shop_id;
        $resultado = list_sectionsByShop($dbh, $shop_id);
    } else {
        $resultado = []; // O maneja el error de que shop_id no está presente
    }

    include('../../app/Views/section/sections.php');
    include("../../includes/footer.php");
}
