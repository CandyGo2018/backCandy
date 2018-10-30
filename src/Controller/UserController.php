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
        $userManager = new UserManager();
        $user = $userManager->login();
        header('Content-Type: application/json');
        return json_encode($user);
    }
}