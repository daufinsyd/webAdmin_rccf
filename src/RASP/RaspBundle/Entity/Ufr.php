<?php
/**
 * Created by PhpStorm.
 * User: sydney_manjaro
 * Date: 04/01/17
 * Time: 21:28
 */

namespace RASP\RaspBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

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
     */
    protected $name;
}