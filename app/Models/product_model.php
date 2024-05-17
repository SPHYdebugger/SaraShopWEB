<?php


require('../../resources/db/connect-db.php');
require('../../Classes/Product.php');


function list_products($dbh)
{

    $stmt = $dbh->prepare('SELECT * FROM product');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $products = array();
    foreach ($rows as $row) {
        $product = new Product($row['ID'], $row['nombre'], $row['descripcion'], $row['precio'], $row['categoria']);
        $products[] = $product;
    }
    return $products;

}





