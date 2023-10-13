<?php

class UsuarioDB
{
    
    private static $mArrCampos = '';
    private static $mArrJoin   = '';
    private static $sOrdem = 'Usuario_lng_Codigo';
    
    public static final function setaFiltro($sArgCampo)
    {
        self::$mArrCampos['CONDICAO'][] = $sArgCampo;
    }
    
    public static final function setaJoin($sArgJoin)
    {
        self::$mArrJoin['JOIN'][] = $sArgJoin;
    }
    
    public static final function setaOrdem($sArgOrdem)
    {
        self::$sOrdem = $sArgOrdem;
    }
    
     public static final function pesquisaUsuarioLista( )
    {
        $oConexao = db::conectar();
        
        $sFiltros = '';
        
        // Define os Filtros
        if (isset(self::$mArrCampos['CONDICAO']))
        {
            if ( self::$mArrCampos['CONDICAO'] <> '' )
            {
                for ($a = 0, $iCount = count(self::$mArrCampos['CONDICAO']); $a < $iCount; ++$a)
                {
                    $sFiltros .= (self::$mArrCampos['CONDICAO'][$a]);
                }
            }
            //Limpa Filtros
            self::$mArrCampos['CONDICAO'] = '';
        }
             
        $mResultado = $oConexao->prepare("SELECT
                           Usuario_lng_Codigo,
                           Usuario_vch_Login,
                           Usuario_vch_Nome,
                           Usuario_vch_Email,
                           Usuario_chr_Ativo,
                           Usuario_dat_Cadastro,
                           Usuario_chr_Adicionar_Artigo,
                           Usuario_chr_Editar_Artigo,
                           Usuario_chr_Excluir_Artigo,
                           Usuario_chr_Cadastrar_Usuario,
                           Usuario_chr_Cadastrar_Foto,
                           Usuario_chr_Cadastrar_Video,
                           Usuario_chr_Cadastrar_Tinta,
                           Usuario_chr_Cadastrar_Audio,
                           Usuario_chr_Cadastrar_Informativo,
                           Usuario_chr_Cadastrar_Carrossel,
                           Usuario_chr_Cadastrar_Menu
                           FROM Usuario
                           WHERE 1 = 1 
                           AND Usuario_lng_Codigo <> 1
                           ".$sFiltros."                       
                           ORDER BY ".self::$sOrdem."
                         ");  
        
        $mResultado->execute();
        //echo $mResultado->queryString;
        
        $mArrDados = $mResultado->fetchAll(PDO::FETCH_ASSOC);
        
         /* Instancia o Objeto */
        $arrObjUsuario = new ArrayObject();
        
        if (is_array($mArrDados))
        { 
            for ($a = 0, $iCount = count($mArrDados); $a < $iCount; ++$a)
            {
                 /* Instancia o Objeto */
                $oUsuario  = new Usuario;
                
                $oUsuario->iCodigo               = $mArrDados[$a]['Usuario_lng_Codigo'];
                $oUsuario->sNome                 = $mArrDados[$a]['Usuario_vch_Nome'];
                $oUsuario->sLogin                = $mArrDados[$a]['Usuario_vch_Login'];
                $oUsuario->sEmail                = $mArrDados[$a]['Usuario_vch_Email'];
                $oUsuario->sAtivo                = $mArrDados[$a]['Usuario_chr_Ativo'];
                $oUsuario->sDataCadastro         = $mArrDados[$a]['Usuario_dat_Cadastro'];
                $oUsuario->sAdicionarArtigo      = $mArrDados[$a]['Usuario_chr_Adicionar_Artigo'];
                $oUsuario->sEditarArtigo         = $mArrDados[$a]['Usuario_chr_Editar_Artigo'];
                $oUsuario->sExcluirArtigo        = $mArrDados[$a]['Usuario_chr_Excluir_Artigo'];
                $oUsuario->sCadastrarUsuario     = $mArrDados[$a]['Usuario_chr_Cadastrar_Usuario'];
                $oUsuario->sCadastrarFoto        = $mArrDados[$a]['Usuario_chr_Cadastrar_Foto'];
                $oUsuario->sCadastrarTinta         = $mArrDados[$a]['Usuario_chr_Cadastrar_Tinta'];
                $oUsuario->sCadastrarVideo       = $mArrDados[$a]['Usuario_chr_Cadastrar_Video'];
                $oUsuario->sCadastrarAudio       = $mArrDados[$a]['Usuario_chr_Cadastrar_Audio'];
                $oUsuario->sCadastrarInformativo = $mArrDados[$a]['Usuario_chr_Cadastrar_Informativo'];
                $oUsuario->sCadastrarCarrossel   = $mArrDados[$a]['Usuario_chr_Cadastrar_Carrossel'];
                $oUsuario->sCadastrarMenu        = $mArrDados[$a]['Usuario_chr_Cadastrar_Menu'];
                
                $arrObjUsuario->append($oUsuario);
            }
        }
        return $arrObjUsuario;
    }
    public static final function pesquisaUsuario( $bAdmin = false )
    {
        $oConexao = db::conectar();
        
        $sFiltros = '';
        
        // Define os Filtros
        if (isset(self::$mArrCampos['CONDICAO']))
        {
            for ($a = 0, $iCount = count(self::$mArrCampos['CONDICAO']); $a < $iCount; ++$a)
            {
                $sFiltros .= (self::$mArrCampos['CONDICAO'][$a]);
            }
            //Limpa Filtros
            self::$mArrCampos['CONDICAO'] = '';
        }
        
        if ( $bAdmin == false )
        {
            $sFiltros.= ' AND Usuario_lng_Codigo <> 1 ';
        }
             
        $mResultado = $oConexao->prepare("SELECT
                           Usuario_lng_Codigo,
                           Usuario_vch_Login,
                           Usuario_chr_Senha,
                           Usuario_vch_Nome,
                           Usuario_vch_Email,
                           Usuario_chr_Ativo,
                           Usuario_dat_Cadastro,
                           Usuario_chr_Adicionar_Artigo,
                           Usuario_chr_Editar_Artigo,
                           Usuario_chr_Excluir_Artigo,
                           Usuario_chr_Cadastrar_Usuario,
                           Usuario_chr_Cadastrar_Foto,
                           Usuario_chr_Cadastrar_Tinta,
                           Usuario_chr_Cadastrar_Video,
                           Usuario_chr_Cadastrar_Audio,
                           Usuario_chr_Cadastrar_Informativo,
                           Usuario_chr_Cadastrar_Carrossel,
                           Usuario_chr_Cadastrar_Menu
                           FROM Usuario
                           WHERE 1 = 1 
                           ".$sFiltros."                       
                         ");  
   
        $mResultado->execute();
        
        $mArrDados = $mResultado->fetch(PDO::FETCH_ASSOC);

         /* Instancia o Objeto */
        $oUsuario = new Usuario;
        
        if (is_array($mArrDados))
        { 
            $oUsuario->iCodigo               = $mArrDados['Usuario_lng_Codigo'];
            $oUsuario->sNome                 = $mArrDados['Usuario_vch_Nome'];
            $oUsuario->sLogin                = $mArrDados['Usuario_vch_Login'];
            $oUsuario->sSenha                = $mArrDados['Usuario_chr_Senha'];
            $oUsuario->sEmail                = $mArrDados['Usuario_vch_Email'];
            $oUsuario->sAtivo                = $mArrDados['Usuario_chr_Ativo'];
            $oUsuario->sDataCadastro         = $mArrDados['Usuario_dat_Cadastro'];
            $oUsuario->sAdicionarArtigo      = $mArrDados['Usuario_chr_Adicionar_Artigo'];
            $oUsuario->sEditarArtigo         = $mArrDados['Usuario_chr_Editar_Artigo'];
            $oUsuario->sExcluirArtigo        = $mArrDados['Usuario_chr_Excluir_Artigo'];
            $oUsuario->sCadastrarUsuario     = $mArrDados['Usuario_chr_Cadastrar_Usuario'];
            $oUsuario->sCadastrarFoto        = $mArrDados['Usuario_chr_Cadastrar_Foto'];
            $oUsuario->sCadastrarTinta         = $mArrDados['Usuario_chr_Cadastrar_Tinta'];
            $oUsuario->sCadastrarVideo       = $mArrDados['Usuario_chr_Cadastrar_Video'];
            $oUsuario->sCadastrarAudio       = $mArrDados['Usuario_chr_Cadastrar_Audio'];
            $oUsuario->sCadastrarInformativo = $mArrDados['Usuario_chr_Cadastrar_Informativo'];
            $oUsuario->sCadastrarCarrossel   = $mArrDados['Usuario_chr_Cadastrar_Carrossel'];
            $oUsuario->sCadastrarMenu        = $mArrDados['Usuario_chr_Cadastrar_Menu'];
           
        }
        
        return $oUsuario;     
    }
    
    public static final function salvaUsuario( $oUsuario )
    {
        $oConexao = db::conectar();

        $sSql = $oConexao->prepare("INSERT INTO Usuario (
                    Usuario_vch_Login,
                    Usuario_chr_Senha,
                    Usuario_vch_Nome,
                    Usuario_vch_Email,
                    Usuario_chr_Ativo,
                    Usuario_dat_Cadastro,
                    Usuario_chr_Adicionar_Artigo,
                    Usuario_chr_Editar_Artigo,
                    Usuario_chr_Excluir_Artigo,
                    Usuario_chr_Cadastrar_Usuario,
                    Usuario_chr_Cadastrar_Foto,
                    Usuario_chr_Cadastrar_Tinta,
                    Usuario_chr_Cadastrar_Video,
                    Usuario_chr_Cadastrar_Audio,
                    Usuario_chr_Cadastrar_Informativo,
                    Usuario_chr_Cadastrar_Carrossel,
                    Usuario_chr_Cadastrar_Menu
                    ) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )");

        $sSql->bindParam(1, ($oUsuario->sLogin));
        $sSql->bindParam(2, (sha1($oUsuario->sSenha)));
        $sSql->bindParam(3, ($oUsuario->sNome));
        $sSql->bindParam(4, ($oUsuario->sEmail));
        $sSql->bindParam(5, ($oUsuario->sAtivo));
        $sSql->bindParam(6, ($oUsuario->sDataCadastro));
        $sSql->bindParam(7, ($oUsuario->sAdicionarArtigo));
        $sSql->bindParam(8, ($oUsuario->sEditarArtigo));
        $sSql->bindParam(9, ($oUsuario->sExcluirArtigo));
        $sSql->bindParam(10,($oUsuario->sCadastrarUsuario));
        $sSql->bindParam(11,($oUsuario->sCadastrarFoto));
        $sSql->bindParam(12,($oUsuario->sCadastrarTinta));
        $sSql->bindParam(13,($oUsuario->sCadastrarVideo));
        $sSql->bindParam(14,($oUsuario->sCadastrarAudio));
        $sSql->bindParam(15,($oUsuario->sCadastrarInformativo));
        $sSql->bindParam(16,($oUsuario->sCadastrarCarrossel));
        $sSql->bindParam(17,($oUsuario->sCadastrarMenu));
        $sSql->execute();  
        
        //echo $sSql->queryString;
  
    }
    
    public static final function alteraUsuario( $oUsuario )
    {                 
        $oConexao = db::conectar();
        
        $sSql=$oConexao->prepare("UPDATE Usuario SET
                    Usuario_vch_Login = :login,
                    Usuario_vch_Nome  = :nome,
                    Usuario_vch_Email = :email,
                    Usuario_chr_Ativo = :ativo,
                    Usuario_dat_Cadastro          = :data_cadastro,
                    Usuario_chr_Adicionar_Artigo  = :adicionar_artigo,
                    Usuario_chr_Editar_Artigo     = :editar_artigo,
                    Usuario_chr_Excluir_Artigo    = :excluir_artigo,
                    Usuario_chr_Cadastrar_Usuario = :cadastrar_usuario,
                    Usuario_chr_Cadastrar_Foto     = :cadastrar_foto,
                    Usuario_chr_Cadastrar_Tinta      = :cadastrar_Tinta,
                    Usuario_chr_Cadastrar_Video    = :cadastrar_video,
                    Usuario_chr_Cadastrar_Audio    = :cadastrar_audio,
                    Usuario_chr_Cadastrar_Informativo = :cadastrar_informativo,
                    Usuario_chr_Cadastrar_Carrossel   = :cadastrar_carrossel,
                    Usuario_chr_Cadastrar_Menu        = :cadastrar_menu
                    WHERE Usuario_lng_Codigo          = :codigo " );
 
        $sSql->bindParam(':login',              ($oUsuario->sLogin));
        $sSql->bindParam(':nome',               ($oUsuario->sNome));
        $sSql->bindParam(':email',              ($oUsuario->sEmail));
        $sSql->bindParam(':ativo',              ($oUsuario->sAtivo));
        $sSql->bindParam(':data_cadastro',      ($oUsuario->sDataCadastro));
        $sSql->bindParam(':adicionar_artigo',   ($oUsuario->sAdicionarArtigo));
        $sSql->bindParam(':editar_artigo',      ($oUsuario->sEditarArtigo));
        $sSql->bindParam(':excluir_artigo',     ($oUsuario->sExcluirArtigo));
        $sSql->bindParam(':cadastrar_usuario',  ($oUsuario->sCadastrarUsuario));
        $sSql->bindParam(':cadastrar_foto',     ($oUsuario->sCadastrarFoto));
        $sSql->bindParam(':cadastrar_Tinta',      ($oUsuario->sCadastrarTinta));
        $sSql->bindParam(':cadastrar_video',    ($oUsuario->sCadastrarVideo));
        $sSql->bindParam(':cadastrar_audio',    ($oUsuario->sCadastrarAudio));
        $sSql->bindParam(':cadastrar_informativo', ($oUsuario->sCadastrarInformativo));
        $sSql->bindParam(':cadastrar_carrossel',   ($oUsuario->sCadastrarCarrossel));
        $sSql->bindParam(':cadastrar_menu',        ($oUsuario->sCadastrarMenu));
        $sSql->bindParam(':codigo',                ($oUsuario->iCodigo));
 
        $sSql->execute();
    }
    
    public static final function excluiUsuario( $iIdUsuario  )
    {
        $oConexao = db::conectar();
        
        $sSql = $oConexao->prepare("DELETE FROM Usuario
                    WHERE Usuario_lng_Codigo = :idUsuario ");
       
        $sSql->bindParam(':idUsuario',$iIdUsuario, PDO::PARAM_INT);   
        $sSql->execute();
    }
    
    public static final function alteraSenha( $sSenha )
    {                 
        $oConexao = db::conectar();
        
        $sSql=$oConexao->prepare("UPDATE Usuario SET
                    Usuario_chr_Senha = :senha
                    WHERE Usuario_lng_Codigo = :codigo " );
 
        $sSql->bindParam(':senha',            ($sSenha));
        $sSql->bindParam(':codigo',           ($_SESSION['CODIGO']));
 
        $sSql->execute();
    }
    
    public static final function enviarSenhaPorEmail( $oUsuario )
    {
        /* Inicializa o Template */
        $oTemplate = Template::inicializaSmarty();
        
        /* Define Variáveis do Template */
        $oTemplate->assign('oUsuario', $oUsuario);
        
        $sConteudo = $oTemplate->fetch('email/recuperarSenha.tpl');
        
        $sArrDestinatario = '';
        
        $sArrDestinatario[0]['Nome']  = html_entity_decode ($oUsuario->sNome);
        $sArrDestinatario[0]['Email'] = $oUsuario->sEmail;
        
        KMail::setaConteudo($sConteudo);
        KMail::setaAssunto('Recuperação de Senha');
        KMail::setaDestinatario($sArrDestinatario);
        KMail::enviaEmail();
    }
    
   
}

?>