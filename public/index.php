<?php

$realIP = file_get_contents("http://ipecho.net/plain");

echo "
    <div style=\"text-align: center; font-size: 50px; color: #006400; font-weight: bold\">
        Hey Friends! <br /> This is VPN Public IP: {$realIP}!
    </div>
";
