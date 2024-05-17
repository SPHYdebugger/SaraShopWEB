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







