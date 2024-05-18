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

function add_one_product($dbh){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (empty($_POST['NAME'])) {
            // Si falta alguno de los campos obligatorios, mensaje de error
            $_SESSION['error'] = '';
            header('Location: ../Controllers/product_controller.php?action=add_one');
            exit();
        }

        // Verificar que se hayan enviado datos
        if (isset($_POST['NAME']) && isset($_POST['DESCRIPTION'])) {
            // Obtener los datos del formulario
            $name = $_POST['NAME'];
            $description = $_POST['DESCRIPTION'];
            $price = $_POST['PRICE'];
            $creation_date = date("d-m-Y/H:i:s");
            $stock = $_POST['STOCK'];
            $section_id = $_POST['SECTION'];

            try {
                $stmt = $dbh->prepare("INSERT INTO product (name, description, price, creation_date, stock, section_id) VALUES (:name, :description, :price, :creation_date, :stock, :section_id)");
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':description', $description, PDO::PARAM_STR);
                $stmt->bindParam(':price', $price, PDO::PARAM_INT);
                $stmt->bindParam(':creation_date', $creation_date, PDO::PARAM_STR);
                $stmt->bindParam(':stock', $stock, PDO::PARAM_STR);
                $stmt->bindParam(':section_id', $section_id, PDO::PARAM_INT);
                $stmt->execute();

            } catch (PDOException $e) {
                echo "ERROR: " . $e->getMessage();
            }
        }
    }
}

function get_shop($dbh) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar que se hayan enviado datos
        if (isset($_POST['id'])) {
            // Obtener los datos del formulario
            $id = $_POST['id'];

            try {
                $stmt = $dbh->prepare("SELECT * FROM shop WHERE id = :id");
                $stmt->bindParam(':id', $id, PDO::PARAM_STR);
                $stmt->execute();
                $shop = $stmt->fetch(PDO::FETCH_ASSOC);
                return $shop;

            } catch (PDOException $e) {
                echo "ERROR: " . $e->getMessage();
            }


        }
    }

}

function delete_shopById($dbh, $shop_id) {
    try {
        $stmt = $dbh->prepare('DELETE FROM shop WHERE id = :id');
        $stmt->bindParam(':id', $shop_id, PDO::PARAM_INT);
        if (!$stmt->execute()) {
            throw new Exception('Failed to delete shop');
        }
    } catch (Exception $e) {
        throw new Exception('Error deleting shop: ' . $e->getMessage());
    }
}

function delete_productById($dbh, $product_id) {
    try {
        $stmt = $dbh->prepare('DELETE FROM product WHERE id = :id');
        $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
        if (!$stmt->execute()) {
            throw new Exception('Failed to delete shop');
        }
    } catch (Exception $e) {
        throw new Exception('Error deleting shop: ' . $e->getMessage());
    }
}


