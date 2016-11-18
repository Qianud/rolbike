<?php

/* showlist.html */
class __TwigTemplate_2ea6eeabb70df2e31d305743123152876e348c4eb018c7cde0505ae0b8771fa3 extends Twig_Template
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
        echo "public/img/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p>返回</p></div>
        <div class=\"header-right\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec1-left\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/0140018_03.jpg\"/></div>
            <div class=\"sec1-center\"><p>我的订单</p></div>
            <div class=\"sec1-right\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/2.jpg\"/></div>
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
        echo "public/img/4.jpg\"/>
            <h1>您还没有租车订单</h1>
            <h2>您可以先租一辆车</h2>
            <button>立即租车</button>
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
        // line 47
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
        return "showlist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 47,  66 => 31,  53 => 21,  48 => 19,  41 => 15,  36 => 13,  26 => 6,  19 => 1,);
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
        <div class=\"header-left\"><img src=\"{{url}}public/img/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p>返回</p></div>
        <div class=\"header-right\"><img src=\"{{url}}public/img/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec1-left\"><img src=\"{{url}}public/img/0140018_03.jpg\"/></div>
            <div class=\"sec1-center\"><p>我的订单</p></div>
            <div class=\"sec1-right\"><img src=\"{{url}}public/img/2.jpg\"/></div>
        </div>
        <div class=\"sec2\">
            <ul>
                <li>日租订单</li>
                <li>时租订单</li>
                <li>充电订单</li>
            </ul>
        </div>
        <div class=\"sec3\">
            <img src=\"{{url}}public/img/4.jpg\"/>
            <h1>您还没有租车订单</h1>
            <h2>您可以先租一辆车</h2>
            <button>立即租车</button>
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
