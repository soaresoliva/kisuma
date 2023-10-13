{strip}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file="admin/_header.tpl"}
    </head>
    <body id="bodyCentraldeControle">
        <div class="container">
                <form class="form-signin" id="frmLogin" action="?pagina=admin/login" method="post">
                    <img src="{$WWW_IMG}topo/logo.png" alt="Tecnoink" title="Tecnoink" />
                    <br/>
                    <label for="inputLogin">Usuário:</label>
                    <input type="text" id="inputLogin" name="inputLogin" style="width:280px" maxlength="90" title="Entre com o seu Usuário" value="{$smarty.post.inputLogin|default:""}"/>
                    <br class="clear"/>
                    <label for="inputSenha">Senha:</label>
                    <input type="password" id="inputSenha" name="inputSenha" style="width:280px" maxlength="12" title="Entre com sua senha" />
                    <br/>
                    <input type="submit" id="btnSend" name="btnSend" class="btn btn-large btn-primary" style="float:right" value="Acessar" />
                    <br/>
                    {if ($msgErro <> null)}
                        <br/><br/><br/>
                        <div class="alert alert-error">
                            {$msgErro}
                        </div>
                    {else}
                        <br class="clear"/>
                    {/if}
                </form>
                {* <br/>
                <div class="divCenter">
                    <a href="?pagina=admin/login&recuperarSenha" title="Recuperar Senha">Esqueceu sua senha?</a>   
                </div> *}
        </div>
        
    </body>
    <script type="text/javascript">
            document.getElementById('inputLogin').focus();
    </script>
</html>
{/strip}