<?php

class Texto
{
    
    /* Atributos */
    private $Texto_lng_Codigo;
    private $Texto_vch_Titulo;
    private $Texto_txt_Descricao;
    
    /* Métodos mágicos GET e SET */
    public function __get($property) 
    {
        if (property_exists($this, $property)) 
        {
          return $this->$property;
        }
    }
    
    public function __set($property, $value) 
    {
        if (property_exists($this, $property)) 
        {
          $this->$property = $value;
        }
        return $this;
    }

}

?>