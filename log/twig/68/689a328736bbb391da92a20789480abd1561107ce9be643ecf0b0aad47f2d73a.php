<?php

/* index.html */
class __TwigTemplate_4a56a8a6605f806be06ee7b21ed68f922388cf5c146849ba4260d3d5caf58457 extends Twig_Template
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
<title>Rol租车</title>
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
        echo "gossip/index\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_1.png\"></a>
        <p>骑谈</p>
    </div>
\t<div class=\"nav\">
    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/preferential\">
    \t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_2.png\">
        <p>优惠</p>
    </div>
    <div class=\"nav\">
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/tuikuan\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_3.png\">
            <p>退款</p>
        </a>
    </div>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/recycling\">
        <div class=\"nav\">
            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/menu/nav_4.png\">
            <p>回收</p>
        </div> </a>
</div>

<div class=\"name\">
\t<p>车型推荐</p>
</div>

<div class=\"contain\">
\t<div class=\"ad\">
    \t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/scenic_6.png\">
    </div>
    <div class=\"ad-left\">
    \t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/a1c8133dtw1e087e5rlzmj.jpg\">
    </div>
    <div class=\"add-right\">
    \t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/897761.jpg\">
    </div>
</div>

<div class=\"name\">
\t<p>折扣行</p>
</div>

<div class=\"favorable\">
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 85
            echo "<div class=\"fb\">
    <div class=\"fb-lt\">
        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "index/show_buy/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">
    \t<img src=\"http://qianduphp.site/admin/public/images/uploads/";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "img_url", array()), "html", null, true);
            echo "\">
        <p class=\"fb-name\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "model", array()), "html", null, true);
            echo "</p>
        <p class=\"price\">
        \t<span class=\"discount\">4.7折</span>
            <span class=\"num\"><big>";
            // line 92
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
        // line 98
        echo "<!--<div class=\"fb\">-->
    <!--<div class=\"fb-lt\">-->
    \t<!--<img src=\"";
        // line 100
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
        // line 110
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
        // line 120
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
        // line 132
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/icon/arr-right.png\"></p>
</div>    

</div>

<footer>
\t<div class=\"foot act\">
    \t<img src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
    <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/weizhi\">
        <div class=\"foot\">
            <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1_1.png\">
            <p style=\"width: 20px;\">About us</p>
        </div>
    </a>
\t<div class=\"foot\">
    \t<img src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>

        <div class=\"foot\">

    \t<img src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4.png\">
                <a href=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/person/person.html\">
        <p><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">个人</a></p>
            </a>
    </div>

</footer>    
    
<script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/js/jquery-1.7.1.min.js\"></script>
</body>
</html>
<script src=\"";
        // line 166
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
        return array (  305 => 166,  299 => 163,  290 => 157,  286 => 156,  282 => 155,  274 => 150,  270 => 149,  262 => 144,  257 => 142,  252 => 140,  248 => 139,  238 => 132,  223 => 120,  210 => 110,  197 => 100,  193 => 98,  181 => 92,  175 => 89,  171 => 88,  165 => 87,  161 => 85,  157 => 84,  145 => 75,  139 => 72,  133 => 69,  119 => 58,  114 => 56,  107 => 52,  103 => 51,  96 => 47,  92 => 46,  83 => 42,  70 => 32,  66 => 31,  62 => 30,  50 => 21,  38 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
<title>Rol租车</title>
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
        <a href=\"{{url}}gossip/index\"><img src=\"{{url}}public/showye/images/menu/nav_1.png\"></a>
        <p>骑谈</p>
    </div>
\t<div class=\"nav\">
    <a href=\"{{url}}index/preferential\">
    \t<img src=\"{{url}}public/showye/images/menu/nav_2.png\">
        <p>优惠</p>
    </div>
    <div class=\"nav\">
        <a href=\"{{url}}index/tuikuan\">
            <img src=\"{{url}}public/showye/images/menu/nav_3.png\">
            <p>退款</p>
        </a>
    </div>
    <a href=\"{{url}}index/recycling\">
        <div class=\"nav\">
            <img src=\"{{url}}public/showye/images/menu/nav_4.png\">
            <p>回收</p>
        </div> </a>
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
        <a href=\"{{url}}index/show_buy/id/{{val.id}}\">
    \t<img src=\"http://qianduphp.site/admin/public/images/uploads/{{val.img_url}}\">
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
    <a href=\"{{url}}index/weizhi\">
        <div class=\"foot\">
            <img src=\"{{url}}public/showye/images/foot/ft_1_1.png\">
            <p style=\"width: 20px;\">About us</p>
        </div>
    </a>
\t<div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_3.png\">
        <p><a href=\"{{url}}index/dindan\">订单</a></p>
    </div>

        <div class=\"foot\">

    \t<img src=\"{{url}}public/showye/images/foot/ft_4.png\">
                <a href=\"{{url}}public/showye/person/person.html\">
        <p><a href=\"{{url}}index/geren\">个人</a></p>
            </a>
    </div>

</footer>    
    
<script type=\"text/javascript\" src=\"{{url}}public/showye/js/jquery-1.7.1.min.js\"></script>
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
