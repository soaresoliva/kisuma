<?php /* Smarty version Smarty-3.0.8, created on 2016-04-27 22:32:37
         compiled from "framework/templates/site/inicial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100949577857216835b0d0e1-67031322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfaf3010a2d0965a631610d93ca7657ddcd081e3' => 
    array (
      0 => 'framework/templates/site/inicial.tpl',
      1 => 1461807069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100949577857216835b0d0e1-67031322',
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WWW_CSS')->value;?>
owl.carousel.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WWW_CSS')->value;?>
animate.css"/>
</head>
<body>
    <?php $_template = new Smarty_Internal_Template("site/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <section id="principal" class="home">
        <div class="container">
            <ul class="itens-home">
                <li class="owl-carousel">
                    <div class="item">Magnesium Oxide</div>
                    <div class="item">Synthetic Hydrotalcites</div>
                    <div class="item">Synthetic Magnesium <br/>Hydroxide</div>
                    <div class="item">Magnesium Carbonate</div>
                    <div class="item">Aluminum Hydroxide</div>
                    <div class="item">Synthetic Magnesium <br/>Silicates</div>
                    <div class="item">Magnesium Compounds <br/>and Solutions</div>

                </li>
            </ul>
            <?php $_template = new Smarty_Internal_Template("site/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WWW_JS')->value;?>
owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            items: 1,
            autoplayTimeout: 5000,
            animateOut: 'fadeOutRight',
            animateIn: 'fadeInLeft'
        });
    </script>
</body>
</html>