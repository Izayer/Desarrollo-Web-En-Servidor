<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

date_default_timezone_set("Europe/Madrid");
$date = date('m/d/Y h:i:s a', time());
//'Fri, 25 Oct 2013 23:10:10 -0000'
//                        10/17/2016 11:27:00 am'
# Instantiate the client.
$mgClient = new Mailgun('key-10af318821d3f9d46d2f1961e4248f9e');
$domain = "sandbox19c7063fcf584230a71661e9f43c2134.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox19c7063fcf584230a71661e9f43c2134.mailgun.org>',
                        'to'      => 'Iker <iizaguirreay15dw@ikzubirimanteo.com>',
                        'subject' => 'Hello Iker',
                        'text'    => 'Testing some Mailgun awesomness!',
                        'o:deliverytime' => 'Fri, 25 Oct 2013 23:10:10 -0000',
                        
                        'html'    => '<html>Inline image: <img src="cid:icon.png"></html>'
                        ), array(
    'inline' => array('icon.png')
));