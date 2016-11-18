<?php

/* layout.html */
class __TwigTemplate_2ccfc04d14d3bd4ca01a043578902f2115999a383fa81154f619ac2ae0de9091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- 引入 jQuery Mobile 样式 -->
<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css\">

<!-- 引入 jQuery 库 -->
<script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>

<!-- 引入 jQuery Mobile 库 -->
<script src=\"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
\t<body>
\t<div data-role=\"page\">
\t\t<header>
\t\t</header>
\t\t<content>
\t\t\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "\t\t</content>
\t\t<footer>
  <div class=\"footer\" data-role=\"footer\">
  <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/showlist\" target=\"_top\"  class=\"ui-btn ui-icon-plus ui-btn-icon-left\">列表</a>
  <a href=\"#\" class=\"ui-btn ui-icon-plus ui-btn-icon-left\">……</a>

";
        // line 27
        if ( !array_key_exists("var", $context)) {
            // line 28
            echo "  <a href=\"#\" class=\"ui-btn ui-icon-plus ui-btn-icon-left\">个人中心</a>
";
        }
        // line 30
        echo "  </div>
\t\t</footer>
</div> \t
\t</body>
</html>
<style>
    .footer{ left:0px; position:fixed; width:100%;background-color:#f00; color:#FFF; text-align:center; font-size:18px; font-weight:bold; bottom:0px;}
</style>

";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t\t\t";
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
        return array (  75 => 20,  72 => 19,  59 => 30,  55 => 28,  53 => 27,  47 => 24,  42 => 21,  40 => 19,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- 引入 jQuery Mobile 样式 -->
<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css\">

<!-- 引入 jQuery 库 -->
<script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>

<!-- 引入 jQuery Mobile 库 -->
<script src=\"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
\t<body>
\t<div data-role=\"page\">
\t\t<header>
\t\t</header>
\t\t<content>
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t</content>
\t\t<footer>
  <div class=\"footer\" data-role=\"footer\">
  <a href=\"{{ url }}index/showlist\" target=\"_top\"  class=\"ui-btn ui-icon-plus ui-btn-icon-left\">列表</a>
  <a href=\"#\" class=\"ui-btn ui-icon-plus ui-btn-icon-left\">……</a>

{% if var is not defined %}
  <a href=\"#\" class=\"ui-btn ui-icon-plus ui-btn-icon-left\">个人中心</a>
{% endif %}
  </div>
\t\t</footer>
</div> \t
\t</body>
</html>
<style>
    .footer{ left:0px; position:fixed; width:100%;background-color:#f00; color:#FFF; text-align:center; font-size:18px; font-weight:bold; bottom:0px;}
</style>

";
    }
}
