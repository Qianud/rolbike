<?php

/* showlist.html */
class __TwigTemplate_06bcdc71ae69724783ae2aa77b2339c84808543c3ea2da9b910d257386585ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "showlist.html", 1);
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
        echo "  <div data-role=\"header\">
 <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\" class=\"ui-btn ui-icon-back ui-btn-icon-notext\">返回按钮</a>
  <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\" class=\"ui-btn ui-icon-home ui-btn-icon-notext\">主页按钮</a>
  <h1>列表页</h1>
  </div>

  <div data-role=\"main\"  class=\"ui-content\">
    <ol id=\"title\" data-role=\"listview\">
    </ol>
  </div>
  <script>
  \t\$(function()
  \t{
  \t\tvar url=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/lists\";
  \t\t\$.post(url,function(msg)
  \t\t{
  \t\t\tconsole.log(msg);
  \t\t\tvar str=\"\";
  \t\t\tfor(var i=0;i<msg.length;i++)
  \t\t\t{
  \t\t\t\tstr +='<li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/showone/id/'+msg[i].id+'\" target=\"_top\" >'+msg[i].title+'</a></li>';
  \t\t\t}
  \t\t\t\$(\"#title\").html(str)
  \t\t},'json')
  \t})
  </script>
";
    }

    public function getTemplateName()
    {
        return "showlist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  52 => 16,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
  <div data-role=\"header\">
 <a href=\"{{url}}index/index\" class=\"ui-btn ui-icon-back ui-btn-icon-notext\">返回按钮</a>
  <a href=\"{{url}}index/index\" class=\"ui-btn ui-icon-home ui-btn-icon-notext\">主页按钮</a>
  <h1>列表页</h1>
  </div>

  <div data-role=\"main\"  class=\"ui-content\">
    <ol id=\"title\" data-role=\"listview\">
    </ol>
  </div>
  <script>
  \t\$(function()
  \t{
  \t\tvar url=\"{{ url }}index/lists\";
  \t\t\$.post(url,function(msg)
  \t\t{
  \t\t\tconsole.log(msg);
  \t\t\tvar str=\"\";
  \t\t\tfor(var i=0;i<msg.length;i++)
  \t\t\t{
  \t\t\t\tstr +='<li><a href=\"{{ url }}index/showone/id/'+msg[i].id+'\" target=\"_top\" >'+msg[i].title+'</a></li>';
  \t\t\t}
  \t\t\t\$(\"#title\").html(str)
  \t\t},'json')
  \t})
  </script>
{% endblock %}";
    }
}
