<?php

// 加载composer资源库
require_once('../resources/autoload.php');
// 初始化数据库配置
require_once('./lib/config.php');
// 加载自己项目资源库
require_once('./lib/onestep.php');
// 路径处理类
require_once('./lib/LibDir.php');
// 文件处理类
require_once('./lib/LibFile.php');

// 需要读取的批次
$pici = [
	301,300
];

// 需要读取的批次
onestep::$pici = $pici;

// 初始化要下载的列表页
onestep::initlist();
