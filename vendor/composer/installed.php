<?php return [
	'root'     => [
		'name'           => 'wpessential-hero-theme/wpessential-hero-theme',
		'pretty_version' => '1.0.0.00006',
		'version'        => '1.0.0.00006',
		'reference'      => null,
		'type'           => 'library',
		'install_path'   => __DIR__ . '/../../',
		'aliases'        => [],
		'dev'            => true,
	],
	'versions' => [
		'wpessential-hero-theme/wpessential-hero-theme' => [
			'pretty_version'  => '1.0.0.00006',
			'version'         => '1.0.0.00006',
			'reference'       => null,
			'type'            => 'library',
			'install_path'    => __DIR__ . '/../../',
			'aliases'         => [],
			'dev_requirement' => false,
		],
		'wpessential/wpessential-hero'                  => [
			'pretty_version'  => 'dev-main',
			'version'         => 'dev-main',
			'reference'       => 'e31a5a3ef445285d50f6e428f758aa5760a8286e',
			'type'            => 'library',
			'install_path'    => __DIR__ . '/../wpessential/wpessential-hero',
			'aliases'         => [
				0 => '9999999-dev',
			],
			'dev_requirement' => false,
		],
	],
];
