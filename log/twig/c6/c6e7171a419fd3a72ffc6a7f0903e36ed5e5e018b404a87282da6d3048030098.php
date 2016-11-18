<?php

/* h-login.html */
class __TwigTemplate_abd2b92fced58e7773cbe38fb84e99fc107ce2eda4311414af26df8002deeeb6 extends Twig_Template
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
    <title>个人信息补充</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/css/renzheng.css\"/>
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
        <div class=\"left\"><a href=\"kuaizhuce.html\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>个人信息补充</h1></a></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/img/B2login/images/3.png\"/>&nbsp
                <p style=\"font-size: 15px;\">姓&nbsp名</p><div class=\"left\"><input type=\"text\" placeholder=\"请输入您的真实姓名\" /></div>
            </div>
            <div class=\"sec\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/1.png\"/>&nbsp
                <p style=\"font-size: 15px\">身份证号 </p><div class=\"left\"><input type=\"text\" placeholder=\"请输入您的身份证号\" /></div>

            </div>
            <div class=\"sec\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/B2login/images/2.png\"/>&nbsp
                <p style=\"font-size: 15px\">手机号</p> <div class=\"left\">
                <input id=\"tel\"  onkeyup=\"chekNum(this)\" onblur=\"fun(this)\" type=\"text\" placeholder=\"请输入您的11位手机号\" />
            </div>
            </div>
        </div>
        <div class=\"sec2\">
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/x\"><button>下一步</button></a>
        </div>
    </section>

</div>
</body>
</html>
<script type=\"text/javascript\">
    //\tfunction fun(obj){
    //\t\tvar tel=obj.value;
    ////\t\tconsole.log(tel)
    //\t\tvar reg=/^\\d{11}\$/;
    //\t\tif(reg.test(tel)){
    //          document.getElementById('tel').innerHTML=\"<font color='blue'>ok</font>\";
    //          return true;
    //      }else{
    //          document.getElementById('tel').innerHTML=\"<font color='red'>手机号必须为11位数字</font>\";
    //         return false;
    //      }
    //\t}
    function chekNum(obj){
        obj.value = obj.value.replace(/[^\\d.]/g,\"\");
        obj.value = obj.value.replace(/^\\./g,\"\");
        obj.value = obj.value.replace(/\\.{2,}/g,\".\");
        obj.value = obj.value.replace(\".\",\"\$#\$\").replace(/\\./g,\"\").replace(\"\$#\$\",\".\");
        if(obj.value.length > 11){
            obj.value = obj.value.substring(0,11);

        }
    }

</script>";
    }

    public function getTemplateName()
    {
        return "h-login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 36,  61 => 29,  53 => 24,  46 => 20,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>个人信息补充</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/renzheng.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/css/font-awesome.min.css\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"kuaizhuce.html\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1>个人信息补充</h1></a></div>
    </header>
    <section>
        <div class=\"sec1\">
            <div class=\"sec\">
                <img src=\"{{url}}/public/img/B2login/images/3.png\"/>&nbsp
                <p style=\"font-size: 15px;\">姓&nbsp名</p><div class=\"left\"><input type=\"text\" placeholder=\"请输入您的真实姓名\" /></div>
            </div>
            <div class=\"sec\">
                <img src=\"{{url}}public/img/B2login/images/1.png\"/>&nbsp
                <p style=\"font-size: 15px\">身份证号 </p><div class=\"left\"><input type=\"text\" placeholder=\"请输入您的身份证号\" /></div>

            </div>
            <div class=\"sec\">
                <img src=\"{{url}}public/img/B2login/images/2.png\"/>&nbsp
                <p style=\"font-size: 15px\">手机号</p> <div class=\"left\">
                <input id=\"tel\"  onkeyup=\"chekNum(this)\" onblur=\"fun(this)\" type=\"text\" placeholder=\"请输入您的11位手机号\" />
            </div>
            </div>
        </div>
        <div class=\"sec2\">
            <a href=\"{{url}}index/x\"><button>下一步</button></a>
        </div>
    </section>

</div>
</body>
</html>
<script type=\"text/javascript\">
    //\tfunction fun(obj){
    //\t\tvar tel=obj.value;
    ////\t\tconsole.log(tel)
    //\t\tvar reg=/^\\d{11}\$/;
    //\t\tif(reg.test(tel)){
    //          document.getElementById('tel').innerHTML=\"<font color='blue'>ok</font>\";
    //          return true;
    //      }else{
    //          document.getElementById('tel').innerHTML=\"<font color='red'>手机号必须为11位数字</font>\";
    //         return false;
    //      }
    //\t}
    function chekNum(obj){
        obj.value = obj.value.replace(/[^\\d.]/g,\"\");
        obj.value = obj.value.replace(/^\\./g,\"\");
        obj.value = obj.value.replace(/\\.{2,}/g,\".\");
        obj.value = obj.value.replace(\".\",\"\$#\$\").replace(/\\./g,\"\").replace(\"\$#\$\",\".\");
        if(obj.value.length > 11){
            obj.value = obj.value.substring(0,11);

        }
    }

</script>";
    }
}
