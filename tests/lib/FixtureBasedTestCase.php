<?php

/**
 * Description of FixtureBasedTestCase
 *
 * @author Fawaz
 */
class FixtureBasedTestCase extends \PHPUnit_Extensions_Database_TestCase{
    protected $dbName = 'test';
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';

    protected $pdo;
    protected $fixtureFile = 'seed.xml';

    public function __construct()
    {
        $dsn = sprintf("mysql:dbname=%s;host=%s", $this->dbName, $this->host);
        $this->pdo = new PDO($dsn, $this->username, $this->password);
    }

    protected function getConnection()
    {
        return $this->createDefaultDBConnection($this->pdo, $this->dbName);
    }

    protected function getDataSet()
    {
        return $this->createFlatXMLDataSet('../fixtures/'.$this->fixtureFile);
    }
}
