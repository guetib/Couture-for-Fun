<?php

include_once dirname(__FILE__) . '/../domain/Inscription.class.php';
include_once dirname(__FILE__) . '/../dao/PDOAbstractDAO.class.php';

class PDOInscriptionDAO extends PDOAbstractDAO
{
    private $TABLE_NAME = 'utilisateur';

    protected function getTableName()
    {
        return $this->TABLE_NAME;
    }

    protected function getInsertSqlStatement(DomainObject $object)
    {
        $insertQuery = "INSERT INTO {$this->getTableName()} (genre, firstName, lastName, phoneNumber, email, password, address) VALUES (:genre, :firstName, :lastName, :phoneNumber, :email, :password, :address)";

        $stmt = $this->_pdo->prepare($insertQuery);
        $stmt->bindValue(':genre', $object->getGenre());
        $stmt->bindValue(':firstName', $object->getFirstName());
        $stmt->bindValue(':lastName', $object->getLastName());
        $stmt->bindValue(':phoneNumber', $object->getPhoneNumber());
        $stmt->bindValue(':email', $object->getEmail());
        $stmt->bindValue(':password', $object->getPassword());
        $stmt->bindValue(':address', $object->getAddress());

        return $stmt;
    }

    public function findByEmail($email)
    {
        $stmt = $this->_pdo->prepare("SELECT * FROM {$this->getTableName()} WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            return new Inscription(
                $userData['id'],
                $userData['genre'],
                $userData['firstName'],
                $userData['lastName'],
                $userData['phoneNumber'],
                $userData['email'],
                $userData['password'],
                $userData['address']
            );
        } else {
            return null;
        }
    }
}
