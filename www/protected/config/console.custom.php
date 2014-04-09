<?php

return array(
	'commandMap' => array(
		'migrate' => array(
			'class' => 'system.cli.commands.MigrateCommand',
			'migrationTable' => 'yii_migration',
		),
	),
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=yii-blank',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
			'emulatePrepare' => true,
			'enableParamLogging' => true,
			'enableProfiling' => true,
		),
		'messages' => array(
			'class' => 'CDbMessageSource',
			'translatedMessageTable' => 'yii_message',
			'sourceMessageTable' => 'yii_sourcemessage',
		),
	),
);