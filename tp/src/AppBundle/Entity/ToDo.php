<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class ToDo
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ToDoRepository")
 * @ORM\Table(name="tasks")
 */
class ToDo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    /**
     * @ORM\OneToOne(targetEntity="Criticity")
     */
    private $criticity;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getCriticity()
    {
        return $this->criticity;
    }

    /**
     * @param mixed $criticity
     */
    public function setCriticity($criticity)
    {
        $this->criticity = $criticity;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


    /**
     * ToDo constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }









}


