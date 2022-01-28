<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\UserManager;

class UserController extends BaseController
{
    /**
     * @Route(path="/login", name="login")
     * @return void
     */
    public function getHome()
    {
        $manager = new UserManager(PDOFactory::getInstance());

        $post = $manager->findAllUsers();
        var_dump($post);

        $this->render('Frontend/home', ['francis' => $post], 'le titre de la page');
    }
}


?>