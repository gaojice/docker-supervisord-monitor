<?php

#
$config['supervisor_servers'] = array(
    'server01' => array(
        'url' => 'http://server01.app/RPC2',
        'port' => '9001',
        'username' => 'yourusername',
        'password' => 'yourpass'
    ),
    'server02' => array(
        'url' => 'http://server02.app/RPC2',
        'port' => '9001'
    ),

    'server03' => array(
        'url' => 'http://server03.app/RPC2',
        'port' => '9001'
    ),
);

# Refresh Status page every X seconds
$config['refresh'] = 10;
