<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/10/18
 * Time: 21:57
 */

namespace Model;


use Model\AbstractManager;

class BonbonManager extends AbstractManager
{
    const TABLE = 'bonbon';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function selectAllCandy()
    {
        return $this->pdo->query('SELECT * FROM ' . $this->table)->fetchAll(\PDO::FETCH_ASSOC);
    }
}