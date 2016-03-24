<?php
namespace simpleRoutingSystem\model;

use PDO;

class baseModel
{
    private static $pdo;
    private static $host = 'mysql:host=localhost;',
        $dataBase = 'dbname=classicmodels;',
        $charset = 'charset=utf8;',
        $userName = 'root',
        $password = '';





    public static function init()
    {
         if(!empty(self::$pdo)){
             return true;
         }else{
             $dsn = self::$host . self::$dataBase . self::$charset;
             try {
                 self::$pdo = new PDO($dsn, self::$userName, self::$password);

             } catch (PDOException $e) {
                echo die('Подключение не удалось: ' . $e->getMessage());
             }
         }

    }
    public static function closeConnection()
    {
       self::$pdo = null;
    }
    public static function getTableColumns($table)
    {
        $stmt = self::$pdo->prepare('SELECT COLUMN_NAME from information_schema.columns where table_name = :table_name and table_schema = database();');
        $stmt->execute(array(':table_name' => $table));
        $tableRows = array();
        foreach ($stmt as $row) {
            $tableRows[] = $row['COLUMN_NAME'];
        }
        return $tableRows;
    }

    public static function getTables()
    {
        $sql = 'SHOW TABLES';
        $query = self::$pdo->query($sql);
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }
    public static function changeCharset($charset)
    {
        self::$charset = $charset;
    }

    public static function selectAll($table)
    {
        $stmt = self::$pdo->prepare("SELECT * FROM $table");
        $stmt->execute(array(':table_name' => $table));
        $tableRows = array();
        foreach ($stmt as $row) {
            $tableRows[] = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $tableRows;
    }
}