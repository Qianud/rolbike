<?php

/* dindan.html */
class __TwigTemplate_abb770154389ce70d2012106eabda25fbf3dc8b29da5b7c90ebc919c2ec87456 extends Twig_Template
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/guanliqu.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>    
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
    .sps
    {
        height: 4.4rem;
padding: 0 1rem;
margin-top: 1rem;
-webkit-box-sizing: border-box;
 background: #46c68b;
   width: 100%;
height: 4.4rem;

    }
    </style> 
</head>
<body>
<div class=\"warp\">
    <header>
        <div class=\"header-left\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">返回</a>我的订单</p></div>
        <div class=\"header-right\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "  
                <div class=\"sec\">
                    <p>取车时间：";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "start_time", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"sec\">
                    <p>取车地点：";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "start_site", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"sec\">
                    <p>还车地点：";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "end_site", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"sec\">
                    <p>车型：";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "model", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"sec\">
                    <p>每分钟：";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "hour_price", array()), "html", null, true);
            echo "元</p>
                </div> 
                ";
            // line 49
            if (($this->getAttribute($context["user"], "status", array()) == "0")) {
                // line 50
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "desc/qu\" method=\"post\">
            <input type=\"hidden\" name=\"id\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                <input class='sps' type='submit'  value='取车'/>
                </form>
                ";
            }
            // line 55
            echo "                ";
            if (($this->getAttribute($context["user"], "status", array()) == "1")) {
                // line 56
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "desc/huan\" method=\"post\">
            <input type=\"hidden\" name=\"id\" value=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                <input class='sps' type='submit'  value='还车'/>
                </form>
                ";
            }
            // line 60
            echo " 
                ";
            // line 61
            if ($this->getAttribute($context["user"], "error", array())) {
                // line 62
                echo "                <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "error", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 63
            echo "                                 
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "  
        <div class=\"sec3\">
            <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/dindan/images/4.jpg\"/>
            <h1>您还没有租车订单</h1>
            <h2>您可以先租一辆车</h2>
            <button><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "index/index\">立即租车</a></button>
        </div>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  
    </section>
    <footer></footer>
</div>
</body>
</html>
<script src=\"";
        // line 77
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
        return array (  181 => 77,  173 => 71,  164 => 69,  158 => 66,  154 => 64,  148 => 63,  142 => 62,  140 => 61,  137 => 60,  130 => 57,  125 => 56,  122 => 55,  115 => 51,  110 => 50,  108 => 49,  103 => 47,  97 => 44,  91 => 41,  85 => 38,  79 => 35,  71 => 33,  65 => 30,  61 => 29,  57 => 28,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>订单</title>
    <link rel=\"stylesheet\" href=\"{{url}}public/dindan/css/style.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/guanliqu.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>    
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
    .sps
    {
        height: 4.4rem;
padding: 0 1rem;
margin-top: 1rem;
-webkit-box-sizing: border-box;
 background: #46c68b;
   width: 100%;
height: 4.4rem;

    }
    </style> 
</head>
<body>
<div class=\"warp\">
    <header>
        <div class=\"header-left\"><img src=\"{{url}}public/dindan/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p><a href=\"{{url}}index/geren\">返回</a>我的订单</p></div>
        <div class=\"header-right\"><img src=\"{{url}}public/dindan/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
    <section>
    {% for user in data %}  
                <div class=\"sec\">
                    <p>取车时间：{{ user.start_time }}</p>
                </div>
                <div class=\"sec\">
                    <p>取车地点：{{ user.start_site }}</p>
                </div>
                <div class=\"sec\">
                    <p>还车地点：{{ user.end_site }}</p>
                </div>
                <div class=\"sec\">
                    <p>车型：{{ user.model }}</p>
                </div>
                <div class=\"sec\">
                    <p>每分钟：{{ user.hour_price }}元</p>
                </div> 
                {% if user.status == '0' %}
                <form action=\"{{url}}desc/qu\" method=\"post\">
            <input type=\"hidden\" name=\"id\" value=\"{{ user.id }}\">
                <input class='sps' type='submit'  value='取车'/>
                </form>
                {% endif %}
                {% if user.status == '1' %}
                <form action=\"{{url}}desc/huan\" method=\"post\">
            <input type=\"hidden\" name=\"id\" value=\"{{ user.id }}\">
                <input class='sps' type='submit'  value='还车'/>
                </form>
                {% endif %} 
                {% if user.error  %}
                <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>{{user.error}}</span>
                {% endif %}                                 
    {% else %}  
        <div class=\"sec3\">
            <img src=\"{{url}}public/dindan/images/4.jpg\"/>
            <h1>您还没有租车订单</h1>
            <h2>您可以先租一辆车</h2>
            <button><a href=\"{{url}}index/index\">立即租车</a></button>
        </div>  
    {% endfor %}  
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
