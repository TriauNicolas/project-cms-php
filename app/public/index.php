<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   le cdn tailwind
</head>
<body>
  <h1>Nico la grosse salope</h1> -->

<?php

  require './../vendor/autoload.php';

  (new \App\Core\Route\Router())->getRoutesFromAnnotations('./../src/Controller')->run();


  // use App\Core\Factory\PDOFactory;
  // use App\Manager\ArticleManager;

  // class test
  // {
  //   public function getTest() {
  //     $manager = new ArticleManager(PDOFactory::getInstance());
  //     // var_dump($pute);
  //     $artciles = $manager->findAllArticles();
  //     // echo "Nico la grosse pute " . $_POST;
  
  //     $insertQuery = "{$_POST['fname']}, {$_POST['lname']}";
  //     return var_dump($artciles);
  //   }
  // }

  // $montest = new test;
  // var_dump($montest->getTest());

  // $iliespute = new \PDO('mysql:host=db;dbname=' . $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_ROOT_PASSWORD']);

  // $IliesStmt = $iliespute->prepare('SELECT * FROM articles');

  // $IliesStmt->execute();
  // $IliesSalope = $IliesStmt->fetchAll();

  
?>

<!-- </body>
</html> -->