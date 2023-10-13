<?php

class Usuario
{
    
    /* Atributos */
    private $iCodigo;
    private $sNome;
    private $sLogin;
    private $sSenha;
    private $sEmail;
    private $sAtivo;
    private $sDataCadastro;
    
    private $sAdicionarArtigo;
    private $sEditarArtigo;
    private $sExcluirArtigo;
    private $sCadastrarUsuario;
    private $sCadastrarFoto;
    private $sCadastrarTinta;
    private $sCadastrarVideo;
    private $sCadastrarAudio;
    private $sCadastrarMenu;
    private $sCadastrarInformativo;
    private $sCadastrarCarrossel;
    
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