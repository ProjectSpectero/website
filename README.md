Spectero.com
- Landing page
  - Simple clean header
    - Top left logo
    - Top right VPN, How it works, Downloads, Sign in, Sign up
  - VPN
    - Links to a super simple page to download our end-user VPN app
  - How it works
    - Basic explanation of our product with links to both the server software and end user VPN software
  - Login/Signup
    - Upon signing in and logging in to spectero.com, you will be able to manage/add plex servers for remote management via the dashboard.
    
Spectero.com/dashboard (daemon frontend)

Assumes that the user has already linked their server to the spectero.com dashboard and that port forwarding is enabled on the daemon's server. Spectero Dashboard <-> Daemon server connectivity should be established via port forwarding and accessable from the dashboard via dynamic DNS.

- Manage (allows for management of multiple "daemons" selectable via dropdown)
  - Dashboard
  - Service management
    - Proxy
      - Enabled? Yes/No
      - Mode (dropdown with NORMAL / WHITELIST ONLY option)
      - (IF NORMAL) Blacklisted domains
      - (IF WHITELIST ONLY) Whitelisted domains / subdomains
      - LAN Subnet (so we can ban requests to this)
      - Listen IP / port
    - VPN Server
      - Server Software (OpenVPN or Shadowsocks, likely just Ovpn to start with, but good to have options)
      - Listen protocol (TCP / UDP / Both)
      - Listen IP
      - TCP Port (show one or both depending on the protocol choice)
      - UDP Port (show one or both depending on the protocol choice)
      - Max sessions per user (Same user, multi device)
  - Statistics
    - Various usage statistics in table form
    - Per service BW usage stats on a per month basis
    - Per user BW usage stats on a per month basis ACROSS services
    - Telemetry results ("healthcheck")
  - Users
    - Send a sortable list with search
    - Add / Edit / Delete user actions
    - For adding a user, assume name / email / service_access (either proxy / vpn / both) as options. Add others if you see fit, these are basically the "LOCAL" users.
  - Settings
    - Bandwidth limit (not available in the MVP, but thought it was a good option)
    - REST API Listen IP / port
    - Log Retention (days)
    - Statistics Retention (days)
    - ..others as they're thought of
  - Help
    - Help section dedicated to managing/configuring your daemon server
- Marketplace
  - Marketplace
    - "Find a proxy"
  - Settings
    - Billing related settings (?)
  - Help
    - Help section dedicated to the marketplace
- Login/sign up (redirected here if you're not signed in)
- My account
  - Allows for modification of your Spectero account (name, address, password, etc.)
