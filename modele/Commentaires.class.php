<?php
class Commentaires
{
public $_id,
          $_id_billet,
          $_auteur,
          $_commentaire;
  
  
  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }
  
  
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  } 
  
  // GETTERS //
  

  public function id()
  {
    return $this->_id;
  }
  
  public function id_billet()
  {
    return $this->id_billet;
  }
  
  public function auteur()
  {
    return $this->_auteur;
  }
  public function commentaire()
  {
    return $this->_commentaire;
  }
  
  
  
  public function setId($id)
  {
    $id = (int) $id;
    $this->_id = $id;
  }
  public function setId_billet($id_billet)
  {
    $id_billet = (int) $id_billet;
    $this->_id_billet = $id_billet;
  }
  public function setAuteur($auteur)
  {
    if (is_string($auteur))
    {
      $this->_auteur = $auteur;
    }
  }
  public function setCommentaire($commentaire)
  {
    if (is_string($commentaire))
    {
      $this->_commentaire = $commentaire;
    }
  }
}