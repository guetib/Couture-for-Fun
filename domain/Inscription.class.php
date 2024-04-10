<?php

include_once dirname(__FILE__) . '/../domain/DomainObject.class.php';

class Inscription extends DomainObject
{
    private $genre;
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $email;
    private $password;
    private $address;

    function __construct($genre, $firstName, $lastName, $phoneNumber, $email, $password, $address, $id = null)
    {
        $this->genre = $genre;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        parent::__construct($id);
    }

    function getGenre()
    {
        return $this->genre;
    }

    function setGenre($genre)
    {
        $this->genre = $genre;
    }

    function getFirstName()
    {
        return $this->firstName;
    }

    function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    function getLastName()
    {
        return $this->lastName;
    }

    function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function getAddress()
    {
        return $this->address;
    }

    function setAddress($address)
    {
        $this->address = $address;
    }
}
