<?php /* Smarty version Smarty-3.0.8, created on 2016-04-26 15:39:31
         compiled from "framework/templates/site/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067671362571fb5e3df0c69-83062281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f364bffd43f146f216c50f1a80ca0e88c6e90d2' => 
    array (
      0 => 'framework/templates/site/contato.tpl',
      1 => 1461692218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067671362571fb5e3df0c69-83062281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php $_template = new Smarty_Internal_Template("site/_head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    </head>
    <body class="repeat-2">
        <?php $_template = new Smarty_Internal_Template("site/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <section id="principal" class="contato">
            <div class="container">
                <div class="mapa">
                    <ul>
                        <li>Kisuma Americas Inc.</li>
                        <li>1235 North Loop West, Suite 909,</li>
                        <li>Houston, Texas, 77008, USA</li>
                        <li>Tel. +1-832-460-5130</li>
                        <li><a href="mailto:KAI@kyowa-chem.com">KAI@kyowa-chem.com</a></li>
                    </ul>
                    <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/mapa.png"/>
                </div>
                <div class="enderecos">
                    <h1>Global presence, <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; local solutions.</h1>
                    <ul>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/1.png" />
                            <div>Kyowa Chemical - Corporate Headquarter<br/>
                            Sakaide, Japan <br/>
                            <a href="http://kyowa-chem.jp" target="_blank">kyowa-chem.jp</a></div>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/2.png" />
                            Kisuma Chemicals B.V.<br/>
                            Veendam, The Netherlands<br/>
                            <a href="https://www.kisuma.com" target="_blank">kisuma.com</a>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/3.png" />
                            Kisuma Asia Singapore PTE. Ltd.<br/>
                            Singapore<br/>
                            <a href="mailto:kas@kyowa-chem.com" target="_top">kas@kyowa-chem.com</a>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/4.png" />
                            Dandong Songyuan Chemicals Co., Ltd.<br/>
                            Donggang City, China<br/>
                            <a href="http://songyuan-chem.cn" target="_blank">songyuan-chem.cn</a>
                        </li>
                    </ul>
                </div>    
            </div>
            <?php $_template = new Smarty_Internal_Template("site/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        </section>
    </body>
</html>