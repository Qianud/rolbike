<?php

/* confirming.html */
class __TwigTemplate_db2bc66f92e7e995a40e22d3f3bdfd73b24927e9b38550d2745436f7207a7daf extends Twig_Template
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
    <title>退款</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/kuaizhuce.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"login.html\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1 align=\"center\">确认信息</h1></a></div>
    </header>
    <section>
        <form name=\"agreeform\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/ruku\" method=\"post\">
            <div class=\"sec1\">

              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">退款人:";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "username", array(), "array"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"sec1\">
                <i class=\"fa fa-mobile fa-5x\"></i>
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "desc", array(), "array"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"sec1_2\">
                <i class=\"fa fa-unlock-alt fa-5x\"></i>
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "zhifubao", array(), "array"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"sec1_3\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/kuaizhuce/images/img1_03.png\"/>
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zhi"]) ? $context["zhi"] : null), 0, array(), "array"), "call_email", array(), "array"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"sec2\">
                <a href=\"renzheng.html\"><input type=\"submit\" value=\"确认退款\"  style=\" height: 4.4rem;
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
";
    }

    public function getTemplateName()
    {
        return "confirming.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 57,  88 => 50,  82 => 47,  69 => 37,  56 => 27,  44 => 18,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>退款</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/kuaizhuce.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"login.html\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1 align=\"center\">确认信息</h1></a></div>
    </header>
    <section>
        <form name=\"agreeform\" action=\"{{url}}index/ruku\" method=\"post\">
            <div class=\"sec1\">

              <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">退款人:{{zhi[0]['username']}}</p>
            </div>
            <div class=\"sec1\">
                <i class=\"fa fa-mobile fa-5x\"></i>
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">{{zhi[0]['desc']}}</p>
            </div>
            <div class=\"sec1_2\">
                <i class=\"fa fa-unlock-alt fa-5x\"></i>
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">{{zhi[0]['zhifubao']}}</p>
            </div>
            <div class=\"sec1_3\">
                <img src=\"{{url}}public/img/kuaizhuce/images/img1_03.png\"/>
                <p style=\"width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;
  \">{{zhi[0]['call_email']}}</p>
            </div>
            <div class=\"sec2\">
                <a href=\"renzheng.html\"><input type=\"submit\" value=\"确认退款\"  style=\" height: 4.4rem;
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
";
    }
}
