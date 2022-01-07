<?php

namespace App\Manager;

use App\Entity\Commentary;

class CommentaryManager extends BaseManager
{
    public function findAllCommentaries()
    {
        $query = 'SELECT * FROM commentaries';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[0];

        return new Commentary($result);
    }
}