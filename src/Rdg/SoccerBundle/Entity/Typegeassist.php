<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typegeassist
 *
 * @ORM\Table(name="typegeassist")
 * @ORM\Entity
 */
class Typegeassist
{
    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set type
     *
     * @param string $type
     * @return Typegeassist
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
