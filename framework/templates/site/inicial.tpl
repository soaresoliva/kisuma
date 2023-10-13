<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    {include file="site/_head.tpl"}
    <link rel="stylesheet" href="{$WWW_CSS}owl.carousel.css"/>
    <link rel="stylesheet" href="{$WWW_CSS}animate.css"/>
</head>
<body>
    {include file="site/_header.tpl"}
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
            {include file="site/_footer.tpl"}
        </div>
    </section>
    <script type="text/javascript" src="{$WWW_JS}owl.carousel.min.js"></script>
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