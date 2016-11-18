<?php

/* ri.html */
class __TwigTemplate_91ebb54e4939f26d5bbe56f32e9568927603cf40bcbc15eec3e89fbf7497b1a2 extends Twig_Template
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
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">    
\t<title>签到</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/person.css\">\t
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/css/style.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/guanliqu.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>   \t
\t<style>
\t*{margin:0;padding:0;font:14px/1.8 \"Helvetica Neue\",\"microsoft yahei\";}
\tul,li{list-style:none;}
\tbody{background: #fff; }
\t.checkin{margin: 0 auto auto auto; }
\t.clear {clear:both; height:0; overflow:hidden; display:block; line-height:0}
\t.clearfix:after {clear:both;font-size:0; height:0; display:block; visibility:hidden; content:\" \"; line-height:0}
\t.clearfix {zoom:1}/* for IE6 IE7 */
\t.title{height: 100%;line-height: 36px;font-size: 16px;}
\t.title p{float: left;width: 80%;height: 36px;line-height: 36px;font-size: 16px;}
\t.title a{display: inline-block;width: 20%;height: 36px;line-height: 36px;text-align: center;background: #42941a;border-radius: 5px;color: #fff;text-decoration: none;font-size: 16px;}
\t.checkin li{background: #fee684; float: left;padding: 10px;text-align: center;}

\tli.able-qiandao{background: #e9c530; }
\tli.checked{background:#fee684 url(http://i2.piimg.com/508767/a9576b09fc014d6e.png) no-repeat center;}
\t.mask{ width: 100%;height: 100%;position: absolute;top: 0;left: 0; background-color: rgba(0,0,0,0.55);visibility: hidden;transition: all 0.25s ease}
\t.modal{background:#fff;width: 450px;height: 400px;border-radius: 10px;position: absolute;margin-left:-225px;left: 50%;top: 50%;border:5px solid #42941a;box-sizing:border-box;overflow: hidden;transform: translateY(-200%);transition: all 0.25s ease}
\ta.closeBtn{display: block;position: absolute;right: 10px;top: 5px;font-family: 'simsun';font-size: 18px;text-decoration: none;font-weight: bolder;color: #333}
\t.title_h1{text-align: center;font-size: 40px;font-weight: normal;padding-top: 80px;display: block;width: 100%}
\t.title_h1 span{display: inline-block;width: 40px;height: 40px;border-radius: 100%;background: #42941a;color: #fff;position: relative;float: left;margin-left: 30%;margin-top: 7px;}
\t.title_h1 span::before{width: 10px;height: 2px;background: #fff;position: absolute;left: 8px;top: 23px;display: block;line-height: 0;font-size: 0;content: \"\"; transform: rotate(52deg);}
\t.title_h1 span::after{width: 24px;height: 2px;background: #fff;position: absolute;left: 12px;top: 20px;display: block;line-height: 0;font-size: 0;content: \"\";transform: rotate(-45deg);}
\t.title_h1 em{display: inline-block;font-size: 30px;float: left;margin-left: 10px;}
\t.title_h1 i{display: inline-block;font-size: 16px;float: left;margin: 14px 0 0 10px;}
\t.title_h2{text-align: center;font-size: 16px;display: block;padding-top: 20px;}
\t.title_h2 span{font-size: 36px;color: #b25d06;}
\t.trf{visibility: visible;}
\t.trf .modal{transform: translateY(0);}
\t</style>\t
\t<script src=\"http://apps.bdimg.com/libs/jquery/1.10.1/jquery.min.js\"></script>        
\t 
</head>
<body>
    <header>
        <div class=\"header-left\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">返回个人中心</a></p></div>
        <div class=\"header-right\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/dindan/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
\t<div class=\"checkin\">
\t\t
\t</div>
\t<div class=\"mask\">
\t
\t\t<div class=\"modal\">
\t\t\t<a href=\"#\" class=\"closeBtn\">×</a>
\t\t\t<h1 class=\"title_h1 clearfix\"><span></span><em>已签到</em> <i id=\"inte\"></i></h1>
\t\t\t<h2 class=\"title_h2\">您获得积分<span>10积分</span></h2>
\t\t</div>
\t</div>
<footer>
\t<div class=\"foot\">
    \t<img src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
\t<div class=\"foot\">
        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1.png\">
        <p>位置</p>
    </div>
\t<div class=\"foot\">
    \t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>
\t<div class=\"foot act\">
    \t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4_4.png\">
        <p>个人</p>
    </div>
</footer>  
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/jquery.cookie.js\"></script>\t
\t<script>
\twindow.onload=function(){
  if (location.href.indexOf(\"?xyz=\")<0)
 {
 location.href=location.href+\"?xyz=\"+Math.random();
 }
}
\t\$(function()
\t{
\t\tvar urlt=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/sheartwo\";
\t\t\t\$.post(urlt,function(msg)
\t\t\t{
\t\t\t\t\$.cookie('datt',msg)

\t\t\t})\t\t\t
\t});
\t(function(\$) {
\t\tvar url=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/shear\";
\t    
\t\t\tvar str=\"\";
\t\t\t\$.post(url,function(msg)
\t\t\t{
\t\t\t\t\$.cookie('str_val',msg)\t
\t\t\t})
\t\t
\t\t\tstr =\$.cookie('str_val');
\t\t\tvar arr=str.split(',')
\t\t\tvar num=arr.length*1+1*1;\t
\t\t\t\$(\"#inte\").html(\"您已经签到\"+num+\"天\")
\t\t\t
\t\tvar Checkin = function(ele, options) {
\t\t\tthis.ele = ele;
\t\t\tthis.opt = options;
\t\t\tthis.defaults = {
\t\t\t\twidth: 'auto',
\t\t\t\theight: 'auto',
\t\t\t\tbackground: '#f90',
\t\t\t\tradius: 10,
\t\t\t\tcolor: '#fff',
\t\t\t\tpadding: 10,
\t\t\t\tdateArray: str.split(','), // 假设已签到的天数+1
\t\t\t};
\t\t\tthis.obj = \$.extend({}, this.defaults, this.opt);
\t\t}
\t\tCheckin.prototype.init = function() {
\t\t\tvar _self = this.ele,
\t\t\t\thtml = '',
\t\t\t\tmyDate = new Date(),
\t\t\t\tyear = myDate.getFullYear(),
\t\t\t\tmonth = myDate.getMonth(),
\t\t\t\tday = myDate.getDate(),
\t\t\t\tweekText = ['日', '一', '二', '三', '四', '五', '六'];
\t\t\t_self.css({
\t\t\t\twidth: this.obj.width + 'px',
\t\t\t\theight: this.obj.height,
\t\t\t\tbackground: this.obj.background,
\t\t\t\tborderRadius: this.obj.radius,
\t\t\t\tcolor: this.obj.color,
\t\t\t\tpadding: this.obj.padding
\t\t\t}).append(\"<div class='title'><p>\" + year + '年' + (month + 1) + '月' + day + '日' + \"</p><a class=\\'checkBtn\\' href=\\\"javascript:;\\\">签到</a></div>\");
\t\t\t\$(\"<ul class='week clearfix'></ul><ul class='calendarList clearfix'></ul>\").appendTo(_self);
\t\t\tfor (var i = 0; i < 7; i++) {
\t\t\t\t_self.find(\".week\").append(\"<li>\" + weekText[i] + \"</li>\")
\t\t\t};
\t\t\tfor (var i = 0; i < 42; i++) {
\t\t\t\thtml += \"<li></li>\"
\t\t\t};
\t\t\t_self.find(\".calendarList\").append(html);
\t\t\tvar \$li = _self.find(\".calendarList\").find(\"li\");
\t\t\t_self.find(\".week li\").css({
\t\t\t\twidth: (_self.width() / 7) + 'px',
\t\t\t\theight: 50 + 'px',
\t\t\t\tborderRight: '1px solid #f90',
\t\t\t\tboxSizing: 'border-box',
\t\t\t\tbackground: '#b25d06'
\t\t\t});
\t\t\t\$li.css({
\t\t\t\twidth: (_self.width() / 7) + 'px',
\t\t\t\theight: 50 + 'px',
\t\t\t\tborderRight: '1px solid #f90',
\t\t\t\tborderBottom: '1px solid #f90',
\t\t\t\tboxSizing: 'border-box',
\t\t\t\tcolor: \"#b25d06\"
\t\t\t});
\t\t\t_self.find(\".calendarList\").find(\"li:nth-child(7n)\").css('borderRight', 'none');
\t\t\t_self.find(\".week li:nth-child(7n)\").css('borderRight', 'none');
\t\t\tvar monthFirst = new Date(year, month, 1).getDay();
\t\t\tvar d = new Date(year, (month + 1), 0)
\t\t\tvar totalDay = d.getDate(); //获取当前月的天数
\t\t\tfor (var i = 0; i < totalDay; i++) {
\t\t\t\t\$li.eq(i + monthFirst).html(i + 1);
\t\t\t\t\$li.eq(i + monthFirst).addClass('data' + (i + 1))
\t\t\t\tif (isArray(this.obj.dateArray)) {
\t\t\t\t\tfor (var j = 0; j < this.obj.dateArray.length; j++) {
\t\t\t\t\t\tif (i == this.obj.dateArray[j]) {
\t\t\t\t\t\t\t// 假设已经签到的
\t\t\t\t\t\t\t\$li.eq(i + monthFirst).addClass('checked');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t//\$li.eq(monthFirst+day-1).css('background','#f7ca8e')
\t\t\t_self.find(\$(\".data\" + day)).addClass('able-qiandao');
\t\t}
\t\tvar isChecked = false;
\t\tCheckin.prototype.events = function() {
\t\t\tvar _self = this.ele;
\t\t\tvar \$li = _self.find(\".calendarList\").find(\"li\");
\t\t\t\$li.on('click', function(event) {
\t\t\t\tevent.preventDefault();
\t\t\t\t/* Act on the event */
\t\t\t\tif (\$(this).hasClass('able-qiandao')) {
\t\t\t\t\t\$(this).addClass('checked');
\t\t\t\t\tmodal(_self);
\t\t\t\t\tisChecked = true;
\t\t\t\t}
\t\t\t});
\t\t\tvar checkBtn = _self.find(\".checkBtn\");
\t\t\tdtian =\$.cookie('datt');
\t\t\tvar dates=new Date();
\t\t\t//从当前时间获取天数
\t\t    var tians=dates.getDate();\t\t\t
\t\t\tif(tians==dtian)
\t\t\t{
\t\t\t_self.parents().find('.checkBtn').text(\"已签到\");
\t\t\t}
\t\t\tcheckBtn.click(function(event) {
\t\t\t\tar= checkBtn.html();
\t\t\t\tif(ar == '签到')
\t\t\t\t{
\t\t\t\t\tvar date=new Date();
\t\t\t\t\t//从当前时间获取天数
\t\t            var tian=date.getDate();
\t\t            var url=\"";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/sign\";
\t\t            var send={tian:tian}
\t\t            \$.post(url,send,function(run)
\t\t            {
\t\t\t\t\tmodal(_self);
\t\t\t\t\t_self.find('.able-qiandao').addClass('checked');
\t\t\t\t\tisChecked = true;
\t\t            })
\t\t\t\t\t
\t\t\t\t}
\t\t\t    

\t\t\t});
\t\t}
\t\tvar modal = function(e) {
\t\t\tvar mask = e.parents().find(\".mask\");
\t\t\tvar close = e.parents().find(\".closeBtn\");
\t\t\tif (mask && !isChecked) {
\t\t\t\tmask.addClass('trf');
\t\t\t} else {
\t\t\t\treturn
\t\t\t};
\t\t\tclose.click(function(event) {
\t\t\t\tevent.preventDefault();
\t\t\t\tmask.removeClass('trf')
\t\t\t});
\t\t\te.parents().find('.checkBtn').text(\"已签到\");
\t\t}
\t\t\$.fn.Checkin = function(options) {
\t\t\tvar checkin = new Checkin(this, options);
\t\t\tvar obj = [checkin.init(), checkin.events()]
\t\t\treturn obj
\t\t}
\t\tvar isArray = function(arg) {
\t\t\treturn Object.prototype.toString.call(arg) === '[object Array]';
\t\t};
\t})(jQuery);
\t// 插件调用
\t\$(\".checkin\").Checkin();
\t// 元素居中显示，与插件无关，根本自己需要修改；
\t\$(\".checkin\").css('marginTop',parseInt((\$(window).innerHeight()-\$(\".checkin\").outerHeight())/2)+'px');
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "ri.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 217,  169 => 101,  158 => 93,  145 => 83,  138 => 79,  132 => 76,  128 => 75,  121 => 71,  115 => 68,  111 => 67,  93 => 52,  89 => 51,  85 => 50,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">    
\t<title>签到</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/person.css\">\t
    <link rel=\"stylesheet\" href=\"{{url}}public/dindan/css/style.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/guanliqu.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>   \t
\t<style>
\t*{margin:0;padding:0;font:14px/1.8 \"Helvetica Neue\",\"microsoft yahei\";}
\tul,li{list-style:none;}
\tbody{background: #fff; }
\t.checkin{margin: 0 auto auto auto; }
\t.clear {clear:both; height:0; overflow:hidden; display:block; line-height:0}
\t.clearfix:after {clear:both;font-size:0; height:0; display:block; visibility:hidden; content:\" \"; line-height:0}
\t.clearfix {zoom:1}/* for IE6 IE7 */
\t.title{height: 100%;line-height: 36px;font-size: 16px;}
\t.title p{float: left;width: 80%;height: 36px;line-height: 36px;font-size: 16px;}
\t.title a{display: inline-block;width: 20%;height: 36px;line-height: 36px;text-align: center;background: #42941a;border-radius: 5px;color: #fff;text-decoration: none;font-size: 16px;}
\t.checkin li{background: #fee684; float: left;padding: 10px;text-align: center;}

\tli.able-qiandao{background: #e9c530; }
\tli.checked{background:#fee684 url(http://i2.piimg.com/508767/a9576b09fc014d6e.png) no-repeat center;}
\t.mask{ width: 100%;height: 100%;position: absolute;top: 0;left: 0; background-color: rgba(0,0,0,0.55);visibility: hidden;transition: all 0.25s ease}
\t.modal{background:#fff;width: 450px;height: 400px;border-radius: 10px;position: absolute;margin-left:-225px;left: 50%;top: 50%;border:5px solid #42941a;box-sizing:border-box;overflow: hidden;transform: translateY(-200%);transition: all 0.25s ease}
\ta.closeBtn{display: block;position: absolute;right: 10px;top: 5px;font-family: 'simsun';font-size: 18px;text-decoration: none;font-weight: bolder;color: #333}
\t.title_h1{text-align: center;font-size: 40px;font-weight: normal;padding-top: 80px;display: block;width: 100%}
\t.title_h1 span{display: inline-block;width: 40px;height: 40px;border-radius: 100%;background: #42941a;color: #fff;position: relative;float: left;margin-left: 30%;margin-top: 7px;}
\t.title_h1 span::before{width: 10px;height: 2px;background: #fff;position: absolute;left: 8px;top: 23px;display: block;line-height: 0;font-size: 0;content: \"\"; transform: rotate(52deg);}
\t.title_h1 span::after{width: 24px;height: 2px;background: #fff;position: absolute;left: 12px;top: 20px;display: block;line-height: 0;font-size: 0;content: \"\";transform: rotate(-45deg);}
\t.title_h1 em{display: inline-block;font-size: 30px;float: left;margin-left: 10px;}
\t.title_h1 i{display: inline-block;font-size: 16px;float: left;margin: 14px 0 0 10px;}
\t.title_h2{text-align: center;font-size: 16px;display: block;padding-top: 20px;}
\t.title_h2 span{font-size: 36px;color: #b25d06;}
\t.trf{visibility: visible;}
\t.trf .modal{transform: translateY(0);}
\t</style>\t
\t<script src=\"http://apps.bdimg.com/libs/jquery/1.10.1/jquery.min.js\"></script>        
\t 
</head>
<body>
    <header>
        <div class=\"header-left\"><img src=\"{{url}}public/dindan/images/QQ图片20161010140018_03.jpg\"/></div>
        <div class=\"header-center\"><p><a href=\"{{url}}index/geren\">返回个人中心</a></p></div>
        <div class=\"header-right\"><img src=\"{{url}}public/dindan/images/QQ图片20161010140018_05.jpg\"/></div>
    </header>
\t<div class=\"checkin\">
\t\t
\t</div>
\t<div class=\"mask\">
\t
\t\t<div class=\"modal\">
\t\t\t<a href=\"#\" class=\"closeBtn\">×</a>
\t\t\t<h1 class=\"title_h1 clearfix\"><span></span><em>已签到</em> <i id=\"inte\"></i></h1>
\t\t\t<h2 class=\"title_h2\">您获得积分<span>10积分</span></h2>
\t\t</div>
\t</div>
<footer>
\t<div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_2.png\">
        <p><a href=\"{{url}}index/index\">首页</a></p>
    </div>
\t<div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_1.png\">
        <p>位置</p>
    </div>
\t<div class=\"foot\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_3.png\">
        <p><a href=\"{{url}}index/dindan\">订单</a></p>
    </div>
\t<div class=\"foot act\">
    \t<img src=\"{{url}}public/showye/images/foot/ft_4_4.png\">
        <p>个人</p>
    </div>
</footer>  
<script src=\"{{url}}public/js/jquery.cookie.js\"></script>\t
\t<script>
\twindow.onload=function(){
  if (location.href.indexOf(\"?xyz=\")<0)
 {
 location.href=location.href+\"?xyz=\"+Math.random();
 }
}
\t\$(function()
\t{
\t\tvar urlt=\"{{url}}desc/sheartwo\";
\t\t\t\$.post(urlt,function(msg)
\t\t\t{
\t\t\t\t\$.cookie('datt',msg)

\t\t\t})\t\t\t
\t});
\t(function(\$) {
\t\tvar url=\"{{url}}desc/shear\";
\t    
\t\t\tvar str=\"\";
\t\t\t\$.post(url,function(msg)
\t\t\t{
\t\t\t\t\$.cookie('str_val',msg)\t
\t\t\t})
\t\t
\t\t\tstr =\$.cookie('str_val');
\t\t\tvar arr=str.split(',')
\t\t\tvar num=arr.length*1+1*1;\t
\t\t\t\$(\"#inte\").html(\"您已经签到\"+num+\"天\")
\t\t\t
\t\tvar Checkin = function(ele, options) {
\t\t\tthis.ele = ele;
\t\t\tthis.opt = options;
\t\t\tthis.defaults = {
\t\t\t\twidth: 'auto',
\t\t\t\theight: 'auto',
\t\t\t\tbackground: '#f90',
\t\t\t\tradius: 10,
\t\t\t\tcolor: '#fff',
\t\t\t\tpadding: 10,
\t\t\t\tdateArray: str.split(','), // 假设已签到的天数+1
\t\t\t};
\t\t\tthis.obj = \$.extend({}, this.defaults, this.opt);
\t\t}
\t\tCheckin.prototype.init = function() {
\t\t\tvar _self = this.ele,
\t\t\t\thtml = '',
\t\t\t\tmyDate = new Date(),
\t\t\t\tyear = myDate.getFullYear(),
\t\t\t\tmonth = myDate.getMonth(),
\t\t\t\tday = myDate.getDate(),
\t\t\t\tweekText = ['日', '一', '二', '三', '四', '五', '六'];
\t\t\t_self.css({
\t\t\t\twidth: this.obj.width + 'px',
\t\t\t\theight: this.obj.height,
\t\t\t\tbackground: this.obj.background,
\t\t\t\tborderRadius: this.obj.radius,
\t\t\t\tcolor: this.obj.color,
\t\t\t\tpadding: this.obj.padding
\t\t\t}).append(\"<div class='title'><p>\" + year + '年' + (month + 1) + '月' + day + '日' + \"</p><a class=\\'checkBtn\\' href=\\\"javascript:;\\\">签到</a></div>\");
\t\t\t\$(\"<ul class='week clearfix'></ul><ul class='calendarList clearfix'></ul>\").appendTo(_self);
\t\t\tfor (var i = 0; i < 7; i++) {
\t\t\t\t_self.find(\".week\").append(\"<li>\" + weekText[i] + \"</li>\")
\t\t\t};
\t\t\tfor (var i = 0; i < 42; i++) {
\t\t\t\thtml += \"<li></li>\"
\t\t\t};
\t\t\t_self.find(\".calendarList\").append(html);
\t\t\tvar \$li = _self.find(\".calendarList\").find(\"li\");
\t\t\t_self.find(\".week li\").css({
\t\t\t\twidth: (_self.width() / 7) + 'px',
\t\t\t\theight: 50 + 'px',
\t\t\t\tborderRight: '1px solid #f90',
\t\t\t\tboxSizing: 'border-box',
\t\t\t\tbackground: '#b25d06'
\t\t\t});
\t\t\t\$li.css({
\t\t\t\twidth: (_self.width() / 7) + 'px',
\t\t\t\theight: 50 + 'px',
\t\t\t\tborderRight: '1px solid #f90',
\t\t\t\tborderBottom: '1px solid #f90',
\t\t\t\tboxSizing: 'border-box',
\t\t\t\tcolor: \"#b25d06\"
\t\t\t});
\t\t\t_self.find(\".calendarList\").find(\"li:nth-child(7n)\").css('borderRight', 'none');
\t\t\t_self.find(\".week li:nth-child(7n)\").css('borderRight', 'none');
\t\t\tvar monthFirst = new Date(year, month, 1).getDay();
\t\t\tvar d = new Date(year, (month + 1), 0)
\t\t\tvar totalDay = d.getDate(); //获取当前月的天数
\t\t\tfor (var i = 0; i < totalDay; i++) {
\t\t\t\t\$li.eq(i + monthFirst).html(i + 1);
\t\t\t\t\$li.eq(i + monthFirst).addClass('data' + (i + 1))
\t\t\t\tif (isArray(this.obj.dateArray)) {
\t\t\t\t\tfor (var j = 0; j < this.obj.dateArray.length; j++) {
\t\t\t\t\t\tif (i == this.obj.dateArray[j]) {
\t\t\t\t\t\t\t// 假设已经签到的
\t\t\t\t\t\t\t\$li.eq(i + monthFirst).addClass('checked');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t//\$li.eq(monthFirst+day-1).css('background','#f7ca8e')
\t\t\t_self.find(\$(\".data\" + day)).addClass('able-qiandao');
\t\t}
\t\tvar isChecked = false;
\t\tCheckin.prototype.events = function() {
\t\t\tvar _self = this.ele;
\t\t\tvar \$li = _self.find(\".calendarList\").find(\"li\");
\t\t\t\$li.on('click', function(event) {
\t\t\t\tevent.preventDefault();
\t\t\t\t/* Act on the event */
\t\t\t\tif (\$(this).hasClass('able-qiandao')) {
\t\t\t\t\t\$(this).addClass('checked');
\t\t\t\t\tmodal(_self);
\t\t\t\t\tisChecked = true;
\t\t\t\t}
\t\t\t});
\t\t\tvar checkBtn = _self.find(\".checkBtn\");
\t\t\tdtian =\$.cookie('datt');
\t\t\tvar dates=new Date();
\t\t\t//从当前时间获取天数
\t\t    var tians=dates.getDate();\t\t\t
\t\t\tif(tians==dtian)
\t\t\t{
\t\t\t_self.parents().find('.checkBtn').text(\"已签到\");
\t\t\t}
\t\t\tcheckBtn.click(function(event) {
\t\t\t\tar= checkBtn.html();
\t\t\t\tif(ar == '签到')
\t\t\t\t{
\t\t\t\t\tvar date=new Date();
\t\t\t\t\t//从当前时间获取天数
\t\t            var tian=date.getDate();
\t\t            var url=\"{{ url }}desc/sign\";
\t\t            var send={tian:tian}
\t\t            \$.post(url,send,function(run)
\t\t            {
\t\t\t\t\tmodal(_self);
\t\t\t\t\t_self.find('.able-qiandao').addClass('checked');
\t\t\t\t\tisChecked = true;
\t\t            })
\t\t\t\t\t
\t\t\t\t}
\t\t\t    

\t\t\t});
\t\t}
\t\tvar modal = function(e) {
\t\t\tvar mask = e.parents().find(\".mask\");
\t\t\tvar close = e.parents().find(\".closeBtn\");
\t\t\tif (mask && !isChecked) {
\t\t\t\tmask.addClass('trf');
\t\t\t} else {
\t\t\t\treturn
\t\t\t};
\t\t\tclose.click(function(event) {
\t\t\t\tevent.preventDefault();
\t\t\t\tmask.removeClass('trf')
\t\t\t});
\t\t\te.parents().find('.checkBtn').text(\"已签到\");
\t\t}
\t\t\$.fn.Checkin = function(options) {
\t\t\tvar checkin = new Checkin(this, options);
\t\t\tvar obj = [checkin.init(), checkin.events()]
\t\t\treturn obj
\t\t}
\t\tvar isArray = function(arg) {
\t\t\treturn Object.prototype.toString.call(arg) === '[object Array]';
\t\t};
\t})(jQuery);
\t// 插件调用
\t\$(\".checkin\").Checkin();
\t// 元素居中显示，与插件无关，根本自己需要修改；
\t\$(\".checkin\").css('marginTop',parseInt((\$(window).innerHeight()-\$(\".checkin\").outerHeight())/2)+'px');
\t</script>
</body>
</html>";
    }
}
