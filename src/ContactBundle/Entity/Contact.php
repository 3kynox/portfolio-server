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
    private $commWay;

    public function __construct()
    {
        $this->commWay = new ArrayCollection();
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

    public function getId()
    {
        return $this->id;
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
