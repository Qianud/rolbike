<?php

/* index.html */
class __TwigTemplate_01b85eeae00dbd72502421b056b5f651c8a1f50a45cb864e3237c63b147934fc extends Twig_Template
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
<title>顺达租车</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/index.css\">

<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/js/Adaptive.js\"></script>
</head>

<body>

<header>
\t<i class=\"logo\"></i>
    <a href=\"#\">
    <div class=\"sch\">
    \t<p><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/icon/sch.png\">特惠套餐</p>
    </div>
    </a>
</header>

<div id=\"_contain\">

    <div class=\"sec1\">
                <div class=\"box\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/1.jpg\"/>
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/2.jpg\"/>
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/3.jpg\"/>
                </div>
                <ul>
                    <li class=\"lis\"></li>
                    <li></li>
                    <li></li>
                </ul>
    </div>
<div class=\"menu\">
\t<div class=\"nav\">
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/chexin\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_1.png\"></a>
        <p>日租</p>
    </div>
\t<div class=\"nav\">
    \t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_2.png\">
        <p>优惠</p>
    </div>
\t<div class=\"nav\">
    \t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_3.png\">
        <p>押金</p>
    </div>
\t<div class=\"nav\">
    \t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_4.png\">
        <p>回收</p>
    </div>
</div>

<div class=\"name\">
\t<p>车型推荐</p>
</div>

<div class=\"contain\">
\t<div class=\"ad\">
    \t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/scenic_6.png\">
    </div>
    <div class=\"ad-left\">
    \t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/a1c8133dtw1e087e5rlzmj.jpg\">
    </div>
    <div class=\"add-right\">
    \t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/897761.jpg\">
    </div>
</div>

<div class=\"name\">
\t<p>折扣行</p>
</div>

<div class=\"favorable\">
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 81
            echo "<div class=\"fb\">
    <div class=\"fb-lt\">
        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "index/show_buy/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "Id", array()), "html", null, true);
            echo "\">
    \t<img src=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/showye/images/scenics/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "img_url", array()), "html", null, true);
            echo "\">
        <p class=\"fb-name\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "model", array()), "html", null, true);
            echo "</p>
        <p class=\"price\">
        \t<span class=\"discount\">4.7折</span>
            <span class=\"num\"><big>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "hour_price", array()), "html", null, true);
            echo "</big>元/每分钟</span>
        </p>
        </a>
    </div>
</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/lao28.jpg\">-->
        <!--<p class=\"fb-name\">怀旧经典系列</p>-->
        <!--<p class=\"price\">-->
        \t<!--<span class=\"discount\">8.7折</span>-->
            <!--<span class=\"num\"><big>80</big>元/天起</span>-->
        <!--</p>-->
    <!--</div>-->
<!--</div>-->
<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/chengshi0.jpg\">-->
        <!--<p class=\"fb-name\">城市游系列</p>-->
        <!--<p class=\"price\">-->
        \t<!--<span class=\"discount\">6.2折</span>-->
            <!--<span class=\"num\"><big>10</big>元/天起</span>-->
        <!--</p>-->
    <!--</div>-->
<!--</div>-->
<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/90F58PICBXv.jpg\">-->
        <!--<p class=\"fb-name\">都市狂野系列</p>-->
        <!--<p class=\"price\">-->
        \t<!--<span class=\"discount\">2.8折</span>-->
            <!--<span class=\"num\"><big>30</big>元/天起</span>-->
        <!--</p>-->
    <!--</div>-->
<!--</div>-->

</div>
 
<div class=\"more\">
\t<p>更多车型,敬请期待<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/icon/arr-right.png\"></p>
</div>    

</div>

<footer>
\t<div class=\"foot act\">
    \t<img src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
\t<div class=\"foot\">
        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
\t<div class=\"foot\">
    \t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>
\t<a href=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/person/person.html\"><div class=\"foot\">
    \t<img src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4.png\">
        <p><a href=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">个人</a></p>
    </div></a>
</footer>    
    
<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/js/jquery-1.7.1.min.js\"></script>
<script type=\"text/javascript\">
\t\$(\".more\").click(function(){
\t\tfor(i=0;i<4;i++){
\t\t\t\$(\".favorable\").append('<div class=\"fb\">'
\t\t\t\t\t\t\t\t\t+'<div class=\"fb-lt\">'
\t\t\t\t\t\t\t\t\t+'<img src=\"'+ 'images/scenics/scenic_5.png'+'\"/>'
\t\t\t\t\t\t\t\t\t+'<p class=\"fb-name\">体验全球最长的过山车15天超爽旅游</p>'
\t\t\t\t\t\t\t\t\t+'<p class=\"price\">'+'<span class=\"discount\">2.8折</span>'
\t\t\t\t\t\t\t\t\t+'<span class=\"num\"><big>2889</big>元起</span>'
\t\t\t\t\t\t\t\t\t+'</p></div></div>');
\t\t}
\t\t})
</script>
</body>
</html>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/jquery-1.8.0.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
    var index=0;
    setInterval(function(){
        index++;
        console.log(index)
        if(index>2){
            index=0;
        }
        \$('.box img').hide().eq(index).show();
        \$('ul li').removeClass('lis').eq(index).addClass('lis');
    },5000);
</script>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 168,  278 => 152,  271 => 148,  267 => 147,  263 => 146,  258 => 144,  254 => 143,  247 => 139,  241 => 136,  237 => 135,  227 => 128,  212 => 116,  199 => 106,  186 => 96,  182 => 94,  170 => 88,  164 => 85,  158 => 84,  152 => 83,  148 => 81,  144 => 80,  132 => 71,  126 => 68,  120 => 65,  106 => 54,  99 => 50,  92 => 46,  83 => 42,  70 => 32,  66 => 31,  62 => 30,  50 => 21,  38 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
<title>顺达租车</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/index.css\">

<script type=\"text/javascript\" src=\"{{url}}public/showye/js/Adaptive.js\"></script>
</head>

<body>

<header>
\t<i class=\"logo\"></i>
    <a href=\"#\">
    <div class=\"sch\">
    \t<p><img src=\"{{url}}public/showye/images/icon/sch.png\">特惠套餐</p>
    </div>
    </a>
</header>

<div id=\"_contain\">

    <div class=\"sec1\">
                <div class=\"box\">
                    <img src=\"{{url}}public/1.jpg\"/>
                    <img src=\"{{url}}public/2.jpg\"/>
                    <img src=\"{{url}}public/3.jpg\"/>
                </div>
                <ul>
                    <li class=\"lis\"></li>
                    <li></li>
                    <li></li>
                </ul>
    </div>
<div class=\"menu\">
\t<div class=\"nav\">
        <a href=\"{{url}}index/chexin\"><img src=\"{{url}}public/showye/images/menu/nav_1.png\"></a>
        <p>日租</p>
    </div>
\t<div class=\"nav\">
    \t<img src=\"{{url}}public/showye/images/menu/nav_2.png\">
        <p>优惠</p>
    </div>
\t<div class=\"nav\">
    \t<img src=\"{{url}}public/showye/images/menu/nav_3.png\">
        <p>押金</p>
    </div>
\t<div class=\"nav\">
    \t<img src=\"{{url}}public/showye/images/menu/nav_4.png\">
        <p>回收</p>
    </div>
</div>

<div class=\"name\">
\t<p>车型推荐</p>
</div>

<div class=\"contain\">
\t<div class=\"ad\">
    \t<img src=\"{{url}}public/showye/images/scenics/scenic_6.png\">
    </div>
    <div class=\"ad-left\">
    \t<img src=\"{{url}}public/showye/images/scenics/a1c8133dtw1e087e5rlzmj.jpg\">
    </div>
    <div class=\"add-right\">
    \t<img src=\"{{url}}public/showye/images/scenics/897761.jpg\">
    </div>
</div>

<div class=\"name\">
\t<p>折扣行</p>
</div>

<div class=\"favorable\">
    {% for val in data %}
<div class=\"fb\">
    <div class=\"fb-lt\">
        <a href=\"{{url}}index/show_buy/id/{{val.Id}}\">
    \t<img src=\"{{url}}public/showye/images/scenics/{{val.img_url}}\">
        <p class=\"fb-name\">{{val.model}}</p>
        <p class=\"price\">
        \t<span class=\"discount\">4.7折</span>
            <span class=\"num\"><big>{{val.hour_price}}</big>元/每分钟</span>
        </p>
        </a>
    </div>
</div>
    {% endfor %}
<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"{{url}}public/showye/images/scenics/lao28.jpg\">-->
        <!--<p class=\"fb-name\">怀旧经典系列</p>-->
        <!--<p class=\"price\">-->
        \t<!--<span class=\"discount\">8.7折</span>-->
            <!--<span class=\"num\"><big>80</big>元/天起</span>-->
        <!--</p>-->
    <!--</div>-->
<!--</div>-->
<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"{{url}}public/showye/images/scenics/chengshi0.jpg\">-->
        <!--<p class=\"fb-name\">城市游系列</p>-->
        <!--<p class=\"price\">-->
        \t<!--<span class=\"discount\">6.2折</span>-->
            <!--<span class=\"num\"><big>10</big>元/天起</span>-->
        <!--</p>-->
    <!--</div>-->
<!--</div>-->
<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"{{url}}public/showye/images/scenics/90F58PICBXv.jpg\">-->
        <!--<p class=\"fb-name\">都市狂野系列</p>-->
        <!--<p class=\"price\">-->
        \t<!--<span class=\"discount\">2.8折</span>-->
            <!--<span class=\"num\"><big>30</big>元/天起</span>-->
        <!--</p>-->
    <!--</div>-->
<!--</div>-->

</div>
 
<div class=\"more\">
\t<p>更多车型,敬请期待<img src=\"{{url}}public/showye/images/icon/arr-right.png\"></p>
</div>    

</div>

<footer>
\t<div class=\"foot act\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_2.png\">
        <p><a href=\"{{url}}index/index\">首页</a></p>
    </div>
\t<div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
\t<div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_3.png\">
        <p><a href=\"{{url}}index/dindan\">订单</a></p>
    </div>
\t<a href=\"{{url}}public/showye/person/person.html\"><div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_4.png\">
        <p><a href=\"{{url}}index/geren\">个人</a></p>
    </div></a>
</footer>    
    
<script type=\"text/javascript\" src=\"{{url}}public/showye/js/jquery-1.7.1.min.js\"></script>
<script type=\"text/javascript\">
\t\$(\".more\").click(function(){
\t\tfor(i=0;i<4;i++){
\t\t\t\$(\".favorable\").append('<div class=\"fb\">'
\t\t\t\t\t\t\t\t\t+'<div class=\"fb-lt\">'
\t\t\t\t\t\t\t\t\t+'<img src=\"'+ 'images/scenics/scenic_5.png'+'\"/>'
\t\t\t\t\t\t\t\t\t+'<p class=\"fb-name\">体验全球最长的过山车15天超爽旅游</p>'
\t\t\t\t\t\t\t\t\t+'<p class=\"price\">'+'<span class=\"discount\">2.8折</span>'
\t\t\t\t\t\t\t\t\t+'<span class=\"num\"><big>2889</big>元起</span>'
\t\t\t\t\t\t\t\t\t+'</p></div></div>');
\t\t}
\t\t})
</script>
</body>
</html>
<script src=\"{{url}}public/js/jquery-1.8.0.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
    var index=0;
    setInterval(function(){
        index++;
        console.log(index)
        if(index>2){
            index=0;
        }
        \$('.box img').hide().eq(index).show();
        \$('ul li').removeClass('lis').eq(index).addClass('lis');
    },5000);
</script>
";
    }
}
