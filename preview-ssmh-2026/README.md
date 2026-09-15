# Shri Sai Hospital website staging draft

This is a review draft for the existing cPanel/PHP hosting. Do not replace the live `public_html` until the draft is reviewed, backed up, and tested in a staging subdomain.

## Before deployment

- Confirm the hosting PHP version is 7.4 or newer.
- Configure SPF/DKIM and verify PHP `mail()` delivery, or replace it with authenticated SMTP credentials stored outside `public_html`.
- Rotate the database password exposed by the legacy doctor-search files, then retire those files.
- Add final doctor qualifications and missing photographs.
- Generate and validate `sitemap.xml` after final page URLs are approved.
- Review NABH mark-use requirements before displaying an official logo asset.
