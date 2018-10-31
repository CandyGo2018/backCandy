<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 15:38
 * PHP version 7
 */

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;

use App\Connection;

/**
 *
 */
abstract class AbstractController
{

    /**
     * @var \PDO
     */
    protected $pdo;

    /**
     *  Initializes this class.
     */
    public function __construct()
    {

        $connection = new Connection();
        $this->pdo = $connection->getPdoConnection();
    }

    /**
     * @return \PDO
     */
    public function getPdo(): \PDO
    {
        return $this->pdo;
    }
}
