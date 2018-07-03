<?php

// 301 redirect to appropriate wiki URL
$url = 'https://spectero.atlassian.net/wiki/spaces/docs/overview';

header('HTTP/1.1 301 Moved Permanently'); 
header('Location: '.$url);
