<?php

include_once __DIR__ . '/../domain/DomainObject.class.php';
include_once __DIR__ .  '/../dao/AbstractDataAccessObject.class.php';

abstract class PDOAbstractDAO implements AbstractDataAccessObject
{
    protected $_pdo;

    public function __construct()
    {
        $config = include dirname(__FILE__) . '/pdo.conf.php';
        try {
            $this->_pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbName']}", $config['user'], $config['password']);
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Echec de la connexion: " . $e->getMessage());
        }
        $this->_pdo->exec("SET NAMES 'utf8'");
    }

    function __destruct()
    {
        $this->_pdo = null;
    }

    abstract protected function getTableName();
    abstract protected function getInsertSqlStatement(DomainObject $object);

    public function insert(DomainObject $domainObject)
    {
        $stmt = $this->getInsertSqlStatement($domainObject);
        $stmt->execute();
        $domainObject->setId($this->_pdo->lastInsertId());
    }


    abstract function findByEmail($email);
}
