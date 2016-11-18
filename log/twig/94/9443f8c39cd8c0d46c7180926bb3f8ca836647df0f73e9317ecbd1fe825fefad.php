<?php

/* showone1.html */
class __TwigTemplate_097190935ccec3007d5c8e74d18321d2a668a04a9a3552ea41030d285a2d231b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/style.css\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"warp\">
    <header>
        <div class=\"header-left\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p>返回</p></div>
        <div class=\"header-right\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec1-left\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/images/0140018_03.jpg\"/></div>
            <div class=\"sec1-center\"><p>我的订单</p></div>
            <div class=\"sec1-right\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/images/2.jpg\"/></div>
        </div>
        <div class=\"sec2\">
            <ul>
                <li>日租订单</li>
                <li>时租订单</li>
                <li>充电订单</li>
            </ul>
        </div>
        <div class=\"sec3\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/images/270.jpg\"/>
            <h1>车辆信息:福特.福克斯</h1>
            <h1>租借天数:1天</h1>
            <h1>借车时间:<span>2016-05-21 12:00:00</span></h1>
            <h2>还车时间:<span>2016-05-22 12:00:00</span></h2>
            <button>立即还车</button>
        </div>
        <div class=\"sec3 hide\">
            22222
        </div>
        <div class=\"sec3 hide\">
            33333
        </div>
    </section>
    <footer></footer>
</div>
</body>
</html>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/zepto.min1.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
    \$('.sec2 li').on('tap',function(){
        var index=\$(this).index();
//\t\tconsole.log(index);
        \$('.sec3').hide().eq(index).show();
        \$(this).css('color','#f3b90d').siblings().css('color','black');
        \$(this).css('border-bottom','0.2rem solid #f3b90d').siblings().css('border-bottom','none');
    })
</script>";
    }

    public function getTemplateName()
    {
        return "showone1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 49,  66 => 31,  53 => 21,  48 => 19,  41 => 15,  36 => 13,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"{{url}}public/css/style.css\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"warp\">
    <header>
        <div class=\"header-left\"><img src=\"{{url}}public/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p>返回</p></div>
        <div class=\"header-right\"><img src=\"{{url}}public/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec1-left\"><img src=\"{{url}}public/images/0140018_03.jpg\"/></div>
            <div class=\"sec1-center\"><p>我的订单</p></div>
            <div class=\"sec1-right\"><img src=\"{{url}}public/images/2.jpg\"/></div>
        </div>
        <div class=\"sec2\">
            <ul>
                <li>日租订单</li>
                <li>时租订单</li>
                <li>充电订单</li>
            </ul>
        </div>
        <div class=\"sec3\">
            <img src=\"{{url}}public/images/270.jpg\"/>
            <h1>车辆信息:福特.福克斯</h1>
            <h1>租借天数:1天</h1>
            <h1>借车时间:<span>2016-05-21 12:00:00</span></h1>
            <h2>还车时间:<span>2016-05-22 12:00:00</span></h2>
            <button>立即还车</button>
        </div>
        <div class=\"sec3 hide\">
            22222
        </div>
        <div class=\"sec3 hide\">
            33333
        </div>
    </section>
    <footer></footer>
</div>
</body>
</html>
<script src=\"{{url}}public/js/zepto.min1.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
    \$('.sec2 li').on('tap',function(){
        var index=\$(this).index();
//\t\tconsole.log(index);
        \$('.sec3').hide().eq(index).show();
        \$(this).css('color','#f3b90d').siblings().css('color','black');
        \$(this).css('border-bottom','0.2rem solid #f3b90d').siblings().css('border-bottom','none');
    })
</script>";
    }
}
