<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'production' => array(
		'type'           => 'pdo',
		'connection'     => array(
				'dsn'            => 'mysql:host=brthdb.cetjzfpmiivw.us-west-2.rds.amazonaws.com;port=3306;dbname=brth;charset=utf8',
				'username'       => 'root',
				'password'       => 'admin123daa',
				'persistent'     => false,
				'compress'       => false,
		),
		'identifier'     => '"',
		'table_prefix'   => '',
		'charset'        => 'utf8',
		'enable_cache'   => true,
		'profiling'      => false,
		'readonly'       => false,
		),
);
