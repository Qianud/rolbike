<?php

/* gerenziliao.html */
class __TwigTemplate_0c49351bffbd7c7f3beec2177d436fc9c156daea4bdcd681e4056d74255fca02 extends Twig_Template
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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/guanliqu.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t</head>
\t<body>
\t\t<div class=\"wrap\">
\t\t\t<header>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\"><i class=\"fa fa-angle-left fa-5x\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h1>个人资料</h1>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>姓名：";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>证件编号：";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "card_id", array(), "array"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>手机号：";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "phone", array(), "array"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>认证类型：二代身份证</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>注册时间：";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "datatime", array(), "array"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "gerenziliao.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  64 => 29,  58 => 26,  52 => 23,  41 => 15,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/guanliqu.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t</head>
\t<body>
\t\t<div class=\"wrap\">
\t\t\t<header>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<a href=\"{{url}}index/geren\"><i class=\"fa fa-angle-left fa-5x\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h1>个人资料</h1>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>姓名：{{ data[0]['name'] }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>证件编号：{{ data[0]['card_id'] }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>手机号：{{ data[0]['phone'] }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>认证类型：二代身份证</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sec\">
\t\t\t\t\t<p>注册时间：{{ data[0]['datatime'] }}</p>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</body>
</html>
";
    }
}
