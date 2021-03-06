<?php
/*
 * Created by sydney_manjaro the 04/01/17
 */

namespace RASP\RaspBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="rasp_ufr")
 * @ORM\Entity(repositoryClass="RASP\RaspBundle\Entity\UfrRepository")
 */

class Ufr
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __toString() {
        // allow standard use
        return $this->name;
    }
}
