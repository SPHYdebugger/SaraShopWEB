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
        $product = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['creation_date'], $row['stock'], $row['section_id']);
        $products[] = $product;
    }
    return $products;

}

function list_productsBySection($dbh, $section_id)
{

    $stmt = $dbh->prepare('SELECT * FROM product WHERE section_id= :id');
    $stmt->bindParam('id', $section_id, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $products = array();
    foreach ($rows as $row) {
        $product = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['creation_date'], $row['stock'], $row['section_id']);
        $products[] = $product;
    }
    return $products;
}



