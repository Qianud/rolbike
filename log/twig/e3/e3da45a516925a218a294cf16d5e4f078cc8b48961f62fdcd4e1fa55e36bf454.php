<?php

/* gossip/forum.html */
class __TwigTemplate_662ab8b44a9077ccfa7d62aa7ed768e4c39b9fccb4756b2740d216bc326383da extends Twig_Template
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
<meta name=\"keywords\" content=\"mobile web app, mobile template, mobile design, mobile app design, mobile app theme, mobile wordpress theme, my mobile app\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no\" />
<meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
<meta content=\"black\" name=\"apple-mobile-web-app-status-bar-style\" />
<meta content=\"telephone=no\" name=\"format-detection\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/gossip/css/css.css\">
<title>骑谈列表页</title>
</head>

<body>
<div class=\"main\">
    <div class=\"logo\"><div class=\"img\"><!-- <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/gossip/img/logo.png\"> --></div></div>
    <div class=\"header\">
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\" class=\"go_left\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/gossip/img/go.png\"></a>
            <span>骑谈社区</span>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "gossip/upload\" class=\"fa_left\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/gossip/img/fabu.png\"></a>
    
    </div>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["re"]) ? $context["re"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 24
            echo "    <div class=\"wrap\" >
    \t\t<UL id=\"container\">
            
            <LI class=\"box\" >
            \t\t<div class=\"author\">
                    \t\t<a href=\"#\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/gossip/img/icon/icon2.png\"></a>
                            <p class=\"author_name\">楼主：";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "name", array()), "html", null, true);
            echo "</p>
                            <p class=\"author_time\">时间：";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "time", array()), "html", null, true);
            echo "</p>
                            <a href=\"#\" class=\"close\"><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/gossip/img/close.png\"></a>
                    </div>
                    <a href=\"#\">
                        <div class=\"topic\">
                            <div><img class=\"lazy\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/gossip/img/data.png\"  data-original=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "img_url", array()), "html", null, true);
            echo "\"></div>
                            <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</p>
                        </div>
                    </a>
                    <!-- <div class=\"click_hf\">
                        <a class=\"zan\"><img  src=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/gossip/img/zan1.png\"></a>
                        <span>15</span>
                        <a  class=\"huifu\"><img src=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "public/gossip/img/huifu.png\"></a>
                        <a  class=\"fenx\"></a>                  
                    </div> -->
            
            </LI>           
           
            </UL>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    
    </div>
    
    
</div>    

</body>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/gossip/js/jquery-1.11.0.min.js\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/gossip/js/jquery.lazyload.js?v=1.9.1\"></script>
<script type=\"text/javascript\">
  \$(function() {
         \$(\"img.lazy\").lazyload({
\t\t\t effect: \"fadeIn\",
\t\t\t placeholder: \"img/data.png\",
\t\t\t threshold :200
\t\t\t });
  });

</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "gossip/forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 60,  132 => 59,  122 => 51,  108 => 43,  103 => 41,  96 => 37,  89 => 36,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  63 => 24,  59 => 23,  51 => 20,  44 => 18,  39 => 16,  30 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"keywords\" content=\"mobile web app, mobile template, mobile design, mobile app design, mobile app theme, mobile wordpress theme, my mobile app\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no\" />
<meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
<meta content=\"black\" name=\"apple-mobile-web-app-status-bar-style\" />
<meta content=\"telephone=no\" name=\"format-detection\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/gossip/css/css.css\">
<title>骑谈列表页</title>
</head>

<body>
<div class=\"main\">
    <div class=\"logo\"><div class=\"img\"><!-- <img src=\"{{url}}public/gossip/img/logo.png\"> --></div></div>
    <div class=\"header\">
            <a href=\"{{url}}index/index\" class=\"go_left\"><img src=\"{{url}}public/gossip/img/go.png\"></a>
            <span>骑谈社区</span>
            <a href=\"{{url}}gossip/upload\" class=\"fa_left\"><img src=\"{{url}}public/gossip/img/fabu.png\"></a>
    
    </div>
    {% for val in re %}
    <div class=\"wrap\" >
    \t\t<UL id=\"container\">
            
            <LI class=\"box\" >
            \t\t<div class=\"author\">
                    \t\t<a href=\"#\"><img src=\"{{url}}public/gossip/img/icon/icon2.png\"></a>
                            <p class=\"author_name\">楼主：{{val.name}}</p>
                            <p class=\"author_time\">时间：{{val.time}}</p>
                            <a href=\"#\" class=\"close\"><img src=\"{{url}}public/gossip/img/close.png\"></a>
                    </div>
                    <a href=\"#\">
                        <div class=\"topic\">
                            <div><img class=\"lazy\" src=\"{{url}}public/gossip/img/data.png\"  data-original=\"{{url}}{{val.img_url}}\"></div>
                            <p>{{val.content}}</p>
                        </div>
                    </a>
                    <!-- <div class=\"click_hf\">
                        <a class=\"zan\"><img  src=\"{{url}}public/gossip/img/zan1.png\"></a>
                        <span>15</span>
                        <a  class=\"huifu\"><img src=\"{{url}}public/gossip/img/huifu.png\"></a>
                        <a  class=\"fenx\"></a>                  
                    </div> -->
            
            </LI>           
           
            </UL>
      {% endfor %}

    
    </div>
    
    
</div>    

</body>
<script src=\"{{url}}public/gossip/js/jquery-1.11.0.min.js\"></script>
<script src=\"{{url}}public/gossip/js/jquery.lazyload.js?v=1.9.1\"></script>
<script type=\"text/javascript\">
  \$(function() {
         \$(\"img.lazy\").lazyload({
\t\t\t effect: \"fadeIn\",
\t\t\t placeholder: \"img/data.png\",
\t\t\t threshold :200
\t\t\t });
  });

</script>
</html>
";
    }
}
