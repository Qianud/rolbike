<?php

/* querenh.html */
class __TwigTemplate_90afd750de29927f47ef59f6593bec109041b5853ae85cac8a0fe428d0405563 extends Twig_Template
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
    <title>特惠路线</title>
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
    <section>
\t\t\t<header>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/preferential\"><i class=\"fa fa-angle-left fa-5x\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h1>特惠订单</h1>
\t\t\t\t</div>
\t\t\t</header>    
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["re"]) ? $context["re"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "  
\t\t\t<section>
\t\t\t\t<div class=\"sec\">

\t\t\t\t\t<p>订单号：<span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "num", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>昵称：<span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>手机号：<span>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>车辆：<span>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "model", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>线路：<span>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "line", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>时间：<span>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "interval", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>金额：<span style=\"color:red\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "taocan_price", array()), "html", null, true);
            echo "</span>元</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t";
            // line 61
            if (($this->getAttribute($context["user"], "status", array()) == 0)) {
                // line 62
                echo "\t\t\t\t\t<p>订单状态：
\t\t\t\t\t
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t未确认
\t\t\t\t\t</span></p>
\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 69
            if (($this->getAttribute($context["user"], "status", array()) == 1)) {
                // line 70
                echo "\t\t\t\t\t<p>订单状态：
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t已确认
\t\t\t\t\t</span></p>
\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t";
            // line 77
            if (($this->getAttribute($context["user"], "p_status", array()) == 0)) {
                // line 78
                echo "\t\t\t\t\t<p>支付状态：
\t\t\t\t\t
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t未支付
\t\t\t\t\t</span></p>
\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["user"], "p_status", array()) == 1)) {
                // line 85
                echo "\t\t\t\t\t<p>支付状态：
\t\t\t\t\t
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t已支付
\t\t\t\t\t</span></p>
\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"sex\">
\t\t\t\t\t";
            // line 93
            if (($this->getAttribute($context["user"], "status", array()) == 0)) {
                // line 94
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "index/confirm/id/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\"><button class=\"sub\">确认订单</button></a>
\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["user"], "status", array()) == 1)) {
                // line 97
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["user"], "p_status", array()) == 0)) {
                    // line 98
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                    echo "index/zhifu/id/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\"><button class=\"sub\">支付订单</button></a>
\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t</div>                                
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "  
        <div class=\"sec3\">
            <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/dindan/images/4.jpg\"/>
            <h1>您还没有特惠路线</h1>
            <button><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "index/preferential\">立即购买</a></button>
        </div>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "  
    </section>
    <footer></footer>
</div>
</body>
</html>
<script src=\"";
        // line 114
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
        return "querenh.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 114,  222 => 108,  213 => 106,  208 => 104,  204 => 102,  198 => 101,  195 => 100,  187 => 98,  184 => 97,  181 => 96,  173 => 94,  171 => 93,  167 => 91,  159 => 85,  156 => 84,  148 => 78,  146 => 77,  142 => 75,  135 => 70,  133 => 69,  130 => 68,  122 => 62,  120 => 61,  114 => 58,  108 => 55,  102 => 52,  96 => 49,  90 => 46,  84 => 43,  78 => 40,  68 => 36,  59 => 30,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>特惠路线</title>
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
    <section>
\t\t\t<header>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<a href=\"{{url}}index/preferential\"><i class=\"fa fa-angle-left fa-5x\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h1>特惠订单</h1>
\t\t\t\t</div>
\t\t\t</header>    
    {% for user in re %}  
\t\t\t<section>
\t\t\t\t<div class=\"sec\">

\t\t\t\t\t<p>订单号：<span>{{user.num}}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>昵称：<span>{{user.name}}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>手机号：<span>{{user.phone}}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>车辆：<span>{{user.model}}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>线路：<span>{{user.line}}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>时间：<span>{{user.interval}}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>金额：<span style=\"color:red\">{{user.taocan_price}}</span>元</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t{% if user.status == 0 %}
\t\t\t\t\t<p>订单状态：
\t\t\t\t\t
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t未确认
\t\t\t\t\t</span></p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t{% if user.status == 1 %}
\t\t\t\t\t<p>订单状态：
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t已确认
\t\t\t\t\t</span></p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t{% if user.p_status == 0 %}
\t\t\t\t\t<p>支付状态：
\t\t\t\t\t
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t未支付
\t\t\t\t\t</span></p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if user.p_status == 1 %}
\t\t\t\t\t<p>支付状态：
\t\t\t\t\t
\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t已支付
\t\t\t\t\t</span></p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"sex\">
\t\t\t\t\t{% if user.status == 0 %}
\t\t\t\t\t<a href=\"{{url}}index/confirm/id/{{user.id}}\"><button class=\"sub\">确认订单</button></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if user.status == 1 %}
\t\t\t\t\t{% if user.p_status == 0 %}
\t\t\t\t\t<a href=\"{{url}}index/zhifu/id/{{user.id}}\"><button class=\"sub\">支付订单</button></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>                                
    {% else %}  
        <div class=\"sec3\">
            <img src=\"{{url}}public/dindan/images/4.jpg\"/>
            <h1>您还没有特惠路线</h1>
            <button><a href=\"{{url}}index/preferential\">立即购买</a></button>
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
