<?php

/* shengcheng.html */
class __TwigTemplate_67acfe238d720cb9498eebe22c67ab0199f1601047c9bbf4be561ff40fadf08b extends Twig_Template
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
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\"><h1>关闭</h1></a>
        <h2>还车成功</h2>
    </header>
    <section>
        <p><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/QQ图片20161013134927.png\" alt=\"\" /></p>
        <p style=\"margin-top: 30px;\">您退还的车型是：";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "array"), "html", null, true);
        echo "</p>
       <p style=\"margin-top: 30px;\">每分钟：";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hour_price", array(), "array"), "html", null, true);
        echo "元</p>
        <p style=\"margin-top: 30px;\">您耗时：";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "haos", array(), "array"), "html", null, true);
        echo "分钟，共消费";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "xiaofei", array(), "array"), "html", null, true);
        echo "元</p>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\"><button class=\"queren\">确认</button></a>
    </section>
    <footer></footer>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "shengcheng.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  40 => 14,  36 => 13,  28 => 8,  19 => 1,);
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
        <a href=\"{{url}}index/index\"><h1>关闭</h1></a>
        <h2>还车成功</h2>
    </header>
    <section>
        <p><img src=\"{{url}}public/QQ图片20161013134927.png\" alt=\"\" /></p>
        <p style=\"margin-top: 30px;\">您退还的车型是：{{data['model']}}</p>
       <p style=\"margin-top: 30px;\">每分钟：{{data['hour_price']}}元</p>
        <p style=\"margin-top: 30px;\">您耗时：{{data['haos']}}分钟，共消费{{data['xiaofei']}}元</p>
        <a href=\"{{url}}index/geren\"><button class=\"queren\">确认</button></a>
    </section>
    <footer></footer>
</div>
</body>
</html>";
    }
}
