<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],
    
    'facebook' => [
      'client_id'     => '398796853632550',
      'client_secret' => '77c5c0d59fe802f637620c65834e8ee0',
      'redirect'      => 'http://beautycollective.dev/login/callback/facebook',
    ],
    
    'twitter' => [
			'client_id' 		=> 'zSByOh0bqtDjVWujoMb9wklPr',
			'client_secret' => 'yJdAqfwn7zIhYOISFAGLwFBaPAKeYY2xNV2iV0Zems69hlJki0',
			'redirect' 			=> 'http://beautycollective.dev/login/callback/twitter',
		],
		
		'google' => [
			'client_id' 		=> '86241006289-0v60hrokifok7bhvs86v12d70pl7p7g1.apps.googleusercontent.com',
			'client_secret' => 'awVz1542E9v5Un1G5kiSnoCg',
			'redirect' 			=> 'http://beautycollective.dev/login/callback/google',
		],

];
