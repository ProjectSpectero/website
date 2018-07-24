<?php
$html_title = 'Spectero - The Future of Peer to Peer VPN Sharing.';
$header_h1 = 'Introducing the <strong>Spectero Marketplace.</strong>';
$header_content = '<p>Welcome to the future of peer to peer VPN sharing. Using our open source VPN server software, setup, manage and configure your own VPN with simplified remote management.</p>
<p>List your server on the Spectero Marketplace and <strong class="text-color-brand">earn extra cash</strong> by selling your unused bandwidth.</p>
<a href="./marketplace" class="button">Learn More</a>';
$header_screenshot = 'screenshot-market-cropped.png';

include ('./includes/header.php');
?>
<section id="ecosystem" class="body-white">
  <div class="wrapper body-wrapper">
    <div class="section-title">
      <h2>Our Ecosystem</h2>
      <p class="section-description">Spectero offers an array of products and services to support your VPN/data intelligence requirements.</p>
    </div>
    <div class="homepage-section">
      <div class="section-image">
        <img src="./assets/img/screenshot-daemon.png" alt="Spectero Daemon" />
      </div>
      <article>
        <header>
          <div class="icon-boxed"></div>
          <h3>Spectero Daemon</h3>
        </header>
        <div class="info">
          <p>Utilizing a variety of VPN technologies such as OpenVPN, SSH and HAProxy our open source VPN server is an easy to use way of creating and maintaining your own VPN. Whether you're just looking to run a small home VPN connection or host a large enterprise proxy solution our powerful software is optimized for use cases large and small.</p>
          <a href="./downloads" class="learn-more">Download Now</a>
        </div>
      </article>
    </div>
    <div class="homepage-section">
      <div class="section-image">
      <img src="./assets/img/screenshot-panel.png" alt="Spectero Cloud Panel" />
      </div>
      <article>
        <header>
          <div class="icon-boxed orange"></div>
          <h3>Spectero Cloud Panel</h3>
        </header>
        <div class="info">
          <p>Offering powerful management capabilities our cloud panel enables for easy remote configuration of your daemon instance. Adding/removing users, modifying proxy servers, downloading configurations and running commands in bulk on groups of servers can be done with just a few clicks.</p>
          <a href="./marketplace" class="learn-more">Learn More</a>
        </div>
      </article>
    </div>
    <div class="homepage-section">
      <div class="section-image">
      <img src="./assets/img/screenshot-market.png" alt="Spectero Marketplace" />
      </div>
      <article>
        <header>
          <div class="icon-boxed blue"></div>
          <h3>Spectero Marketplace</h3>
        </header>
        <div class="info">
          <p>Our marketplace is the first of its kind in the VPN space. We offer robust search capabilities to easily find VPN servers in specific networks/countries along with multiple payment gateways for fast payment and setup. Tight integration with our enterprise customerbase means you can profit from daemon deployments at any scale.</p>
          <a href="./marketplace" class="learn-more">Learn More</a>
        </div>
      </article>
    </div>
    <div class="homepage-section">
      <div class="section-image enterprise">
        <img src="./assets/img/managed-diagram-mini.png" alt="Spectero Marketplace" />
      </div>
      <article>
        <header>
          <div class="icon-boxed dark"></div>
          <h3>Spectero Enterprise</h3>
        </header>
        <div class="info">
          <p>Private Proxies by Spectero Enterprise provide over 100 GB/s of network throughput to customers all over the globe. Automatic IP rotation and dedicated proxy servers provide a private, secure and lightning fast experience. Contact us today and see why businesses around the globe trust us to help extract essential business intelligence data.</p>
          <a href="./enterprise" class="learn-more">Learn More</a>
        </div>
      </article>
    </div>
  </div>
</section>
<?php include ('./includes/footer.php'); ?>
