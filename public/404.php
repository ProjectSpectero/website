<?php
header('HTTP/1.0 404 Not Found');

$html_title = 'Not Found - Spectero';
$header_h1 = '404 Not Found';
$header_content = '<p>We couldn\'t find the page you\'re looking for.</p>
<a href="./" class="button">Go To Homepage</a>';
$body_class = 'page-error';

include ('./includes/header.php');
include ('./includes/footer.php');
?>