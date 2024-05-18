<?php


require('../../resources/db/connect-db.php');
require('../../Classes/Shop.php');


function list_shops($dbh)
{
    try {
            $stmt = $dbh->prepare('SELECT * FROM shop');
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $shops = array();
            foreach ($rows as $row) {
                $shop = new Shop($row['id'], $row['name'], $row['address'], $row['phone'], $row['open_date'], $row['open']);
                $shops[] = $shop;
            }

    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }return $shops;
}

function add_one_shop($dbh){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (empty($_POST['NAME'])) {
            // Si falta alguno de los campos obligatorios, mensaje de error
            $_SESSION['error'] = '';
            header('Location: ../Controllers/shop_controller.php?action=add_one');
            exit();
        }

        // Verificar que se hayan enviado datos
        if (isset($_POST['NAME']) && isset($_POST['ADDRESS'])) {
            // Obtener los datos del formulario
            $name = $_POST['NAME'];
            $address = $_POST['ADDRESS'];
            $phone = $_POST['PHONE'];
            $open_date = date("d-m-Y/H:i:s");
            $open = $_POST['OPEN'];

            try {
                $stmt = $dbh->prepare("INSERT INTO shop (name, address, phone, open_date, open) VALUES (:name, :address, :phone, :open_date, :open)");
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':address', $address, PDO::PARAM_STR);
                $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
                $stmt->bindParam(':open_date', $open_date, PDO::PARAM_STR);
                $stmt->bindParam(':open', $open, PDO::PARAM_STR);
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



