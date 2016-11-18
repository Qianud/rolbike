<?php

/* yuyuezuche.html */
class __TwigTemplate_85fb2806076c75215ad1a17e0cb817b96d3261a753332d8b1626bb340d3b8cde extends Twig_Template
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
\t<title>预约租车</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/xuanzeyouhui.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/jquery.datetimepicker.css\"/>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
\t<div class=\"wrap\">
\t\t<header>
\t\t\t<div class=\"header-left\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/xuanzeyouhui/images/header_06.png\"/></dt>
\t\t\t\t\t\t<dd>关闭</dd>
\t\t\t\t\t</dl>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"header-right\">
\t\t\t\t<p>预约租车</p>
\t\t\t</div>
\t\t</header>
\t\t<section>
\t\t\t<div class=\"sec1\">
\t\t\t\t<p>租借时间:<span>1</span><span>天</span></p>
\t\t\t</div>
\t\t\t<div class=\"sec2\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dd>取车地点地</dd>
\t\t\t\t\t\t<dt><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/xuanzeyouhui/images/section_03.png\"/></dt>
\t\t\t\t\t</dl>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sec2\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dd>还车地点</dd>
\t\t\t\t\t\t<dt><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/xuanzeyouhui/images/section_03.png\"/></dt>
\t\t\t\t\t</dl>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sec5\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><span>取车时间</span></br><span><input type=\"text\" value=\"\" id=\"datetimepicker\" style=\"width:110px\" /></span></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><span>还车地时间</span></br><span><input type=\"text\" value=\"\" id=\"datetimepicker_mask\" style=\"width:110px\"/></span></p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"sec6\">
\t\t\t\t<a href=\"\">
\t\t\t\t\t<p>立即约车</p>
\t\t\t\t</a>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"sec7\">
\t\t\t</div>
\t\t</section>
\t</div>
</body>
</html>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/jquery.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/jquery.datetimepicker.js\"></script>
<script>

\$('#datetimepicker10').datetimepicker({
\tstep:5,
\tinline:true
});
\$('#datetimepicker_mask').datetimepicker({
\tmask:'9999/19/39 29:59'
});
\$('#datetimepicker').datetimepicker();
\$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
\$('#datetimepicker1').datetimepicker({
\tdatepicker:false,
\tformat:'H:i',
\tstep:5
});
\$('#datetimepicker2').datetimepicker({
\tyearOffset:222,
\tlang:'ch',
\ttimepicker:false,
\tformat:'d/m/Y',
\tformatDate:'Y/m/d',
\tminDate:'-1970/01/02', // yesterday is minimum date
\tmaxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
\$('#datetimepicker3').datetimepicker({
\tinline:true
});
\$('#datetimepicker4').datetimepicker();
\$('#open').click(function(){
\t\$('#datetimepicker4').datetimepicker('show');
});
\$('#close').click(function(){
\t\$('#datetimepicker4').datetimepicker('hide');
});
\$('#reset').click(function(){
\t\$('#datetimepicker4').datetimepicker('reset');
});
\$('#datetimepicker5').datetimepicker({
\tdatepicker:false,
\tallowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00']
});
\$('#datetimepicker6').datetimepicker();
\$('#destroy').click(function(){
\tif( \$('#datetimepicker6').data('xdsoft_datetimepicker') ){
\t\t\$('#datetimepicker6').datetimepicker('destroy');
\t\tthis.value = 'create';
\t}else{
\t\t\$('#datetimepicker6').datetimepicker();
\t\tthis.value = 'destroy';
\t}
});
var logic = function( currentDateTime ){
\tif( currentDateTime.getDay()==6 ){
\t\tthis.setOptions({
\t\t\tminTime:'11:00'
\t\t});
\t}else
\t\tthis.setOptions({
\t\t\tminTime:'8:00'
\t\t});
};
\$('#datetimepicker7').datetimepicker({
\tonChangeDateTime:logic,
\tonShow:logic
});
\$('#datetimepicker8').datetimepicker({
\tonGenerate:function( ct ){
\t\t\$(this).find('.xdsoft_date')
\t\t\t.toggleClass('xdsoft_disabled');
\t},
\tminDate:'-1970/01/2',
\tmaxDate:'+1970/01/2',
\ttimepicker:false
});
\$('#datetimepicker9').datetimepicker({
\tonGenerate:function( ct ){
\t\t\$(this).find('.xdsoft_date.xdsoft_weekend')
\t\t\t.addClass('xdsoft_disabled');
\t},
\tweekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
\ttimepicker:false
});
</script>
<!-- <div style=\"text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';\">
<p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗.</p>
<p>来源：<a href=\"http://www.huiyi8.com.js\" target=\"_blank\">huiyi8素材JS代码频道</a></p>
</div> -->
</html>
";
    }

    public function getTemplateName()
    {
        return "yuyuezuche.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 69,  103 => 68,  74 => 42,  63 => 34,  43 => 17,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\" />
\t<title>预约租车</title>
\t<link rel=\"stylesheet\" href=\"{{url}}public/css/xuanzeyouhui.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/time/jquery.datetimepicker.css\"/>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
\t<div class=\"wrap\">
\t\t<header>
\t\t\t<div class=\"header-left\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><img src=\"{{url}}public/img/xuanzeyouhui/images/header_06.png\"/></dt>
\t\t\t\t\t\t<dd>关闭</dd>
\t\t\t\t\t</dl>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"header-right\">
\t\t\t\t<p>预约租车</p>
\t\t\t</div>
\t\t</header>
\t\t<section>
\t\t\t<div class=\"sec1\">
\t\t\t\t<p>租借时间:<span>1</span><span>天</span></p>
\t\t\t</div>
\t\t\t<div class=\"sec2\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dd>取车地点地</dd>
\t\t\t\t\t\t<dt><img src=\"{{url}}public/img/xuanzeyouhui/images/section_03.png\"/></dt>
\t\t\t\t\t</dl>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sec2\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dd>还车地点</dd>
\t\t\t\t\t\t<dt><img src=\"{{url}}public/img/xuanzeyouhui/images/section_03.png\"/></dt>
\t\t\t\t\t</dl>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sec5\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><span>取车时间</span></br><span><input type=\"text\" value=\"\" id=\"datetimepicker\" style=\"width:110px\" /></span></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><span>还车地时间</span></br><span><input type=\"text\" value=\"\" id=\"datetimepicker_mask\" style=\"width:110px\"/></span></p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"sec6\">
\t\t\t\t<a href=\"\">
\t\t\t\t\t<p>立即约车</p>
\t\t\t\t</a>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"sec7\">
\t\t\t</div>
\t\t</section>
\t</div>
</body>
</html>
<script src=\"{{url}}public/time/jquery.js\"></script>
<script src=\"{{url}}public/time/jquery.datetimepicker.js\"></script>
<script>

\$('#datetimepicker10').datetimepicker({
\tstep:5,
\tinline:true
});
\$('#datetimepicker_mask').datetimepicker({
\tmask:'9999/19/39 29:59'
});
\$('#datetimepicker').datetimepicker();
\$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
\$('#datetimepicker1').datetimepicker({
\tdatepicker:false,
\tformat:'H:i',
\tstep:5
});
\$('#datetimepicker2').datetimepicker({
\tyearOffset:222,
\tlang:'ch',
\ttimepicker:false,
\tformat:'d/m/Y',
\tformatDate:'Y/m/d',
\tminDate:'-1970/01/02', // yesterday is minimum date
\tmaxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
\$('#datetimepicker3').datetimepicker({
\tinline:true
});
\$('#datetimepicker4').datetimepicker();
\$('#open').click(function(){
\t\$('#datetimepicker4').datetimepicker('show');
});
\$('#close').click(function(){
\t\$('#datetimepicker4').datetimepicker('hide');
});
\$('#reset').click(function(){
\t\$('#datetimepicker4').datetimepicker('reset');
});
\$('#datetimepicker5').datetimepicker({
\tdatepicker:false,
\tallowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00']
});
\$('#datetimepicker6').datetimepicker();
\$('#destroy').click(function(){
\tif( \$('#datetimepicker6').data('xdsoft_datetimepicker') ){
\t\t\$('#datetimepicker6').datetimepicker('destroy');
\t\tthis.value = 'create';
\t}else{
\t\t\$('#datetimepicker6').datetimepicker();
\t\tthis.value = 'destroy';
\t}
});
var logic = function( currentDateTime ){
\tif( currentDateTime.getDay()==6 ){
\t\tthis.setOptions({
\t\t\tminTime:'11:00'
\t\t});
\t}else
\t\tthis.setOptions({
\t\t\tminTime:'8:00'
\t\t});
};
\$('#datetimepicker7').datetimepicker({
\tonChangeDateTime:logic,
\tonShow:logic
});
\$('#datetimepicker8').datetimepicker({
\tonGenerate:function( ct ){
\t\t\$(this).find('.xdsoft_date')
\t\t\t.toggleClass('xdsoft_disabled');
\t},
\tminDate:'-1970/01/2',
\tmaxDate:'+1970/01/2',
\ttimepicker:false
});
\$('#datetimepicker9').datetimepicker({
\tonGenerate:function( ct ){
\t\t\$(this).find('.xdsoft_date.xdsoft_weekend')
\t\t\t.addClass('xdsoft_disabled');
\t},
\tweekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
\ttimepicker:false
});
</script>
<!-- <div style=\"text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';\">
<p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗.</p>
<p>来源：<a href=\"http://www.huiyi8.com.js\" target=\"_blank\">huiyi8素材JS代码频道</a></p>
</div> -->
</html>
";
    }
}
