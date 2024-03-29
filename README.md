Spectero.com

This is essentially just a marketing funnel into the dashboard.

- Landing page
  - Simple clean header
    - Top left logo
    - Top right VPN, How it works, Downloads, Sign in, Sign up
  - VPN
    - Links to a super simple page to download our end-user VPN app
  - How it works
    - Basic explanation of our product with links to both the server software and end user VPN software
  - Marketplace
    - Explanation of the marketplace with some example listings in a table with "lease now" options so end users looking to lease connections can get a taste of what's available.
  - Login/Signup
    - Upon signing in and logging in to spectero.com, you will be able to manage/add plex servers for remote management via the dashboard.
    
Spectero.com/dashboard (daemon frontend)

Assumes that the user has already linked their server to the spectero.com dashboard and that port forwarding is enabled on the daemon's server. Spectero Dashboard <-> Daemon server connectivity should be established via port forwarding and accessable from the dashboard via dynamic DNS.

- Manage (allows for management of multiple "daemons" selectable via dropdown)
  - ~~Dashboard~~
  - Service management
    - Proxy
      - Enabled? Yes/No
      - Mode (dropdown with NORMAL / WHITELIST ONLY option)
      - (IF NORMAL) Blacklisted domains
      - (IF WHITELIST ONLY) Whitelisted domains / subdomains
      - LAN Subnet (so we can ban requests to this)
      - Listen IP / port
    - ~~VPN Server~~
      - ~~Server Software (OpenVPN or Shadowsocks, likely just Ovpn to start with, but good to have options)~~
      - ~~Listen protocol (TCP / UDP / Both)~~
      - ~~Listen IP~~
      - ~~TCP Port (show one or both depending on the protocol choice)~~
      - ~~UDP Port (show one or both depending on the protocol choice)~~
      - ~~Max sessions per user (Same user, multi device)~~
  - Statistics
    - Various usage statistics in table form
    - Per service BW usage stats on a per month basis
    - Per user BW usage stats on a per month basis ACROSS services
    - Telemetry results ("healthcheck")
  - ~~Users~~
    - ~~Send a sortable list with search~~
    - ~~Add / Edit / Delete user actions~~
    - ~~For adding a user, assume name / email / service_access (either proxy / vpn / both) as options. Add others if you see fit, these are basically the "LOCAL" users.~~
  - Settings
    - Bandwidth limit (not available in the MVP, but thought it was a good option)
    - REST API Listen IP / port
    - Log Retention (days)
    - Statistics Retention (days)
    - ..others as they're thought of
  - Help
    - Help section dedicated to managing/configuring your daemon server
    
    
    
Marketplace
- Sidebar
  - Marketplace
    - Overview
      - General marketplace (Customer <-> Seller)
      - Notes: - Allows for P2P VPN sales, this one will ultimately give the user the most flexibility in terms of bandwidth etc. but they are reliant on the end user keeping their connection up. In the general marketplace you can buy a connection with Shadowsocks, SOCK5, SSH, OpenVPN, or whatever other connection methodology you require.
      - Table view of all available listings, includes basic headers such as "location, speed, internet provider, ASN, hosted by, and price"
      - Upon clicking "sort" you're shown sort options to easily search by Internet provider, speed, ASN, price, etc.
    - Spectero managed
      - Spectero Managed (Customer <-> Spectero <-> Seller)
      - A user will input their requirements (eg. (100 unique IPs with 99.9% uptime to Google US geolocated) and we will fufill this out of our database of users signed up to host our managed services. Spectero managed is for HTTP requests only
  - Manage
    - My VPNs
      - Shows you a list of all the nodes you have access to after purchasing them on the marketplace
    - My listings
      - Shows you 2 primary boxes (see screen 257730839 overview), one with "listed nodes" and ones with "unlisted nodes." This screen can be very similar to screen 257730839 with some tweaks for $ earned per node and/or billing buttons etc. as needed
        - When clicking the "list node" button you have a popup with some basic information you need to fill out before the connection is listed
  - Billing
  - Settings
    - Basic configuration settings,
  - Help
    - Help section dedicated to the marketplace
