<?php

/* tehui.html */
class __TwigTemplate_f3941901c631f4857b1ad80e8e94313784efa810a083f36c31c773bf00dc5b52 extends Twig_Template
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/css/person.css\">
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/js/Adaptive.js\"></script>

<style>
    
    .tu{
        position:relative; 
        width:12.42rem; 
        height:5.5rem; 
        overflow:hidden;
        border-bottom: 1px solid #fff;
    }
    
    .fb:nth-child(odd){ width:12.42rem; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;margin-top: 0.5rem}
    .fb:nth-child(even){ width:12.42rem; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb:nth-child(odd){ width:12.42rem;; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .fb:nth-child(even){ width:12.42rem;; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb-lt{ width:5.9rem; height:5rem; margin:0 auto;}
    .fb-lt img{ width:5.9rem; height:3.8rem; display:block;}
    .fb-lt p{}
    .fb-lt p.fb-name{ margin-top:0.3rem; font-size:0.48rem;}
    .fb-lt p.price{ margin-top:0.2rem; font-size:0.3rem;}
    .fb-lt p span{ font-size:0.3rem; color:#d7d7d7;}
    .fb-lt p span.discount{ float:left; margin:0.2rem 0 0 0.5rem; color:#f46b29;}
    .fb-lt p span.num{ float:right; margin-right:0.5rem;}
    .fb-lt p span big{ font-size:0.5rem; color:#ff3500;}
    .tijiao
    {
        position:relative; 
        width:12.42rem; 
        height:6.7rem; 
        overflow:hidden; 
    }
    .sub {
        
            width:200px;
            height:35px;
            font-family:楷体_GB2312;
            color:#ffffff;
            line-height:35px;
            background:#8c96a0;
            no-repeat;border:none;
            margin-left: 3.2rem;
            background: -webkit-linear-gradient(top,#42a4e0,#2e88c0);
            background: -moz-linear-gradient(top,#42a4e0,#2e88c0);
            background: linear-gradient(top,#42a4e0,#2e88c0);
    }
    .sub:hover{border-bottom:solid 1px #333;}
    .zhu
    {   
        position:relative; 
        width:12.38rem; 
        height:auto;
        overflow:hidden; 
        border: 1px solid #fff;
        margin-top: 5px;
        font-size:12pt;
    }
    .line
    {
       position:relative; 
        width:12.38rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
          
    }
    .time
    {
        position:relative; 
        width:12.34rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
        margin-top: 5px;

    }

  .zhu h4{
       margin-left: 10px;
  } 
  .zhu input {
       margin-left: 50px;
  }

</style>
    <style type=\"text/css\">
        body, html {width: 100%;height: 100%; margin:0;font-family:\"微软雅黑\";}
        #allmap{height:500px;width:100%;}
        #r-result,#r-result table{width:100%;}
    </style>
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=MMvSP43Vccq05twT3plpxRA5G96pcIOs\"></script>
    <script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
</head>

<body>
<div class=\"tu\">
       <div class=\"fb\">
       <div class=\"fb-lt\">
        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/scenics/xiuxian0.jpg\">
        <p class=\"fb-name\"><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/affirm\">我的路线</a></p>
    </div>
</div>
</div>
<form action=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/prefer\" method=\"post\">
    <div class=\"zhu\">
        <div class=\"line\" >
           <h4>线路:</h4> 
           ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 123
            echo "            <input type=\"radio\" data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "line", array()), "html", null, true);
            echo "\" class=\"route_l\" name=\"route_id\" id=\"line\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "rid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "line", array()), "html", null, true);
            echo "<br>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        </div>
        <div class=\"time\" >
           <h4>时间:</h4> 
           ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 129
            echo "           <input type=\"radio\" name=\"ti_id\" id=\"time\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "tid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "interval", array()), "html", null, true);
            echo "<br>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </div>
    </div>
    <div style=\"width:100%;height:100px;display:none\" id=\"allmap\"></div>
    <div id=\"driving_way\" style=\"display:none\">
        <select>
            <option value=\"0\">最少时间</option>
            <option value=\"1\">最短距离</option>
            <option value=\"2\">避开高速</option>
        </select>
        <input type=\"button\" id=\"result\" value=\"查询\"/>
    </div>
    <div id=\"r-result\"></div>    
    <div class=\"tijoa\">
        <input type=\"submit\" value=\"提交\"  class=\"sub\">
    </div>
</div>
</form>  
<footer>
    <div class=\"foot act\">
        <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_2.png\">
        <p><a href=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\">首页</a></p>
    </div>
    <div class=\"foot\">
        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_1_1.png\">
        <p>位置</p>
    </div>
    <div class=\"foot\">
        <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_3.png\">
        <p><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/dindan\">订单</a></p>
    </div>
    <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/person/person.html\"><div class=\"foot\">
        <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/showye/images/foot/ft_4.png\">
        <p><a href=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/geren\">个人</a></p>
    </div></a>
</footer>        
</body>
</html>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/js/jquery.cookie.js\"></script>
<script type=\"text/javascript\">
    \$(function()
    {
        \$(\".route_l\").click(function()
        {
            var strend=\$(this).attr('data');
            \$(\"#allmap\").css(\"display\",\"block\")
            \$(\"#driving_way\").css(\"display\",\"block\")
            var arr=strend.split('---');
            \$.cookie(\"starts\",arr[0])
            \$.cookie(\"end\",arr[1])
        })
    })
    // 百度地图API功能
    var map = new BMap.Map(\"allmap\");
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
    //三种驾车策略：最少时间，最短距离，避开高速
    var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
    \$(\"#result\").click(function(){
            var start = \$.cookie(\"starts\");
    var end = \$.cookie(\"end\");
        map.clearOverlays(); 
        var i=\$(\"#driving_way select\").val();
        search(start,end,routePolicy[i]); 
        function search(start,end,route){ 
            var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},policy: route});
            driving.search(start,end);
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "tehui.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 168,  252 => 163,  248 => 162,  244 => 161,  239 => 159,  235 => 158,  228 => 154,  222 => 151,  218 => 150,  197 => 131,  186 => 129,  182 => 128,  177 => 125,  164 => 123,  160 => 122,  153 => 118,  146 => 114,  142 => 113,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/showye/css/person.css\">
<script type=\"text/javascript\" src=\"{{url}}public/showye/js/Adaptive.js\"></script>

<style>
    
    .tu{
        position:relative; 
        width:12.42rem; 
        height:5.5rem; 
        overflow:hidden;
        border-bottom: 1px solid #fff;
    }
    
    .fb:nth-child(odd){ width:12.42rem; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;margin-top: 0.5rem}
    .fb:nth-child(even){ width:12.42rem; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb:nth-child(odd){ width:12.42rem;; height:5rem; border-right:0px solid #e1e1e1; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .fb:nth-child(even){ width:12.42rem;; height:5rem; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .cbr{ border-right:none;}
    .fb-lt{ width:5.9rem; height:5rem; margin:0 auto;}
    .fb-lt img{ width:5.9rem; height:3.8rem; display:block;}
    .fb-lt p{}
    .fb-lt p.fb-name{ margin-top:0.3rem; font-size:0.48rem;}
    .fb-lt p.price{ margin-top:0.2rem; font-size:0.3rem;}
    .fb-lt p span{ font-size:0.3rem; color:#d7d7d7;}
    .fb-lt p span.discount{ float:left; margin:0.2rem 0 0 0.5rem; color:#f46b29;}
    .fb-lt p span.num{ float:right; margin-right:0.5rem;}
    .fb-lt p span big{ font-size:0.5rem; color:#ff3500;}
    .tijiao
    {
        position:relative; 
        width:12.42rem; 
        height:6.7rem; 
        overflow:hidden; 
    }
    .sub {
        
            width:200px;
            height:35px;
            font-family:楷体_GB2312;
            color:#ffffff;
            line-height:35px;
            background:#8c96a0;
            no-repeat;border:none;
            margin-left: 3.2rem;
            background: -webkit-linear-gradient(top,#42a4e0,#2e88c0);
            background: -moz-linear-gradient(top,#42a4e0,#2e88c0);
            background: linear-gradient(top,#42a4e0,#2e88c0);
    }
    .sub:hover{border-bottom:solid 1px #333;}
    .zhu
    {   
        position:relative; 
        width:12.38rem; 
        height:auto;
        overflow:hidden; 
        border: 1px solid #fff;
        margin-top: 5px;
        font-size:12pt;
    }
    .line
    {
       position:relative; 
        width:12.38rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
          
    }
    .time
    {
        position:relative; 
        width:12.34rem; 
        overflow:hidden; 
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-left: auto; 
        margin-top: 5px;

    }

  .zhu h4{
       margin-left: 10px;
  } 
  .zhu input {
       margin-left: 50px;
  }

</style>
    <style type=\"text/css\">
        body, html {width: 100%;height: 100%; margin:0;font-family:\"微软雅黑\";}
        #allmap{height:500px;width:100%;}
        #r-result,#r-result table{width:100%;}
    </style>
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=MMvSP43Vccq05twT3plpxRA5G96pcIOs\"></script>
    <script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
</head>

<body>
<div class=\"tu\">
       <div class=\"fb\">
       <div class=\"fb-lt\">
        <img src=\"{{url}}public/showye/images/scenics/xiuxian0.jpg\">
        <p class=\"fb-name\"><a href=\"{{url}}index/affirm\">我的路线</a></p>
    </div>
</div>
</div>
<form action=\"{{url}}index/prefer\" method=\"post\">
    <div class=\"zhu\">
        <div class=\"line\" >
           <h4>线路:</h4> 
           {% for val in datas %}
            <input type=\"radio\" data=\"{{val.line}}\" class=\"route_l\" name=\"route_id\" id=\"line\" value=\"{{val.rid}}\">{{val.line}}<br>
           {% endfor %}
        </div>
        <div class=\"time\" >
           <h4>时间:</h4> 
           {% for val in data %}
           <input type=\"radio\" name=\"ti_id\" id=\"time\" value=\"{{val.tid}}\">{{val.interval}}<br>
           {% endfor %}
        </div>
    </div>
    <div style=\"width:100%;height:100px;display:none\" id=\"allmap\"></div>
    <div id=\"driving_way\" style=\"display:none\">
        <select>
            <option value=\"0\">最少时间</option>
            <option value=\"1\">最短距离</option>
            <option value=\"2\">避开高速</option>
        </select>
        <input type=\"button\" id=\"result\" value=\"查询\"/>
    </div>
    <div id=\"r-result\"></div>    
    <div class=\"tijoa\">
        <input type=\"submit\" value=\"提交\"  class=\"sub\">
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
<script src=\"{{url}}public/js/jquery.cookie.js\"></script>
<script type=\"text/javascript\">
    \$(function()
    {
        \$(\".route_l\").click(function()
        {
            var strend=\$(this).attr('data');
            \$(\"#allmap\").css(\"display\",\"block\")
            \$(\"#driving_way\").css(\"display\",\"block\")
            var arr=strend.split('---');
            \$.cookie(\"starts\",arr[0])
            \$.cookie(\"end\",arr[1])
        })
    })
    // 百度地图API功能
    var map = new BMap.Map(\"allmap\");
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
    //三种驾车策略：最少时间，最短距离，避开高速
    var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
    \$(\"#result\").click(function(){
            var start = \$.cookie(\"starts\");
    var end = \$.cookie(\"end\");
        map.clearOverlays(); 
        var i=\$(\"#driving_way select\").val();
        search(start,end,routePolicy[i]); 
        function search(start,end,route){ 
            var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},policy: route});
            driving.search(start,end);
        }
    });
</script>
";
    }
}
