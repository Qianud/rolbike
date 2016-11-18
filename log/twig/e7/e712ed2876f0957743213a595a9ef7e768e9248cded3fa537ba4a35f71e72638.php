<?php

/* dindanxiangqing.html */
class __TwigTemplate_be3065bb2d17ad7c007398dc44992d7fdf35224d6286e6cd6bec8343898ee624 extends Twig_Template
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
\t<meta charset=\"UTF-8\" />
\t<title>订单详情</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dingdanxiangqing/css/style.css\" >
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dingdanxiangqing/js/angular.min.js\"></script>
</head>
<body>
\t<div class=\"wrap\">
\t\t<header>
\t\t\t<a href=\"\"><img class=\"img1\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dingdanxiangqing/img/header.png\" alt=\"\" /></a>
\t\t\t<h1>订单详情</h1>
\t\t</header>
\t\t<section>
\t\t\t<div class=\"sec\">
\t\t\t\t<p>您的订单支付时间剩余时间：<span>30:00</span></p>
\t\t\t</div>
\t\t\t<div class=\"sec1\">
\t\t\t\t<p class=\"p\">订单号:123456789</p>
\t\t\t\t<div class=\"se\">
\t\t\t\t\t<div class=\"s-left\">
\t\t\t\t\t\t<img class=\"img2\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dingdanxiangqing/images/se_03.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-right\">
\t\t\t\t\t\t<h2>丰田汉兰达</h2>
\t\t\t\t\t\t<p>自动  舒适 7座</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"se1\">
\t\t\t\t\t<div class=\"s_left\">
\t\t\t\t\t\t<h3>取车时间</h3>
\t\t\t\t\t\t<p>10月11日<span>今天   11:23</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s_right\">
\t\t\t\t\t\t<h3>还车时间</h3>
\t\t\t\t\t\t<p>10月11日<span>今天   11:23</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"a\">
\t\t\t\t\t\t<p>距离<span>2</span>天</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p class=\"se2\">
\t\t\t\t\t取车地点<span>海口美兰国际机场停车场A3区</span>
\t\t\t\t</p>
\t\t\t\t<p class=\"se3\">
\t\t\t\t\t还车地点<span>海口美兰国际机场停车场A3区</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"sec2\">
\t\t\t\t<h1>取车人信息</h1><a href=\"\"><p>编辑</p></a>
\t\t\t</div>
\t\t\t<div class=\"sec3\">
\t\t\t\t<div class=\"left\">姓名</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<input type=\"text\" placeholder=\"请输入您的姓名\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sec3\">
\t\t\t\t<div class=\"left\">手机号</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<input type=\"text\" placeholder=\"请输入您的手机号\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sec3\">
\t\t\t\t<div class=\"left\">身份证号</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<input type=\"text\" placeholder=\"请输入您的身份证号\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<footer>
\t\t\t<div class=\"left\">
\t\t\t\t<p>总结: <span>￥7000</span></p>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t\t<button class=\"but1\">取消订单</button><button class=\"but2\">提交订单</button>
\t\t\t\t
\t\t\t</div>
\t\t</footer>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "dindanxiangqing.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 25,  40 => 14,  32 => 9,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\" />
\t<title>订单详情</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/dingdanxiangqing/css/style.css\" >
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <script type=\"text/javascript\" src=\"{{url}}public/dingdanxiangqing/js/angular.min.js\"></script>
</head>
<body>
\t<div class=\"wrap\">
\t\t<header>
\t\t\t<a href=\"\"><img class=\"img1\" src=\"{{url}}public/dingdanxiangqing/img/header.png\" alt=\"\" /></a>
\t\t\t<h1>订单详情</h1>
\t\t</header>
\t\t<section>
\t\t\t<div class=\"sec\">
\t\t\t\t<p>您的订单支付时间剩余时间：<span>30:00</span></p>
\t\t\t</div>
\t\t\t<div class=\"sec1\">
\t\t\t\t<p class=\"p\">订单号:123456789</p>
\t\t\t\t<div class=\"se\">
\t\t\t\t\t<div class=\"s-left\">
\t\t\t\t\t\t<img class=\"img2\" src=\"{{url}}public/dingdanxiangqing/images/se_03.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-right\">
\t\t\t\t\t\t<h2>丰田汉兰达</h2>
\t\t\t\t\t\t<p>自动  舒适 7座</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"se1\">
\t\t\t\t\t<div class=\"s_left\">
\t\t\t\t\t\t<h3>取车时间</h3>
\t\t\t\t\t\t<p>10月11日<span>今天   11:23</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s_right\">
\t\t\t\t\t\t<h3>还车时间</h3>
\t\t\t\t\t\t<p>10月11日<span>今天   11:23</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"a\">
\t\t\t\t\t\t<p>距离<span>2</span>天</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p class=\"se2\">
\t\t\t\t\t取车地点<span>海口美兰国际机场停车场A3区</span>
\t\t\t\t</p>
\t\t\t\t<p class=\"se3\">
\t\t\t\t\t还车地点<span>海口美兰国际机场停车场A3区</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"sec2\">
\t\t\t\t<h1>取车人信息</h1><a href=\"\"><p>编辑</p></a>
\t\t\t</div>
\t\t\t<div class=\"sec3\">
\t\t\t\t<div class=\"left\">姓名</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<input type=\"text\" placeholder=\"请输入您的姓名\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sec3\">
\t\t\t\t<div class=\"left\">手机号</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<input type=\"text\" placeholder=\"请输入您的手机号\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sec3\">
\t\t\t\t<div class=\"left\">身份证号</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<input type=\"text\" placeholder=\"请输入您的身份证号\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<footer>
\t\t\t<div class=\"left\">
\t\t\t\t<p>总结: <span>￥7000</span></p>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t\t<button class=\"but1\">取消订单</button><button class=\"but2\">提交订单</button>
\t\t\t\t
\t\t\t</div>
\t\t</footer>
\t</div>
</body>
</html>";
    }
}
