<?php

/* layout.html */
class __TwigTemplate_91213b65237eb8777807d2e3e8501e89911065b5c818555cb5e0d243d3a67d8b extends Twig_Template
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
    <title>顺达注册</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/B2login.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/jquery-1.9.1.min.js\"></script>
    <style>
    #btn{
    position: absolute;
    top: 0.7rem;
    right: 0.8rem;
    width: 8.5rem;
    height: 2.5rem;
    background: #46c68b;
    border-radius: 1rem;
    padding-right: 12rem;
    border: none;
    outline: none;
    color: #e7f4e7;
    font-weight: 600;
    }
    #lay
    {
    width: 100%;
    height: 4rem;
    background: #46c68b;
    border-radius: 0.5rem;
    color: #e7f4e7;
    border: none;
    outline: none;
    font-size: 1.4rem;
    letter-spacing: 1rem;
    font-weight: 600;        
    }
    #p
    {
    width: 100%;
    height: 4rem;
    background: #46c68b;
    border-radius: 0.5rem;
    color: #e7f4e7;
    border: none;
    outline: none;
    font-size: 2rem;
    letter-spacing: 1rem;
    font-weight: 600;       
    }
    </style>
</head>
<body>
<div class=\"wrap\">
    <header>
        <a href=\"#\">
            <dl>
                <dt><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03.png\"/></dt>
                <dd><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\" style=\"color:#46c68b\">关闭</a></dd>
            </dl>
        </a>
    </header>
    <form action=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/register\" method=\"post\" onsubmit=\"return ti()\">
    <section>
        <div class=\"sec1\">
            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/h-login-img1.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"请输入您的手机号\" onblur=\"fun6(this)\"/>
            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03_03.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"password\" id=\"pdw\" name=\"pdw\"  placeholder=\"请输入密码\" onblur=\"fun2(this)\"/>
            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03_03.png\"/>
        </div>        
        <div class=\"sec2\">
            <input type=\"text\" name=\"yan\" id=\"yan\"  placeholder=\"请输入短信验证码\" onblur=\"fun3(this)\"/>
            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03_07.png\"/>
            <input type=\"button\" id=\"btn\" value=\"获取验证码\" onclick=\"settime(this)\"/> 
        </div>
        <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</span>
        <div class=\"sec3\">
<input type=\"submit\" id=\"lay\" value=\"注册\"/>
        </div>
         
    </section>
    </form>
</div>
</body>
</html>
<script type=\"text/javascript\">
\$(function()
{   var data=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "\";
    if(data!=\"\")
    {
    var a=setInterval(function(){
        \$(\"#s\").fadeTo(\"slow\",0.0);\$(\"#s\").fadeTo(\"slow\",0.0);
    },1000
    );  
j
    }
    else
    {
        \$(\"#s\").css(\"display\",\"none\")
    }
    
})
\$(\"#btn\").click(function()
{
            var url=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/aout\";
            var phone=\$(\"input[name=phone]\").val();
            if(phone==\"\")
            {
                alert(\"手机几号不能为空\")
            }
            else
            {
                \$.post(url,function(msg)
                {
                   alert(msg);
                })              
            }

})

    function duna(data,phone)
    {
var url=\"http://api.k780.com:88/?app=sms.send&tempid=50821&param=usernm%3Dadmin%26code%3D\"+data+\"&phone=\"+phone+\"&appkey=19314&sign=1daff7a177f0615423e6e66ed09cf1d5&format=json&jsoncallback=?\";     
         \$.getJSON(url,function(msg)
         {
         })
    }


var countdown=10;
function settime(val) {
    var phone=document.getElementById('phone').value
    if(phone!=\"\")
    {
    if (countdown == 0 ) { 
        val.removeAttribute(\"disabled\");    
        val.value=\"获取验证码\";
        countdown=10;
        document.execCommand(\"stop\")
        exit;  
    } else { 
        val.setAttribute(\"disabled\", true); 
        val.value=\"重新发送(\" + countdown + \")\"; 
        countdown--; 
    } 
    t=setTimeout(function() { 
    settime(val) 
    },1000) 
    }
} 


        function fun6(obj6){
            var phone=document.getElementById('phone')
            var r_name=/^1[3,5,8]\\d{9}\$/
            if(r_name.test(phone.value)){
                phone.style.border=\"1px #e7f4e7 solid\";                
                return true;
            }else{
                phone.style.border=\"1px red solid\";
                return false;
            }
        }
        function fun2(obj2){
            var pdw=document.getElementById('pdw')
            var r_name=/^\\w{6}/ 
            if(r_name.test(pdw.value)){
                pdw.style.border=\"1px #e7f4e7 solid\";
                return true;
            }else{
                pdw.style.border=\"1px red solid\";        
                return false;
            }
        }

                function fun3(obj3){
            var yan=document.getElementById('yan')
            if(yan.value!=\"\"){
                yan.style.border=\"1px #e7f4e7 solid\";
                return true;
            }else{
                yan.style.border=\"1px red solid\";        
                return false;
            }
        }


    function ti(){
        if(fun6()&fun2()&fun3()){
            return true;
        }else{
            return false;
        }
    }        
</script> ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 110,  143 => 93,  128 => 81,  122 => 78,  115 => 74,  108 => 70,  101 => 66,  95 => 63,  88 => 59,  84 => 58,  32 => 9,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>顺达注册</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/B2login.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <script src=\"{{url}}public/js/jquery-1.9.1.min.js\"></script>
    <style>
    #btn{
    position: absolute;
    top: 0.7rem;
    right: 0.8rem;
    width: 8.5rem;
    height: 2.5rem;
    background: #46c68b;
    border-radius: 1rem;
    padding-right: 12rem;
    border: none;
    outline: none;
    color: #e7f4e7;
    font-weight: 600;
    }
    #lay
    {
    width: 100%;
    height: 4rem;
    background: #46c68b;
    border-radius: 0.5rem;
    color: #e7f4e7;
    border: none;
    outline: none;
    font-size: 1.4rem;
    letter-spacing: 1rem;
    font-weight: 600;        
    }
    #p
    {
    width: 100%;
    height: 4rem;
    background: #46c68b;
    border-radius: 0.5rem;
    color: #e7f4e7;
    border: none;
    outline: none;
    font-size: 2rem;
    letter-spacing: 1rem;
    font-weight: 600;       
    }
    </style>
</head>
<body>
<div class=\"wrap\">
    <header>
        <a href=\"#\">
            <dl>
                <dt><img src=\"{{url}}public/img/B2login/images/B2登录_03.png\"/></dt>
                <dd><a href=\"{{url}}index/index\" style=\"color:#46c68b\">关闭</a></dd>
            </dl>
        </a>
    </header>
    <form action=\"{{url}}index/register\" method=\"post\" onsubmit=\"return ti()\">
    <section>
        <div class=\"sec1\">
            <img src=\"{{url}}public/img/B2login/images/h-login-img1.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"请输入您的手机号\" onblur=\"fun6(this)\"/>
            <img src=\"{{url}}public/img/B2login/images/B2登录_03_03.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"password\" id=\"pdw\" name=\"pdw\"  placeholder=\"请输入密码\" onblur=\"fun2(this)\"/>
            <img src=\"{{url}}public/img/B2login/images/B2登录_03_03.png\"/>
        </div>        
        <div class=\"sec2\">
            <input type=\"text\" name=\"yan\" id=\"yan\"  placeholder=\"请输入短信验证码\" onblur=\"fun3(this)\"/>
            <img src=\"{{url}}public/img/B2login/images/B2登录_03_07.png\"/>
            <input type=\"button\" id=\"btn\" value=\"获取验证码\" onclick=\"settime(this)\"/> 
        </div>
        <span id=\"s\" style='display:block;margin-left:40%;font-size: 1.4rem; padding-top:15px'>{{data}}</span>
        <div class=\"sec3\">
<input type=\"submit\" id=\"lay\" value=\"注册\"/>
        </div>
         
    </section>
    </form>
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
j
    }
    else
    {
        \$(\"#s\").css(\"display\",\"none\")
    }
    
})
\$(\"#btn\").click(function()
{
            var url=\"{{url}}index/aout\";
            var phone=\$(\"input[name=phone]\").val();
            if(phone==\"\")
            {
                alert(\"手机几号不能为空\")
            }
            else
            {
                \$.post(url,function(msg)
                {
                   alert(msg);
                })              
            }

})

    function duna(data,phone)
    {
var url=\"http://api.k780.com:88/?app=sms.send&tempid=50821&param=usernm%3Dadmin%26code%3D\"+data+\"&phone=\"+phone+\"&appkey=19314&sign=1daff7a177f0615423e6e66ed09cf1d5&format=json&jsoncallback=?\";     
         \$.getJSON(url,function(msg)
         {
         })
    }


var countdown=10;
function settime(val) {
    var phone=document.getElementById('phone').value
    if(phone!=\"\")
    {
    if (countdown == 0 ) { 
        val.removeAttribute(\"disabled\");    
        val.value=\"获取验证码\";
        countdown=10;
        document.execCommand(\"stop\")
        exit;  
    } else { 
        val.setAttribute(\"disabled\", true); 
        val.value=\"重新发送(\" + countdown + \")\"; 
        countdown--; 
    } 
    t=setTimeout(function() { 
    settime(val) 
    },1000) 
    }
} 


        function fun6(obj6){
            var phone=document.getElementById('phone')
            var r_name=/^1[3,5,8]\\d{9}\$/
            if(r_name.test(phone.value)){
                phone.style.border=\"1px #e7f4e7 solid\";                
                return true;
            }else{
                phone.style.border=\"1px red solid\";
                return false;
            }
        }
        function fun2(obj2){
            var pdw=document.getElementById('pdw')
            var r_name=/^\\w{6}/ 
            if(r_name.test(pdw.value)){
                pdw.style.border=\"1px #e7f4e7 solid\";
                return true;
            }else{
                pdw.style.border=\"1px red solid\";        
                return false;
            }
        }

                function fun3(obj3){
            var yan=document.getElementById('yan')
            if(yan.value!=\"\"){
                yan.style.border=\"1px #e7f4e7 solid\";
                return true;
            }else{
                yan.style.border=\"1px red solid\";        
                return false;
            }
        }


    function ti(){
        if(fun6()&fun2()&fun3()){
            return true;
        }else{
            return false;
        }
    }        
</script> ";
    }
}
