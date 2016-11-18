<?php

/* index.html */
class __TwigTemplate_e57564c136b3bdcf75de92f3837bb10799935da365b713db9092800b97b0e34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
        echo " 
  <div data-role=\"header\">
 <a href=\"#\" class=\"ui-btn ui-icon-home ui-btn-icon-notext\">主页按钮</a>
  <h1>欢迎访问我的主页</h1>
  <a href=\"javascript:showBg();\" data-icon=\"plus\"></a>
  </div>
<div id=\"main\"><a href=\"javascript:vido(0);\"></a>
<div id=\"fullbg\"></div>
<div id=\"dialog\">
<p class=\"close\"><a href=\"#\" onclick=\"closeBg();\">关闭</a></p>
<div>
<form action=\"/index/add\" target=\"_top\" method=\"post\">
\t<table>
\t\t<tr>
\t\t\t<td>标题：</td><td><input type=\"text\" name=\"title\"></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>内容：</td><td><input type=\"text\" name=\"content\"></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\"><input type=\"submit\" value=\"添加\"></td>
\t\t</tr>
\t</table>
</form>
</div>
</div>
</div> 
<style>
\tbody {
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
margin:0;
}
#main {
height:1800px;
padding-top:90px;
text-align:center;
}
#fullbg {
background-color:gray;
left:0;
opacity:0.5;
position:absolute;
top:0;
z-index:3;
filter:alpha(opacity=50);
-moz-opacity:0.5;
-khtml-opacity:0.5;
}
#dialog {
background-color:#fff;
border:5px solid rgba(0,0,0, 0.4);
height:400px;
left:50%;
margin:-200px 0 0 -200px;
padding:1px;
position:fixed !important; /* 浮动对话框 */
position:absolute;
top:50%;
width:400px;
z-index:5;
border-radius:5px;
display:none;
}
#dialog p {
margin:0 0 12px;
height:24px;
line-height:24px;
background:#CCCCCC;
}
#dialog p.close {
text-align:right;
padding-right:10px;
}
#dialog p.close a {
color:#fff;
text-decoration:none;
}    
</style> 
<script type=\"text/javascript\">
//显示灰色 jQuery 遮罩层
function showBg() {
var bh = \$(\"body\").height();
var bw = \$(\"body\").width();
\$(\"#fullbg\").css({
height:bh,
width:bw,
display:\"block\"
});
\$(\"#dialog\").show();
}
//关闭灰色 jQuery 遮罩
function closeBg() {
\$(\"#fullbg,#dialog\").hide();
}\t
</script>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %} 
  <div data-role=\"header\">
 <a href=\"#\" class=\"ui-btn ui-icon-home ui-btn-icon-notext\">主页按钮</a>
  <h1>欢迎访问我的主页</h1>
  <a href=\"javascript:showBg();\" data-icon=\"plus\"></a>
  </div>
<div id=\"main\"><a href=\"javascript:vido(0);\"></a>
<div id=\"fullbg\"></div>
<div id=\"dialog\">
<p class=\"close\"><a href=\"#\" onclick=\"closeBg();\">关闭</a></p>
<div>
<form action=\"/index/add\" target=\"_top\" method=\"post\">
\t<table>
\t\t<tr>
\t\t\t<td>标题：</td><td><input type=\"text\" name=\"title\"></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>内容：</td><td><input type=\"text\" name=\"content\"></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\"><input type=\"submit\" value=\"添加\"></td>
\t\t</tr>
\t</table>
</form>
</div>
</div>
</div> 
<style>
\tbody {
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
margin:0;
}
#main {
height:1800px;
padding-top:90px;
text-align:center;
}
#fullbg {
background-color:gray;
left:0;
opacity:0.5;
position:absolute;
top:0;
z-index:3;
filter:alpha(opacity=50);
-moz-opacity:0.5;
-khtml-opacity:0.5;
}
#dialog {
background-color:#fff;
border:5px solid rgba(0,0,0, 0.4);
height:400px;
left:50%;
margin:-200px 0 0 -200px;
padding:1px;
position:fixed !important; /* 浮动对话框 */
position:absolute;
top:50%;
width:400px;
z-index:5;
border-radius:5px;
display:none;
}
#dialog p {
margin:0 0 12px;
height:24px;
line-height:24px;
background:#CCCCCC;
}
#dialog p.close {
text-align:right;
padding-right:10px;
}
#dialog p.close a {
color:#fff;
text-decoration:none;
}    
</style> 
<script type=\"text/javascript\">
//显示灰色 jQuery 遮罩层
function showBg() {
var bh = \$(\"body\").height();
var bw = \$(\"body\").width();
\$(\"#fullbg\").css({
height:bh,
width:bw,
display:\"block\"
});
\$(\"#dialog\").show();
}
//关闭灰色 jQuery 遮罩
function closeBg() {
\$(\"#fullbg,#dialog\").hide();
}\t
</script>
{% endblock %}";
    }
}
