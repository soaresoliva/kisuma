<?php

class Config
{
    //Dados do Sistema
    const NOME_SITE       = "Kisuma";
    const EMAIL_SITE      = "";
    
    // Informações de Conexão - DB MySQL
    const HOST = '';
    const USER = '';
    const PSWD = '';
    const DB   = '';
    
    // Configurações de SMTP
    const SMTP_EMAIL = "";
    const SMTP_HOST  = "";
    const SMTP_PWD   = "";

    private final function __construct()
    {
        
    }

    private final function __clone()
    {
        
    }

    private final function __wakeup()
    {
        
    }

    public static final function loadConfig()
    {
        /* Carrega Configurações Padrões se Forem Necessárias */

    }

    public static final function loadController()
    {
        try
        {
            if (file_exists( PATH_FW .'/classes/core/controller.class.php'))
            {
                include_once (  PATH_FW .'/classes/core/controller.class.php' );
            }
            else
            {
                throw new Exception('CONFIG:Arquivo do Controller n&#227;o encontrado.', 1000);
            }
        }
        catch (Exception $e)
        {
            die('#' . $e->getCode() . ' : ' . $e->getMessage());
        }
    }

}

?>