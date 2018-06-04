<?php
$html_title = 'Spectero Cloud Panel &amp; Marketplace';
$header_h1 = 'Spectero Cloud Panel &amp; Marketplace';
$header_content = '<p>Our one of a kind VPN marketplace allows for peer-to-peer transactions with global access to VPN servers.</p>';

include ('./includes/header.php');
?>
<div id="marketplace">
  <section class="body-white">
    <div class="wrapper body-wrapper wrapper-mailing-form">
      <div class="mailing-form">
        <p>Interested in joining our global marketplace? Join our waiting list.</p>
        <form action="https://spectero.us12.list-manage.com/subscribe/post?u=561df051651ece8ea77ec2a7f&amp;id=1a989802f2" method="post">
          <input type="email" name="EMAIL" class="input" placeholder="Enter your email">
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_561df051651ece8ea77ec2a7f_1a989802f2" tabindex="-1" value=""></div>
          <button type="submit" value="Subscribe" class="button">Subscribe</button>
        </form>
      </div>
    </div>
  </section>
  <section id="how-it-works" class="body-white">
    <div class="wrapper body-wrapper">
      <div class="section-title">
        <h2>How It Works</h2>
        <p class="section-description">Our custom daemon software allows you to set up, manage and profit from your bandwidth in minutes.</p>
      </div>
      <div class="feature-columns columns-how-it-works">
        <div class="col">
          <h3>Simple Setup</h3>
          <p>The setup process involves a single download, a few clicks and you’re ready to go. Our software was built to be plug and play.</p>
        </div>
        <div class="col">
          <h3>List Your Connection</h3>
          <p>We made it dead simple to list your connection on the Spectero Marketplace. In just a few clicks you’ll monetize your connection.</p>
        </div>
        <div class="col">
          <h3>Get Paid</h3>
          <p>You get paid a flat percentage on all bandwidth that’s routed through your connection, paid out in cash straight to your bank account.</p>
        </div>
      </div>
      <div class="homepage-section">
        <div class="section-image">
        <img src="./assets/img/screenshot-market.png" alt="Spectero Marketplace" />
        </div>
        <article>
          <header>
            <div class="icon-boxed blue"></div>
            <h3>Global Marketplace</h3>
          </header>
          <div class="info">
            <p>Our marketplace is the first of its kind in the VPN space. We offer robust search capabilities to easily find VPN servers in specific networks/countries along with multiple payment gateways for fast payment and setup. Tight integration with our enterprise customerbase means you can profit from daemon deployments at any scale.</p>
            <!--<a href="#" class="learn-more">Learn More</a>-->
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
            <p>Offering powerful management capabilities our cloud panel enables for easy remote configuration of your daemon instance. Adding/removing users, modifying proxy servers, downloading configurations and running commands in bulk on groups of servers can be done with just a few clicks.
</p>
            <!--<a href="#" class="learn-more">Learn More</a>-->
          </div>
        </article>
      </div>
    </div>
  </section>
  <!-- <section id="our-ecosystem" class="body-alt">
    <div class="wrapper body-wrapper">
      <div class="section-title">
        <h2>Our Ecosystem</h2>
        <p class="section-description">See a live overview of our ecosystem, updated hourly.</p>
      </div>
      <div class="feature-columns columns-ecosystem">
        <div class="col">
          <strong>0</strong>
          <p>Unique connections listed</p>
        </div>
        <div class="col">
          <strong>$0</strong>
          <p>Paid out to connection hosts</p>
        </div>
        <div class="col">
          <strong>0</strong>
          <p>Active connection users</p>
        </div>
        <div class="col">
          <strong>0ms</strong>
          <p>Global average ping</p>
        </div>
      </div>
    </div>
  </section> -->
</div>
<?php include ('./includes/footer.php'); ?>
