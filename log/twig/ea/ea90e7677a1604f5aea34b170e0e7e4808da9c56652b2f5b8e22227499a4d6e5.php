<?php

/* tehui.html */
class __TwigTemplate_d4c2570dcf4fd950c6cdf779e06f6b4143e889d9737bb3728e626ab2bca7de27 extends Twig_Template
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
<title>预约租车</title>
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

<style>
    
    .tu{
        position:relative; 
        width:12.42rem; 
        height:5.5rem; 
        overflow:hidden;
        border-bottom: 1px solid #fff;
    }
    
    .fb:nth-child(odd){ width:12.42rem; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;margin-top: 0.5rem}
    .fb:nth-child(even){ width:12.42rem; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb:nth-child(odd){ width:12.42rem;; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .fb:nth-child(even){ width:12.42rem;; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb-lt{ width:5.9rem; height:5rem; margin:0 auto;}
    .fb-lt img{ width:5.9rem; height:3.8rem; display:block;}
    .fb-lt p{}
    .fb-lt p.fb-name{ margin-top:0.3rem; font-size:0.48rem;}
    .fb-lt p.price{ margin-top:0.2rem; font-size:0.3rem;}
    .fb-lt p span{ font-size:0.3rem; color:#d7d7d7;}
    .fb-lt p span.discount{ float:left; margin:0.2rem 0 0 0.5rem; color:#f46b29;}
    .fb-lt p span.num{ float:right; margin-right:0.5rem;}
    .fb-lt p span big{ font-size:0.5rem; color:#ff3500;}
    .tijiao
    {
        position:relative; 
        width:12.42rem; 
        height:6.7rem; 
        overflow:hidden; 
    }
    .sub {
        
            width:200px;
            height:35px;
            font-family:楷体_GB2312;
            color:#ffffff;
            line-height:35px;
            background:#8c96a0;
            no-repeat;border:none;
            margin-left: 3.2rem;
            background: -webkit-linear-gradient(top,#42a4e0,#2e88c0);
            background: -moz-linear-gradient(top,#42a4e0,#2e88c0);
            background: linear-gradient(top,#42a4e0,#2e88c0);
    }
    .sub:hover{border-bottom:solid 1px #333;}
    .zhu
    {   
        position:relative; 
        width:12.38rem; 
        height:auto;
        overflow:hidden; 
        border: 1px solid #fff;
        margin-top: 5px;
        font-size:12pt;
    }
    .line
    {
       position:relative; 
        width:12.38rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
          
    }
    .time
    {
        position:relative; 
        width:12.34rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
        margin-top: 5px;

    }

  .zhu h4{
       margin-left: 10px;
  } 
  .zhu input {
       margin-left: 50px;
  }

</style>
</head>

<body>
<div class=\"tu\">
       <div class=\"fb\">
       <div class=\"fb-lt\">
        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/xiuxian0.jpg\">
        <p class=\"fb-name\"><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/affirm\">我的路线</a></p>
    </div>
</div>
</div>
<form action=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/prefer\" method=\"post\">
    <div class=\"zhu\">
        <div class=\"line\" >
           <h4>线路:</h4> 
           ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 116
            echo "            <input type=\"radio\" name=\"route_id\" id=\"line\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "rid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "line", array()), "html", null, true);
            echo "<br>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "        </div>
        <div class=\"time\" >
           <h4>时间:</h4> 
           ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 122
            echo "           <input type=\"radio\" name=\"ti_id\" id=\"time\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "tid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "interval", array()), "html", null, true);
            echo "<br>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </div>
    </div>
    <div class=\"tijoa\">
        <input type=\"submit\" value=\"提交\"  class=\"sub\">
    </div>
</div>
</form>  
<footer>
    <div class=\"foot act\">
        <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
    <div class=\"foot\">
        <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
    <div class=\"foot\">
        <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>
    <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/person/person.html\"><div class=\"foot\">
        <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4.png\">
        <p><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">个人</a></p>
    </div></a>
</footer>    
    
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "tehui.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 146,  229 => 145,  225 => 144,  220 => 142,  216 => 141,  209 => 137,  203 => 134,  199 => 133,  188 => 124,  177 => 122,  173 => 121,  168 => 118,  157 => 116,  153 => 115,  146 => 111,  139 => 107,  135 => 106,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
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
<title>预约租车</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/person.css\">
<script type=\"text/javascript\" src=\"{{url}}public/showye/js/Adaptive.js\"></script>

<style>
    
    .tu{
        position:relative; 
        width:12.42rem; 
        height:5.5rem; 
        overflow:hidden;
        border-bottom: 1px solid #fff;
    }
    
    .fb:nth-child(odd){ width:12.42rem; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;margin-top: 0.5rem}
    .fb:nth-child(even){ width:12.42rem; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb:nth-child(odd){ width:12.42rem;; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .fb:nth-child(even){ width:12.42rem;; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb-lt{ width:5.9rem; height:5rem; margin:0 auto;}
    .fb-lt img{ width:5.9rem; height:3.8rem; display:block;}
    .fb-lt p{}
    .fb-lt p.fb-name{ margin-top:0.3rem; font-size:0.48rem;}
    .fb-lt p.price{ margin-top:0.2rem; font-size:0.3rem;}
    .fb-lt p span{ font-size:0.3rem; color:#d7d7d7;}
    .fb-lt p span.discount{ float:left; margin:0.2rem 0 0 0.5rem; color:#f46b29;}
    .fb-lt p span.num{ float:right; margin-right:0.5rem;}
    .fb-lt p span big{ font-size:0.5rem; color:#ff3500;}
    .tijiao
    {
        position:relative; 
        width:12.42rem; 
        height:6.7rem; 
        overflow:hidden; 
    }
    .sub {
        
            width:200px;
            height:35px;
            font-family:楷体_GB2312;
            color:#ffffff;
            line-height:35px;
            background:#8c96a0;
            no-repeat;border:none;
            margin-left: 3.2rem;
            background: -webkit-linear-gradient(top,#42a4e0,#2e88c0);
            background: -moz-linear-gradient(top,#42a4e0,#2e88c0);
            background: linear-gradient(top,#42a4e0,#2e88c0);
    }
    .sub:hover{border-bottom:solid 1px #333;}
    .zhu
    {   
        position:relative; 
        width:12.38rem; 
        height:auto;
        overflow:hidden; 
        border: 1px solid #fff;
        margin-top: 5px;
        font-size:12pt;
    }
    .line
    {
       position:relative; 
        width:12.38rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
          
    }
    .time
    {
        position:relative; 
        width:12.34rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
        margin-top: 5px;

    }

  .zhu h4{
       margin-left: 10px;
  } 
  .zhu input {
       margin-left: 50px;
  }

</style>
</head>

<body>
<div class=\"tu\">
       <div class=\"fb\">
       <div class=\"fb-lt\">
        <img src=\"{{url}}public/showye/images/scenics/xiuxian0.jpg\">
        <p class=\"fb-name\"><a href=\"{{url}}index/affirm\">我的路线</a></p>
    </div>
</div>
</div>
<form action=\"{{url}}index/prefer\" method=\"post\">
    <div class=\"zhu\">
        <div class=\"line\" >
           <h4>线路:</h4> 
           {% for val in datas %}
            <input type=\"radio\" name=\"route_id\" id=\"line\" value=\"{{val.rid}}\">{{val.line}}<br>
           {% endfor %}
        </div>
        <div class=\"time\" >
           <h4>时间:</h4> 
           {% for val in data %}
           <input type=\"radio\" name=\"ti_id\" id=\"time\" value=\"{{val.tid}}\">{{val.interval}}<br>
           {% endfor %}
        </div>
    </div>
    <div class=\"tijoa\">
        <input type=\"submit\" value=\"提交\"  class=\"sub\">
    </div>
</div>
</form>  
<footer>
    <div class=\"foot act\">
        <img src=\"{{url}}public/showye/images/foot/ft_2.png\">
        <p><a href=\"{{url}}index/index\">首页</a></p>
    </div>
    <div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
    <div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_3.png\">
        <p><a href=\"{{url}}index/dindan\">订单</a></p>
    </div>
    <a href=\"{{url}}public/showye/person/person.html\"><div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_4.png\">
        <p><a href=\"{{url}}index/geren\">个人</a></p>
    </div></a>
</footer>    
    
</body>
</html>
";
    }
}
