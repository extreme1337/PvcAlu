<?php
namespace App\Core;
class DatabaseConnection{
    private $connection = NULL;
    private $configuration;

    private $databaseConfiguration;
    private $databaseConnection = NULL;

    public function __construct(DatabaseConfiguration $config) {
    $this->databaseConfiguration = $config;
    }
    public function getDatabaseConnection(): \PDO {
        if ($this->databaseConnection === NULL) {
            $this->databaseConnection = new \PDO(
                $this->databaseConfiguration->getSourceString(),
                $this->databaseConfiguration->getUser(),
                $this->databaseConfiguration->getPass()
                );
            }

        return $this->databaseConnection;
    }
}