<?php


function list_all_sections($dbh){

        $stmt = $dbh->prepare('SELECT * FROM section');
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;

}

