<?php

    require_once __DIR__.'/vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $logger = new Logger('DEBUG LOGGER');
    $logger->pushHandler(new StreamHandler(__DIR__.'/logs/debug/log', Logger::DEBUG));
    $logger->info('Info message!', array('user'=>'Sergey', 'time'=>date('H:i:s d.m.Y')));
    $logger->warning('Warning message!', array('user'=>'Sergey', 'time'=>date('H:i:s d.m.Y')));
    $logger->error('Error message!', array('user'=>'Sergey', 'time'=>date('H:i:s d.m.Y')));
    $logger->debug('Debug message!', array('user'=>'Sergey', 'time'=>date('H:i:s d.m.Y')));
