<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/10/18
 * Time: 18:20
 */

namespace Model;


class UserManager extends AbstractManager
{
    const TABLE = 'user';

    public function login()
    {
        $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE name=:name AND password=:password");
        $statement->bindValue('name', $_POST['name'], \PDO::PARAM_STR);
        $statement->execute();
    }
}