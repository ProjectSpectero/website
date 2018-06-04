<?php
$html_title = 'Spectero Daemon Downloads';
$header_h1 = 'Downloads';
$header_content = '<p>Follow the instructions below to download and install the Spectero Daemon.</p>';

include ('./includes/header.php');
?>
<section id="downloads" class="body-white">
  <div class="wrapper body-wrapper">
    <ul class="os-tabs">
      <li data-os="windows" class="active">Windows</li>
      <li data-os="linux">Linux</li>
      <li data-os="mac">MacOS</li>
    </ul>
    <section class="section padded">
      <h5>Step 1</h5>
      <div class="os-instruction windows show">
        <p>Download the latest release of the Spectero Daemon and its CLI, then run it.</p>
        <a class="button button-info" :href="#" target="_blank">Download Now</a>
      </div>
      <div class="os-instruction linux mac">
        <p>Download and run the latest release of the Spectero Daemon and its CLI by running the following command:</p>
        <p class="cmd">wget -q -O - ########### | bash</p>
      </div>
    </section>
    <section class="section padded">
      <h5>Step 2</h5>
      <p>Open a CLI shell, then run the following command to add the daemon to the Spectero Cloud:</p>
      <p class="cmd">spectero cli connect &lt;your_node_key&gt;</p>
      <p class="nospace opaque">Don't have a node key? <a href="https://app.spectero.com/settings/keys" target="_blank">Get one from our cloud panel &raquo;</a>
    </section>
    <section class="section padded">
      <h5>Step 3</h5>
      <p>Once you've connected the daemon to Spectero Cloud, visit our nodes management view to complete the setup process.</p>
      <a href="https://app.spectero.com/nodes" target="_blank" class="button">Complete Setup</a>
    </section>
  </div>
</section>
<?php include ('./includes/footer.php'); ?>