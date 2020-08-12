<?php
    $db_host="localhost"; // localhost server
    $db_user="root"; //nom de l'utilisateur de la base de donnée
    $db_password=""; //mot de passe utilisateur
    $db_name="queue"; //nom de la base de donnée

    try
    {
        $db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //retourner les resultats en objet
        // $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        echo 'connexion réussie';
    }
    catch (PDOEXCEPTION $e)
    {
        $e->getMessage();
    }
   
?>