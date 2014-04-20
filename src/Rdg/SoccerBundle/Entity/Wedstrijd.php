<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wedstrijd
 *
 * @ORM\Table(name="wedstrijd", indexes={@ORM\Index(name="p_w_s", columns={"id", "wedstrijdsoort_id", "seizoen_id"}), @ORM\Index(name="p_w", columns={"id", "wedstrijdsoort_id"}), @ORM\Index(name="p_s", columns={"id", "seizoen_id"}), @ORM\Index(name="uit_thuis_id", columns={"uit_thuis_id"}), @ORM\Index(name="wedstrijdsoort_id", columns={"wedstrijdsoort_id"})})
 * @ORM\Entity
 */
class Wedstrijd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wedstrijdsoort_id", type="bigint", nullable=false)
     */
    private $wedstrijdsoortId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seizoen_id", type="bigint", nullable=false)
     */
    private $seizoenId;

    /**
     * @var integer
     *
     * @ORM\Column(name="scheidsrechter_id", type="bigint", nullable=true)
     */
    private $scheidsrechterId;

    /**
     * @var integer
     *
     * @ORM\Column(name="uit_thuis_id", type="bigint", nullable=false)
     */
    private $uitThuisId;

    /**
     * @var integer
     *
     * @ORM\Column(name="clubs_id", type="bigint", nullable=true)
     */
    private $clubsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="competitieronde", type="integer", nullable=true)
     */
    private $competitieronde;

    /**
     * @var string
     *
     * @ORM\Column(name="ruststand", type="string", length=15, nullable=true)
     */
    private $ruststand;

    /**
     * @var string
     *
     * @ORM\Column(name="eindstand", type="string", length=15, nullable=true)
     */
    private $eindstand;

    /**
     * @var string
     *
     * @ORM\Column(name="Bijzonderheden", type="text", nullable=true)
     */
    private $bijzonderheden;

    /**
     * @var integer
     *
     * @ORM\Column(name="toeschouwers", type="integer", nullable=true)
     */
    private $toeschouwers;

    /**
     * @var integer
     *
     * @ORM\Column(name="speeldag", type="integer", nullable=true)
     */
    private $speeldag;

    /**
     * @var integer
     *
     * @ORM\Column(name="speelmaand", type="integer", nullable=true)
     */
    private $speelmaand;

    /**
     * @var integer
     *
     * @ORM\Column(name="speeljaar", type="integer", nullable=true)
     */
    private $speeljaar;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set wedstrijdsoortId
     *
     * @param integer $wedstrijdsoortId
     * @return Wedstrijd
     */
    public function setWedstrijdsoortId($wedstrijdsoortId)
    {
        $this->wedstrijdsoortId = $wedstrijdsoortId;

        return $this;
    }

    /**
     * Get wedstrijdsoortId
     *
     * @return integer 
     */
    public function getWedstrijdsoortId()
    {
        return $this->wedstrijdsoortId;
    }

    /**
     * Set seizoenId
     *
     * @param integer $seizoenId
     * @return Wedstrijd
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

    /**
     * Set scheidsrechterId
     *
     * @param integer $scheidsrechterId
     * @return Wedstrijd
     */
    public function setScheidsrechterId($scheidsrechterId)
    {
        $this->scheidsrechterId = $scheidsrechterId;

        return $this;
    }

    /**
     * Get scheidsrechterId
     *
     * @return integer 
     */
    public function getScheidsrechterId()
    {
        return $this->scheidsrechterId;
    }

    /**
     * Set uitThuisId
     *
     * @param integer $uitThuisId
     * @return Wedstrijd
     */
    public function setUitThuisId($uitThuisId)
    {
        $this->uitThuisId = $uitThuisId;

        return $this;
    }

    /**
     * Get uitThuisId
     *
     * @return integer 
     */
    public function getUitThuisId()
    {
        return $this->uitThuisId;
    }

    /**
     * Set clubsId
     *
     * @param integer $clubsId
     * @return Wedstrijd
     */
    public function setClubsId($clubsId)
    {
        $this->clubsId = $clubsId;

        return $this;
    }

    /**
     * Get clubsId
     *
     * @return integer 
     */
    public function getClubsId()
    {
        return $this->clubsId;
    }

    /**
     * Set competitieronde
     *
     * @param integer $competitieronde
     * @return Wedstrijd
     */
    public function setCompetitieronde($competitieronde)
    {
        $this->competitieronde = $competitieronde;

        return $this;
    }

    /**
     * Get competitieronde
     *
     * @return integer 
     */
    public function getCompetitieronde()
    {
        return $this->competitieronde;
    }

    /**
     * Set ruststand
     *
     * @param string $ruststand
     * @return Wedstrijd
     */
    public function setRuststand($ruststand)
    {
        $this->ruststand = $ruststand;

        return $this;
    }

    /**
     * Get ruststand
     *
     * @return string 
     */
    public function getRuststand()
    {
        return $this->ruststand;
    }

    /**
     * Set eindstand
     *
     * @param string $eindstand
     * @return Wedstrijd
     */
    public function setEindstand($eindstand)
    {
        $this->eindstand = $eindstand;

        return $this;
    }

    /**
     * Get eindstand
     *
     * @return string 
     */
    public function getEindstand()
    {
        return $this->eindstand;
    }

    /**
     * Set bijzonderheden
     *
     * @param string $bijzonderheden
     * @return Wedstrijd
     */
    public function setBijzonderheden($bijzonderheden)
    {
        $this->bijzonderheden = $bijzonderheden;

        return $this;
    }

    /**
     * Get bijzonderheden
     *
     * @return string 
     */
    public function getBijzonderheden()
    {
        return $this->bijzonderheden;
    }

    /**
     * Set toeschouwers
     *
     * @param integer $toeschouwers
     * @return Wedstrijd
     */
    public function setToeschouwers($toeschouwers)
    {
        $this->toeschouwers = $toeschouwers;

        return $this;
    }

    /**
     * Get toeschouwers
     *
     * @return integer 
     */
    public function getToeschouwers()
    {
        return $this->toeschouwers;
    }

    /**
     * Set speeldag
     *
     * @param integer $speeldag
     * @return Wedstrijd
     */
    public function setSpeeldag($speeldag)
    {
        $this->speeldag = $speeldag;

        return $this;
    }

    /**
     * Get speeldag
     *
     * @return integer 
     */
    public function getSpeeldag()
    {
        return $this->speeldag;
    }

    /**
     * Set speelmaand
     *
     * @param integer $speelmaand
     * @return Wedstrijd
     */
    public function setSpeelmaand($speelmaand)
    {
        $this->speelmaand = $speelmaand;

        return $this;
    }

    /**
     * Get speelmaand
     *
     * @return integer 
     */
    public function getSpeelmaand()
    {
        return $this->speelmaand;
    }

    /**
     * Set speeljaar
     *
     * @param integer $speeljaar
     * @return Wedstrijd
     */
    public function setSpeeljaar($speeljaar)
    {
        $this->speeljaar = $speeljaar;

        return $this;
    }

    /**
     * Get speeljaar
     *
     * @return integer 
     */
    public function getSpeeljaar()
    {
        return $this->speeljaar;
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
