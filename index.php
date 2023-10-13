<?php

    #LC_ALL converte todas as definições do php para portugues inclusive a moeda 
    setlocale(LC_ALL, "pt_BR");
    date_default_timezone_set("America/Sao_paulo");

    //error_reporting( E_ALL  ^ E_STRICT);
    //ini_set( 'display_errors', '1' );
    
    error_reporting(0);
    
    //ini_set('post_max_size', '640M');
    //ini_set('upload_max_filesize', '640M');

    /* Codificação Padrão */
    ini_set('default_charset', 'ISO-8859-1');
    ini_set('max_execution_time', 300); //300 seconds = 5 minutes
    
    /* Inicializa SESSIONs */
    session_start();
    
    /* Define os Caminhos Absolutos */
    define ( 'PATH_SISTEMA', '' );
    define ( 'PATH_FW',      'framework' );
    define ( 'PATH_ABS',     dirname ( __FILE__ ) . '\\' );
    define ( 'PATH_WWW',     'https://' . $_SERVER['HTTP_HOST'] . '/'  );

    /* Adiciona Classe de Configuração */
    try
    {
        if ( file_exists (  PATH_FW . '/config/config.class.php' ) )
        { 
            require_once (  PATH_FW . '/config/config.class.php' );
                
            Config::loadConfig ();
            Config::loadController ();
           
             /* Inicializa Bibliotecas / Configurações */
             Controller::loadClass ( 'smarty/Smarty' );
             Controller::loadClass ( 'core/security' );
             Controller::loadClass ( 'core/template' );
             Controller::loadClass ( 'core/login' );
             Controller::loadClass ( 'core/util' );
             Controller::loadClass ( 'core/db' );  
             
             if ( isset ( $_GET['pagina'] ) )
             {
                $arrUrl = explode('/', $_GET['pagina']);
                 
                if ( $arrUrl[0] == 'admin' )
                {
                    /* Verifica se o Usuário é Autenticado */
                    Login::verificaAutenticacao();
                }
             }
             
             /* Exibe a página solicitada */
             Controller::exibePagina();
             
        }
        else
        {
            throw new Exception( 'INDEX:Não foi possível carregar o arquivo de Configuração.', 0001 );
        }
    }
    catch ( Exception $e )
    {
        die ( '#' . $e->getCode() . ' : ' . $e->getMessage() );
    }


   
    
?>