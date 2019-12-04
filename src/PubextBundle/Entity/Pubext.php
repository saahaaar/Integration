<?php

namespace PubextBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pubext
 *
 * @ORM\Table(name="pubext")
 * @ORM\Entity
 */
class Pubext
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
     * @ORM\Column(name="nompubext", type="string", length=255, nullable=false)
     */
    private $nompubext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutpubext", type="date", nullable=false)
     */
    private $datedebutpubext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateexppubext", type="date", nullable=false)
     */
    private $dateexppubext;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob", length=65535, nullable=false)
     */
    private $photo;
    private $rawPhoto;
    public function displayPhoto()
    {
        if(null === $this->rawPhoto) {
            $this->rawPhoto = "data:image/png;base65," . base64_encode(stream_get_contents($this->getPhoto()));
        }

        return $this->rawPhoto;
    }

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
    public function getNompubext()
    {
        return $this->nompubext;
    }

    /**
     * @param string $nompubext
     */
    public function setNompubext($nompubext)
    {
        $this->nompubext = $nompubext;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebutpubext()
    {
        return $this->datedebutpubext;
    }

    /**
     * @param \DateTime $datedebutpubext
     */
    public function setDatedebutpubext($datedebutpubext)
    {
        $this->datedebutpubext = $datedebutpubext;
    }

    /**
     * @return \DateTime
     */
    public function getDateexppubext()
    {
        return $this->dateexppubext;
    }

    /**
     * @param \DateTime $dateexppubext
     */
    public function setDateexppubext($dateexppubext)
    {
        $this->dateexppubext = $dateexppubext;
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

