<?php

/* queren.html */
class __TwigTemplate_085757da026327f96b9169f888a277e5968b775404121509302cf1da095cc3da extends Twig_Template
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
    <meta charset=\"UTF-8\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/kuaizhuce.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/B2login.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/shangchuan.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"#\"><i class=\"fa fa-angle-left fa-5x\"></i><p>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>确认信息</h1></a></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"s\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "img_url", array(), "array"), "html", null, true);
        echo "\" style=\"height:70px; width:100px; \"/>
            </div>
        </div>
        <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/cg\" method=\"post\">
            <div class=\"sec1\">
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">所属人:";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "username", array(), "array"), "html", null, true);
        echo "</p>
            </div>
         <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">车型:";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "car", array(), "array"), "html", null, true);
        echo "</p>
            </div>
        <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">期望回收价格:";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "price", array(), "array"), "html", null, true);
        echo "</p>
            </div>
       <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">使用时间:";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "u_time", array(), "array"), "html", null, true);
        echo "</p>
            </div>
           <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">接受结果邮箱:";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "email", array(), "array"), "html", null, true);
        echo "</p>
            </div>       
        <div class=\"sec2\">
            <a href=\"#\"><input type=\"submit\" value=\"提交\"  style=\" height: 4.4rem;
  padding: 0 1rem;
  margin-top: 1rem;
  -webkit-box-sizing: border-box;
   background: #46c68b;
     width: 100%;
  height: 4.4rem;
  \"></a>
        </div>
        </form>
    </section>
</div>
</body>
</html>
<style type=\"text/css\">
    div
    {
        position: relative;
    }
    input
    {
    }
</style>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/jquery.js\"></script>
<script>

</script>";
    }

    public function getTemplateName()
    {
        return "queren.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 95,  123 => 69,  111 => 60,  99 => 51,  87 => 42,  75 => 33,  64 => 25,  57 => 22,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/kuaizhuce.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/B2login.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/shangchuan.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"#\"><i class=\"fa fa-angle-left fa-5x\"></i><p>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>确认信息</h1></a></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"s\">
                <img src=\"{{url}}{{zhi[0]['img_url']}}\" style=\"height:70px; width:100px; \"/>
            </div>
        </div>
        <form action=\"{{url}}index/cg\" method=\"post\">
            <div class=\"sec1\">
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">所属人:{{zhi[0]['username']}}</p>
            </div>
         <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">车型:{{zhi[0]['car']}}</p>
            </div>
        <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">期望回收价格:{{zhi[0]['price']}}</p>
            </div>
       <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">使用时间:{{zhi[0]['u_time']}}</p>
            </div>
           <div class=\"sec1\">
              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">接受结果邮箱:{{zhi[0]['email']}}</p>
            </div>       
        <div class=\"sec2\">
            <a href=\"#\"><input type=\"submit\" value=\"提交\"  style=\" height: 4.4rem;
  padding: 0 1rem;
  margin-top: 1rem;
  -webkit-box-sizing: border-box;
   background: #46c68b;
     width: 100%;
  height: 4.4rem;
  \"></a>
        </div>
        </form>
    </section>
</div>
</body>
</html>
<style type=\"text/css\">
    div
    {
        position: relative;
    }
    input
    {
    }
</style>
<script src=\"{{url}}public/jquery.js\"></script>
<script>

</script>";
    }
}
