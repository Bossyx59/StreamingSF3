<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\saisonRepository")
 */
class saison
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
     * @ORM\Column(name="nSaison", type="integer")
     */
    private $nSaison;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEpisodes", type="integer")
     */
    private $nbEpisodes;


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
     * Set nSaison
     *
     * @param integer $nSaison
     *
     * @return saison
     */
    public function setNSaison($nSaison)
    {
        $this->nSaison = $nSaison;

        return $this;
    }

    /**
     * Get nSaison
     *
     * @return int
     */
    public function getNSaison()
    {
        return $this->nSaison;
    }

    /**
     * Set nbEpisodes
     *
     * @param integer $nbEpisodes
     *
     * @return saison
     */
    public function setNbEpisodes($nbEpisodes)
    {
        $this->nbEpisodes = $nbEpisodes;

        return $this;
    }

    /**
     * Get nbEpisodes
     *
     * @return int
     */
    public function getNbEpisodes()
    {
        return $this->nbEpisodes;
    }
}

