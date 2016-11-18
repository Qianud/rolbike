<?php

/* shengchen.html */
class __TwigTemplate_0b911f7987444304a383c6718788f5a719610e45cce4cb6d1fd05b760dd4ca90 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/cunjian.css\" />
</head>
<body>
<div class=\"wrap-weba\">
    <header>
        <a href=\"#\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/确认收货/images/B7-05-02在线状态下柜门未弹开页面_03.png\" alt=\"\" /></a>
        <a href=\"#\"><h1>关闭</h1></a>
        <h2>提交成功</h2>
    </header>
    <section>
        <p><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/QQ图片20161013134927.png\" alt=\"\" /></p>
        <p style=\"margin-top: 30px;\">您的订单以生成，请查看并支付！</p>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/xiangqing\"><button class=\"queren\">查看并支付</button></a>
    </section>
    <footer></footer>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "shengchen.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  44 => 18,  36 => 13,  28 => 8,  19 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{url}}public/css/cunjian.css\" />
</head>
<body>
<div class=\"wrap-weba\">
    <header>
        <a href=\"#\"><img src=\"{{url}}public/img/确认收货/images/B7-05-02在线状态下柜门未弹开页面_03.png\" alt=\"\" /></a>
        <a href=\"#\"><h1>关闭</h1></a>
        <h2>提交成功</h2>
    </header>
    <section>
        <p><img src=\"{{url}}public/QQ图片20161013134927.png\" alt=\"\" /></p>
        <p style=\"margin-top: 30px;\">您的订单以生成，请查看并支付！</p>
        <a href=\"{{url}}index/xiangqing\"><button class=\"queren\">查看并支付</button></a>
    </section>
    <footer></footer>
</div>
</body>
</html>";
    }
}
