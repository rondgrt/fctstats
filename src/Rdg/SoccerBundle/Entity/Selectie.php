<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Selectie
 *
 * @ORM\Table(name="selectie", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Selectie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="speler_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spelerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seizoen_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seizoenId;



    /**
     * Set id
     *
     * @param integer $id
     * @return Selectie
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set spelerId
     *
     * @param integer $spelerId
     * @return Selectie
     */
    public function setSpelerId($spelerId)
    {
        $this->spelerId = $spelerId;

        return $this;
    }

    /**
     * Get spelerId
     *
     * @return integer 
     */
    public function getSpelerId()
    {
        return $this->spelerId;
    }

    /**
     * Set seizoenId
     *
     * @param integer $seizoenId
     * @return Selectie
     */
    public function setSeizoenId($seizoenId)
    {
        $this->seizoenId = $seizoenId;

        return $this;
    }

    /**
     * Get seizoenId
     *
     * @return integer 
     */
    public function getSeizoenId()
    {
        return $this->seizoenId;
    }
}
