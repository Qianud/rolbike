<?php

/* layout.html */
class __TwigTemplate_bc3c08feca57222aa4e6277af43f2fb93bfa84832fd202fc209cbb66c4c59a32 extends Twig_Template
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
    <title>B2登录</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/B2login.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <a href=\"#\">
            <dl>
                <dt><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03.png\"/></dt>
                <dd>关闭</dd>
            </dl>
        </a>
    </header>
    <section>
        <div class=\"sec1\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/h-login-img1.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"text\" name=\"\" id=\"\" value=\"\" placeholder=\"请输入您的手机号\"/>
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03_03.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"text\" name=\"\" id=\"\" value=\"\" placeholder=\"请输入短信验证码\"/>
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/B2登录_03_07.png\"/>
            <button>获取验证码</button>
        </div>
        <div class=\"sec3\">
            <button><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dl\">登录</a></button>
        </div>
    </section>
</div>
</body>
</html>";
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
        return array (  69 => 34,  62 => 30,  55 => 26,  48 => 22,  38 => 15,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>B2登录</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/B2login.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <a href=\"#\">
            <dl>
                <dt><img src=\"{{url}}public/img/B2login/images/B2登录_03.png\"/></dt>
                <dd>关闭</dd>
            </dl>
        </a>
    </header>
    <section>
        <div class=\"sec1\">
            <img src=\"{{url}}public/img/B2login/images/h-login-img1.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"text\" name=\"\" id=\"\" value=\"\" placeholder=\"请输入您的手机号\"/>
            <img src=\"{{url}}public/img/B2login/images/B2登录_03_03.png\"/>
        </div>
        <div class=\"sec2\">
            <input type=\"text\" name=\"\" id=\"\" value=\"\" placeholder=\"请输入短信验证码\"/>
            <img src=\"{{url}}public/img/B2login/images/B2登录_03_07.png\"/>
            <button>获取验证码</button>
        </div>
        <div class=\"sec3\">
            <button><a href=\"{{url}}index/dl\">登录</a></button>
        </div>
    </section>
</div>
</body>
</html>";
    }
}
