<?php

namespace PubextBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pubint
 *
 * @ORM\Table(name="pubint")
 * @ORM\Entity
 */
class Pubint
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutpubint", type="date", nullable=false)
     */
    private $datedebutpubint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateexppubint", type="date", nullable=false)
     */
    private $dateexppubint;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebutpubint()
    {
        return $this->datedebutpubint;
    }

    /**
     * @param \DateTime $datedebutpubint
     */
    public function setDatedebutpubint($datedebutpubint)
    {
        $this->datedebutpubint = $datedebutpubint;
    }

    /**
     * @return \DateTime
     */
    public function getDateexppubint()
    {
        return $this->dateexppubint;
    }

    /**
     * @param \DateTime $dateexppubint
     */
    public function setDateexppubint($dateexppubint)
    {
        $this->dateexppubint = $dateexppubint;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }


}

