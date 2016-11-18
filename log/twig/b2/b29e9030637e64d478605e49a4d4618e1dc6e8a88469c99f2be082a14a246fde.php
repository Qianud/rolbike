<?php

/* h-login.html */
class __TwigTemplate_3d746b11922df2172282d7214af1bbdd4484e5e4a3eeb04b4126f0d6d0bcce43 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>实名认证</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/renzheng.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
    #button
    {
    width: 100%;
    height: 4.4rem;
    background: #46c68b;
    color: white;
    text-align: center;
    border: none;
    border-radius: 1rem;
    font-size: 1.6rem;
    font-weight: bold;        
    }
    </style>
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"kuaizhuce.html\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>实名认证</h1></a></div>
    </header>
    <section>
    <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/descadd\" method=\"post\" onsubmit=\"return ti()\">
        <div class=\"sec1\">
            <div class=\"sec\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/img/B2login/images/3.png\"/>&nbsp
                <p id=\"na\" style=\"font-size: 15px;\">姓&nbsp名</p><div class=\"left\"><input type=\"text\" name=\"name\" placeholder=\"请输入您的真实姓名\" id=\"name\" onblur=\"fun6(this)\"/></div>
            </div>
            <div class=\"sec\">
                <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/1.png\"/>&nbsp
                <p id=\"ca\" style=\"font-size: 15px\">身份证号 </p><div class=\"left\"><input type=\"text\" id=\"card\" name=\"card_id\" placeholder=\"请输入您的身份证号\" onblur=\"fun2(this)\"/></div>

            </div>

        </div>
                <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</span>
        <div class=\"sec2\">
            <input id=\"button\" type=\"submit\" value=\"确定\">
        </div>
        </form>
    </section>

</div>
</body>
</html>
<script type=\"text/javascript\">
\$(function()
{   var data=\"";
        // line 57
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
        function fun6(obj6){
            var name=document.getElementById('name')
            var na=document.getElementById('na')
            var r_name=/^([\\u4e00-\\u9fa5]){2,7}\$/
            if(r_name.test(name.value)){
                na.style.color=\"#000000\";                
                return true;
            }else{
                na.style.color=\"red\";
                return false;
            }
        }
        function fun2(obj2){
            var card=document.getElementById('card')
            var ca=document.getElementById('ca')
            var r_name=/^(\\d{15}\$|^\\d{18}\$|^\\d{17}(\\d|X|x))\$/ 
            if(r_name.test(card.value)){
                ca.style.color=\"#000000\";
                return true;
            }else{
                ca.style.color=\"red\";        
                return false;
            }
        }


    function ti(){
        if(fun6()&fun2()){
            return true;
        }else{
            return false;
        }
    }  

</script>";
    }

    public function getTemplateName()
    {
        return "h-login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 57,  80 => 45,  71 => 39,  64 => 35,  58 => 32,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>实名认证</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/renzheng.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
    #button
    {
    width: 100%;
    height: 4.4rem;
    background: #46c68b;
    color: white;
    text-align: center;
    border: none;
    border-radius: 1rem;
    font-size: 1.6rem;
    font-weight: bold;        
    }
    </style>
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"kuaizhuce.html\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>实名认证</h1></a></div>
    </header>
    <section>
    <form action=\"{{url}}index/descadd\" method=\"post\" onsubmit=\"return ti()\">
        <div class=\"sec1\">
            <div class=\"sec\">
                <img src=\"{{url}}/public/img/B2login/images/3.png\"/>&nbsp
                <p id=\"na\" style=\"font-size: 15px;\">姓&nbsp名</p><div class=\"left\"><input type=\"text\" name=\"name\" placeholder=\"请输入您的真实姓名\" id=\"name\" onblur=\"fun6(this)\"/></div>
            </div>
            <div class=\"sec\">
                <img src=\"{{url}}public/img/B2login/images/1.png\"/>&nbsp
                <p id=\"ca\" style=\"font-size: 15px\">身份证号 </p><div class=\"left\"><input type=\"text\" id=\"card\" name=\"card_id\" placeholder=\"请输入您的身份证号\" onblur=\"fun2(this)\"/></div>

            </div>

        </div>
                <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>{{data}}</span>
        <div class=\"sec2\">
            <input id=\"button\" type=\"submit\" value=\"确定\">
        </div>
        </form>
    </section>

</div>
</body>
</html>
<script type=\"text/javascript\">
\$(function()
{   var data=\"{{data}}\";
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
        function fun6(obj6){
            var name=document.getElementById('name')
            var na=document.getElementById('na')
            var r_name=/^([\\u4e00-\\u9fa5]){2,7}\$/
            if(r_name.test(name.value)){
                na.style.color=\"#000000\";                
                return true;
            }else{
                na.style.color=\"red\";
                return false;
            }
        }
        function fun2(obj2){
            var card=document.getElementById('card')
            var ca=document.getElementById('ca')
            var r_name=/^(\\d{15}\$|^\\d{18}\$|^\\d{17}(\\d|X|x))\$/ 
            if(r_name.test(card.value)){
                ca.style.color=\"#000000\";
                return true;
            }else{
                ca.style.color=\"red\";        
                return false;
            }
        }


    function ti(){
        if(fun6()&fun2()){
            return true;
        }else{
            return false;
        }
    }  

</script>";
    }
}
