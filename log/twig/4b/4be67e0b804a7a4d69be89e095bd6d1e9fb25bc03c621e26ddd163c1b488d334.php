<?php

/* geren.html */
class __TwigTemplate_abf3fbc2c37670e5c259976a59849f98666669c4a7b84f0628a494a318196481 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>跟我走</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/person.css\">
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/js/Adaptive.js\"></script>
</head>

<body>

<div class=\"head\">
    <div class=\"head-img\">
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/head.png\">
        <a href=\"\"><span class=\"line\">未知</span></a>
    </div>
    <div class=\"logo-dbs\">
        <div class=\"dbs-img\">
          <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/icon/logo.png\">
        </div>
        <p>全球低价租车！</p>
    </div>

</div>

<div class=\"whe\">
\t<div class=\"whe-lt whe-br\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/money\">
    \t<p class=\"lf-tp\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/flag.png\">账户金额</p>
        </a>
        <p class=\"lf-bt\"><span></span><span>账户余额:</span><span>￥";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "sum_m", array(), "array"), "html", null, true);
        echo "</span></p>
    </div>
    <div class=\"whe-lt\">
    \t<p class=\"lf-tp\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/icon/heart.png\"><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">我的订单</a></p>
        <p class=\"lf-bt\"><span>当前订单</span></p>
    </div>
</div>
<div class=\"whe\">
\t<div class=\"whe-lt whe-br\">
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/desclist\">
    \t<p class=\"lf-tp\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/in.png\">个人资料</p>
        <p class=\"lf-bt\"><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</span></p>
    </a>
    </div>
    <div class=\"whe-lt\">
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/Redeem\">
    \t<p class=\"lf-tp\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/out.png\">积分抽奖</p>
        <p class=\"lf-bt\">幸运大转盘</p>
        </a>
    </div>
</div>
<div class=\"whe\">
    <div class=\"whe-lt whe-br\">
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/integr\">
        <p class=\"lf-tp\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/in.png\">签到</p>
        <p class=\"lf-bt\"><span>当前积分：";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "integral", array(), "array"), "html", null, true);
        echo "</span></p>
    </a>
    </div>
</div>



<footer>
\t<div class=\"foot\">
    \t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
\t<div class=\"foot\">
        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1.png\">
        <p>位置</p>
    </div>
\t<div class=\"foot\">
    \t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>
\t<div class=\"foot act\">
    \t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4_4.png\">
        <p>个人</p>
    </div>
</footer>    
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "geren.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 81,  163 => 78,  159 => 77,  152 => 73,  146 => 70,  142 => 69,  130 => 60,  126 => 59,  122 => 58,  112 => 51,  108 => 50,  101 => 46,  97 => 45,  93 => 44,  82 => 38,  76 => 35,  71 => 33,  67 => 32,  55 => 23,  47 => 18,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>跟我走</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/person.css\">
<script type=\"text/javascript\" src=\"{{url}}public/showye/js/Adaptive.js\"></script>
</head>

<body>

<div class=\"head\">
    <div class=\"head-img\">
        <img src=\"{{url}}public/showye/images/person/head.png\">
        <a href=\"\"><span class=\"line\">未知</span></a>
    </div>
    <div class=\"logo-dbs\">
        <div class=\"dbs-img\">
          <img src=\"{{url}}public/showye/images/icon/logo.png\">
        </div>
        <p>全球低价租车！</p>
    </div>

</div>

<div class=\"whe\">
\t<div class=\"whe-lt whe-br\">
        <a href=\"{{url}}index/money\">
    \t<p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/person/flag.png\">账户金额</p>
        </a>
        <p class=\"lf-bt\"><span></span><span>账户余额:</span><span>￥{{ data[0]['sum_m'] }}</span></p>
    </div>
    <div class=\"whe-lt\">
    \t<p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/icon/heart.png\"><a href=\"{{url}}index/dindan\">我的订单</a></p>
        <p class=\"lf-bt\"><span>当前订单</span></p>
    </div>
</div>
<div class=\"whe\">
\t<div class=\"whe-lt whe-br\">
        <a href=\"{{url}}desc/desclist\">
    \t<p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/person/in.png\">个人资料</p>
        <p class=\"lf-bt\"><span>{{data[0]['name']}}</span></p>
    </a>
    </div>
    <div class=\"whe-lt\">
        <a href=\"{{url}}desc/Redeem\">
    \t<p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/person/out.png\">积分抽奖</p>
        <p class=\"lf-bt\">幸运大转盘</p>
        </a>
    </div>
</div>
<div class=\"whe\">
    <div class=\"whe-lt whe-br\">
        <a href=\"{{url}}desc/integr\">
        <p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/person/in.png\">签到</p>
        <p class=\"lf-bt\"><span>当前积分：{{data[0]['integral']}}</span></p>
    </a>
    </div>
</div>



<footer>
\t<div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_2.png\">
        <p><a href=\"{{url}}index/index\">首页</a></p>
    </div>
\t<div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_1.png\">
        <p>位置</p>
    </div>
\t<div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_3.png\">
        <p><a href=\"{{url}}index/dindan\">订单</a></p>
    </div>
\t<div class=\"foot act\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_4_4.png\">
        <p>个人</p>
    </div>
</footer>    
    
</body>
</html>";
    }
}
