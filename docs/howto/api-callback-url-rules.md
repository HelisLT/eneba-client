# API callback url rules

All registered API callbacks must conform to rules listed below

Additionally, all provided urls must conform to [domain ownership](declared-stock-domain-ownership.md) validation

## Url rules
* Urls must not be IP addresses
* Maximum length of url is 1024 characters
* Urls **must not** contain query strings
* Urls must use "secure http" (https://) scheme

## Examples
### Examples of good urls
* **Good**: https://www.yourdomain.com/reservation
* **Good**: https://yourdomain.com/reservation
* **Good**: https://yourdomain.com/
* **Good**: https://yourdomain.com/api/reservation
* **Good**: https://reservation.yourdomain.com/
* **Good**: https://provision.yourdomain.com/

### Examples of bad urls
* **Bad** (Does not use https): http://www.yourdomain.com/reservation
* **Bad** (Is IP address): https://0.0.0.0/reservation
* **Bad** (Contains query strings): https://www.yourdomain.com/api?action=reservation
