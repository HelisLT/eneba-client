# Declared stock domain ownership

Domain ownership can be proven in two ways:
* Dns TXT record validation
* Hosted file validation

## Dns TXT record validation
Dns TXT record validation is the preferred validation mechanism as it is faster and does not make requests to your system meaning less load for your servers

Steps to enable Dns TXT domain verification
* Sign in to your domain name provider site
* Go to https://my.eneba.com/api/domain-verification and copy TXT record value in "DNS VERIFICATION" section
* Create new DNS TXT record for addresses you use for "declared stock" in your domain name provider site

**Note:** Dns TXT records might take up to 24 hours to activate, depending on your domain name provider

**Note:** Your provided url host will be validated. Example: If url is: https://api.yourdomain.com/reservation, then only "api.yourdomain.com" will be checked for Dns TXT records

## Hosted file validation
Steps to enable hosted file validation

* Go to https://my.eneba.com/api/domain-verification and download your verification file
* Upload downloaded file, so it will be accessible from your root url. Example: www.yourdomain.com/eneba-verification.txt

## Verifying validation
You can verify your implemented domain verification mechanism by clicking "Verify" button in https://my.eneba.com/api/domain-verification

You should get a message whether your domain ownership validation was successful or get an error message if validation was not successful
