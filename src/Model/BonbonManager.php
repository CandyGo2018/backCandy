<?php
/**
 * Created by PhpStorm.
 * User: celine
 * Date: 30/10/18
 * Time: 17:52
 */

namespace Model;


class BonbonManager
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

























    public function existBonbon ($_POST['']){

    }

    public function insert($_POST): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table ('user_id','bonbon_id', 'quantity' ) VALUES (:user_id, :bonbon_id, :quantity)");
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
    public function update($_POST):int
    {
        // prepared request
        $statement = $this->pdo->prepare("UPDATE $this->table SET 'quantity' = 'quantity' + :quantity WHERE user_id=:user_id)");
        $statement->bindValue('quantity', $_POST['quantity'], \PDO::PARAM_STR);
        $statement->bindValue('quantity', $_POST['user_id'], \PDO::PARAM_STR);

        return $statement->execute();

    }
}