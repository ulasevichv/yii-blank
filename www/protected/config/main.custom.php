<?php
return array(
	'name' => 'Blank YII site',
	'theme' => 'main',
	'params' => array(
		'adminEmail' => 'admin@q-aces.com',
		'adminEmailName' => 'Q-Aces',
	),
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=yii-blank',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
			'enableParamLogging' => true,
			'enableProfiling' => true,
		),
		'assetManager' => array(
			'linkAssets' => true,
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning, info',
					'categories' => '',
					'logFile' => 'application.log',
				),
//				array(
//					'class' => 'CFileLogRoute',
//					'levels' => 'trace, profile',
//					'categories' => '',
//					'logFile' => 'application_trace.log',
//				),
			),
		),
		'user' => array(
			'class' => 'application.components.WebUser',
			'loginUrl' => 'user/login',
			'allowAutoLogin' => true,
			'autoUpdateFlash' => false,
		),
		'authManager' => array(
			'class' => 'PhpAuthManager',
			'defaultRoles' => array('Guest'),
		),
		'session' => array(
			'class' => 'system.web.CCacheHttpSession',
			'sessionName' => 'qaces_session',
			'autoStart' => true,
			'timeout' => 1800,
		),
		'cache' => array(
			'class' => 'CFileCache',
			'embedExpiry' => true,
		),
		'urlManager' => array(
			'showScriptName' => false,
		),
	),
);