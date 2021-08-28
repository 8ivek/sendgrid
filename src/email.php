<?php

namespace App;

require dirname(__FILE__, 2) . '/vendor/autoload.php';

try {
    $sendgrid_api_key = getenv('SENDGRID_API_KEY');
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("support@sellmax.net", "Bivek Joshi");
    $email->setSubject("Sending with SendGrid is Fun");
    $email->addTo("bivek_j@yahoo.com", "Sujita Joshi");
    $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
    $email->addContent(
        "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    );
    $sendgrid = new \SendGrid($sendgrid_api_key, ['verify_ssl' => false]);
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (\Exception $e) {
    echo "Caught exception: ". $e->getMessage() ."\n";
}