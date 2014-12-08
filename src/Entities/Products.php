<?php

namespace Entities;

use \Doctrine\ORM\Mapping as ORM;

/**
 * @Entity @Table(name="products")
 **/
class Products
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;

    /**
     * @Column(type="string")
     **/
    protected $name;

    /**
     * @Column(type="string")
     **/
    protected $description;

    /**
     * @Column(name="short_description", type="string")
     **/
    protected $shortDescription;

    /**
     * @Column(type="float")
     **/
    protected $value;

    /**
     * @Column(type="integer")
     **/
    protected $qtd;

    /**
     * @Column(type="string", nullable=true)
     **/
    protected $ref;

    /**
     * @Column(type="datetime")
     **/
    protected $created;

    /**
     * @Column(type="datetime")
     **/
    protected $modified;

    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
        return $this;
    }

    public function getQtd()
    {
        return $this->qtd;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

}