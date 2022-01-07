<?php

namespace App\Manager;

use App\Entity\User;

class UserManger extends BaseManager
{
    public function findAllUsers()
    {
        $query = 'SELECT * FROM users';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[0];

        return new User($result);
    }
}