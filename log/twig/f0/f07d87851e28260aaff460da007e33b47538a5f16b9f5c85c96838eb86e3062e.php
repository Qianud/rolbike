<?php

/* dindan.html */
class __TwigTemplate_4a5fe06d95676643946ad31ddfcd136fa7d42e105ba23ce5944f13b65207d7f7 extends Twig_Template
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
    <title>订单</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/css/style.css\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"warp\">
    <header>
        <div class=\"header-left\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p>返回</p></div>
        <div class=\"header-right\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec1-left\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/0140018_03.jpg\"/></div>
            <div class=\"sec1-center\"><p>我的订单</p></div>
            <div class=\"sec1-right\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/2.jpg\"/></div>
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
        echo "public/dindan/images/4.jpg\"/>
            <h1>您还没有租车订单</h1>
            <h2>您可以先租一辆车</h2>
            <button>立即租车</button>
        </div>
        <div class=\"sec3 hide\">
            <h1><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dinxiang\">订单信息:经典老式凤凰28寸</a></h1>
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
        echo "public/dindan/js/zepto.min1.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
    \$('.sec2 li').on('tap',function(){
        var index=\$(this).index();
//      console.log(index);
        \$('.sec3').hide().eq(index).show();
        \$(this).css('color','#f3b90d').siblings().css('color','black');
        \$(this).css('border-bottom','0.2rem solid #f3b90d').siblings().css('border-bottom','none');
    })
</script>
";
    }

    public function getTemplateName()
    {
        return "dindan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 47,  75 => 37,  66 => 31,  53 => 21,  48 => 19,  41 => 15,  36 => 13,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>订单</title>
    <link rel=\"stylesheet\" href=\"{{url}}public/dindan/css/style.css\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"warp\">
    <header>
        <div class=\"header-left\"><img src=\"{{url}}public/dindan/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p>返回</p></div>
        <div class=\"header-right\"><img src=\"{{url}}public/dindan/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec1-left\"><img src=\"{{url}}public/dindan/images/0140018_03.jpg\"/></div>
            <div class=\"sec1-center\"><p>我的订单</p></div>
            <div class=\"sec1-right\"><img src=\"{{url}}public/dindan/images/2.jpg\"/></div>
        </div>
        <div class=\"sec2\">
            <ul>
                <li>日租订单</li>
                <li>时租订单</li>
                <li>充电订单</li>
            </ul>
        </div>
        <div class=\"sec3\">
            <img src=\"{{url}}public/dindan/images/4.jpg\"/>
            <h1>您还没有租车订单</h1>
            <h2>您可以先租一辆车</h2>
            <button>立即租车</button>
        </div>
        <div class=\"sec3 hide\">
            <h1><a href=\"{{url}}index/dinxiang\">订单信息:经典老式凤凰28寸</a></h1>
        </div>
        <div class=\"sec3 hide\">
            33333
        </div>
    </section>
    <footer></footer>
</div>
</body>
</html>
<script src=\"{{url}}public/dindan/js/zepto.min1.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
    \$('.sec2 li').on('tap',function(){
        var index=\$(this).index();
//      console.log(index);
        \$('.sec3').hide().eq(index).show();
        \$(this).css('color','#f3b90d').siblings().css('color','black');
        \$(this).css('border-bottom','0.2rem solid #f3b90d').siblings().css('border-bottom','none');
    })
</script>
";
    }
}
