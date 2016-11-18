<?php

/* recycling.html */
class __TwigTemplate_baeb898a7a001d68f61f5b64c2c4d9f39cae827875c917df91f8460dabf29cac extends Twig_Template
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
    <!--<script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>-->
    <!--<script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\"><i class=\"fa fa-angle-left fa-5x\"></i><p>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>上传您的照片</h1></a></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"se\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/images/img_03.png\" style=\"height:100px;\"/>
            </div>
            <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/hs\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"se\">
                <div>
                    <input type=\"file\" name=\"filename\" style=\"  opacity:0;
            filter:alpha(opacity=0);
            height: 96px;
            width: 170px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9;\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/shangchuan/images/img_03.png\" style=\"height: 100px;\"/>
                </div>
                <!--<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/shangchuan/images/img_03.png\"/>-->
            </div>
        </div>
        <div class=\"sec1\">
            <input type=\"text\" name=\"car\" placeholder=\"|  请输入您车型\t\" style=\"width:310px; \" />
        </div>
        <div class=\"sec1\">

            <input type=\"text\" name=\"price\" placeholder=\"|  请输入您期望回收价格\t\" style=\"width:310px; \" />
        </div>
        <div class=\"sec1\">

            <input type=\"text\" name=\"u_time\" placeholder=\"|  请输入使用时间/默认月\t\" style=\"width:310px; \" />
            <select name=\"year\" id=\"\" style=\" /*Chrome和Firefox里面的边框是不一样的，所以复写了一下*/
  border: solid 1px #000;
  /*很关键：将默认的select选择框样式清除*/
  appearance:none;
  margin-top: 10px;
  margin-left: 20px;
  -moz-appearance:none;
  -webkit-appearance:none;

  /*为下拉小箭头留出一点位置，避免被文字覆盖*/
  padding-right: 14px;\">
                <option value=\"请选择月/年\">请选择月/年</option>
                <option value=\"月\">月</option>
                <option value=\"年\">年</option>
            </select>
        </div>
        <div class=\"sec1\">

            <input type=\"text\" name=\"email\" placeholder=\"|  请输入接受结果邮箱\t\" style=\"width:310px; \" />
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
        // line 96
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/jquery.js\"></script>
<script>
</script>";
    }

    public function getTemplateName()
    {
        return "recycling.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 96,  86 => 39,  81 => 37,  67 => 26,  62 => 24,  53 => 18,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
    <!--<script src=\"http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js\"></script>-->
    <!--<script src=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js\"></script>-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"{{url}}index/index\"><i class=\"fa fa-angle-left fa-5x\"></i><p>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>上传您的照片</h1></a></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"se\">
                    <img src=\"{{url}}public/img/images/img_03.png\" style=\"height:100px;\"/>
            </div>
            <form action=\"{{url}}index/hs\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"se\">
                <div>
                    <input type=\"file\" name=\"filename\" style=\"  opacity:0;
            filter:alpha(opacity=0);
            height: 96px;
            width: 170px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9;\">
                    <img src=\"{{url}}public/img/shangchuan/images/img_03.png\" style=\"height: 100px;\"/>
                </div>
                <!--<img src=\"{{url}}public/img/shangchuan/images/img_03.png\"/>-->
            </div>
        </div>
        <div class=\"sec1\">
            <input type=\"text\" name=\"car\" placeholder=\"|  请输入您车型\t\" style=\"width:310px; \" />
        </div>
        <div class=\"sec1\">

            <input type=\"text\" name=\"price\" placeholder=\"|  请输入您期望回收价格\t\" style=\"width:310px; \" />
        </div>
        <div class=\"sec1\">

            <input type=\"text\" name=\"u_time\" placeholder=\"|  请输入使用时间/默认月\t\" style=\"width:310px; \" />
            <select name=\"year\" id=\"\" style=\" /*Chrome和Firefox里面的边框是不一样的，所以复写了一下*/
  border: solid 1px #000;
  /*很关键：将默认的select选择框样式清除*/
  appearance:none;
  margin-top: 10px;
  margin-left: 20px;
  -moz-appearance:none;
  -webkit-appearance:none;

  /*为下拉小箭头留出一点位置，避免被文字覆盖*/
  padding-right: 14px;\">
                <option value=\"请选择月/年\">请选择月/年</option>
                <option value=\"月\">月</option>
                <option value=\"年\">年</option>
            </select>
        </div>
        <div class=\"sec1\">

            <input type=\"text\" name=\"email\" placeholder=\"|  请输入接受结果邮箱\t\" style=\"width:310px; \" />
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
