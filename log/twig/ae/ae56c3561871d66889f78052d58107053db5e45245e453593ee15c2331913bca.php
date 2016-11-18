<?php

/* Redeem.html */
class __TwigTemplate_43fea20051356d03d4fcdbba42d10aabb15c9aecfdf33dbed30c4147e6f5520e extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<div id=\"div1a\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Rol租车抽奖</title>
    <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/zhuanpan/style.css\" rel=\"stylesheet\" type=\"text/css\">

    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/zhuanpan/js/jquery-1.10.2.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/zhuanpan/js/awardRotate.js\"></script>

    <script type=\"text/javascript\">
        var turnplate={
            restaraunts:[],\t\t\t\t//大转盘奖品名称
            colors:[],\t\t\t\t\t//大转盘奖品区块对应背景颜色
            outsideRadius:192,\t\t\t//大转盘外圆的半径
            textRadius:155,\t\t\t\t//大转盘奖品位置距离圆心的距离
            insideRadius:68,\t\t\t//大转盘内圆的半径
            startAngle:0,\t\t\t\t//开始角度

            bRotate:false\t\t\t\t//false:停止;ture:旋转
        };

        \$(document).ready(function(){
            //动态添加大转盘的奖品与奖品区域背景颜色
            turnplate.restaraunts = [\"谢谢参与\", \"0.5元租车金\", \"谢谢参与\", \"1元租车金\", \"谢谢参与\", \"3元租车金\"];
            turnplate.colors = [\"#FFF4D6\", \"#FFFFFF\", \"#FFF4D6\", \"#FFFFFF\",\"#FFF4D6\", \"#FFFFFF\"];


            var rotateTimeOut = function (){
                \$('#wheelcanvas').rotate({
                    angle:0,
                    animateTo:2160,
                    duration:8000,
                    callback:function (){
                        alert('网络超时，请检查您的网络设置！');
                    }
                });
            };

            //旋转转盘 item:奖品位置; txt：提示语;
            var rotateFn = function (item, txt){
                var angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
                if(angles<270){
                    angles = 270 - angles;
                }else{
                    angles = 360 - angles + 270;
                }
                \$('#wheelcanvas').stopRotate();
                \$('#wheelcanvas').rotate({
                    angle:0,
                    animateTo:angles+1800,
                    duration:8000,
                    callback:function (){
                        alert(txt);
                        turnplate.bRotate = !turnplate.bRotate;
                    }
                });
            };

            \$('.pointer').click(function (){
                if(\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "\">=30)
                {
                    var xhr=new XMLHttpRequest();
                    xhr.open('get','";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "desc/zhuanpans');
                    xhr.send(null);
                    xhr.onreadystatechange=function(){
                        if(xhr.readyState==4  && xhr.status==200){
                            if(turnplate.bRotate)return;
                            turnplate.bRotate = !turnplate.bRotate;
                            //获取随机数(奖品个数范围内)
                            var item = rnd(1,turnplate.restaraunts.length);
                            //奖品数量等于10,指针落在对应奖品区域的中心角度[252, 216, 180, 144, 108, 72, 36, 360, 324, 288]
                            rotateFn(item, turnplate.restaraunts[item-1]);
                            console.log(item);
                            window.onload=function(){
                                if (location.href.indexOf(\"?xyz=\")<0)
                                {
                                    location.href=location.href+\"?xyz=\"+Math.random();
                                }
                            }
                            //document.getElementById('div1a').innerHTML=xhr.responseText;
                            //document.getElementById('div1').innerHTML=xhr.responseText;
                        }
                    }

                }
                else
                {
                    alert(\"积分余额不足，每日签到可送积分噢!\");
                }

            });
        });

        function rnd(n, m){
            var random = Math.floor(Math.random()*(m-n+1)+n);
            return random;

        }


        //页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
        window.onload=function(){
            drawRouletteWheel();
        };

        function drawRouletteWheel() {
            var canvas = document.getElementById(\"wheelcanvas\");
            if (canvas.getContext) {
                //根据奖品个数计算圆周角度
                var arc = Math.PI / (turnplate.restaraunts.length/2);
                var ctx = canvas.getContext(\"2d\");
                //在给定矩形内清空一个矩形
                ctx.clearRect(0,0,422,422);
                //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式
                ctx.strokeStyle = \"#FFBE04\";
                //font 属性设置或返回画布上文本内容的当前字体属性
                ctx.font = '16px Microsoft YaHei';
                for(var i = 0; i < turnplate.restaraunts.length; i++) {
                    var angle = turnplate.startAngle + i * arc;
                    ctx.fillStyle = turnplate.colors[i];
                    ctx.beginPath();
                    //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）
                    ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);
                    ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
                    ctx.stroke();
                    ctx.fill();
                    //锁画布(为了保存之前的画布状态)
                    ctx.save();

                    //----绘制奖品开始----
                    ctx.fillStyle = \"#E5302F\";
                    var text = turnplate.restaraunts[i];
                    var line_height = 17;
                    //translate方法重新映射画布上的 (0,0) 位置
                    ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);

                    //rotate方法旋转当前的绘图
                    ctx.rotate(angle + arc / 2 + Math.PI / 2);

                    /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
                    if(text.indexOf(\"M\")>0){//流量包
                        var texts = text.split(\"M\");
                        for(var j = 0; j<texts.length; j++){
                            ctx.font = j == 0?'bold 20px Microsoft YaHei':'16px Microsoft YaHei';
                            if(j == 0){
                                ctx.fillText(texts[j]+\"M\", -ctx.measureText(texts[j]+\"M\").width / 2, j * line_height);
                            }else{
                                ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
                            }
                        }
                    }else if(text.indexOf(\"M\") == -1 && text.length>6){//奖品名称长度超过一定范围
                        text = text.substring(0,6)+\"||\"+text.substring(6);
                        var texts = text.split(\"||\");
                        for(var j = 0; j<texts.length; j++){
                            ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
                        }
                    }else{
                        //在画布上绘制填色的文本。文本的默认颜色是黑色
                        //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
                        ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
                    }

                    //添加对应图标
                    if(text.indexOf(\"闪币\")>0){
                        var img= document.getElementById(\"shan-img\");
                        img.onload=function(){
                            ctx.drawImage(img,-15,10);
                        };
                        ctx.drawImage(img,-15,10);
                    }else if(text.indexOf(\"谢谢参与\")>=0){
                        var img= document.getElementById(\"sorry-img\");
                        img.onload=function(){
                            ctx.drawImage(img,-15,10);
                        };
                        ctx.drawImage(img,-15,10);
                    }
                    //把当前画布返回（调整）到上一个save()状态之前
                    ctx.restore();
                    //----绘制奖品结束----
                }
            }
        }

      //  history.go(0)

    </script>
</head>
<body style=\"background:#e62d2d;overflow-x:hidden;\">
<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/zhuanpan/images/1.png\" id=\"shan-img\" style=\"display:none;\" />
<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/zhuanpan/images/2.png\" id=\"sorry-img\" style=\"display:none;\" />
<div class=\"banner\">
    <div class=\"turnplate\" style=\"background-image:url(images/turnplate-bg.png);background-size:100% 100%;\">
        <canvas class=\"item\" id=\"wheelcanvas\" width=\"422px\" height=\"422px\"></canvas>
        <img class=\"pointer\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/public/zhuanpan/images/turnplate-pointer.png\"/>
    </div>
</div>

<div style=\"display:none\">
    <script type=\"text/javascript\">
        var _bdhmProtocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");
        document.write(unescape(\"%3Cscript src='\" + _bdhmProtocol + \"hm.baidu.com/h.js%3F6f798e51a1cd93937ee8293eece39b1a' type='text/javascript'%3E%3C/script%3E\"));
    </script>
    <script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_5718743'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"s9.cnzz.com/stat.php%3Fid%3D5718743%26show%3Dpic2' type='text/javascript'%3E%3C/script%3E\"));</script>
</div>
<font color=\"white\" size=\"4px\" style=\"padding:60px\">您当前的积分余额：";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</font>
<br>
<p>&#12288;</p>
<font color=\"white\" size=\"4px\" style=\"padding: 0px;margin: 20px\">您每一次旋转将使用30积分!</font>

<br>
<hr>
<div style=\"margin: 0px 0px 130px 130px\"><p>&#12288;</p><a href=\"";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "index/index\"><button type=\"button\" class=\"btn btn-default\">返回首页</button></a></div>
</body>
</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "Redeem.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 217,  254 => 210,  240 => 199,  233 => 195,  229 => 194,  100 => 68,  94 => 65,  39 => 13,  35 => 12,  30 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<div id=\"div1a\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Rol租车抽奖</title>
    <link rel=\"stylesheet\" href=\"http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link href=\"{{url}}/public/zhuanpan/style.css\" rel=\"stylesheet\" type=\"text/css\">

    <script type=\"text/javascript\" src=\"{{url}}/public/zhuanpan/js/jquery-1.10.2.js\"></script>
    <script type=\"text/javascript\" src=\"{{url}}/public/zhuanpan/js/awardRotate.js\"></script>

    <script type=\"text/javascript\">
        var turnplate={
            restaraunts:[],\t\t\t\t//大转盘奖品名称
            colors:[],\t\t\t\t\t//大转盘奖品区块对应背景颜色
            outsideRadius:192,\t\t\t//大转盘外圆的半径
            textRadius:155,\t\t\t\t//大转盘奖品位置距离圆心的距离
            insideRadius:68,\t\t\t//大转盘内圆的半径
            startAngle:0,\t\t\t\t//开始角度

            bRotate:false\t\t\t\t//false:停止;ture:旋转
        };

        \$(document).ready(function(){
            //动态添加大转盘的奖品与奖品区域背景颜色
            turnplate.restaraunts = [\"谢谢参与\", \"0.5元租车金\", \"谢谢参与\", \"1元租车金\", \"谢谢参与\", \"3元租车金\"];
            turnplate.colors = [\"#FFF4D6\", \"#FFFFFF\", \"#FFF4D6\", \"#FFFFFF\",\"#FFF4D6\", \"#FFFFFF\"];


            var rotateTimeOut = function (){
                \$('#wheelcanvas').rotate({
                    angle:0,
                    animateTo:2160,
                    duration:8000,
                    callback:function (){
                        alert('网络超时，请检查您的网络设置！');
                    }
                });
            };

            //旋转转盘 item:奖品位置; txt：提示语;
            var rotateFn = function (item, txt){
                var angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
                if(angles<270){
                    angles = 270 - angles;
                }else{
                    angles = 360 - angles + 270;
                }
                \$('#wheelcanvas').stopRotate();
                \$('#wheelcanvas').rotate({
                    angle:0,
                    animateTo:angles+1800,
                    duration:8000,
                    callback:function (){
                        alert(txt);
                        turnplate.bRotate = !turnplate.bRotate;
                    }
                });
            };

            \$('.pointer').click(function (){
                if(\"{{data}}\">=30)
                {
                    var xhr=new XMLHttpRequest();
                    xhr.open('get','{{url}}desc/zhuanpans');
                    xhr.send(null);
                    xhr.onreadystatechange=function(){
                        if(xhr.readyState==4  && xhr.status==200){
                            if(turnplate.bRotate)return;
                            turnplate.bRotate = !turnplate.bRotate;
                            //获取随机数(奖品个数范围内)
                            var item = rnd(1,turnplate.restaraunts.length);
                            //奖品数量等于10,指针落在对应奖品区域的中心角度[252, 216, 180, 144, 108, 72, 36, 360, 324, 288]
                            rotateFn(item, turnplate.restaraunts[item-1]);
                            console.log(item);
                            window.onload=function(){
                                if (location.href.indexOf(\"?xyz=\")<0)
                                {
                                    location.href=location.href+\"?xyz=\"+Math.random();
                                }
                            }
                            //document.getElementById('div1a').innerHTML=xhr.responseText;
                            //document.getElementById('div1').innerHTML=xhr.responseText;
                        }
                    }

                }
                else
                {
                    alert(\"积分余额不足，每日签到可送积分噢!\");
                }

            });
        });

        function rnd(n, m){
            var random = Math.floor(Math.random()*(m-n+1)+n);
            return random;

        }


        //页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
        window.onload=function(){
            drawRouletteWheel();
        };

        function drawRouletteWheel() {
            var canvas = document.getElementById(\"wheelcanvas\");
            if (canvas.getContext) {
                //根据奖品个数计算圆周角度
                var arc = Math.PI / (turnplate.restaraunts.length/2);
                var ctx = canvas.getContext(\"2d\");
                //在给定矩形内清空一个矩形
                ctx.clearRect(0,0,422,422);
                //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式
                ctx.strokeStyle = \"#FFBE04\";
                //font 属性设置或返回画布上文本内容的当前字体属性
                ctx.font = '16px Microsoft YaHei';
                for(var i = 0; i < turnplate.restaraunts.length; i++) {
                    var angle = turnplate.startAngle + i * arc;
                    ctx.fillStyle = turnplate.colors[i];
                    ctx.beginPath();
                    //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）
                    ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);
                    ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
                    ctx.stroke();
                    ctx.fill();
                    //锁画布(为了保存之前的画布状态)
                    ctx.save();

                    //----绘制奖品开始----
                    ctx.fillStyle = \"#E5302F\";
                    var text = turnplate.restaraunts[i];
                    var line_height = 17;
                    //translate方法重新映射画布上的 (0,0) 位置
                    ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);

                    //rotate方法旋转当前的绘图
                    ctx.rotate(angle + arc / 2 + Math.PI / 2);

                    /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
                    if(text.indexOf(\"M\")>0){//流量包
                        var texts = text.split(\"M\");
                        for(var j = 0; j<texts.length; j++){
                            ctx.font = j == 0?'bold 20px Microsoft YaHei':'16px Microsoft YaHei';
                            if(j == 0){
                                ctx.fillText(texts[j]+\"M\", -ctx.measureText(texts[j]+\"M\").width / 2, j * line_height);
                            }else{
                                ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
                            }
                        }
                    }else if(text.indexOf(\"M\") == -1 && text.length>6){//奖品名称长度超过一定范围
                        text = text.substring(0,6)+\"||\"+text.substring(6);
                        var texts = text.split(\"||\");
                        for(var j = 0; j<texts.length; j++){
                            ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
                        }
                    }else{
                        //在画布上绘制填色的文本。文本的默认颜色是黑色
                        //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
                        ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
                    }

                    //添加对应图标
                    if(text.indexOf(\"闪币\")>0){
                        var img= document.getElementById(\"shan-img\");
                        img.onload=function(){
                            ctx.drawImage(img,-15,10);
                        };
                        ctx.drawImage(img,-15,10);
                    }else if(text.indexOf(\"谢谢参与\")>=0){
                        var img= document.getElementById(\"sorry-img\");
                        img.onload=function(){
                            ctx.drawImage(img,-15,10);
                        };
                        ctx.drawImage(img,-15,10);
                    }
                    //把当前画布返回（调整）到上一个save()状态之前
                    ctx.restore();
                    //----绘制奖品结束----
                }
            }
        }

      //  history.go(0)

    </script>
</head>
<body style=\"background:#e62d2d;overflow-x:hidden;\">
<img src=\"{{url}}/public/zhuanpan/images/1.png\" id=\"shan-img\" style=\"display:none;\" />
<img src=\"{{url}}/public/zhuanpan/images/2.png\" id=\"sorry-img\" style=\"display:none;\" />
<div class=\"banner\">
    <div class=\"turnplate\" style=\"background-image:url(images/turnplate-bg.png);background-size:100% 100%;\">
        <canvas class=\"item\" id=\"wheelcanvas\" width=\"422px\" height=\"422px\"></canvas>
        <img class=\"pointer\" src=\"{{url}}/public/zhuanpan/images/turnplate-pointer.png\"/>
    </div>
</div>

<div style=\"display:none\">
    <script type=\"text/javascript\">
        var _bdhmProtocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");
        document.write(unescape(\"%3Cscript src='\" + _bdhmProtocol + \"hm.baidu.com/h.js%3F6f798e51a1cd93937ee8293eece39b1a' type='text/javascript'%3E%3C/script%3E\"));
    </script>
    <script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_5718743'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"s9.cnzz.com/stat.php%3Fid%3D5718743%26show%3Dpic2' type='text/javascript'%3E%3C/script%3E\"));</script>
</div>
<font color=\"white\" size=\"4px\" style=\"padding:60px\">您当前的积分余额：{{data}}</font>
<br>
<p>&#12288;</p>
<font color=\"white\" size=\"4px\" style=\"padding: 0px;margin: 20px\">您每一次旋转将使用30积分!</font>

<br>
<hr>
<div style=\"margin: 0px 0px 130px 130px\"><p>&#12288;</p><a href=\"{{url}}index/index\"><button type=\"button\" class=\"btn btn-default\">返回首页</button></a></div>
</body>
</div>
</html>
";
    }
}
