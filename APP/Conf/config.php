<?php
return array(
	//数据库配置参数
	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_NAME' => 'aisen',
	'DB_PREFIX' => 'ask_',

	//指定后台下的Tpl下的Public文件夹位置
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__.'/Public',
		'__IMAGES__' => __ROOT__.'/Images',
	), 

	'URL_HTML_SUFFIX' =>'html',  //去掉伪静态后缀名
    'SHOW_PAGE_TRACE' =>false,
    
	//点语法：只让其解析数组
    'TMPL_VAR_IDENTIFY' => 'array',
	//模板路径以下划线连接：控制器_方法名.html
	//'TMPL_FILE_DEPR' => '_',

	//Apache配置：1、要开启mod_rewrite.so , 2、AllowOverride All 。 在本网站根目录下生成.htaccess。然后配置下面一项
    'URL_MODEL'=>2,   //1为标准默认模式，即地址里面含有入口文件，2为去掉了入口文件。0为普通模式，即一般的网页访问模式（含有入口文件）。

    'URL_ROUTER_ON'=>ture, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
		'index'     => 'Index/index',
		'calculate'     => 'Index/calculate',
		'result'    => 'Index/result',
		'verify'    => 'Index/verify',
		'modify'    => 'Index/modify',
		'search'    => 'Index/search',
		'deleteselect'    => 'Index/deleteselect',
		'deleteall' => 'Index/deleteall'
	)
);
?>