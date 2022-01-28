<?php

// On est pas du tout en train de regarder votre repo pour savoir comment nommer les fichiers ;)

namespace App\Core\Factory;

class PDOFactory
{
    private string $user = 'root';
    private static array $instances = [];
    const MYSQL = 'getMysqlConnection';

    private function __construct(string $type)
    {
        $this->pdo = match ($type) {
            'getMysqlConnection' => $this->getMysqlConnection(),
            default => echo('pute') throw new \InvalidArgumentException('La DB demandé n\'est pas disponible'),
        };
    }

    private function getMysqlConnection(): \PDO
    {
        return new \PDO('mysql:host=db;dbname=' . $_ENV['MYSQL_DATABASE'], $this->user, $_ENV['MYSQL_ROOT_PASSWORD']);
    }

    public static function getInstance(string $type = PDOFactory::MYSQL): \PDO
    {
        if (!isset(self::$instances[$type])) {
            self::$instances[$type] = new PDOFactory($type);
        }

        return self::$instances[$type]->pdo;
    }
}