<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StandInfo
 *
 * @ORM\Table(name="stand_info")
 * @ORM\Entity
 */
class StandInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="seizoen", type="string", length=9)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seizoen;



    /**
     * Set info
     *
     * @param string $info
     * @return StandInfo
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Get seizoen
     *
     * @return string 
     */
    public function getSeizoen()
    {
        return $this->seizoen;
    }
}
