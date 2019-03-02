<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => '\\OAuth\\Common\\Storage\\Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => '',
			'client_secret' => '',
			'scope'         => [],
		],
		'Google' => [
			'client_id'     => env('GOOGLE_ID'),
			'client_secret' => env('GOOGLE_SECRET'),
			'scope'         => ['userinfo_email', 'userinfo_profile', 'https://www.google.com/m8/feeds/'],
		],

	]

];