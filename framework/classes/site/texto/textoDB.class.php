<?php

class TextoDB
{
    
    private static $mArrCampos = '';
    private static $mArrJoin   = '';
    private static $sOrdem = 'Texto_lng_Codigo';
    
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
    
    public static final function pesquisaTextoLista( )
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
                //Limpa Filtros
                self::$mArrCampos['CONDICAO'] = '';
            }
        }
             
        $mResultado = $oConexao->prepare("SELECT
                           Texto_lng_Codigo,
                           Texto_vch_Titulo,
                           Texto_txt_Descricao
                           FROM Texto
                           WHERE 1 = 1 ".$sFiltros."                       
                           ORDER BY ".self::$sOrdem."
                         ");  
        
        $mResultado->execute();
        $mArrDados = $mResultado->fetchAll(PDO::FETCH_ASSOC);
        
         /* Instancia o Objeto */
        $arrObjTexto = new ArrayObject();
        
        if (is_array($mArrDados))
        { 
            for ($a = 0, $iCount = count($mArrDados); $a < $iCount; ++$a)
            {
                 /* Instancia o Objeto */
                $oTexto  = new Texto;
                
                $oTexto->Texto_lng_Codigo    = $mArrDados[$a]['Texto_lng_Codigo'];
                $oTexto->Texto_vch_Titulo    = $mArrDados[$a]['Texto_vch_Titulo'];
                $oTexto->Texto_txt_Descricao = $mArrDados[$a]['Texto_txt_Descricao'];
                
                $arrObjTexto->append($oTexto);
            }
        }
        return $arrObjTexto;
    }
    
    public static final function pesquisaTexto( )
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
             
        $mResultado = $oConexao->prepare("SELECT
                           Texto_lng_Codigo,
                           Texto_vch_Titulo,
                           Texto_txt_Descricao
                           FROM Texto
                           WHERE 1 = 1 ".$sFiltros."                       
                         ");  
        
        $mResultado->execute();
        
        $mArrDados = $mResultado->fetch(PDO::FETCH_ASSOC);
        ;
         /* Instancia o Objeto */
        $oTexto = new Texto;
        
        if (is_array($mArrDados))
        { 
           $oTexto->Texto_lng_Codigo    = $mArrDados['Texto_lng_Codigo'];
           $oTexto->Texto_vch_Titulo    = $mArrDados['Texto_vch_Titulo'];
           $oTexto->Texto_txt_Descricao = nl2br($mArrDados['Texto_txt_Descricao']);
        }
        
        return $oTexto;     
    }
    
    public static final function alteraTexto( $oTexto )
    {                 
        $oConexao = db::conectar();
        
        $sSql=$oConexao->prepare("UPDATE Texto SET
                    Texto_txt_Descricao = :descricao
                    WHERE Texto_lng_Codigo = :codigo " );
 
        $sSql->bindParam(':codigo',    ($oTexto->Texto_lng_Codigo));
        $sSql->bindParam(':descricao', ($oTexto->Texto_txt_Descricao));
        
        $sSql->execute();
    }
 
}

?>