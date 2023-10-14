<?php

function conn_db()
{
    try {
        return new PDO('mysql:host=localhost:3308;dbname=pointofsaleestenzo', 'root', '');
    } catch (PDOException $ex) {
        echo "Connection Error: ", $ex->getMessage();
    }
}

function add_data($menu_name, $menu_desc, $price)
{
    $db = conn_db();
    $sql = "Insert into ref_menu(menu_name, menu_desc, price)values(?, ?, ?)";
    $st = $db->prepare($sql);
    $st->execute(array($menu_name, $menu_desc, $price));
    $db = null;
}

function view_data()
{
    $db = conn_db();
    $sql = "SELECT * FROM ref_menu ORDER BY menu_id ASC";
    $st = $db->prepare($sql);
    $st->execute();
    $rows = $st->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
    return $rows;
}
 
function update_data($menu_name, $menu_desc, $price, $menu_id)
{
    $db = conn_db();
    $sql = "UPDATE ref_menu SET menu_name=?, menu_desc=?, price=? WHERE menu_id=?";
    $st = $db->prepare($sql);
    $st->execute([$menu_name, $menu_desc, $price, $menu_id]);
    $db = null;
}

function delete_data($id)
{
    $db = conn_db();
    $sql = "DELETE FROM ref_menu WHERE menu_id=?";
    $st = $db->prepare($sql);
    $st->execute([$id]);
    $db = null;
}
