<?php

class Controller
{
    const INDICE_ACAO   = 'a';
    const INDICE_PAGINA = 'pagina';

    private static $sAcao   = 'admin/login';
    private static $sPagina = 'site/inicial';

    private final function __construct () { }

    private final function __clone () { }

    private final function __wakeup () { }


    public final static function loadClass ( $sArgClassName )
    {
        try
        {
            if ( file_exists (  PATH_FW . '/classes/' . $sArgClassName . '.class.php' ) )
            {
                include_once (  PATH_FW . '/classes/' . $sArgClassName . '.class.php' );
            }
            else
            {
                throw new Exception ( 'CONTROLLER:Arquivo da Classe ('.$sArgClassName.') nуo foi encontrada.', 2000 );
            }
        }
        catch ( Exception $e )
        {
            die ( '#' . $e->getCode(). ' : ' . $e->getMessage() );
        }
    }
    
    public final static function exibePagina ( $sArgPaginaNome = '' )
    {
     
        if ( isset ( $_GET[self::INDICE_PAGINA] ) && !empty ( $_GET[self::INDICE_PAGINA] ) )
        {
            self::$sPagina = $_GET[self::INDICE_PAGINA];
        }
        
        if ( self::$sPagina == '' )
        {
            self::$sPagina = 'site/inicial';
        }

        try
        {
            
            if ( file_exists (  PATH_FW . '/actions/' . self::$sPagina . '.php' ) )
            {		
                include_once (  PATH_FW . '/actions/' . self::$sPagina . '.php' );
            }
            else
            {
                throw new Exception ( 'Pсgina('.self::$sPagina.') nуo foi encontrada.', 2002 );
            }
        }
        catch ( Exception $e )
        {
            die ( '#' .$e->getCode(). ' : ' . $e->getMessage() );
        }
    }


    public final static function loadInterface ( $sArgInterfaceName )
    {
        try
        {
            if ( file_exists (  PATH_FW . '/classes/' . $sArgInterfaceName . '.interface.php' ) )
            {
                include_once (  PATH_FW . '/classes/' . $sArgInterfaceName . '.interface.php' );
            }
            else
            {
                throw new Exception ( 'CONTROLLER:Arquivo da Interface ('.$sArgInterfaceName.') nуo foi encontrada.', 2001 );
            }
        }
        catch ( Exception $e )
        {
            die ( '#' . $e->getCode(). ' : ' . $e->getMessage() );
        }
    }


    public final static function executaAcao ()
    {
        if ( isset ( $_GET[self::INDICE_ACAO] ) && !empty ( $_GET[self::INDICE_ACAO] ) )
        {
            self::$sAcaoPagina = $_GET[self::INDICE_ACAO];
        }
        
        /* Substitui Ponto por Barra */
        self::$sAcaoPagina = str_replace('.', '/', self::$sAcaoPagina);

        try
        {
            
            if ( file_exists (  PATH_FW . '/actions/' . self::$sAcaoPagina . '.php' ) )
            {
				
                include_once (  PATH_FW . '/actions/' . self::$sAcaoPagina . '.php' );
            }
            else
            {
                throw new Exception ( 'CONTROLLER:Arquivo da Aчуo ('.self::$sAcaoPagina.') nуo foi encontrada.', 2002 );
            }
        }
        catch ( Exception $e )
        {
            die ( '#' .$e->getCode(). ' : ' . $e->getMessage() );
        }
    }
}
?>