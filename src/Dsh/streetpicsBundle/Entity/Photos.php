<?php

namespace Dsh\streetpicsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 */
class Photos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $photofile;

    /**
     * @var \DateTime
     */
    private $dateshot;

    /**
     * @var string
     */
    private $locationshot;

    /**
     * @var string
     */
    private $eventshot;

    /**
     * @var string
     */
    private $photographer;


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
     * Set photofile
     *
     * @param string $photofile
     * @return Photos
     */
    public function setPhotofile($photofile)
    {
        $this->photofile = $photofile;

        return $this;
    }

    /**
     * Get photofile
     *
     * @return string 
     */
    public function getPhotofile()
    {
        return $this->photofile;
    }

    /**
     * Set dateshot
     *
     * @param \DateTime $dateshot
     * @return Photos
     */
    public function setDateshot($dateshot)
    {
        $this->dateshot = $dateshot;

        return $this;
    }

    /**
     * Get dateshot
     *
     * @return \DateTime 
     */
    public function getDateshot()
    {
        return $this->dateshot;
    }

    /**
     * Set locationshot
     *
     * @param string $locationshot
     * @return Photos
     */
    public function setLocationshot($locationshot)
    {
        $this->locationshot = $locationshot;

        return $this;
    }

    /**
     * Get locationshot
     *
     * @return string 
     */
    public function getLocationshot()
    {
        return $this->locationshot;
    }

    /**
     * Set eventshot
     *
     * @param string $eventshot
     * @return Photos
     */
    public function setEventshot($eventshot)
    {
        $this->eventshot = $eventshot;

        return $this;
    }

    /**
     * Get eventshot
     *
     * @return string 
     */
    public function getEventshot()
    {
        return $this->eventshot;
    }

    /**
     * Set photographer
     *
     * @param string $photographer
     * @return Photos
     */
    public function setPhotographer($photographer)
    {
        $this->photographer = $photographer;

        return $this;
    }

    /**
     * Get photographer
     *
     * @return string 
     */
    public function getPhotographer()
    {
        return $this->photographer;
    }
}
