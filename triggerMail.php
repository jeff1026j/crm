<?php
require 'src/vendor/autoload.php';
require_once 'config/mailKey.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun(mailapi);

# Make the call to the client.
$result = $mgClient->sendMessage(maildomain, array(
    'from'    => 'Excited User <good@morningshop.tw>',
    'to'      => 'Baz <jeffreywu@ouregion.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));



?>
