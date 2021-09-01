<?php
$domainreq = htmlspecialchars(strtolower($_GET["domain"]));
header("Location: /whois/$domainreq");
?>
