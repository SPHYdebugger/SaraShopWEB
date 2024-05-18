<?php


function list_all_sections($dbh){

        $stmt = $dbh->prepare('SELECT * FROM section');
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;

}

function list_sectionsByShop($dbh, $shop_id)
{
    echo $shop_id;
    $stmt = $dbh->prepare('SELECT * FROM section WHERE shop_id= :id');
    $stmt->bindParam('id', $shop_id, PDO::PARAM_INT);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}


