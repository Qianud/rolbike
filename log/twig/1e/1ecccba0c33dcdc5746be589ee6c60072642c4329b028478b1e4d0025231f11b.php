<?php

/* new_file.html */
class __TwigTemplate_5c49ad45548ceb631b87cb14e8790cfd205e15eac18cfbf01b2fe686080c86e0 extends Twig_Template
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
\t\t<meta charset=\"utf-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\t
\t\t<title></title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/xiangqing/css/font-awesome.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/xiangqing/css/style.css\"/>
\t</head>
\t<body>
\t\t<div class=\"wrap\">
\t\t\t<header>
\t\t\t\t<div class=\"h-center\">
\t\t\t\t\t确认并支付
\t\t\t\t</div>
\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/xiangqing/img/img__03.gif\"/>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["re"]) ? $context["re"] : null), "0", array(), "array"), "img_url", array(), "array"), "html", null, true);
        echo "\"/></dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["re"]) ? $context["re"] : null), "0", array(), "array"), "model", array(), "array"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t   时间：";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["re"]) ? $context["re"] : null), "0", array(), "array"), "interval", array(), "array"), "html", null, true);
        echo " <br> 
\t\t\t\t\t\t\t   路线：";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["re"]) ? $context["re"] : null), "0", array(), "array"), "line", array(), "array"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<span class=\"danjia\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["re"]) ? $context["re"] : null), "0", array(), "array"), "taocan_price", array(), "array"), "html", null, true);
        echo "元</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<div class=\"box-right\">
\t\t\t\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/quxiao/id/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["re"]) ? $context["re"] : null), "0", array(), "array"), "num", array(), "array"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/xiangqing/img/1.png\" alt=\"\"></a>
\t\t\t\t\t\t<p><button>支付</button></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</body>
\t\t";
    }

    public function getTemplateName()
    {
        return "new_file.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  73 => 30,  68 => 28,  64 => 27,  59 => 25,  52 => 23,  43 => 17,  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\t
\t\t<title></title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/xiangqing/css/font-awesome.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/xiangqing/css/style.css\"/>
\t</head>
\t<body>
\t\t<div class=\"wrap\">
\t\t\t<header>
\t\t\t\t<div class=\"h-center\">
\t\t\t\t\t确认并支付
\t\t\t\t</div>
\t\t\t\t<img src=\"{{url}}public/xiangqing/img/img__03.gif\"/>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><img src=\"{{url}}public/showye/images/scenics/{{re['0']['img_url']}}\"/></dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<h1>{{re['0']['model']}}</h1>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t   时间：{{re['0']['interval']}} <br> 
\t\t\t\t\t\t\t   路线：{{re['0']['line']}}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<span class=\"danjia\">{{re['0']['taocan_price']}}元</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<div class=\"box-right\">
\t\t\t\t\t\t<a href=\"{{url}}index/quxiao/id/{{re['0']['num']}}\"><img src=\"{{url}}public/xiangqing/img/1.png\" alt=\"\"></a>
\t\t\t\t\t\t<p><button>支付</button></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</body>
\t\t";
    }
}
