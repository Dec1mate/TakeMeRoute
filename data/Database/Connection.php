<?php
/**
 * Created by PhpStorm.
 * User: adri
 * Date: 10/12/18
 * Time: 16:46
 */

class Connection
{
    public static function make() {
        try{
            $opciones=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
            $connection=new PDO('mysql:host=127.0.0.1;dbname=takemeroute;charset=utf8',"root", "", $opciones);
        } catch (PDOException $PDOException) {
            die($PDOException->getMessage());
        }
        return $connection;
    }
}

?>