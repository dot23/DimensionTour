<?php
return array(
    /* URL设置 */
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_PATHINFO_DEPR'     =>  '-',	// PATHINFO模式下，各参数之间的分割符号
	
	//数据库设置
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'dimensiontour',    
	'DB_USER'=>'root',
	'DB_PWD'=>'dot23',
	'DB_PREFIX'=>'dt_',
		
	//令牌
	'TOKEN_ON'=>true,
	'TOKEN_NAME'=>'__hash__',
	'TOKE_TYPE'=>'md5',
	'TOKEN_RESET'=>true,
);