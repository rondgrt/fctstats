<?php

namespace Rdg\SoccerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soccergame
 *
 * @ORM\Table(name="soccergame")
 * @ORM\Entity
 */
class Soccergame
{
    /**
     * @var string
     *
     * @ORM\Column(name="Div", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $div = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HomeTeam", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hometeam = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AwayTeam", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $awayteam = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="FTHG", type="integer", nullable=true)
     */
    private $fthg;

    /**
     * @var integer
     *
     * @ORM\Column(name="FTAG", type="integer", nullable=true)
     */
    private $ftag;

    /**
     * @var string
     *
     * @ORM\Column(name="FTR", type="string", length=1, nullable=true)
     */
    private $ftr;

    /**
     * @var integer
     *
     * @ORM\Column(name="HTHG", type="integer", nullable=true)
     */
    private $hthg;

    /**
     * @var integer
     *
     * @ORM\Column(name="HTAG", type="integer", nullable=true)
     */
    private $htag;

    /**
     * @var string
     *
     * @ORM\Column(name="HTR", type="string", length=1, nullable=true)
     */
    private $htr;

    /**
     * @var string
     *
     * @ORM\Column(name="B365H", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $b365h;

    /**
     * @var string
     *
     * @ORM\Column(name="B365D", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $b365d;

    /**
     * @var string
     *
     * @ORM\Column(name="B365A", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $b365a;

    /**
     * @var string
     *
     * @ORM\Column(name="BWH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bwh;

    /**
     * @var string
     *
     * @ORM\Column(name="BWD", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bwd;

    /**
     * @var string
     *
     * @ORM\Column(name="BWA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bwa;

    /**
     * @var string
     *
     * @ORM\Column(name="GBH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $gbh;

    /**
     * @var string
     *
     * @ORM\Column(name="GBD", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $gbd;

    /**
     * @var string
     *
     * @ORM\Column(name="GBA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $gba;

    /**
     * @var string
     *
     * @ORM\Column(name="IWH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $iwh;

    /**
     * @var string
     *
     * @ORM\Column(name="IWD", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $iwd;

    /**
     * @var string
     *
     * @ORM\Column(name="IWA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $iwa;

    /**
     * @var string
     *
     * @ORM\Column(name="LBH", type="string", length=4, nullable=true)
     */
    private $lbh;

    /**
     * @var string
     *
     * @ORM\Column(name="LBD", type="string", length=3, nullable=true)
     */
    private $lbd;

    /**
     * @var string
     *
     * @ORM\Column(name="LBA", type="string", length=4, nullable=true)
     */
    private $lba;

    /**
     * @var string
     *
     * @ORM\Column(name="PSH", type="string", length=4, nullable=true)
     */
    private $psh;

    /**
     * @var string
     *
     * @ORM\Column(name="PSD", type="string", length=3, nullable=true)
     */
    private $psd;

    /**
     * @var string
     *
     * @ORM\Column(name="PSA", type="string", length=4, nullable=true)
     */
    private $psa;

    /**
     * @var string
     *
     * @ORM\Column(name="WHH", type="string", length=3, nullable=true)
     */
    private $whh;

    /**
     * @var string
     *
     * @ORM\Column(name="WHD", type="string", length=4, nullable=true)
     */
    private $whd;

    /**
     * @var string
     *
     * @ORM\Column(name="WHA", type="string", length=4, nullable=true)
     */
    private $wha;

    /**
     * @var string
     *
     * @ORM\Column(name="SJH", type="string", length=4, nullable=true)
     */
    private $sjh;

    /**
     * @var string
     *
     * @ORM\Column(name="SJD", type="string", length=4, nullable=true)
     */
    private $sjd;

    /**
     * @var string
     *
     * @ORM\Column(name="SJA", type="string", length=4, nullable=true)
     */
    private $sja;

    /**
     * @var string
     *
     * @ORM\Column(name="VCH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $vch;

    /**
     * @var string
     *
     * @ORM\Column(name="VCD", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $vcd;

    /**
     * @var string
     *
     * @ORM\Column(name="VCA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $vca;

    /**
     * @var string
     *
     * @ORM\Column(name="BSH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bsh;

    /**
     * @var string
     *
     * @ORM\Column(name="BSD", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bsd;

    /**
     * @var string
     *
     * @ORM\Column(name="BSA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bsa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bb1X2", type="integer", nullable=true)
     */
    private $bb1x2;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbmxh;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvH", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbavh;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxD", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbmxd;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvD", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbavd;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbmxa;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvA", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbava;

    /**
     * @var integer
     *
     * @ORM\Column(name="BbOU", type="integer", nullable=true)
     */
    private $bbou;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxgt25", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbmxgt25;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvgt25", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbavgt25;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxlt25", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbmxlt25;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvlt25", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbavlt25;

    /**
     * @var integer
     *
     * @ORM\Column(name="BbAH", type="integer", nullable=true)
     */
    private $bbah;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAHh", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $bbahh;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxAHH", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbmxahh;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvAHH", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbavahh;

    /**
     * @var string
     *
     * @ORM\Column(name="BbMxAHA", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbmxaha;

    /**
     * @var string
     *
     * @ORM\Column(name="BbAvAHA", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $bbavaha;



    /**
     * Set fthg
     *
     * @param integer $fthg
     * @return Soccergame
     */
    public function setFthg($fthg)
    {
        $this->fthg = $fthg;

        return $this;
    }

    /**
     * Get fthg
     *
     * @return integer 
     */
    public function getFthg()
    {
        return $this->fthg;
    }

    /**
     * Set ftag
     *
     * @param integer $ftag
     * @return Soccergame
     */
    public function setFtag($ftag)
    {
        $this->ftag = $ftag;

        return $this;
    }

    /**
     * Get ftag
     *
     * @return integer 
     */
    public function getFtag()
    {
        return $this->ftag;
    }

    /**
     * Set ftr
     *
     * @param string $ftr
     * @return Soccergame
     */
    public function setFtr($ftr)
    {
        $this->ftr = $ftr;

        return $this;
    }

    /**
     * Get ftr
     *
     * @return string 
     */
    public function getFtr()
    {
        return $this->ftr;
    }

    /**
     * Set hthg
     *
     * @param integer $hthg
     * @return Soccergame
     */
    public function setHthg($hthg)
    {
        $this->hthg = $hthg;

        return $this;
    }

    /**
     * Get hthg
     *
     * @return integer 
     */
    public function getHthg()
    {
        return $this->hthg;
    }

    /**
     * Set htag
     *
     * @param integer $htag
     * @return Soccergame
     */
    public function setHtag($htag)
    {
        $this->htag = $htag;

        return $this;
    }

    /**
     * Get htag
     *
     * @return integer 
     */
    public function getHtag()
    {
        return $this->htag;
    }

    /**
     * Set htr
     *
     * @param string $htr
     * @return Soccergame
     */
    public function setHtr($htr)
    {
        $this->htr = $htr;

        return $this;
    }

    /**
     * Get htr
     *
     * @return string 
     */
    public function getHtr()
    {
        return $this->htr;
    }

    /**
     * Set b365h
     *
     * @param string $b365h
     * @return Soccergame
     */
    public function setB365h($b365h)
    {
        $this->b365h = $b365h;

        return $this;
    }

    /**
     * Get b365h
     *
     * @return string 
     */
    public function getB365h()
    {
        return $this->b365h;
    }

    /**
     * Set b365d
     *
     * @param string $b365d
     * @return Soccergame
     */
    public function setB365d($b365d)
    {
        $this->b365d = $b365d;

        return $this;
    }

    /**
     * Get b365d
     *
     * @return string 
     */
    public function getB365d()
    {
        return $this->b365d;
    }

    /**
     * Set b365a
     *
     * @param string $b365a
     * @return Soccergame
     */
    public function setB365a($b365a)
    {
        $this->b365a = $b365a;

        return $this;
    }

    /**
     * Get b365a
     *
     * @return string 
     */
    public function getB365a()
    {
        return $this->b365a;
    }

    /**
     * Set bwh
     *
     * @param string $bwh
     * @return Soccergame
     */
    public function setBwh($bwh)
    {
        $this->bwh = $bwh;

        return $this;
    }

    /**
     * Get bwh
     *
     * @return string 
     */
    public function getBwh()
    {
        return $this->bwh;
    }

    /**
     * Set bwd
     *
     * @param string $bwd
     * @return Soccergame
     */
    public function setBwd($bwd)
    {
        $this->bwd = $bwd;

        return $this;
    }

    /**
     * Get bwd
     *
     * @return string 
     */
    public function getBwd()
    {
        return $this->bwd;
    }

    /**
     * Set bwa
     *
     * @param string $bwa
     * @return Soccergame
     */
    public function setBwa($bwa)
    {
        $this->bwa = $bwa;

        return $this;
    }

    /**
     * Get bwa
     *
     * @return string 
     */
    public function getBwa()
    {
        return $this->bwa;
    }

    /**
     * Set gbh
     *
     * @param string $gbh
     * @return Soccergame
     */
    public function setGbh($gbh)
    {
        $this->gbh = $gbh;

        return $this;
    }

    /**
     * Get gbh
     *
     * @return string 
     */
    public function getGbh()
    {
        return $this->gbh;
    }

    /**
     * Set gbd
     *
     * @param string $gbd
     * @return Soccergame
     */
    public function setGbd($gbd)
    {
        $this->gbd = $gbd;

        return $this;
    }

    /**
     * Get gbd
     *
     * @return string 
     */
    public function getGbd()
    {
        return $this->gbd;
    }

    /**
     * Set gba
     *
     * @param string $gba
     * @return Soccergame
     */
    public function setGba($gba)
    {
        $this->gba = $gba;

        return $this;
    }

    /**
     * Get gba
     *
     * @return string 
     */
    public function getGba()
    {
        return $this->gba;
    }

    /**
     * Set iwh
     *
     * @param string $iwh
     * @return Soccergame
     */
    public function setIwh($iwh)
    {
        $this->iwh = $iwh;

        return $this;
    }

    /**
     * Get iwh
     *
     * @return string 
     */
    public function getIwh()
    {
        return $this->iwh;
    }

    /**
     * Set iwd
     *
     * @param string $iwd
     * @return Soccergame
     */
    public function setIwd($iwd)
    {
        $this->iwd = $iwd;

        return $this;
    }

    /**
     * Get iwd
     *
     * @return string 
     */
    public function getIwd()
    {
        return $this->iwd;
    }

    /**
     * Set iwa
     *
     * @param string $iwa
     * @return Soccergame
     */
    public function setIwa($iwa)
    {
        $this->iwa = $iwa;

        return $this;
    }

    /**
     * Get iwa
     *
     * @return string 
     */
    public function getIwa()
    {
        return $this->iwa;
    }

    /**
     * Set lbh
     *
     * @param string $lbh
     * @return Soccergame
     */
    public function setLbh($lbh)
    {
        $this->lbh = $lbh;

        return $this;
    }

    /**
     * Get lbh
     *
     * @return string 
     */
    public function getLbh()
    {
        return $this->lbh;
    }

    /**
     * Set lbd
     *
     * @param string $lbd
     * @return Soccergame
     */
    public function setLbd($lbd)
    {
        $this->lbd = $lbd;

        return $this;
    }

    /**
     * Get lbd
     *
     * @return string 
     */
    public function getLbd()
    {
        return $this->lbd;
    }

    /**
     * Set lba
     *
     * @param string $lba
     * @return Soccergame
     */
    public function setLba($lba)
    {
        $this->lba = $lba;

        return $this;
    }

    /**
     * Get lba
     *
     * @return string 
     */
    public function getLba()
    {
        return $this->lba;
    }

    /**
     * Set psh
     *
     * @param string $psh
     * @return Soccergame
     */
    public function setPsh($psh)
    {
        $this->psh = $psh;

        return $this;
    }

    /**
     * Get psh
     *
     * @return string 
     */
    public function getPsh()
    {
        return $this->psh;
    }

    /**
     * Set psd
     *
     * @param string $psd
     * @return Soccergame
     */
    public function setPsd($psd)
    {
        $this->psd = $psd;

        return $this;
    }

    /**
     * Get psd
     *
     * @return string 
     */
    public function getPsd()
    {
        return $this->psd;
    }

    /**
     * Set psa
     *
     * @param string $psa
     * @return Soccergame
     */
    public function setPsa($psa)
    {
        $this->psa = $psa;

        return $this;
    }

    /**
     * Get psa
     *
     * @return string 
     */
    public function getPsa()
    {
        return $this->psa;
    }

    /**
     * Set whh
     *
     * @param string $whh
     * @return Soccergame
     */
    public function setWhh($whh)
    {
        $this->whh = $whh;

        return $this;
    }

    /**
     * Get whh
     *
     * @return string 
     */
    public function getWhh()
    {
        return $this->whh;
    }

    /**
     * Set whd
     *
     * @param string $whd
     * @return Soccergame
     */
    public function setWhd($whd)
    {
        $this->whd = $whd;

        return $this;
    }

    /**
     * Get whd
     *
     * @return string 
     */
    public function getWhd()
    {
        return $this->whd;
    }

    /**
     * Set wha
     *
     * @param string $wha
     * @return Soccergame
     */
    public function setWha($wha)
    {
        $this->wha = $wha;

        return $this;
    }

    /**
     * Get wha
     *
     * @return string 
     */
    public function getWha()
    {
        return $this->wha;
    }

    /**
     * Set sjh
     *
     * @param string $sjh
     * @return Soccergame
     */
    public function setSjh($sjh)
    {
        $this->sjh = $sjh;

        return $this;
    }

    /**
     * Get sjh
     *
     * @return string 
     */
    public function getSjh()
    {
        return $this->sjh;
    }

    /**
     * Set sjd
     *
     * @param string $sjd
     * @return Soccergame
     */
    public function setSjd($sjd)
    {
        $this->sjd = $sjd;

        return $this;
    }

    /**
     * Get sjd
     *
     * @return string 
     */
    public function getSjd()
    {
        return $this->sjd;
    }

    /**
     * Set sja
     *
     * @param string $sja
     * @return Soccergame
     */
    public function setSja($sja)
    {
        $this->sja = $sja;

        return $this;
    }

    /**
     * Get sja
     *
     * @return string 
     */
    public function getSja()
    {
        return $this->sja;
    }

    /**
     * Set vch
     *
     * @param string $vch
     * @return Soccergame
     */
    public function setVch($vch)
    {
        $this->vch = $vch;

        return $this;
    }

    /**
     * Get vch
     *
     * @return string 
     */
    public function getVch()
    {
        return $this->vch;
    }

    /**
     * Set vcd
     *
     * @param string $vcd
     * @return Soccergame
     */
    public function setVcd($vcd)
    {
        $this->vcd = $vcd;

        return $this;
    }

    /**
     * Get vcd
     *
     * @return string 
     */
    public function getVcd()
    {
        return $this->vcd;
    }

    /**
     * Set vca
     *
     * @param string $vca
     * @return Soccergame
     */
    public function setVca($vca)
    {
        $this->vca = $vca;

        return $this;
    }

    /**
     * Get vca
     *
     * @return string 
     */
    public function getVca()
    {
        return $this->vca;
    }

    /**
     * Set bsh
     *
     * @param string $bsh
     * @return Soccergame
     */
    public function setBsh($bsh)
    {
        $this->bsh = $bsh;

        return $this;
    }

    /**
     * Get bsh
     *
     * @return string 
     */
    public function getBsh()
    {
        return $this->bsh;
    }

    /**
     * Set bsd
     *
     * @param string $bsd
     * @return Soccergame
     */
    public function setBsd($bsd)
    {
        $this->bsd = $bsd;

        return $this;
    }

    /**
     * Get bsd
     *
     * @return string 
     */
    public function getBsd()
    {
        return $this->bsd;
    }

    /**
     * Set bsa
     *
     * @param string $bsa
     * @return Soccergame
     */
    public function setBsa($bsa)
    {
        $this->bsa = $bsa;

        return $this;
    }

    /**
     * Get bsa
     *
     * @return string 
     */
    public function getBsa()
    {
        return $this->bsa;
    }

    /**
     * Set bb1x2
     *
     * @param integer $bb1x2
     * @return Soccergame
     */
    public function setBb1x2($bb1x2)
    {
        $this->bb1x2 = $bb1x2;

        return $this;
    }

    /**
     * Get bb1x2
     *
     * @return integer 
     */
    public function getBb1x2()
    {
        return $this->bb1x2;
    }

    /**
     * Set bbmxh
     *
     * @param string $bbmxh
     * @return Soccergame
     */
    public function setBbmxh($bbmxh)
    {
        $this->bbmxh = $bbmxh;

        return $this;
    }

    /**
     * Get bbmxh
     *
     * @return string 
     */
    public function getBbmxh()
    {
        return $this->bbmxh;
    }

    /**
     * Set bbavh
     *
     * @param string $bbavh
     * @return Soccergame
     */
    public function setBbavh($bbavh)
    {
        $this->bbavh = $bbavh;

        return $this;
    }

    /**
     * Get bbavh
     *
     * @return string 
     */
    public function getBbavh()
    {
        return $this->bbavh;
    }

    /**
     * Set bbmxd
     *
     * @param string $bbmxd
     * @return Soccergame
     */
    public function setBbmxd($bbmxd)
    {
        $this->bbmxd = $bbmxd;

        return $this;
    }

    /**
     * Get bbmxd
     *
     * @return string 
     */
    public function getBbmxd()
    {
        return $this->bbmxd;
    }

    /**
     * Set bbavd
     *
     * @param string $bbavd
     * @return Soccergame
     */
    public function setBbavd($bbavd)
    {
        $this->bbavd = $bbavd;

        return $this;
    }

    /**
     * Get bbavd
     *
     * @return string 
     */
    public function getBbavd()
    {
        return $this->bbavd;
    }

    /**
     * Set bbmxa
     *
     * @param string $bbmxa
     * @return Soccergame
     */
    public function setBbmxa($bbmxa)
    {
        $this->bbmxa = $bbmxa;

        return $this;
    }

    /**
     * Get bbmxa
     *
     * @return string 
     */
    public function getBbmxa()
    {
        return $this->bbmxa;
    }

    /**
     * Set bbava
     *
     * @param string $bbava
     * @return Soccergame
     */
    public function setBbava($bbava)
    {
        $this->bbava = $bbava;

        return $this;
    }

    /**
     * Get bbava
     *
     * @return string 
     */
    public function getBbava()
    {
        return $this->bbava;
    }

    /**
     * Set bbou
     *
     * @param integer $bbou
     * @return Soccergame
     */
    public function setBbou($bbou)
    {
        $this->bbou = $bbou;

        return $this;
    }

    /**
     * Get bbou
     *
     * @return integer 
     */
    public function getBbou()
    {
        return $this->bbou;
    }

    /**
     * Set bbmxgt25
     *
     * @param string $bbmxgt25
     * @return Soccergame
     */
    public function setBbmxgt25($bbmxgt25)
    {
        $this->bbmxgt25 = $bbmxgt25;

        return $this;
    }

    /**
     * Get bbmxgt25
     *
     * @return string 
     */
    public function getBbmxgt25()
    {
        return $this->bbmxgt25;
    }

    /**
     * Set bbavgt25
     *
     * @param string $bbavgt25
     * @return Soccergame
     */
    public function setBbavgt25($bbavgt25)
    {
        $this->bbavgt25 = $bbavgt25;

        return $this;
    }

    /**
     * Get bbavgt25
     *
     * @return string 
     */
    public function getBbavgt25()
    {
        return $this->bbavgt25;
    }

    /**
     * Set bbmxlt25
     *
     * @param string $bbmxlt25
     * @return Soccergame
     */
    public function setBbmxlt25($bbmxlt25)
    {
        $this->bbmxlt25 = $bbmxlt25;

        return $this;
    }

    /**
     * Get bbmxlt25
     *
     * @return string 
     */
    public function getBbmxlt25()
    {
        return $this->bbmxlt25;
    }

    /**
     * Set bbavlt25
     *
     * @param string $bbavlt25
     * @return Soccergame
     */
    public function setBbavlt25($bbavlt25)
    {
        $this->bbavlt25 = $bbavlt25;

        return $this;
    }

    /**
     * Get bbavlt25
     *
     * @return string 
     */
    public function getBbavlt25()
    {
        return $this->bbavlt25;
    }

    /**
     * Set bbah
     *
     * @param integer $bbah
     * @return Soccergame
     */
    public function setBbah($bbah)
    {
        $this->bbah = $bbah;

        return $this;
    }

    /**
     * Get bbah
     *
     * @return integer 
     */
    public function getBbah()
    {
        return $this->bbah;
    }

    /**
     * Set bbahh
     *
     * @param string $bbahh
     * @return Soccergame
     */
    public function setBbahh($bbahh)
    {
        $this->bbahh = $bbahh;

        return $this;
    }

    /**
     * Get bbahh
     *
     * @return string 
     */
    public function getBbahh()
    {
        return $this->bbahh;
    }

    /**
     * Set bbmxahh
     *
     * @param string $bbmxahh
     * @return Soccergame
     */
    public function setBbmxahh($bbmxahh)
    {
        $this->bbmxahh = $bbmxahh;

        return $this;
    }

    /**
     * Get bbmxahh
     *
     * @return string 
     */
    public function getBbmxahh()
    {
        return $this->bbmxahh;
    }

    /**
     * Set bbavahh
     *
     * @param string $bbavahh
     * @return Soccergame
     */
    public function setBbavahh($bbavahh)
    {
        $this->bbavahh = $bbavahh;

        return $this;
    }

    /**
     * Get bbavahh
     *
     * @return string 
     */
    public function getBbavahh()
    {
        return $this->bbavahh;
    }

    /**
     * Set bbmxaha
     *
     * @param string $bbmxaha
     * @return Soccergame
     */
    public function setBbmxaha($bbmxaha)
    {
        $this->bbmxaha = $bbmxaha;

        return $this;
    }

    /**
     * Get bbmxaha
     *
     * @return string 
     */
    public function getBbmxaha()
    {
        return $this->bbmxaha;
    }

    /**
     * Set bbavaha
     *
     * @param string $bbavaha
     * @return Soccergame
     */
    public function setBbavaha($bbavaha)
    {
        $this->bbavaha = $bbavaha;

        return $this;
    }

    /**
     * Get bbavaha
     *
     * @return string 
     */
    public function getBbavaha()
    {
        return $this->bbavaha;
    }

    /**
     * Set div
     *
     * @param string $div
     * @return Soccergame
     */
    public function setDiv($div)
    {
        $this->div = $div;

        return $this;
    }

    /**
     * Get div
     *
     * @return string 
     */
    public function getDiv()
    {
        return $this->div;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Soccergame
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set hometeam
     *
     * @param string $hometeam
     * @return Soccergame
     */
    public function setHometeam($hometeam)
    {
        $this->hometeam = $hometeam;

        return $this;
    }

    /**
     * Get hometeam
     *
     * @return string 
     */
    public function getHometeam()
    {
        return $this->hometeam;
    }

    /**
     * Set awayteam
     *
     * @param string $awayteam
     * @return Soccergame
     */
    public function setAwayteam($awayteam)
    {
        $this->awayteam = $awayteam;

        return $this;
    }

    /**
     * Get awayteam
     *
     * @return string 
     */
    public function getAwayteam()
    {
        return $this->awayteam;
    }
}
