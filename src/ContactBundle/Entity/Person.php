<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

class Person extends Contact
{
    /**
     * @Groups({"contacts"})
     */
    protected $surname;

    /**
     * @Groups({"contacts"})
     */
    protected $birthDate;

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
}
