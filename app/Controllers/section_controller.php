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

