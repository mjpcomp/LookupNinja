<?php
$domainreq = htmlspecialchars(strtolower($_GET["domain"]));
header("Location: /dns/$domainreq");
?>
