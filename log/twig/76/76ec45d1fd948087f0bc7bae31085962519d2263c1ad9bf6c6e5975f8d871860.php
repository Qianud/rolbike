<?php

/* cash.html */
class __TwigTemplate_5d96c4a729eb8fcd15a2d312b9e83804968fe48798bd0e91068151b22c2d98eb extends Twig_Template
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
</head>
<body>
<div class=\"wrap-weba\">
    <header>
        <a href=\"#\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/确认收货/images/B7-05-02在线状态下柜门未弹开页面_03.png\" alt=\"\" /></a>
        <a href=\"#\"><h1>关闭</h1></a>
        <h2>充值中心</h2>
    </header>

    <section>
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/确认收货/images/images/B8-01充值中心页面选择充值类型_02.png\" alt=\"\" />

        <p style=\"font-size: 25px;text-align: center;padding-top: 20px; margin-top: 10px;\"> 充值押金:229￥</p><br/><hr/>
        <p align=\"center\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/11594L235-0.png\" style=\"height: 100px; width: 200px;\" alt=\"\"/></p><br/><hr/>
        <p align=\"center\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/QQ图片20161012191651.png\" style=\"height: 100px; width: 100px; margin-top: 10px;\" alt=\"\"/></p>
        <br/><p align=\"center\" style=\"font-size: 20px;\">请识别图中二维码完成微信支付,并截图!</p>
        <button>支付</button>
    </section>
    <footer></footer>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "cash.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  55 => 23,  49 => 20,  40 => 14,  32 => 9,  28 => 8,  19 => 1,);
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
</head>
<body>
<div class=\"wrap-weba\">
    <header>
        <a href=\"#\"><img src=\"{{url}}public/img/确认收货/images/B7-05-02在线状态下柜门未弹开页面_03.png\" alt=\"\" /></a>
        <a href=\"#\"><h1>关闭</h1></a>
        <h2>充值中心</h2>
    </header>

    <section>
        <img src=\"{{url}}public/img/确认收货/images/images/B8-01充值中心页面选择充值类型_02.png\" alt=\"\" />

        <p style=\"font-size: 25px;text-align: center;padding-top: 20px; margin-top: 10px;\"> 充值押金:229￥</p><br/><hr/>
        <p align=\"center\"><img src=\"{{url}}public/11594L235-0.png\" style=\"height: 100px; width: 200px;\" alt=\"\"/></p><br/><hr/>
        <p align=\"center\"><img src=\"{{url}}public/QQ图片20161012191651.png\" style=\"height: 100px; width: 100px; margin-top: 10px;\" alt=\"\"/></p>
        <br/><p align=\"center\" style=\"font-size: 20px;\">请识别图中二维码完成微信支付,并截图!</p>
        <button>支付</button>
    </section>
    <footer></footer>
</div>
</body>
</html>
";
    }
}
