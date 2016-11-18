<?php

/* chongzhi.html */
class __TwigTemplate_3b95414cfa4eed92268960274d0a0b2f12d597df225bccd60853ae3e13bbe536 extends Twig_Template
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <title></title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/B2login.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/chongzhizhongxin.css\" />
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/jquery-1.9.1.min.js\"></script>
    <style>
    .sp
    {
        width: 100%;
height: 4.4rem;
border: 0.2rem solid #ebebeb;
padding-left: 2.8rem;
-webkit-box-sizing: border-box;
padding-top: 18px;
    }
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
<div class=\"wrap-weba\">
    <header>
        <a href=\"#\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/确认收货/images/B7-05-02在线状态下柜门未弹开页面_03.png\" alt=\"\" /></a>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\"><h1>关闭</h1></a>
        <h2>充值中心</h2>
    </header>

    <section>
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/确认收货/images/images/B8-01充值中心页面选择充值类型_02.png\" alt=\"\" />
<br/><hr/>
 <form action='";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/desccong' method='post'>
 <tr>
<td>
<input class='sp' type='text' placeholder='请输入充值金额' name='sum_m'/></td>
</tr>
<tr>
<td>
<input class='sp' type='password' placeholder='请输入支付密码' name='pdw'/></td>
</tr>

<tr><td>
<input class='sps' type='submit'  value='支付'/>
</td>
</tr>
 </form>
         <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</span>
    </section>
    <footer></footer>
</div>
</body>
</html>
<script>
    \$(function()
    {
 var data=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "\";
    if(data!=\"\")
    {
    var a=setInterval(function(){
        \$(\"#s\").fadeTo(\"slow\",0.0);\$(\"#s\").fadeTo(\"slow\",0.0);
    },1000
);  
    }
    else
    {
        \$(\"#s\").css(\"display\",\"none\")
    }        
    })
</script>
";
    }

    public function getTemplateName()
    {
        return "chongzhi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 69,  101 => 60,  83 => 45,  78 => 43,  70 => 38,  66 => 37,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title></title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/B2login.css\"/>
    <link rel=\"stylesheet\" href=\"{{url}}public/css/chongzhizhongxin.css\" />
    <script src=\"{{url}}public/js/jquery-1.9.1.min.js\"></script>
    <style>
    .sp
    {
        width: 100%;
height: 4.4rem;
border: 0.2rem solid #ebebeb;
padding-left: 2.8rem;
-webkit-box-sizing: border-box;
padding-top: 18px;
    }
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
<div class=\"wrap-weba\">
    <header>
        <a href=\"#\"><img src=\"{{url}}public/img/确认收货/images/B7-05-02在线状态下柜门未弹开页面_03.png\" alt=\"\" /></a>
        <a href=\"{{url}}index/geren\"><h1>关闭</h1></a>
        <h2>充值中心</h2>
    </header>

    <section>
        <img src=\"{{url}}public/img/确认收货/images/images/B8-01充值中心页面选择充值类型_02.png\" alt=\"\" />
<br/><hr/>
 <form action='{{url}}desc/desccong' method='post'>
 <tr>
<td>
<input class='sp' type='text' placeholder='请输入充值金额' name='sum_m'/></td>
</tr>
<tr>
<td>
<input class='sp' type='password' placeholder='请输入支付密码' name='pdw'/></td>
</tr>

<tr><td>
<input class='sps' type='submit'  value='支付'/>
</td>
</tr>
 </form>
         <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>{{data}}</span>
    </section>
    <footer></footer>
</div>
</body>
</html>
<script>
    \$(function()
    {
 var data=\"{{data}}\";
    if(data!=\"\")
    {
    var a=setInterval(function(){
        \$(\"#s\").fadeTo(\"slow\",0.0);\$(\"#s\").fadeTo(\"slow\",0.0);
    },1000
);  
    }
    else
    {
        \$(\"#s\").css(\"display\",\"none\")
    }        
    })
</script>
";
    }
}
