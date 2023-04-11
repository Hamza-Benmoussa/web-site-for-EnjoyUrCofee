<?php
//check empty input
function emptyInput(...$var)
{
    if (empty($email) || empty($pwd)) {
        return false;
    } else {
        return true;
    }
}

//admin from db
function fetchUsersFromDb()
{
    $stmt = connect()->query("SELECT * FROM utilisateur WHERE role1='admin'; ");

    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $users[$i] = $row;
        $i++;
    }

    $stmt = null;

    if (!empty($order)) {
        return $users;
    }
}

//password matching
function password_match($password, $cpassword)
{
    if ($password != $cpassword) {
        return false;
    } else {
        return true;
    }
}

function fetchProductsFromDb()
{
    $stmt = connect()->query("SELECT * FROM produit");

    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $product[$i] = $row;
        $i++;
    }

    $stmt = null;

    if (!empty($order)) {
        return $product;
    }
}
function fetchcommandesFromDb()
{
    $stmt = connect()->query("SELECT * FROM commande");

    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $order[$i] = $row;
        $i++;
    }

    $stmt = null;

    if (!empty($order)) {
        return $order;
    }
}
