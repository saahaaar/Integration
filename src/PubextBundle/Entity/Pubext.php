<?php

namespace PubextBundle\Entity;

/**
 * Pubext
 */
class Pubext
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nompubext;

    /**
     * @var \DateTime
     */
    private $datedebutpubext;

    /**
     * @var \DateTime
     */
    private $dateexppubext;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nompubext
     *
     * @param string $nompubext
     *
     * @return Pubext
     */
    public function setNompubext($nompubext)
    {
        $this->nompubext = $nompubext;

        return $this;
    }

    /**
     * Get nompubext
     *
     * @return string
     */
    public function getNompubext()
    {
        return $this->nompubext;
    }

    /**
     * Set datedebutpubext
     *
     * @param string $datedebutpubext
     *
     * @return Pubext
     */
    public function setDatedebutpubext($datedebutpubext)
    {
        $this->datedebutpubext = $datedebutpubext;

        return $this;
    }

    /**
     * Get datedebutpubext
     *
     * @return string
     */
    public function getDatedebutpubext()
    {
        return $this->datedebutpubext;
    }

    /**
     * Set dateexppubext
     *
     * @param string $dateexppubext
     *
     * @return Pubext
     */
    public function setDateexppubext($dateexppubext)
    {
        $this->dateexppubext = $dateexppubext;

        return $this;
    }

    /**
     * Get dateexppubext
     *
     * @return string
     */
    public function getDateexppubext()
    {
        return $this->dateexppubext;
    }
}

