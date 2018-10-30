<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: celine
 * Date: 30/10/18
 * Time: 17:52
=======
 * User: wilder
 * Date: 30/10/18
 * Time: 17:49
>>>>>>> ef10d32799d31244309f62df7fc3829b95a18187
 */

namespace Controller;

use Model\BonbonManager;

class BonbonController extends AbstractController
{

    public function add()
    {
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bonbonManager = new BonbonManager($this->getPdo());
            $bonbon = $bonbonManager->isAlreadyBonbon();
             if ($bonbon){

                 $bonbon = $bonbonManager->update();
             }else{
                 $bonbonManager = new BonbonManager($this->getPdo());
                 $newbonbon = $bonbonManager->insert();
             }
        }
    }

    public function form()
    {
        return $this->twig->render('form.html.twig');
    }
}