<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file="site/_head.tpl"}
    </head>
    <body class="repeat-2">
        {include file="site/_header.tpl"}
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
                            <img src="{$WWW_IMG}contato/KISUMA_CHEMICAL.jpg" />
                            <div>Kyowa Chemical Industry<br/>
                                Corporate Headquarters<br/>
                            Sakaide, Japan <br/>
                            <a href="http://kyowa-chem.jp" target="_blank">kyowa-chem.jp</a></div>
                        </li>
                        <li>
                            <img src="{$WWW_IMG}contato/kisuma.jpg" style="float: left; margin-right: 8px;  margin-bottom: 8px;" />
                            Kisuma Chemicals B.V.<br/>
                            Veendam, The Netherlands<br/>
                            <a href="https://www.kisuma.com" target="_blank">kisuma.com</a>
                        </li>
                        <li>
                            <img src="{$WWW_IMG}contato/3.png" style="float: left; margin-right: 8px;  margin-bottom: 8px;" />
                            Kisuma Asia Singapore PTE. Ltd.<br/>
                            Singapore<br/>
                            <a href="http://kisuma-sg.com/" target="_blank">kisuma-sg.com</a>
                        </li>
                        
                        <li>
                            <img src="{$WWW_IMG}contato/KISUMA_SHANGAI.jpg" />
                            Kisuma Chemical Trading Co., Ltd.<br/>
                            Shanghai, China<br/>
                            <a href="http://kyowa-chem.jp" target="_blank">kyowa-chem.jp</a>
                        </li>
                        <li>
                            <img src="{$WWW_IMG}contato/4.png" style="float: left; margin-right: 8px;  margin-bottom: 8px;" />
                            Dandong Songyuan Chemicals Co., Ltd.<br/>
                            Donggang City, China<br/>
                            <a href="http://songyuan-chem.cn" target="_blank">songyuan-chem.cn</a>
                        </li>
                    </ul>
                </div>    
            </div>
            {include file="site/_footer.tpl"}
            <script src="{$WWW_JS}jquery-ui.min.js"></script>
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