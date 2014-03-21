<?php
class NewsManager
{
  private $_db; // Instance de PDO
  
  public function __construct($db)
  {
    $this->setDb($db);
  }
  
  // public function add(Personnage $perso)
  // {
  //   $q = $this->_db->prepare('INSERT INTO personnages SET nom = :nom');
  //   $q->bindValue(':nom', $perso->nom());
  //   $q->execute();
    
  //   $perso->hydrate(array(
  //     'id' => $this->_db->lastInsertId(),
  //     'degats' => 0,
  //   ));
  // }
  
  public function count($id)
  {
    return $this->_db->query('SELECT COUNT(*) FROM news')->fetchColumn();
  }
  
  // public function delete(Personnage $perso)
  // {
  //   $this->_db->exec('DELETE FROM personnages WHERE id = '.$perso->id());
  // }
  
  
  public function get($id)
  {
  
   $q = $this->_db->prepare('SELECT id, titre, contenu FROM news where id = :id');
   $q->bindValue(':id', $id);
   $q->execute();
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
   
    return new News($donnees);
    
  
  }
  
  public function getList()
  {
    $news = array();
    
    $q = $this->_db->prepare('SELECT id, titre, contenu FROM news ORDER BY id');
    $q->execute();
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $news[] = new News($donnees);

    }
     
    return $news;
  }
  
  // public function update(Personnage $perso)
  // {
  //   $q = $this->_db->prepare('UPDATE personnages SET degats = :degats WHERE id = :id');
    
  //   $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
  //   $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);
    
  //   $q->execute();
  // }
  
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}