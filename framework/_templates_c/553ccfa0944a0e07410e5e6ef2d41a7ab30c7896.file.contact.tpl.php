<?php /* Smarty version Smarty-3.0.8, created on 2020-06-17 16:30:29
         compiled from "framework/templates/site/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1421559855eea6f55056aa3-87056552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553ccfa0944a0e07410e5e6ef2d41a7ab30c7896' => 
    array (
      0 => 'framework/templates/site/contact.tpl',
      1 => 1592422222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1421559855eea6f55056aa3-87056552',
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
                    <ul style="margin-bottom: 16px;">
                        <li id="#kisumaAmerica">Kisuma Americas Inc.</li>
                        <li>1235 North Loop West, Suite 909,</li>
                        <li>Houston, Texas, 77008, USA</li>
                        <li>Tel. +1-832-460-5130</li>
                        <li> 
                            <script src ="https://form.jotformz.com/static/feedback2.js" type="text/javascript"></script><script type="text/javascript"> var JFL_93096444803663 = new JotformFeedback({ formId: '93096444803663', base: 'https://form.jotformz.com/', windowTitle: 'Kisuma Contact Us', background: '#919395', fontColor: '#FFFFFF', type: 'false', height: 500, width: 700, openOnLoad: false }); </script> <a href="javascript:;" class="btn lightbox-93096444803663" style="margin-top: 16px"><strong>Submit inquiry - contact form</strong></a>
                        </li>
                        <!--<li><a href="mailto:KAI@kyowa-chem.com" style="font-size: 25px; font-weight: bold;">KAI@kisuma.com</a></li>-->
                    </ul>
                    <div class="mapa-fundo">
                        <ul style="border: none;">
                            <li class="hvr-grow" data-shake="6"></li>
                            <li class="hvr-grow" data-shake="2"></li>
                            <li class="hvr-grow" data-shake="1"></li>
                            <li class="hvr-grow" data-shake="3"></li>
                            <li class="hvr-grow" data-shake="4"></li>
                            <li class="hvr-grow" data-shake="5"></li>
                        </ul>
                    </div>  
                </div>
                <div class="enderecos">
                    <h1>Global presence, <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; local solutions.</h1> 
                    <ul>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/KISUMA_CHEMICAL.jpg" />
                            <div>Kyowa Chemical Industry<br/>
                                Corporate Headquarters<br/>
                            Sakaide, Japan <br/>
                            <a href="http://kyowa-chem.jp" target="_blank">kyowa-chem.jp</a></div>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/kisuma.jpg" style="float: left; margin-right: 8px;  margin-bottom: 8px;" />
                            Kisuma Chemicals B.V.<br/>
                            Veendam, The Netherlands<br/>
                            <a href="https://www.kisuma.com" target="_blank">kisuma.com</a>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/3.png" style="float: left; margin-right: 8px;  margin-bottom: 8px;" />
                            Kisuma Asia Singapore PTE. Ltd.<br/>
                            Singapore<br/>
                            <a href="http://kisuma-sg.com/" target="_blank">kisuma-sg.com</a>
                        </li>
                        
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/KISUMA_SHANGAI.jpg" />
                            Kisuma Chemical Trading Co., Ltd.<br/>
                            Shanghai, China<br/>
                            <a href="http://kyowa-chem.jp" target="_blank">kyowa-chem.jp</a>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('WWW_IMG')->value;?>
contato/4.png" style="float: left; margin-right: 8px;  margin-bottom: 8px;" />
                            Dandong Songyuan Chemicals Co., Ltd.<br/>
                            Donggang City, China<br/>
                            <a href="http://songyuan-chem.cn" target="_blank">songyuan-chem.cn</a>
                        </li>
                    </ul>
                </div>    
            </div>
            <?php $_template = new Smarty_Internal_Template("site/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
            <script src="<?php echo $_smarty_tpl->getVariable('WWW_JS')->value;?>
jquery-ui.min.js"></script>
            <script type="text/javascript">
                $(".mapa-fundo li").mouseover(function() {

                    if($(this).data("shake") == 6)
                    {
                        $(".logo a img").effect( "shake", {
                            times:2,
                            distance: 10
                        }, 1000 );
                    }
                    else
                    {
                        $(".enderecos ul li:nth-child("+$(this).data("shake")+") img").effect( "shake", {
                            times:2,
                            distance: 10
                        }, 1000 );
                    }
                });
            </script>
        </section>
    </body>
</html>