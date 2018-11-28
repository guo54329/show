<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/normalize.css" /><!--CSS RESET-->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/htmleaf-demo.css"><!--演示页面样式，使用时可以不引用-->
	<!--插件 下面一个文件-->
	<link href="__PUBLIC__/Css/lightgallery.css" rel="stylesheet">
	<style type="text/css">
	body{
	  margin:0px;
	  padding:0px;
	  height:100%;
	  overflow: hidden;
	  background:url(__PUBLIC__/img/right.jpg) no-repeat;
	  background-size:cover;
	  background-position: center top;
}
.htmleaf-container .title{
	font-size: 22px;
	color: red;
	height: 50px !important;
	line-height: 50px;
	text-align: center;
	border-bottom: 1px solid #D5D6E2;
}
.demo-gallery .desc{
	margin:0 auto;
	text-align: left;
	width:60%;padding-top:10px;
}
.demo-gallery .desc p{

	text-indent: 2em;
	line-height: 34px;
	font-size: 18px;
}
</style>
</head>
<body>
	<div class="htmleaf-container">
		<div class="title">
			<span class="word"><?php echo ($cate["url"]); ?></span>
		</div>
		<div class="demo-gallery">
		    <?php if($cate['id'] == 9): ?><div class="desc"><?php echo ($cate["desc"]); ?></div><?php endif; ?>
			<?php if($cate['id'] == 10): ?><div class="desc"><?php echo ($cate["desc"]); ?></div><?php endif; ?>
			<?php if($cate['id'] != 9 AND $cata['id'] != 10): ?><ul id="lightgallery" class="list-unstyled row">
	                <?php if(is_array($picture)): foreach($picture as $key=>$v): ?><li class="col-xs-6 col-sm-4 col-md-3" data-responsive="__IMAGES__/<?php echo ($cate["id"]); echo ($cate["pyjx"]); ?>/thumb-<?php echo ($v["name"]); ?>.jpg 375, __IMAGES__/<?php echo ($cate["id"]); echo ($cate["pyjx"]); ?>/thumb-<?php echo ($v["name"]); ?>.jpg 480, __IMAGES__/<?php echo ($cate["id"]); echo ($cate["pyjx"]); ?>/thumb-<?php echo ($v["name"]); ?>.jpg 800" data-src="__IMAGES__/<?php echo ($cate["id"]); echo ($cate["pyjx"]); ?>/<?php echo ($v["name"]); ?>.jpg" data-sub-html="<h4><?php echo ($cate["title"]); ?></h4><p><?php echo ($v["desc"]); ?></p>">
	                    <a href="">
	                        <img class="img-responsive" src="__IMAGES__/<?php echo ($cate["id"]); echo ($cate["pyjx"]); ?>/thumb-<?php echo ($v["name"]); ?>.jpg">
	                    </a>
	                </li><?php endforeach; endif; ?>
	            </ul><?php endif; ?>

            
        </div>
	</div>
	<!--插件 下面两个文件-->
	<script src="__PUBLIC__/Js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Js/lightgallery-all.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
</body>
</html>