<?php

namespace Bootstrap;

use Exception;
use PDO;
use Support\Environment;

class Model
{
    /**
     * Name for table in DB
     * @var string
     */
    protected string $table;

    /**
     * Fields to save into table
     * @var array
     */
    protected array $fields;

    /**
     * @var PDO
     */
    private static PDO $pdo;

    use Environment;

    /**
     * Model constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->load(__DIR__ . '/../.env');
        self::$pdo = new PDO($this->env('DB_CONNECTION', 'mysql') . ":host=" . $this->env('DB_HOST') . ";dbname=" . $this->env('DB_DATABASE') . ";port=" . $this->env('DB_PORT'), $this->env('DB_USERNAME'), $this->env('DB_PASSWORD'));
        $this->create();
    }

    /**
     * @throws Exception
     */
    protected function create():void
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->table (";

        foreach ($this->fields as $field => $roles)
            $sql .= "$field $roles, ";

        $sql .= "id integer primary key auto_increment)";

        try {
            self::$pdo->exec($sql);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        }
    }

}