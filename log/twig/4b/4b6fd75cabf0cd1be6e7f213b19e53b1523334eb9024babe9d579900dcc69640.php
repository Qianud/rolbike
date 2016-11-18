<?php

/* tuikuan.html */
class __TwigTemplate_dc7cd6ffe1b7fd4d426bfd9c4d50f2bb674daa8b91941c39c161539acf33d7ce extends Twig_Template
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
        <div class=\"left\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1 align=\"center\">押金退款</h1></a></div>
    </header>
    <section>
        <form name=\"agreeform\" onSubmit=\"return defaultagree(this)\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/tk\" method=\"post\">
        <div class=\"sec1\">
            <i class=\"fa fa-mobile fa-5x\"></i>
            <input type=\"text\" name=\"desc\" placeholder=\"|  请输入您退款原因\t\" />
        </div>
        <div class=\"sec1_2\">
            <i class=\"fa fa-unlock-alt fa-5x\"></i>
            <input type=\"text\" name=\"zhifubao\" placeholder=\"|  退款支付宝账号,目前只支持支付宝\t\" />
        </div>
            <div class=\"sec1_3\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/img/kuaizhuce/images/img1_03.png\"/>
                <input type=\"text\" name=\"call_email\" placeholder=\"|  请输入接受结果邮箱\t\" />
            </div>
        <div class=\"sec2_1\">
            <input name=\"\" type=\"checkbox\" onClick=\"agreesubmit(this)\"><p>我同意，<a href=\"#\"><span>《rol退款押金协议》</a>
        </div>
        <div class=\"sec2\">
            <a href=\"renzheng.html\"><input type=\"submit\" value=\"退款\" disabled style=\" height: 4.4rem;
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
<script>
    var checkobj
    function agreesubmit(el){
        checkobj=el
        if (document.all||document.getElementById){
            for (i=0;i<checkobj.form.length;i++){
                var tempobj=checkobj.form.elements[i]
                if(tempobj.type.toLowerCase()==\"submit\")
                    tempobj.disabled=!checkobj.checked
            }
        }
    }
    function defaultagree(el){
        if (!document.all && !document.getElementById){
            if (window.checkobj && checkobj.checked)
                return true
            else{
                alert(\"Please read/accept terms to submit form\")
                return false
            }
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "tuikuan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  47 => 18,  40 => 14,  30 => 7,  26 => 6,  19 => 1,);
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
        <div class=\"left\"><a href=\"{{url}}index/index\"><i class=\"fa fa-angle-left fa-5x\"></i><p\t>关闭</p></a></div>
        <div class=\"right\"><a href=\"#\"><h1 align=\"center\">押金退款</h1></a></div>
    </header>
    <section>
        <form name=\"agreeform\" onSubmit=\"return defaultagree(this)\" action=\"{{url}}index/tk\" method=\"post\">
        <div class=\"sec1\">
            <i class=\"fa fa-mobile fa-5x\"></i>
            <input type=\"text\" name=\"desc\" placeholder=\"|  请输入您退款原因\t\" />
        </div>
        <div class=\"sec1_2\">
            <i class=\"fa fa-unlock-alt fa-5x\"></i>
            <input type=\"text\" name=\"zhifubao\" placeholder=\"|  退款支付宝账号,目前只支持支付宝\t\" />
        </div>
            <div class=\"sec1_3\">
                <img src=\"{{url}}public/img/kuaizhuce/images/img1_03.png\"/>
                <input type=\"text\" name=\"call_email\" placeholder=\"|  请输入接受结果邮箱\t\" />
            </div>
        <div class=\"sec2_1\">
            <input name=\"\" type=\"checkbox\" onClick=\"agreesubmit(this)\"><p>我同意，<a href=\"#\"><span>《rol退款押金协议》</a>
        </div>
        <div class=\"sec2\">
            <a href=\"renzheng.html\"><input type=\"submit\" value=\"退款\" disabled style=\" height: 4.4rem;
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
<script>
    var checkobj
    function agreesubmit(el){
        checkobj=el
        if (document.all||document.getElementById){
            for (i=0;i<checkobj.form.length;i++){
                var tempobj=checkobj.form.elements[i]
                if(tempobj.type.toLowerCase()==\"submit\")
                    tempobj.disabled=!checkobj.checked
            }
        }
    }
    function defaultagree(el){
        if (!document.all && !document.getElementById){
            if (window.checkobj && checkobj.checked)
                return true
            else{
                alert(\"Please read/accept terms to submit form\")
                return false
            }
        }
    }
</script>";
    }
}
