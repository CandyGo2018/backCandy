<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: celine
=======
 * User: wilder
>>>>>>> ef10d32799d31244309f62df7fc3829b95a18187
 * Date: 30/10/18
 * Time: 17:52
 */

namespace Model;


class BonbondexManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'bonbondex';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function isAlreadyBonbon (){
        {
            $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE user_id=:user_id AND bonbon_id=:bonbon_id");
            $statement->bindValue('user_id', $_POST['user_id'], \PDO::PARAM_STR);
            $statement->bindValue('bonbon_id', $_POST['bonbon_id'], \PDO::PARAM_STR);
            $statement->execute();
            return $statement->fetch(\PDO::FETCH_ASSOC);

        }
    }

    public function insert(): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (user_id, bonbon_id, quantity ) VALUES (:user_id, :bonbon_id, :quantity)");
        $statement->bindValue('user_id', $_POST['user_id'], \PDO::PARAM_STR);
        $statement->bindValue('bonbon_id', $_POST['bonbon_id'], \PDO::PARAM_STR);
        $statement->bindValue('quantity', $_POST['quantity'], \PDO::PARAM_STR);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }

    /**
     * @param Item $item
     * @return int
     */
    public function update():int
    {
        // prepared request
        $statement = $this->pdo->prepare("UPDATE $this->table SET quantity = quantity + :quantity WHERE user_id=:user_id");
        $statement->bindValue('quantity', $_POST['quantity'], \PDO::PARAM_STR);
        $statement->bindValue('user_id', $_POST['user_id'], \PDO::PARAM_STR);

        return $statement->execute();

    }

    public function selectOneByUser($id)
    {

        $statement = $this->pdo->prepare("SELECT user.name,bonbon.name, bonbon.picture, bonbondex.quantity 
FROM $this->table INNER JOIN user ON bonbondex.user_id=user.id 
INNER JOIN bonbon ON bonbondex.bonbon_id=bonbon.id WHERE user_id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);

        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);

    }

}