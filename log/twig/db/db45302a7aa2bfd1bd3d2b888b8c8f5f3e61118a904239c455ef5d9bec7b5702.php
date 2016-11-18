<?php

/* weizhi.html */
class __TwigTemplate_97ec7a072207eb0178ca5a1236892bbc9577835381cf29cd798a6d7791a01ab8 extends Twig_Template
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <style type=\"text/css\">
        body, html,#allmap {width: 100%;height: 80%;overflow: hidden;margin:0;}
        #l-map{height:80%;width:100%;float:left;border-right:2px solid #bcbcbc;}
        #r-result{height:80%;width:10%;float:left;}
    </style>
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=1.3&ak=zNNSXLI20Z5l9dtossE5LQjwQTCOcTQH\"></script>
    目的地位置:<span id=\"span\"></span></br>
    <p style=\"font-size: 30px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">欢迎联系我们,rol开发团队</p></hr>
    <p style=\"font-size: 30px; margin-left: 60px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 10px;\">本公司强大开发团队以及丰富的运维经验期待个人的加入</p></hr>
    <p style=\"font-size: 30px; margin-left: 120px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">地址:北京市海淀区上地软件园57号</p></hr>
    <p style=\"font-size: 30px; margin-left:240px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">telephone:13677516111</p>
    <p style=\"font-size: 30px; margin-left:360px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">email:18801262753@163.com</p>
</head>
<body>
<div id=\"allmap\" ></div>
</body>
</html>

<script type=\"text/javascript\">
    var map = new BMap.Map(\"allmap\");
    var point = new BMap.Point(116.331398,39.897445);
    map.centerAndZoom(point,15);

    var geolocation = new BMap.Geolocation();

    var gc = new BMap.Geocoder();

    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(116.31060203757);
            var jinweidu= 116.31060203757+','+39.967283678514;
            //alert('您的位置：'+r.point.lng+','+r.point.lat);

            var pt = r.point;
            var message = \"\";
            gc.getLocation(pt, function(rs){
                var addComp = rs.addressComponents;
                var address=addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber;
                document.getElementById('span').innerHTML=address;
                var opts = {
                    width : 100,    // 信息窗口宽度
                    height: 40,     // 信息窗口高度
                    title : \"目的地位置：\"  // 信息窗口标题
                }
                var infoWindow = new BMap.InfoWindow(addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber, opts);  // 创建信息窗口对象
                map.openInfoWindow(infoWindow,r.point); //开启信息窗口

                mk.addEventListener(\"click\", function(){map.openInfoWindow(infoWindow,r.point);});

            });


        }
        else {

        }
    })

    map.enableScrollWheelZoom(true);
    map.addControl(new BMap.ScaleControl());                    // 添加默认比例尺控件
    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
</script>
<!--<script type=\"text/javascript\">-->
    <!--// 百度地图API功能-->
    <!--var map = new BMap.Map(\"allmap\");-->
    <!--var point = new BMap.Point(116.331398,39.897445);-->
    <!--map.centerAndZoom(point,12);-->

    <!--var geolocation = new BMap.Geolocation();-->
    <!--geolocation.getCurrentPosition(function(r){-->
        <!--if(this.getStatus() == BMAP_STATUS_SUCCESS){-->
            <!--var mk = new BMap.Marker(r.point);-->
            <!--map.addOverlay(mk);-->
            <!--map.panTo(r.point);-->
            <!--alert('您的位置：'+r.point.lng+','+r.point.lat);-->
        <!--}-->
        <!--else {-->
            <!--alert('failed'+this.getStatus());-->
        <!--}-->
    <!--},{enableHighAccuracy: true})-->
    <!--//关于状态码-->
    <!--//BMAP_STATUS_SUCCESS\t检索成功。对应数值“0”。-->
    <!--//BMAP_STATUS_CITY_LIST\t城市列表。对应数值“1”。-->
    <!--//BMAP_STATUS_UNKNOWN_LOCATION\t位置结果未知。对应数值“2”。-->
    <!--//BMAP_STATUS_UNKNOWN_ROUTE\t导航结果未知。对应数值“3”。-->
    <!--//BMAP_STATUS_INVALID_KEY\t非法密钥。对应数值“4”。-->
    <!--//BMAP_STATUS_INVALID_REQUEST\t非法请求。对应数值“5”。-->
    <!--//BMAP_STATUS_PERMISSION_DENIED\t没有权限。对应数值“6”。(自 1.1 新增)-->
    <!--//BMAP_STATUS_SERVICE_UNAVAILABLE\t服务不可用。对应数值“7”。(自 1.1 新增)-->
    <!--//BMAP_STATUS_TIMEOUT\t超时。对应数值“8”。(自 1.1 新增)-->
<!--</script>-->



";
    }

    public function getTemplateName()
    {
        return "weizhi.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <style type=\"text/css\">
        body, html,#allmap {width: 100%;height: 80%;overflow: hidden;margin:0;}
        #l-map{height:80%;width:100%;float:left;border-right:2px solid #bcbcbc;}
        #r-result{height:80%;width:10%;float:left;}
    </style>
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=1.3&ak=zNNSXLI20Z5l9dtossE5LQjwQTCOcTQH\"></script>
    目的地位置:<span id=\"span\"></span></br>
    <p style=\"font-size: 30px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">欢迎联系我们,rol开发团队</p></hr>
    <p style=\"font-size: 30px; margin-left: 60px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 10px;\">本公司强大开发团队以及丰富的运维经验期待个人的加入</p></hr>
    <p style=\"font-size: 30px; margin-left: 120px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">地址:北京市海淀区上地软件园57号</p></hr>
    <p style=\"font-size: 30px; margin-left:240px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">telephone:13677516111</p>
    <p style=\"font-size: 30px; margin-left:360px;width: 100%;
  height: 4.4rem;
  border: 0.2rem solid #ebebeb;
  padding-left: 2.8rem;
  -webkit-box-sizing: border-box;
  padding-top: 18px;;\">email:18801262753@163.com</p>
</head>
<body>
<div id=\"allmap\" ></div>
</body>
</html>

<script type=\"text/javascript\">
    var map = new BMap.Map(\"allmap\");
    var point = new BMap.Point(116.331398,39.897445);
    map.centerAndZoom(point,15);

    var geolocation = new BMap.Geolocation();

    var gc = new BMap.Geocoder();

    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(116.31060203757);
            var jinweidu= 116.31060203757+','+39.967283678514;
            //alert('您的位置：'+r.point.lng+','+r.point.lat);

            var pt = r.point;
            var message = \"\";
            gc.getLocation(pt, function(rs){
                var addComp = rs.addressComponents;
                var address=addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber;
                document.getElementById('span').innerHTML=address;
                var opts = {
                    width : 100,    // 信息窗口宽度
                    height: 40,     // 信息窗口高度
                    title : \"目的地位置：\"  // 信息窗口标题
                }
                var infoWindow = new BMap.InfoWindow(addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber, opts);  // 创建信息窗口对象
                map.openInfoWindow(infoWindow,r.point); //开启信息窗口

                mk.addEventListener(\"click\", function(){map.openInfoWindow(infoWindow,r.point);});

            });


        }
        else {

        }
    })

    map.enableScrollWheelZoom(true);
    map.addControl(new BMap.ScaleControl());                    // 添加默认比例尺控件
    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
</script>
<!--<script type=\"text/javascript\">-->
    <!--// 百度地图API功能-->
    <!--var map = new BMap.Map(\"allmap\");-->
    <!--var point = new BMap.Point(116.331398,39.897445);-->
    <!--map.centerAndZoom(point,12);-->

    <!--var geolocation = new BMap.Geolocation();-->
    <!--geolocation.getCurrentPosition(function(r){-->
        <!--if(this.getStatus() == BMAP_STATUS_SUCCESS){-->
            <!--var mk = new BMap.Marker(r.point);-->
            <!--map.addOverlay(mk);-->
            <!--map.panTo(r.point);-->
            <!--alert('您的位置：'+r.point.lng+','+r.point.lat);-->
        <!--}-->
        <!--else {-->
            <!--alert('failed'+this.getStatus());-->
        <!--}-->
    <!--},{enableHighAccuracy: true})-->
    <!--//关于状态码-->
    <!--//BMAP_STATUS_SUCCESS\t检索成功。对应数值“0”。-->
    <!--//BMAP_STATUS_CITY_LIST\t城市列表。对应数值“1”。-->
    <!--//BMAP_STATUS_UNKNOWN_LOCATION\t位置结果未知。对应数值“2”。-->
    <!--//BMAP_STATUS_UNKNOWN_ROUTE\t导航结果未知。对应数值“3”。-->
    <!--//BMAP_STATUS_INVALID_KEY\t非法密钥。对应数值“4”。-->
    <!--//BMAP_STATUS_INVALID_REQUEST\t非法请求。对应数值“5”。-->
    <!--//BMAP_STATUS_PERMISSION_DENIED\t没有权限。对应数值“6”。(自 1.1 新增)-->
    <!--//BMAP_STATUS_SERVICE_UNAVAILABLE\t服务不可用。对应数值“7”。(自 1.1 新增)-->
    <!--//BMAP_STATUS_TIMEOUT\t超时。对应数值“8”。(自 1.1 新增)-->
<!--</script>-->



";
    }
}
