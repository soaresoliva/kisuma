<?php /* Smarty version Smarty-3.0.8, created on 2020-03-17 11:53:39
         compiled from "framework/templates/site/leadership.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15835996005e70e4734f8e93-37167855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae6e5a0d3435065c17a67bd93f6423415760fb85' => 
    array (
      0 => 'framework/templates/site/leadership.tpl',
      1 => 1584456800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15835996005e70e4734f8e93-37167855',
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
        <section id="principal" class="equipe">
            <div class="container">
                <h1 class="titulo">Kisuma Americas, Inc. is a subsidiary of Kyowa Chemical Industry, Japan. Our products and innovative magnesium-based technology
                are the market standards in polymer and pharmaceutical additives. We are absolutely committed to innovation, quality, best practices and above all, improving people's lives.</h1>
                <ul class="equipe-lista">
                    <li style="display: none;">
                        <div>
                            <h1>Shigeo Miyata</h1>
                            <h2>Group CEO</h2>
                            <h2>Kyowa Chemical Industry</h2>
                        </div>
                    </li>
                    <li style="display: none;">
                        <div>
                            <h1>Keizo Matsushima</h1>
                            <h2>Group Chairman</h2>
                            <h2>Kyowa Chemical Industry</h2>
                        </div>
                    </li>
                    
                    <li>
                        <div>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
equipe/01.jpg" alt="">
                            <h1>Koji Kinoshita</h1>
                            <h2>President, CEO</h2>
                            <h2>Kisuma Americas</h2>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
equipe/02.jpg" alt="">
                            <h1>Yosuke Subana </h1>
                            <h2>Chief Financial Officer</h2>
                            <h2>Kisuma Americas</h2>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
equipe/03.jpg" alt="">
                            <h1>Marlus Ferretti</h1>
                            <h2>Chief Operating Officer, Americas</h2>
                            <h2 class="extra">Kisuma Americas</h2>
                        </div>
                    </li>
                </ul>
            </div>
            <?php $_template = new Smarty_Internal_Template("site/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        </section>
    </body>
</html>