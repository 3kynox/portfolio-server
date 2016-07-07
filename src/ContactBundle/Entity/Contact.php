<?php

namespace ContactBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

class Contact
{
    private $id;

    /**
     * @Groups({"contacts"})
     */
    private $name;

    /**
     * @Groups({"contacts"})
     */
    protected $surname;

    /**
     * @Groups({"contacts"})
     */
    protected $birthDate;

    /**
     * @Groups({"contacts"})
     */
    private $commWay;

    public function __construct()
    {
        $this->commWay = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
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

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function addCommWay(CommunicationWay $commWay)
    {
        $this->commWay[] = $commWay;
        return $this;
    }

    public function removeCommWay(CommunicationWay $commWay)
    {
        $this->commWay->removeElement($commWay);
    }

    public function getCommWay()
    {
        return $this->commWay;
    }
}
