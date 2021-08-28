# Sendgrid test

## steps before running src/email.php
- Create an api key in sendrid (https://app.sendgrid.com/guide/integrate/langs/php)
- echo "export SENDGRID_API_KEY='YOUR_API_KEY'" > sendgrid.env
- source ./sendgrid.env
- run `$ php src/email.php` 