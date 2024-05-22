<?php
namespace Sisfin\Util;

use \PDO;
class Connection
{
    public static function make()
    {
        $host=DATABASE["host"];
        $dbname=DATABASE["dbname"];
        $user=DATABASE["user"];
        $password=DATABASE["password"];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        try {
            $options = [PDO::ATTR_ERRMODE =>
                PDO::ERRMODE_EXCEPTION];
            return new PDO($dsn, $user, $password,$options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}



/*
function connect($host, $db, $user, $password)
{
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        return new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

return connect($host, $db, $user, $password);
*/
