<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Positie
 *
 * @ORM\Table(name="positie")
 * @ORM\Entity
 */
class Positie
{
    /**
     * @var string
     *
     * @ORM\Column(name="positie", type="string", length=50, nullable=true)
     */
    private $positie;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set positie
     *
     * @param string $positie
     * @return Positie
     */
    public function setPositie($positie)
    {
        $this->positie = $positie;

        return $this;
    }

    /**
     * Get positie
     *
     * @return string 
     */
    public function getPositie()
    {
        return $this->positie;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
