<?php

class Movie {
  private $title;
  private $original_language;
  private $genres;
  
  function __construct($_title, $_original_language, $_genres) {

    $this->setTitle($_title);
    $this->setOriginal_language($_original_language);
    $this->setGenres($_genres);
  }
  /**
   * Set the value of genres
   *
   * @return  self
   */ 
  public function setGenres($_genres)
  {
    $this->genres = $_genres;

    return $this;
  }

  /**
   * Set the value of original_language
   *
   * @return  self
   */ 
  public function setOriginal_language($_original_language)
  {
    $this->original_language = $_original_language;

    return $this;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */ 
  public function setTitle($_title)
  {
    $this->title = $_title;

    return $this;
  }

  /**
   * Get the value of genres
   */ 
  public function getGenres()
  {
    return $this->genres;
  }

  /**
   * Get the value of original_language
   */ 
  public function getOriginal_language()
  {
    return $this->original_language;
  }

  /**
   * Get the value of title
   */ 
  public function getTitle()
  {
    return $this->title;
  }

  
}
?>