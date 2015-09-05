<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

/* return array(
	'production' => array(
		'type'           => 'pdo',
		'connection'     => array(
				'dsn'            => 'mysql:host=127.0.0.1;port=3306;dbname=brth;charset=utf8',
				'username'       => 'root',
				'password'       => 'root',
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
); */


return array(
		'production' => array(
				'type'           => 'pdo',
				'connection'     => array(
						'dsn'            => 'mysql:host=localhost;dbname=brth;charset=utf8',
						'username'       => 'root',
						'password'       => 'root',
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

