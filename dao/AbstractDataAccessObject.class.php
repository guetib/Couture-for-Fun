<?php

include_once dirname(__FILE__) . '/../domain/DomainObject.class.php';


interface AbstractDataAccessObject
{
    function insert(DomainObject $domainObject);
    function findByEmail($email);
}
