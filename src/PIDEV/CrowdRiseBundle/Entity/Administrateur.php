<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity
 */
class Administrateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_administrateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdministrateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="login", type="integer", nullable=false)
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="mot_de_passe", type="integer", nullable=false)
     */
    private $motDePasse;
    function getIdAdministrateur() {
        return $this->idAdministrateur;
    }

    function getLogin() {
        return $this->login;
    }

    function getMotDePasse() {
        return $this->motDePasse;
    }

    function setIdAdministrateur($idAdministrateur) {
        $this->idAdministrateur = $idAdministrateur;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }



}
