<?php

class Chat {

  public function __construct(
    private int $id, 
    private string $nom, 
    private string $couleur, 
    private int $age, 
    private string $race, 
    private string $description, 
    private bool $compatibleChat,
    private bool $compatibleChien,
    private bool $compatibleEnfants,
    private bool $booking
  ) {}

  /**
   * Get the value of id
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Get the value of nom
   */
  public function getNom()
  {
      return $this->nom;
  }

  /**
   * Set the value of nom
   */
  public function setNom($nom): self
  {
      $this->nom = $nom;

      return $this;
  }

  /**
   * Get the value of couleur
   */
  public function getCouleur()
  {
      return $this->couleur;
  }

  /**
   * Set the value of couleur
   */
  public function setCouleur(string $couleur): self
  {
      $this->couleur = $couleur;

      return $this;
  }

  /**
   * Get the value of age
   */
  public function getAge()
  {
      return $this->age;
  }

  /**
   * Set the value of age
   */
  public function setAge($age): self
  {
      $this->age = $age;

      return $this;
  }

  /**
   * Get the value of race
   */
  public function getRace()
  {
      return $this->race;
  }

  /**
   * Set the value of race
   */
  public function setRace($race): self
  {
      $this->race = $race;

      return $this;
  }


  /**
   * Get the value of compatibleChien
   */ 
  public function getCompatibleChien()
  {
      return $this->compatibleChien;
  }

  /**
   * Set the value of compatibleChien
   *
   * @return  self
   */ 
  public function setCompatibleChien($compatibleChien)
  {
      $this->compatibleChien = $compatibleChien;

      return $this;
  }

  /**
   * Get the value of compatibleEnfants
   */ 
  public function getCompatibleEnfants()
  {
      return $this->compatibleEnfants;
  }

  /**
   * Set the value of compatibleEnfants
   *
   * @return  self
   */ 
  public function setCompatibleEnfants($compatibleEnfants)
  {
      $this->compatibleEnfants = $compatibleEnfants;

      return $this;
  }

  /**
   * Get the value of compatibleChat
   */ 
  public function getCompatibleChat()
  {
      return $this->compatibleChat;
  }

  /**
   * Set the value of compatibleChat
   *
   * @return  self
   */ 
  public function setCompatibleChat($compatibleChat)
  {
      $this->compatibleChat = $compatibleChat;

      return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getBooking()
  {
    return $this->booking;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setBooking($booking)
  {
    $this->booking = $booking;

    return $this;
  }
}