<?php

// 301 redirect to appropriate downloads URL
$url = 'https://app.spectero.com/downloads';

header('HTTP/1.1 301 Moved Permanently'); 
header('Location: '.$url);
