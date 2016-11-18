<?php

/* add.html */
class __TwigTemplate_e38fed9f0448d970a4424660880bf8d6b77dce86c425deafa35b40cc23a4ca17 extends Twig_Template
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
    <title>个人中心</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/zhongxin.css\"/>
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/zhongxin/pic_1.jpg\"/><p>关闭</p></a></div>
        <div class=\"center\">个人中心</div>
        <div class=\"right\"></div>
    </header>
    <section>
        <div class=\"main\">   <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/h-login-img1.png\"/></div>
        <div class=\"main1\">
            <a href=\"\"><h1>个人账户</h1><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/zhongxin/pic_4.jpg\"/></a>
        </div>
        <div class=\"main2\">
            <a href=\"\"><h1>设置</h1><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/zhongxin/pic_4.jpg\"/></a>
        </div>
    </section>
    <footer>
        <dl>
            <dt><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/zhongxin/pic_5.jpg\"/></dt>
            <dd>首页</dd>
        </dl>
        <dl>
            <dt><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/zhongxin/pic_51.jpg\"/></dt>
            <dd><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/my\">我的订单</a></dd>
        </dl>
        <dl>
            <dt><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/zhongxin/pic_52.jpg\"/></dt>
            <dd>我的</dd>
        </dl>
    </footer>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  74 => 33,  70 => 32,  63 => 28,  55 => 23,  49 => 20,  44 => 18,  36 => 13,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>个人中心</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/zhongxin.css\"/>
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"\"><img src=\"{{url}}public/img/zhongxin/pic_1.jpg\"/><p>关闭</p></a></div>
        <div class=\"center\">个人中心</div>
        <div class=\"right\"></div>
    </header>
    <section>
        <div class=\"main\">   <img src=\"{{url}}public/img/B2login/images/h-login-img1.png\"/></div>
        <div class=\"main1\">
            <a href=\"\"><h1>个人账户</h1><img src=\"{{url}}public/img/zhongxin/pic_4.jpg\"/></a>
        </div>
        <div class=\"main2\">
            <a href=\"\"><h1>设置</h1><img src=\"{{url}}public/img/zhongxin/pic_4.jpg\"/></a>
        </div>
    </section>
    <footer>
        <dl>
            <dt><img src=\"{{url}}public/img/zhongxin/pic_5.jpg\"/></dt>
            <dd>首页</dd>
        </dl>
        <dl>
            <dt><img src=\"{{url}}public/img/zhongxin/pic_51.jpg\"/></dt>
            <dd><a href=\"{{url}}index/my\">我的订单</a></dd>
        </dl>
        <dl>
            <dt><img src=\"{{url}}public/img/zhongxin/pic_52.jpg\"/></dt>
            <dd>我的</dd>
        </dl>
    </footer>
</div>
</body>
</html>";
    }
}
