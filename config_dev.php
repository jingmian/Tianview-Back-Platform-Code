﻿<?php
return array(

		//基本设置
		"SITE_NAME"=>'示例网站',
	    "SITE_KEYWORDS"=>"关键字",
		"SITE_DOMAIN"=>"域名",
		"SITE_URL"=>"http://".$_SERVER['HTTP_HOST'],
		"CHARSET"=>'utf8',//网站编码
		"CURR_TIME"=>time(),
		"DOMAIN"=>"域名",

		//数据库设置
		"DB_R_W"=>"1",//数据库读写标识，1：读写同一个库，2读写不同库
		"DB_HOST"=>'127.0.0.1',	//服务器地址
		"DB_NAME"=>'tianwen',//数据库名称
		"DB_TYPE"=>"mysql",	//数据库
		"DB_CHARSET"=>"utf8",	//数据库
		"DB_USER"=>'root',	//数据库访问用户名
		"DB_PASS"=>'',	//数据库访问密码
		"DB_PORT"=>'3306',	//数据库访问密码
		"DB_PREFIX"=>"",	//数据库表前缀

		"DEBUG"=>0,	/*是否处于调试模式*/

);