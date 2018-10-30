<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/10/18
 * Time: 18:20
 */

namespace Controller;


use Model\UserManager;

class UserController extends AbstractController
{
    public function login()
    {

        $userManager = new UserManager($this->getPdo());
        $user = $userManager->login();
        header('Content-Type: application/json');
        return json_encode($user);
    }

    public function form()
    {
        return $this->twig->render('form.html.twig');
    }

    public function winner()
    {
        $userManager = new UserManager($this->getPdo());
        $users = $userManager->winner();
        header('Content-Type: application/json');
        return json_encode($users);
    }
}
