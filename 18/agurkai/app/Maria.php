<?php
namespace Bank;

use App\DB\DataBase;
use PDO;

// struktura ['id' => 58, 'count' => 14]

class Maria implements DataBase {

    private static $db;
    private $pdo;

    public static function getMaria() // singletono paternas
    {
        return self::$db ?? self::$db = new self;
    }

    private function __construct()
    {
        $host = '127.0.0.1';
        $db   = 'agurkas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options);
    }



    public function create(array $boxData) : void
    {
        $sql =
        "INSERT INTO dezes (`count`)
        VALUES (0)";
        $this->pdo->query($sql);

    }
 
    public function update(int $boxId, array $boxData) : void
    {
        $sql =
        "UPDATE dezes
        SET `count` = ".$boxData['amount']."
        WHERE id = $boxId";


        $this->pdo->query($sql);
    }
 
    public function delete(int $boxId) : void
    {
        $sql =
        "DELETE FROM dezes
        WHERE id = $boxId";
        $this->pdo->query($sql);
    }
 
    public function show(int $boxId) : array
    {
        $sql = 
        "SELECT id, `count` as amount
        FROM dezes
        WHERE id = $boxId
        ";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch();
        return $row;

    }
    
    public function showAll() : array {
        $sql = 
        "SELECT id, `count` as amount
        FROM dezes
        ORDER BY `count` DESC
        ";
        $all = [];
        $stmt = $this->pdo->query($sql);
        while ($row = $stmt->fetch())
        {
            $all[] = $row;
        }
        return $all;
    }


}