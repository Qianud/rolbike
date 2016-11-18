<?php

/* showone.html */
class __TwigTemplate_ad61e51d5135bc95294b1bcea10d57ce45e0f98a951216d19a0d0340f94c03d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "showone.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<style>
 p{text-indent:1cm}
</style>
  <div data-role=\"header\">
 <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/showlist\" target=\"_top\" class=\"ui-btn ui-icon-back ui-btn-icon-notext\">返回按钮</a>
 <a href=\"#\" class=\"ui-btn ui-icon-arrow-r ui-btn-icon-notext\">右边箭头图标</a>
  <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "title", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "date", array()), "html", null, true);
        echo "</h1>
  </div>
  <p>&nbsp";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "content", array()), "html", null, true);
        echo "</p>
  <div data-role=\"main\"  class=\"ui-content\">
    <ol id=\"title\" data-role=\"listview\">
    </ol>
  </div>
";
    }

    public function getTemplateName()
    {
        return "showone.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  42 => 9,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<style>
 p{text-indent:1cm}
</style>
  <div data-role=\"header\">
 <a href=\"{{url}}index/showlist\" target=\"_top\" class=\"ui-btn ui-icon-back ui-btn-icon-notext\">返回按钮</a>
 <a href=\"#\" class=\"ui-btn ui-icon-arrow-r ui-btn-icon-notext\">右边箭头图标</a>
  <h1>{{ data[0].title }}-{{data[0].date}}</h1>
  </div>
  <p>&nbsp{{ data[0].content }}</p>
  <div data-role=\"main\"  class=\"ui-content\">
    <ol id=\"title\" data-role=\"listview\">
    </ol>
  </div>
{% endblock %}";
    }
}
