<?php

class Login
{

    private static $sMsgErro;

    const USUARIO_ATIVO = 'S';
    const USUARIO_INATIVO = 'N';
    const ACTION_LOGIN = 'admin/login';
    const INDICE_ACTION = 'pagina';
    const WEBSERVICE_PASSPORT = '!redireciona';

    private final function __construct()
    {
        
    }

    private final function __clone()
    {
        
    }

    private final function __wakeup()
    {
        
    }

    public static final function verificaAutenticacao()
    {
        
        if ( ( isset($_SESSION['CODIGO']) ) && $_SESSION['WEB_PASSPORT'] == 'TecnoInk!Valid.Passport' ) 
        {
            if (isset($_GET[Login::INDICE_ACTION]) && ( $_GET[Login::INDICE_ACTION] == self::WEBSERVICE_PASSPORT ))
            {                
                Header ( 'Location:' . PATH_WWW . 'index.php?pagina=' . $_GET['destino'] );
                exit();
            }
        }
        else
        {   
            //Header ( 'Location:' . PATH_WWW . 'index.php?a=logoff' );
            $_GET[Login::INDICE_ACTION] = Login::ACTION_LOGIN;
     
        }
    }

    
    public static final function autenticaUsuario()
    {
        if (isset($_POST['inputLogin']) && isset($_POST['inputSenha']))
        {
            $bLogin = Security::validaUsuario($_POST['inputLogin']);
            $bSenha = Security::validaSenha($_POST['inputSenha']);
            
            try
            {
                if ($bLogin && $bSenha)
                {   
                    //Inicializa o Banco de Dados
                    $oConexao = db::conectar();
                    $mResultado = $oConexao->prepare("SELECT
                           Usuario_vch_Login,
                           Usuario_chr_Senha,
                           Usuario_lng_Codigo,
                           Usuario_chr_Ativo,
                           Usuario_vch_Nome
                           FROM Usuario
                           WHERE Usuario_vch_Login = '".($_POST['inputLogin'])."' AND Usuario_chr_Senha = '".sha1($_POST['inputSenha'])."'                    
                         ");  
 
                    $mResultado->execute();
                    
                    $mArrDados = $mResultado->fetch(PDO::FETCH_ASSOC);
                    
                    if (is_array($mArrDados) && isset($mArrDados['Usuario_chr_Ativo']))
                    {
                        echo 1;
                        switch ($mArrDados['Usuario_chr_Ativo'])
                        {
                            case Login::USUARIO_ATIVO:
                            case NULL:
                                
                                
                                
                                $_SESSION['WEB_PASSPORT']                        = 'TecnoInk!Valid.Passport'; 
                                $_SESSION['NOME']                                = $mArrDados['Usuario_vch_Nome'];
                                $_SESSION['CODIGO']                              = $mArrDados['Usuario_lng_Codigo'];

                                /* Redireciona */
                                Header("Location:" . PATH_WWW . '?pagina=admin/tinta');
                                exit();
                                break;

                            case Login::USUARIO_INATIVO:
                                self::$sMsgErro = 'Usuário inativo, por favor, entre em contato com o Administrador do Sistema.';
                                break;

                            default:
                                self::$sMsgErro = 'Erro desconhecido, por favor, entre em contato com o Administrador do Sistema';
                                break;
                        }
                    }
                }
            }
            catch (Exception $e)
            {
                //Error::fatalError($e->getCode() . ':' . $e->getMessage());
            }
            self::$sMsgErro = 'Login e/ou senha são inválidos.';
        }
        return false;
    }
    

    public static final function pegaMsgErro()
    {
        return self::$sMsgErro;
    }

    public static final function sairSistema()
    {
        $_SESSION['WEB_PASSPORT'] = '';
        $_SESSION['NOME']         = '';
        $_SESSION['CODIGO']       = '';
        $_SESSION['PERMISSOES']   = '';
        //$_SESSION = array();

        unset($_SESSION['WEB_PASSPORT']);
        unset($_SESSION['NOME']);
        unset($_SESSION['CODIGO']);
        unset($_SESSION['PERMISSOES']);

    }

}

?>