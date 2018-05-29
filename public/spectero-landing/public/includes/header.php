<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo (isset($html_title)) ? $html_title : 'Spectero' ?></title>
    <link href="./assets/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.png">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107277606-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-107277606-1');
    </script> -->
  </head>
  <body>
    <header id="header-main">
      <div class="wrapper">
        <div class="header-top">
        <a href="./"><div class="logo logo-md"></div></a>
          <div class="header-nav">
            <nav class="header-nav-main">
              <ul>
                <li><a href="./enterprise">Spectero Enterprise</a></li>
                <li><a href="./downloads">Downloads</a></li>
                <li><a href="./team">Team</a></li>
                <li><a href="./careers">Careers</a></li>
                <li><a href="https://discord.gg/CWn66H4" target="_blank">Discord Server</a></li>
              </ul>
            </nav>
            <nav class="header-nav-account">
              <ul>
                <li><a href="https://app.spectero.com/login">Log In</a></li>
                <li><a href="https://app.spectero.com/register">Sign Up</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="header-cta">
          <?php echo (isset($header_h1)) ? '<h1>'.$header_h1.'</h1>' : ''; ?>
          <?php echo (isset($header_content)) ? $header_content : ''; ?>
        </div>
        <?php echo (isset($header_screenshot)) ? '<div class="header-screenshot screenshot-'.$header_screenshot.'"></div>' : ''; ?>
      </div>
    </header>