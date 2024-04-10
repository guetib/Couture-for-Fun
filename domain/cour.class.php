<?php
include_once dirname(__FILE__) . '/../domain/DomainObject.class.php';

class Cours extends DomainObject
{
    private $titre;
    private $description;
    private $instructeur;
    private $dureeSemaines;

    function __construct($titre, $description, $instructeur, $dureeSemaines, $id = null)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->instructeur = $instructeur;
        $this->dureeSemaines = $dureeSemaines;
        parent::__construct($id);
    }

    function getTitre()
    {
        return $this->titre;
    }

    function setTitre($titre)
    {
        $this->titre = $titre;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setDescription($description)
    {
        $this->description = $description;
    }

    function getInstructeur()
    {
        return $this->instructeur;
    }

    function setInstructeur($instructeur)
    {
        $this->instructeur = $instructeur;
    }

    function getDureeSemaines()
    {
        return $this->dureeSemaines;
    }

    function setDureeSemaines($dureeSemaines)
    {
        $this->dureeSemaines = $dureeSemaines;
    }
}
