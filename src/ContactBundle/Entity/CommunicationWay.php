<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

abstract class CommunicationWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $id;
    protected $contact;
    public function getId()
    {
        return $this->id;
    }
    public function getContact()
    {
        return $this->contact;
    }
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
}
