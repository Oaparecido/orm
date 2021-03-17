<?php

namespace Model;

use Exception;
use PDO;
use Support\config;

class Model
{
    /**
     * Create Model class to basic functions.
     *  [OK] create table
     *  [] drop table
     *  [] find
     *  [] remove field
     */

    protected string $table = '';
    protected array $fields = [];
    private PDO $pdo;

    use config;

    /**
     * Model constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->pdo = new PDO($this->env('DB_CONNECTION', 'mysql') . ":host=" . $this->env('DB_HOST') . ";dbname=" . $this->env('DB_DATABASE') . ";port=" . $this->env('DB_PORT'), $this->env('DB_USERNAME'), $this->env('DB_PASSWORD'));
        $this->create();
    }

    /**
     * @throws Exception
     */
    protected function create():void
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->table (";

        foreach ($this->fields as $field => $type)
            $sql .= "$field $type, ";

        $sql .= "id integer primary key auto_increment)";

        try {
            $this->pdo->exec($sql);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }
    }

}