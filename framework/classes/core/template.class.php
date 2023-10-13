<?php

class Template
{
    private static $sNomePagina     = '';
    
    private final function __construct () { }

    private final function __clone () { }

    private final function __wakeup () { }

    public static final function inicializaSmarty ( )
    {
        $oTpl = new Smarty();
      
        $oTpl -> debugging      = false;
        $oTpl -> caching        = false;
        $oTpl -> cache_lifetime = 120;
        $oTpl -> allow_php_Tinta  = true;
        $oTpl -> template_dir   =  PATH_FW . '/templates/';
        $oTpl -> compile_dir    =  PATH_FW . '/_templates_c/';
        $oTpl -> cache_dir      =    PATH_FW . '/_cache/';
        $oTpl -> config_dir     =    PATH_FW . '/config/';

        $oTpl -> assign ( 'WWW',          PATH_WWW );
        $oTpl -> assign ( 'WWW_JS',        'js/' );
        $oTpl -> assign ( 'WWW_CSS',       'css/' );
        $oTpl -> assign ( 'WWW_IMG',       'images/' );
        $oTpl -> assign ( 'lastModified', date( 'Y-m-d@h:i:s' ) );
        $oTpl -> assign ( 'sNomeSite',    Config::NOME_SITE );

        /*if ( isset ( $_SESSION['_K2@BI_NOME'] ) )
        {
            $oTpl -> assign ( 'NOME_USUARIO', $_SESSION['_K2@BI_NOME'] );
        }*/

        //$oTpl -> assign ( 'nomeAmbiente', $nomeAmbiente );
        
        return $oTpl;
    }
}
?>