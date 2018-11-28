<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="referrer" content="always">
  <title>泾川县纪念改革开放40周年</title>
  <link rel="stylesheet" href="__PUBLIC__/css/index.css" />
  <script src="__PUBLIC__/js/jquery-1.11.0.min.js" type="text/javascript"></script>
  <style type="text/css">
body{
  margin:0px;
  padding:0px;
  /*width:100%;*/
  height:100%;
  overflow: hidden;
  background:url(__PUBLIC__/img/bg.jpg) no-repeat;
  background-size:cover;
  background-position: center top;
}
.tool{
  height:120px;
  width:1200px;
/*  border:2px solid #E4D2AE;
  border-radius:8px;*/
  margin:auto;
  position: absolute;
  top:70%;
  left: 0;
  right: 0;
  padding:5px;
/*  background-color: #E5D3AF;*/
  text-align: center;
}
  .thumb{
    /*width: 120px;
    height: 40px;
    padding: 0px;
    display: inline-block;
    border-radius: 4px;
    margin-top:5px;
    background: url(__PUBLIC__/img/catebg.png) no-repeat;
    background-size:cover;*/
    display: inline-block;
    width: 120px; 
    height: 40px;
    transform:skew(-40deg);
    -webkit-transform: skew(-40deg);
    -moz-transform: skew(-40deg);
    -o-transform:skew(-40deg);
    -ms-transform:skew(-40deg); 
    background-color:#C5835C;
    background-color:(200,130,100,0.8);
    /*margin: 50px auto; */
    margin-left:10px;
  }

  .thumb .word{
    width: 118px;
    height: 38px;
    display: inline-block;
    line-height: 38px;
    font-size:14px; 

    transform:skew(40deg);
    -webkit-transform: skew(40deg);
    -moz-transform: skew(40deg);
    -o-transform:skew(40deg);
    -ms-transform:skew(40deg); 
    color:#AD221C;
    font-weight: bold;
    font-size: 18px;
    font-family: 黑体;

  }
  .div1{
    margin-left: -100px;
  }
  .div2{
    margin-top: 11px;
    margin-left: 90px;
  }
  </style>
  <script type="text/javascript">
  function jupmurl(id){
    var url="saveid.html";
    var data={'id':id};
    $.post(url,data,function(res){
      var res=eval(res);
      if(res.no==1){
        window.location.href="navigator.html";
      }
    },'JSON');
  }
  </script>
</head>

<body>
    <div class="tool">
      <div class="div1">
        <span class="thumb" title="前 言">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(9);">
               <span class="word">前 言</span>
              </a>
        </span>
        <span class="thumb" title="党的建设篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(1);">
               <span class="word">党的建设篇</span>
              </a>
        </span>
        <span class="thumb" title="城乡建设篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(2);">
               <span class="word">城乡建设篇</span>
              </a>
        </span>
        <span class="thumb" title="工业经济篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(3);">
              <span class="word">工业经济篇</span>
              </a>
        </span>
        <span class="thumb" title="美丽乡村篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(4);">
               <span class="word">美丽乡村篇</span>
              </a>
        </span>
      </div>
      <div  class="div2">
        <span class="thumb" title="生态环境篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(5);">
               <span class="word">生态环境篇</span>
              </a>
        </span>
        <span class="thumb" title="文化旅游篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(6);">
               <span class="word">文化旅游篇</span>
              </a>
        </span>
        <span class="thumb" title="民生事业篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(7);">
               <span class="word">民生事业篇</span>
              </a>
        </span>
        <span class="thumb" title="百姓生活篇">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(8);">
              <span class="word">百姓生活篇</span>
              </a>
        </span>
        <span class="thumb" title="结束语">
              <a href="javascript:;" class="thumbnail" onclick="jupmurl(10);">
               <span class="word">结束语</span>
              </a>
        </span>
      </div>
    </div>
</body>

</html>