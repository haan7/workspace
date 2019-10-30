<<?php
class Building{
 //properties    
    private $name;
    private $height;
   
    //constructor
    function _construct($name,$height){
        $this->name = $name;
        $this->height = $height;
       
    }
   
    //accessor method
    function setName($name){
      $this->name = $name;  
    }
    function getName(){
        return $this->name;
    }
    function setHeight($height){
      $this->height = $height;  
    }
    function getHeight(){
        return $this->height;
    }
   
    function getProfile(){
        $profile = "{$this->name}の高さは{$this->height}mです。 ";
        return $profile;
    }
   
}
?>