<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

class Adress extends CommunicationWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $adress;

    /**
     * @Groups({"contacts"})
     */
    protected $postalCode;

    /**
     * @Groups({"contacts"})
     */
    protected $city;

    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }
}
