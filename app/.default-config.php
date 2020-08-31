<?php
return [
	'profile' => [
		'oj-name'  => 'Universal Online Judge',
		'oj-name-short' => 'UOJ',
		'oj-version' => '5.1',
		'administrator' => 'root',
		'admin-email' => 'root@uoj',
		'qq-group' => '1145141919810',
		'ICP-license' => ''
	],
	'database' => [
		'database'  => 'uoj',
		'username' => 'root',
		'password' => '',
		'host' => '127.0.0.1'
	],
	'web' => [
		'domain' => null,
		'main' => [
			'protocol' => 'http',
			'host' => UOJContext::httpHost(),
			'port' => 80
		],
		'blog' => [
			'protocol' => 'http',
			'host' => UOJContext::httpHost(),
			'port' => 80
		]
	],
	'security' => [
		'user' => [
			'client_salt' => 'salt0'
		],
		'cookie' => [
			'checksum_salt' => ['salt1', 'salt2', 'salt3']
		]
	],
	'mail' => [
		'noreply' => [
			'username' => 'StupidOnlineJudge@163.com',
			'password' => 'shaochengxi117',
			'host' => 'smtp.163.com',
			'secure' => 'ssl',
			'port' => 465
		]
	],
	'judger' => [
		'socket' => [
			'port' => '233',
			'password' => 'password233'
		]
	],
	'svn' => [
		'our-root' => [
			'username' => 'our-root',
			'password' => 'our-root'
		]
	],
	'switch' => [
		'web-analytics' => false,
		'blog-use-subdomain' => false
	]
];
