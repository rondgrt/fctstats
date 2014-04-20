<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Land
 *
 * @ORM\Table(name="land")
 * @ORM\Entity
 */
class Land
{
    /**
     * @var string
     *
     * @ORM\Column(name="land", type="string", length=50, nullable=true)
     */
    private $land;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set land
     *
     * @param string $land
     * @return Land
     */
    public function setLand($land)
    {
        $this->land = $land;

        return $this;
    }

    /**
     * Get land
     *
     * @return string 
     */
    public function getLand()
    {
        return $this->land;
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
