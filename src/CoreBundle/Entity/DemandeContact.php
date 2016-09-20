<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeContact
 *
 * @ORM\Table(name="demande_contact")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\DemandeContactRepository")
 */
class DemandeContact {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=255, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="$date", type="datetime")
     */
    private $date;

    public function __construct() {
        $this->setDate(new \DateTime('now'));
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return DemandeContact
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return DemandeContact
     */
    public function setSociete($societe) {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return DemandeContact
     */
    public function setSujet($sujet) {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet() {
        return $this->sujet;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return DemandeContact
     */
    public function setMail($mail) {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail() {
        return $this->mail;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return DemandeContact
     */
    public function setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return DemandeContact
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate() {
        return $this->date;
    }

}
