<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;

    function getIdReclamation() {
        return $this->idReclamation;
    }

    function getDescription() {
        return $this->description;
    }

    function getIdMembre() {
        return $this->idMembre;
    }

    function setIdReclamation($idReclamation) {
        $this->idReclamation = $idReclamation;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIdMembre(\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }


}
