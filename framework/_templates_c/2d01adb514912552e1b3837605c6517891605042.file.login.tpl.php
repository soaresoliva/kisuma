<?php /* Smarty version Smarty-3.0.8, created on 2016-09-29 10:31:20
         compiled from "framework/templates/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191286973557ed17a84ff713-78035439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d01adb514912552e1b3837605c6517891605042' => 
    array (
      0 => 'framework/templates/admin/login.tpl',
      1 => 1461608043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191286973557ed17a84ff713-78035439',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><?php $_template = new Smarty_Internal_Template("admin/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></head><body id="bodyCentraldeControle"><div class="container"><form class="form-signin" id="frmLogin" action="?pagina=admin/login" method="post"><img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
topo/logo.png" alt="Tecnoink" title="Tecnoink" /><br/><label for="inputLogin">Usuário:</label><input type="text" id="inputLogin" name="inputLogin" style="width:280px" maxlength="90" title="Entre com o seu Usuário" value="<?php echo (($tmp = @$_POST['inputLogin'])===null||$tmp==='' ? '' : $tmp);?>
"/><br class="clear"/><label for="inputSenha">Senha:</label><input type="password" id="inputSenha" name="inputSenha" style="width:280px" maxlength="12" title="Entre com sua senha" /><br/><input type="submit" id="btnSend" name="btnSend" class="btn btn-large btn-primary" style="float:right" value="Acessar" /><br/><?php if (($_smarty_tpl->getVariable('msgErro')->value!=null)){?><br/><br/><br/><div class="alert alert-error"><?php echo $_smarty_tpl->getVariable('msgErro')->value;?>
</div><?php }else{ ?><br class="clear"/><?php }?></form></div></body><script type="text/javascript">document.getElementById('inputLogin').focus();</script></html>