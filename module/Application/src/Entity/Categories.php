<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a single category
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Categories 
{

  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")   
   */
  protected $id;

  /** 
   * @ORM\Column(name="name")  
   */
  protected $name;

  // Returns ID of this post.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this post.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns title.
  public function getName() 
  {
    return $this->name;
  }

  // Sets title.
  public function setName($name) 
  {
    $this->name = $name;
  }

}