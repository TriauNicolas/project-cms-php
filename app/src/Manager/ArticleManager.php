<?php

namespace App\Manager;

use App\Entity\Article;

class ArticleManager extends BaseManager
{
    public function findAllArticles()
    {
        $query = 'SELECT * FROM articles';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[0];

        return new ArticArticleManagerle($result);
    }
}