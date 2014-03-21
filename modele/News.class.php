<?php
class News
{
public $_id,
          $_titre,
          $_contenu;
  
  
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
  
  public function contenu()
  {
    return $this->_contenu;
  }
  
  public function titre()
  {
    return $this->_titre;
  }
  
  
  
  public function setId($id)
  {
    $id = (int) $id;
    $this->_id = $id;
  }
  public function setTitre($titre)
  {
    if (is_string($titre))
    {
      $this->_titre = $titre;
    }
  }
  public function setContenu($contenu)
  {
    if (is_string($contenu))
    {
      $this->_contenu = $contenu;
    }
  }
}