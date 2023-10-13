<?php /* Smarty version Smarty-3.0.8, created on 2016-04-27 22:33:49
         compiled from "framework/templates/site/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15116107405721687dea8319-36098341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1783438a22115121ac4411393e5d78695054ba3' => 
    array (
      0 => 'framework/templates/site/products.tpl',
      1 => 1461807071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15116107405721687dea8319-36098341',
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
        <section id="principal" class="produtos">
            <div class="container">
                <h1 class="titulo">Unique Products Through Unique Technologies</h1>
                <ul class="produtos-lista">
                    <li class="hvr-sink">
                        <a href="https://www.kisuma.com/products/alcamizer" target="_blank">
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
produtos/1.jpg"/>
                        </a>
                    </li>
                    <li class="hvr-sink">
                        <a href="https://www.kisuma.com/products/kisuma-5" target="_blank">
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
produtos/2.jpg"/>
                        </a>    
                    </li>
                    <li class="hvr-sink">
                        <a href="https://www.kisuma.com/products/dht-4a" target="_blank">
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
produtos/3.jpg"/>
                        </a>
                    </li>
                    <li class="hvr-sink">
                        <a href="http://kyowa-chem.jp/en/products/index.html" target="_blank">
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
produtos/4.jpg"/>
                        </a>
                    </li>
                </ul>
            </div>
            <?php $_template = new Smarty_Internal_Template("site/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        </section>
    </body>
</html>