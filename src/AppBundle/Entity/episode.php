<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\episodeRepository")
 */
class episode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nEpisode", type="integer")
     */
    private $nEpisode;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;


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
     * Set nEpisode
     *
     * @param integer $nEpisode
     *
     * @return episode
     */
    public function setNEpisode($nEpisode)
    {
        $this->nEpisode = $nEpisode;

        return $this;
    }

    /**
     * Get nEpisode
     *
     * @return int
     */
    public function getNEpisode()
    {
        return $this->nEpisode;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }
}

