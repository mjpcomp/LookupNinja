# Lookup Ninja
A PHP-based WHOIS and DNS lookup tool.

## Installing Lookup Ninja on your Server
Lookup Ninja has been developed to be installed at `/`, not in a sub-directory, thus we recommend either setting up a domain just for your instance, or setting up a subdomain for it.

Instances have been successfully setup on both Apache and Nginx, though the latter is all we officialy support due to config files.

**Recommended * :**
- [x] Nginx server
- [x] PHP 7.2, or later

_* instances using this software have been successful_

**Guide**
1. Clone this Git repo into a directory within `/var/www`
2. Copy the Nginx config file into `/etc/nginx/sites-available` under the name `lookupninja`
3. Change `server_name` to the domain/sub-domain where you're installing your instance
4. Change `root` to where the instance's source code is (within `/var/www`)
5. Symbolically link `/etc/nginx/sites-available/lookupninja` and `/etc/nginx/sites-enabled/lookupninja` using `ln -s`
6. Reload Nginx (on Debian-based distros use `systemctl reload nginx`)
7. **HIGHLY recommended:** Run certbot on your new instance's subdomain/domain

## Submit your Instance!
You can submit your instance to [Lookup Ninja's Public Instances Index](https://github.com/Lookup-Ninja/PII), available at [lookup.ninja](http://lookup.ninja). Submission instructions are [available on Github](https://github.com/Lookup-Ninja/PII/blob/main/CONTRIBUTE.md).

## Credits
Lookup Ninja was developed by [Jacob Sammon](https://github.com/jacobsammon), with the help of:

| Org/Person/Company | Product |  Purpose  |   Website    |
|--------------------|---------|-----------|--------------|
| Bootstrap     | Bootstrap | PHP & JS framework | [getbootstrap.com](https://getbootstrap.com)
| phpWhois | phpWhois | Handles WHOIS queries | [phpwhois.org](https://phpwhois.org)
| jQuery | jQuery | Required by Bootstrap for JS | [jquery.com](https://jquery.com)

## Licence
Lookup Ninja is licenced under [GPL-v3](https://github.com/Lookup-Ninja/LookupNinja/blob/main/LICENSE).

&copy; Jacob Sammon <[js@eml.pm](mailto:js@eml.pm)> & Lookup Ninja, 2021
