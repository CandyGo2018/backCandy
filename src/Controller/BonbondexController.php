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

use Model\BonbondexManager;

class BonbondexController extends AbstractController
{

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bonbonManager = new BonbondexManager($this->getPdo());
            $bonbon = $bonbonManager->isAlreadyBonbon();
             if ($bonbon){

                 $bonbon = $bonbonManager->update();
             }else{
                 $bonbonManager = new BonbondexManager($this->getPdo());
                 $newbonbon = $bonbonManager->insert();
             }
        }
    }

    public function form()
    {
        return $this->twig->render('form.html.twig');
    }


}