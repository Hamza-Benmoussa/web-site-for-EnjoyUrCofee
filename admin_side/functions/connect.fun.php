<?php
function connect()
{
    try {
        $e_mail = 'root';
        $password = '';
        $dbh = new PDO('mysql:host=localhost;dbname=e_commerce', $e_mail, $password);
        return $dbh;
    } catch (Exception $e) {
        print "Error: " . $e->getMessage() . "<br>";
        die();
    }
}

?>