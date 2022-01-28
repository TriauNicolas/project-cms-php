<?php

namespace App\Manager;

use App\Entity\Article;

class ArticleManager extends BaseManager
{

    public $pute = "pute";

    public function findAllArticles()
    {
        $query = 'SELECT * FROM articles';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[0];

        return new ArticleManager($result);
    }
    
    // public function insertArticles($insertQuery)
    // {
    //     echo '<pre>';
    //     var_dump($insertQuery);
    //     echo '</pre>';
    //     $insertQuery = "INSERT INTO articles VALUES {$insertQuery}";
    // }
}
