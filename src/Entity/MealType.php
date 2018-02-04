<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MealTypeRepository")
 * @UniqueEntity("typeName")
 */
class MealType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $typeName;

    public function getId()
    {
        return $this->id;
    }

    public function getTypeName()
    {
        return $this->typeName;
    }

    public function setTypeName($typeName): void
    {
        $this->typeName = $typeName;
    }
}
