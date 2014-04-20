<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sequence
 *
 * @ORM\Table(name="sequence")
 * @ORM\Entity
 */
class Sequence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="next_value", type="integer", nullable=false)
     */
    private $nextValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="starts_with", type="integer", nullable=false)
     */
    private $startsWith;

    /**
     * @var integer
     *
     * @ORM\Column(name="increment", type="integer", nullable=false)
     */
    private $increment;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;



    /**
     * Set nextValue
     *
     * @param integer $nextValue
     * @return Sequence
     */
    public function setNextValue($nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * Get nextValue
     *
     * @return integer 
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * Set startsWith
     *
     * @param integer $startsWith
     * @return Sequence
     */
    public function setStartsWith($startsWith)
    {
        $this->startsWith = $startsWith;

        return $this;
    }

    /**
     * Get startsWith
     *
     * @return integer 
     */
    public function getStartsWith()
    {
        return $this->startsWith;
    }

    /**
     * Set increment
     *
     * @param integer $increment
     * @return Sequence
     */
    public function setIncrement($increment)
    {
        $this->increment = $increment;

        return $this;
    }

    /**
     * Get increment
     *
     * @return integer 
     */
    public function getIncrement()
    {
        return $this->increment;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
