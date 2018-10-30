<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/10/18
 * Time: 21:58
 */

namespace Controller;

use Model\BonbonManager;

class BonbonController extends AbstractController
{
    public function index()
    {
        $bonbonManager = new BonbonManager($this->getPdo());
        $bonbons = $bonbonManager->selectAllCandy();
        header('Content-Type: application/json');
        return json_encode($bonbons);
    }
}