<?php

class Database
{
    private $dbHandler;
    private $statement;

    public function __construct()
    {
        $conn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8';

        try {
            $this->dbHandler = new PDO($conn, DB_USER, DB_PASS);

            if ($this->dbHandler) {
                // echo "Verbinding met de database is gelukt";
            } else {
                echo "Internal server error";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }

        $this->statement->bindValue($parameter, $value, $type);
    }

    public function execute(bool $return = false)
    {
        $this->statement->execute();

        if ($return) {
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function valueExists(string $table, string $column, string $value)
    {
        $this->query("SELECT :column FROM :table WHERE :column = :value");

        if ($this->statement) {
            $this->bind(':column', $column);
            $this->bind(':table', $table);
            $this->bind(':value', $value);

            $result = $this->execute();

            if (count($result) > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
