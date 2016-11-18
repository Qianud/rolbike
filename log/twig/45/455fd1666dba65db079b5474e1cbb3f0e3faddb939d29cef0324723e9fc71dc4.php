<?php

/* gossip/upload.html */
class __TwigTemplate_a3720c3f2ab28a8e9b13df0df3344dbb903a6ae7e4712d9564d844b64eb7d9c5 extends Twig_Template
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
<html lang=\"zh\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> 
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>编辑</title>
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/upload/css/default.css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/upload/css/fileinput.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />\t
\t<!--[if IE]>
\t\t<script src=\"http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js\"></script>
\t<![endif]-->
</head>
<body>
\t<div class=\"htmleaf-container\">
\t\t<!--<div class=\"htmleaf-content bgcolor-8\">
\t\t\t
\t\t</div>-->
\t\t<div class=\"container kv-main\">
            <div class=\"page-header\">
            
            </div>
            <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "gossip/add\" method=\"post\" enctype=\"multipart/form-data\">
                <input id=\"file-0a\" name=\"file\" class=\"file\" type=\"file\" multiple data-min-file-count=\"1\">
                <p>&#12288;</p>
\t\t\t\t<textarea name=\"content\" id=\"\" cols=\"40\" rows=\"10\"></textarea>
                <br>
\t\t\t\t<hr>
                <button type=\"submit\" class=\"btn btn-primary\">发表</button>
                <button type=\"reset\" class=\"btn btn-default\">取消</button>
            </form>
            <hr> 
        </div>
\t\t
\t</div>
\t
\t<script src=\"http://libs.baidu.com/jquery/2.1.1/jquery.min.js\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/upload/js/fileinput.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/upload/js/fileinput_locale_zh.js\" type=\"text/javascript\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script>
\t    \$(\"#file-0\").fileinput({
\t        'allowedFileExtensions' : ['jpg', 'png','gif'],
\t    });

\t    \$(\"#file-1\").fileinput({
\t        uploadUrl: '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "public/upload/upload', // you must set a valid URL here else you will get an error
\t        allowedFileExtensions : ['jpg', 'png','gif'],
\t        overwriteInitial: false,
\t        maxFileSize: 1000,
\t        maxFilesNum: 10,
\t        //allowedFileTypes: ['image', 'video', 'flash'],
\t        slugCallback: function(filename) {
\t            return filename.replace('(', '_').replace(']', '_');
\t        }
\t\t});
\t    /*
\t    \$(\".file\").on('fileselect', function(event, n, l) {
\t        alert('File Selected. Name: ' + l + ', Num: ' + n);
\t    });
\t    */
\t\t\$(\"#file-3\").fileinput({
\t\t\tshowUpload: false,
\t\t\tshowCaption: false,
\t\t\tbrowseClass: \"btn btn-primary btn-lg\",
\t\t\tfileType: \"any\",
\t        previewFileIcon: \"<i class='glyphicon glyphicon-king'></i>\"
\t\t});
\t\t\$(\"#file-4\").fileinput({
\t\t\tuploadExtraData: {kvId: '10'}
\t\t});
\t    \$(\".btn-warning\").on('click', function() {
\t        if (\$('#file-4').attr('disabled')) {
\t            \$('#file-4').fileinput('enable');
\t        } else {
\t            \$('#file-4').fileinput('disable');
\t        }
\t    });    
\t    \$(\".btn-info\").on('click', function() {
\t        \$('#file-4').fileinput('refresh', {previewClass:'bg-info'});
\t    });
\t    /*
\t    \$('#file-4').on('fileselectnone', function() {
\t        alert('Huh! You selected no files.');
\t    });
\t    \$('#file-4').on('filebrowse', function() {
\t        alert('File browse clicked for #file-4');
\t    });
\t    */
\t    \$(document).ready(function() {
\t        \$(\"#test-upload\").fileinput({
\t            'showPreview' : false,
\t            'allowedFileExtensions' : ['jpg', 'png','gif'],
\t            'elErrorContainer': '#errorBlock'
\t        });
\t        /*
\t        \$(\"#test-upload\").on('fileloaded', function(event, file, previewId, index) {
\t            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
\t        });
\t        */
\t    });
\t\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "gossip/upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 48,  72 => 40,  68 => 39,  50 => 24,  33 => 10,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"zh\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> 
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>编辑</title>
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{url}}public/upload/css/default.css\">
    <link href=\"{{url}}public/upload/css/fileinput.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />\t
\t<!--[if IE]>
\t\t<script src=\"http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js\"></script>
\t<![endif]-->
</head>
<body>
\t<div class=\"htmleaf-container\">
\t\t<!--<div class=\"htmleaf-content bgcolor-8\">
\t\t\t
\t\t</div>-->
\t\t<div class=\"container kv-main\">
            <div class=\"page-header\">
            
            </div>
            <form action=\"{{url}}gossip/add\" method=\"post\" enctype=\"multipart/form-data\">
                <input id=\"file-0a\" name=\"file\" class=\"file\" type=\"file\" multiple data-min-file-count=\"1\">
                <p>&#12288;</p>
\t\t\t\t<textarea name=\"content\" id=\"\" cols=\"40\" rows=\"10\"></textarea>
                <br>
\t\t\t\t<hr>
                <button type=\"submit\" class=\"btn btn-primary\">发表</button>
                <button type=\"reset\" class=\"btn btn-default\">取消</button>
            </form>
            <hr> 
        </div>
\t\t
\t</div>
\t
\t<script src=\"http://libs.baidu.com/jquery/2.1.1/jquery.min.js\"></script>
    <script src=\"{{url}}public/upload/js/fileinput.js\" type=\"text/javascript\"></script>
    <script src=\"{{url}}public/upload/js/fileinput_locale_zh.js\" type=\"text/javascript\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script>
\t    \$(\"#file-0\").fileinput({
\t        'allowedFileExtensions' : ['jpg', 'png','gif'],
\t    });

\t    \$(\"#file-1\").fileinput({
\t        uploadUrl: '{{url}}public/upload/upload', // you must set a valid URL here else you will get an error
\t        allowedFileExtensions : ['jpg', 'png','gif'],
\t        overwriteInitial: false,
\t        maxFileSize: 1000,
\t        maxFilesNum: 10,
\t        //allowedFileTypes: ['image', 'video', 'flash'],
\t        slugCallback: function(filename) {
\t            return filename.replace('(', '_').replace(']', '_');
\t        }
\t\t});
\t    /*
\t    \$(\".file\").on('fileselect', function(event, n, l) {
\t        alert('File Selected. Name: ' + l + ', Num: ' + n);
\t    });
\t    */
\t\t\$(\"#file-3\").fileinput({
\t\t\tshowUpload: false,
\t\t\tshowCaption: false,
\t\t\tbrowseClass: \"btn btn-primary btn-lg\",
\t\t\tfileType: \"any\",
\t        previewFileIcon: \"<i class='glyphicon glyphicon-king'></i>\"
\t\t});
\t\t\$(\"#file-4\").fileinput({
\t\t\tuploadExtraData: {kvId: '10'}
\t\t});
\t    \$(\".btn-warning\").on('click', function() {
\t        if (\$('#file-4').attr('disabled')) {
\t            \$('#file-4').fileinput('enable');
\t        } else {
\t            \$('#file-4').fileinput('disable');
\t        }
\t    });    
\t    \$(\".btn-info\").on('click', function() {
\t        \$('#file-4').fileinput('refresh', {previewClass:'bg-info'});
\t    });
\t    /*
\t    \$('#file-4').on('fileselectnone', function() {
\t        alert('Huh! You selected no files.');
\t    });
\t    \$('#file-4').on('filebrowse', function() {
\t        alert('File browse clicked for #file-4');
\t    });
\t    */
\t    \$(document).ready(function() {
\t        \$(\"#test-upload\").fileinput({
\t            'showPreview' : false,
\t            'allowedFileExtensions' : ['jpg', 'png','gif'],
\t            'elErrorContainer': '#errorBlock'
\t        });
\t        /*
\t        \$(\"#test-upload\").on('fileloaded', function(event, file, previewId, index) {
\t            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
\t        });
\t        */
\t    });
\t\t</script>
</body>
</html>";
    }
}
