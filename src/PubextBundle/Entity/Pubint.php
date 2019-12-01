<?php

namespace PubextBundle\Entity;

/**
 * Pubint
 */
class Pubint
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \DateTime
     */
    private $datedebutpubint;

    /**
     * @var \DateTime
     */
    private $dateexppubint;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Pubint
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set datedebutpubint
     *
     * @param \DateTime $datedebutpubint
     *
     * @return Pubint
     */
    public function setDatedebutpubint($datedebutpubint)
    {
        $this->datedebutpubint = $datedebutpubint;

        return $this;
    }

    /**
     * Get datedebutpubint
     *
     * @return \DateTime
     */
    public function getDatedebutpubint()
    {
        return $this->datedebutpubint;
    }

    /**
     * Set dateexppubint
     *
     * @param \DateTime $dateexppubint
     *
     * @return Pubint
     */
    public function setDateexppubint($dateexppubint)
    {
        $this->dateexppubint = $dateexppubint;

        return $this;
    }

    /**
     * Get dateexppubint
     *
     * @return \DateTime
     */
    public function getDateexppubint()
    {
        return $this->dateexppubint;
    }
}

