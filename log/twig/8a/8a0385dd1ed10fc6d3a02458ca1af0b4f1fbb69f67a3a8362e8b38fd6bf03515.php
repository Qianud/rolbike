<?php

/* yuyuezuche.html */
class __TwigTemplate_e08be56204ef859327a7c0e1ba61f6d2b8ab3c2c65064eee140068a7fe3011ef extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>预约租车</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/style.css\">
    <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/person.css\">
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/js/Adaptive.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/js/jquery.1.7.2.min.js\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/js/mobiscroll_002.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/js/mobiscroll_004.js\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/css/mobiscroll_002.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/css/mobiscroll.css\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/js/mobiscroll.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/js/mobiscroll_003.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/js/mobiscroll_005.js\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/time/css/mobiscroll_003.css\" rel=\"stylesheet\" type=\"text/css\">
    <style>
        input, select {
            width: 70%;
            padding: 2px;
            margin: 0px 0;
            border: 1px solid #aaa;
            box-sizing: border-box;
            border-radius: 5px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -webkit-border-radius: 5px;
        }
        .tu{
            position:relative;
            width:12.42rem;
            height:6.7rem;
            overflow:hidden;
        }

        .fb:nth-child(odd){ width:12.42rem; height:6.7rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .fb:nth-child(even){ width:12.42rem; height:6.7rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .cbr{ border-right:none;}
        .fb:nth-child(odd){ width:12.42rem;; height:6.7rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .fb:nth-child(even){ width:12.42rem;; height:6.7rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .cbr{ border-right:none;}
        .fb-lt{ width:5.9rem; height:6.5rem; margin:0 auto;}
        .fb-lt img{ width:5.9rem; height:3.8rem; display:block;}
        .fb-lt p{}
        .fb-lt p.fb-name{ margin-top:0.3rem; font-size:0.48rem;}
        .fb-lt p.price{ margin-top:0.2rem; font-size:0.3rem;}
        .fb-lt p span{ font-size:0.3rem; color:#d7d7d7;}
        .fb-lt p span.discount{ float:left; margin:0.2rem 0 0 0.5rem; color:#f46b29;}
        .fb-lt p span.num{ float:right; margin-right:0.5rem;}
        .fb-lt p span big{ font-size:0.5rem; color:#ff3500;}
    </style>
</head>

<body>
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 62
            echo "<div class=\"tu\">
    <div class=\"fb\">
        <div class=\"fb-lt\">
            <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/showye/images/scenics/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "img_url", array()), "html", null, true);
            echo "\">
            <p class=\"fb-name\"><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "index/zuche\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "model", array()), "html", null, true);
            echo "</a></p>
            <p class=\"price\">
                <span class=\"discount\">4.7折</span>
                <span class=\"num\"><big>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "hour_price", array()), "html", null, true);
            echo "</big>元/天起</span>
            </p>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/down_dingdan\" method=\"post\">
    <div class=\"whe\">
        <div class=\"whe-lt whe-br\">
            <p class=\"lf-tp\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/flag.png\">取车时间</p>
            <p class=\"lf-bt\"><input value=\"2015-05-01 15:42:02\" class=\"\" readonly=\"readonly\" name=\"appDateTime\" id=\"appDateTime\" type=\"text\"></p>
        </div>
        <div class=\"whe-lt\">
            <p class=\"lf-tp\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/icon/heart.png\">还车时间</p>
            <p class=\"lf-bt\"><input value=\"2015-05-01 15:42:02\" class=\"\" readonly=\"readonly\" name=\"appDateTime1\" id=\"appDateTime1\" type=\"text\"></p>
        </div>
    </div>
    <div class=\"person\">
        <div class=\"pn-lt\">
            <p><img class=\"img-lf\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/lt_2.png\">取出车地点&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"start_site\"></p>
        </div>
        <div class=\"pn-lt\">
            <p><img class=\"img-lf\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/person/lt_2.png\">还车地点&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"end_site\"></p>
        </div>
        <div class=\"tijoa\">
            <br><br>
            <button type=\"button\" class=\"btn btn-success\">成功按钮</button>
        </div>
    </div>
</form>
<footer>
    <div class=\"foot act\">
        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
    <div class=\"foot\">
        <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
    <div class=\"foot\">
        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>
    <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/person/person.html\"><div class=\"foot\">
        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4.png\">
        <p><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">个人</a></p>
    </div></a>
</footer>

</body>
</html>
<script type=\"text/javascript\">
    \$(function () {
        var currYear = (new Date()).getFullYear();
        var opt={};
        opt.date = {preset : 'date'};
        opt.datetime = {preset : 'datetime'};
        opt.time = {preset : 'time'};
        opt.default = {
            theme: 'android-ics light', //皮肤样式
            display: 'modal', //显示方式
            mode: 'scroller', //日期选择模式
            dateFormat: 'yyyy-mm-dd',
            lang: 'zh',
            showNow: true,
            nowText: \"今天\",
            startYear: currYear - 10, //开始年份
            endYear: currYear + 10 //结束年份
        };

        \$(\"#appDate\").mobiscroll(\$.extend(opt['date'], opt['default']));
        var optDateTime = \$.extend(opt['datetime'], opt['default']);
        var optTime = \$.extend(opt['time'], opt['default']);
        \$(\"#appDateTime\").mobiscroll(optDateTime).datetime(optDateTime);
        \$(\"#appTime\").mobiscroll(optTime).time(optTime);
    });
    \$(function () {
        var currYear = (new Date()).getFullYear();
        var opt={};
        opt.date = {preset : 'date'};
        opt.datetime = {preset : 'datetime'};
        opt.time = {preset : 'time'};
        opt.default = {
            theme: 'android-ics light', //皮肤样式
            display: 'modal', //显示方式
            mode: 'scroller', //日期选择模式
            dateFormat: 'yyyy-mm-dd',
            lang: 'zh',
            showNow: true,
            nowText: \"今天\",
            startYear: currYear - 10, //开始年份
            endYear: currYear + 10 //结束年份
        };

        \$(\"#appDate\").mobiscroll(\$.extend(opt['date'], opt['default']));
        var optDateTime = \$.extend(opt['datetime'], opt['default']);
        var optTime = \$.extend(opt['time'], opt['default']);
        \$(\"#appDateTime1\").mobiscroll(optDateTime).datetime(optDateTime);
        \$(\"#appTime\").mobiscroll(optTime).time(optTime);
    });
</script>";
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
        return array (  231 => 114,  227 => 113,  223 => 112,  218 => 110,  214 => 109,  207 => 105,  201 => 102,  197 => 101,  184 => 91,  178 => 88,  169 => 82,  162 => 78,  155 => 75,  143 => 69,  135 => 66,  129 => 65,  124 => 62,  120 => 61,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>预约租车</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/style.css\">
    <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/person.css\">
    <script type=\"text/javascript\" src=\"{{url}}public/showye/js/Adaptive.js\"></script>
    <script type=\"text/javascript\" src=\"{{url}}public/js/bootstrap.min.js\"></script>
    <script src=\"{{url}}public/time/js/jquery.1.7.2.min.js\"></script>
    <script src=\"{{url}}public/time/js/mobiscroll_002.js\" type=\"text/javascript\"></script>
    <script src=\"{{url}}public/time/js/mobiscroll_004.js\" type=\"text/javascript\"></script>
    <link href=\"{{url}}public/time/css/mobiscroll_002.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{url}}public/time/css/mobiscroll.css\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"{{url}}public/time/js/mobiscroll.js\" type=\"text/javascript\"></script>
    <script src=\"{{url}}public/time/js/mobiscroll_003.js\" type=\"text/javascript\"></script>
    <script src=\"{{url}}public/time/js/mobiscroll_005.js\" type=\"text/javascript\"></script>
    <link href=\"{{url}}public/time/css/mobiscroll_003.css\" rel=\"stylesheet\" type=\"text/css\">
    <style>
        input, select {
            width: 70%;
            padding: 2px;
            margin: 0px 0;
            border: 1px solid #aaa;
            box-sizing: border-box;
            border-radius: 5px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -webkit-border-radius: 5px;
        }
        .tu{
            position:relative;
            width:12.42rem;
            height:6.7rem;
            overflow:hidden;
        }

        .fb:nth-child(odd){ width:12.42rem; height:6.7rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .fb:nth-child(even){ width:12.42rem; height:6.7rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .cbr{ border-right:none;}
        .fb:nth-child(odd){ width:12.42rem;; height:6.7rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .fb:nth-child(even){ width:12.42rem;; height:6.7rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
        .cbr{ border-right:none;}
        .fb-lt{ width:5.9rem; height:6.5rem; margin:0 auto;}
        .fb-lt img{ width:5.9rem; height:3.8rem; display:block;}
        .fb-lt p{}
        .fb-lt p.fb-name{ margin-top:0.3rem; font-size:0.48rem;}
        .fb-lt p.price{ margin-top:0.2rem; font-size:0.3rem;}
        .fb-lt p span{ font-size:0.3rem; color:#d7d7d7;}
        .fb-lt p span.discount{ float:left; margin:0.2rem 0 0 0.5rem; color:#f46b29;}
        .fb-lt p span.num{ float:right; margin-right:0.5rem;}
        .fb-lt p span big{ font-size:0.5rem; color:#ff3500;}
    </style>
</head>

<body>
{% for val in data %}
<div class=\"tu\">
    <div class=\"fb\">
        <div class=\"fb-lt\">
            <img src=\"{{url}}public/showye/images/scenics/{{val.img_url}}\">
            <p class=\"fb-name\"><a href=\"{{url}}index/zuche\">{{val.model}}</a></p>
            <p class=\"price\">
                <span class=\"discount\">4.7折</span>
                <span class=\"num\"><big>{{val.hour_price}}</big>元/天起</span>
            </p>
        </div>
    </div>
</div>
{% endfor %}
<form action=\"{{url}}index/down_dingdan\" method=\"post\">
    <div class=\"whe\">
        <div class=\"whe-lt whe-br\">
            <p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/person/flag.png\">取车时间</p>
            <p class=\"lf-bt\"><input value=\"2015-05-01 15:42:02\" class=\"\" readonly=\"readonly\" name=\"appDateTime\" id=\"appDateTime\" type=\"text\"></p>
        </div>
        <div class=\"whe-lt\">
            <p class=\"lf-tp\"><img src=\"{{url}}public/showye/images/icon/heart.png\">还车时间</p>
            <p class=\"lf-bt\"><input value=\"2015-05-01 15:42:02\" class=\"\" readonly=\"readonly\" name=\"appDateTime1\" id=\"appDateTime1\" type=\"text\"></p>
        </div>
    </div>
    <div class=\"person\">
        <div class=\"pn-lt\">
            <p><img class=\"img-lf\" src=\"{{url}}public/showye/images/person/lt_2.png\">取出车地点&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"start_site\"></p>
        </div>
        <div class=\"pn-lt\">
            <p><img class=\"img-lf\" src=\"{{url}}public/showye/images/person/lt_2.png\">还车地点&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"end_site\"></p>
        </div>
        <div class=\"tijoa\">
            <br><br>
            <button type=\"button\" class=\"btn btn-success\">成功按钮</button>
        </div>
    </div>
</form>
<footer>
    <div class=\"foot act\">
        <img src=\"{{url}}public/showye/images/foot/ft_2.png\">
        <p><a href=\"{{url}}index/index\">首页</a></p>
    </div>
    <div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
    <div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_3.png\">
        <p><a href=\"{{url}}index/dindan\">订单</a></p>
    </div>
    <a href=\"{{url}}public/showye/person/person.html\"><div class=\"foot\">
        <img src=\"{{url}}public/showye/images/foot/ft_4.png\">
        <p><a href=\"{{url}}index/geren\">个人</a></p>
    </div></a>
</footer>

</body>
</html>
<script type=\"text/javascript\">
    \$(function () {
        var currYear = (new Date()).getFullYear();
        var opt={};
        opt.date = {preset : 'date'};
        opt.datetime = {preset : 'datetime'};
        opt.time = {preset : 'time'};
        opt.default = {
            theme: 'android-ics light', //皮肤样式
            display: 'modal', //显示方式
            mode: 'scroller', //日期选择模式
            dateFormat: 'yyyy-mm-dd',
            lang: 'zh',
            showNow: true,
            nowText: \"今天\",
            startYear: currYear - 10, //开始年份
            endYear: currYear + 10 //结束年份
        };

        \$(\"#appDate\").mobiscroll(\$.extend(opt['date'], opt['default']));
        var optDateTime = \$.extend(opt['datetime'], opt['default']);
        var optTime = \$.extend(opt['time'], opt['default']);
        \$(\"#appDateTime\").mobiscroll(optDateTime).datetime(optDateTime);
        \$(\"#appTime\").mobiscroll(optTime).time(optTime);
    });
    \$(function () {
        var currYear = (new Date()).getFullYear();
        var opt={};
        opt.date = {preset : 'date'};
        opt.datetime = {preset : 'datetime'};
        opt.time = {preset : 'time'};
        opt.default = {
            theme: 'android-ics light', //皮肤样式
            display: 'modal', //显示方式
            mode: 'scroller', //日期选择模式
            dateFormat: 'yyyy-mm-dd',
            lang: 'zh',
            showNow: true,
            nowText: \"今天\",
            startYear: currYear - 10, //开始年份
            endYear: currYear + 10 //结束年份
        };

        \$(\"#appDate\").mobiscroll(\$.extend(opt['date'], opt['default']));
        var optDateTime = \$.extend(opt['datetime'], opt['default']);
        var optTime = \$.extend(opt['time'], opt['default']);
        \$(\"#appDateTime1\").mobiscroll(optDateTime).datetime(optDateTime);
        \$(\"#appTime\").mobiscroll(optTime).time(optTime);
    });
</script>";
    }
}
