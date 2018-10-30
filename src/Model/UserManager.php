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

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function login()
    {
        $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE name=:name AND password=:password");
        $statement->bindValue('name', $_POST['name'], \PDO::PARAM_STR);
        $statement->bindValue('password', $_POST['password'], \PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_ASSOC);

    }

    public function winner()
    {
        return $this->pdo->query("SELECT user.name, SUM(bonbondex.quantity) AS total FROM $this->table INNER JOIN bonbondex ON user.id=bonbondex.user_id GROUP BY name ORDER BY total DESC LIMIT 3")->fetchAll(\PDO::FETCH_ASSOC);
    }
}