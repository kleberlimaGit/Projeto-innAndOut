<?php
require_once(dirname(__FILE__,2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');

$user = new User([
    'name'=>'Kleber',
    'email'=>'kleber-r@oi.com.br'
    ]);

    echo User::getSelect(['id'=>1], 'name , email');