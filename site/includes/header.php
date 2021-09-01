<?php
/*
    Lookup Ninja: PHP-based WHOIS & DNS lookup platform.
    Copyright (C) 2021, Jacob Sammon

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
    
    Contact: Jacob Sammon <js@eml.pm>
*/
?>
<!DOCTYPE HTML>
	<html lang="en-GB">
		<head>
			<meta charset="utf-8">
			<link rel="icon" href="/favicon.ico?v=1">
			<link rel="stylesheet" href="/site/min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
			<link rel="stylesheet" href="/site/squarify.css">
<?php
if($pg === "Home"){
?>
			<meta name="description" content="Lookup Ninja provides free WHOIS and DNS lookups on domains, IPs, and ASNs. Search the WHOIS database and lookup DNS information for free online.">
<?php
} elseif($pg === "WHOIS"){
?>
			<meta name="description" content="Search the WHOIS database for <?= $domainreq ?> at Lookup Ninja.">
<?php
} elseif($pg === "DNS"){
?>
			<meta name="description" content="Find DNS information for <?= $domainreq ?> at Lookup Ninja.">
<?php
}
?>
			<title><?php if($pg === "DNS"){ echo "$domainreq DNS Lookup"; } elseif($pg === "WHOIS"){ echo "$domainreq WHOIS Lookup"; } ?><?php if($pg === "Home" || $pg === "WHOIS" || $pg === "DNS"){ } else{ echo $pg." | "; }?><?php if($pg === "DNS" || $pg === "WHOIS"){ echo " | "; } ?>Lookup Ninja<?php if($pg === "Home"){ echo' - Free WHOIS and DNS Lookups'; } ?></title>
		</head>
		<body onload="onlo()">
			<div class="d-flex flex-column min-vh-100" id="top">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container">
						<a class="navbar-brand" href="/">Lookup Ninja</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item <?php if($pg === "Home"){ echo 'active'; } ?>">
									<a class="nav-link" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
								</li>
							</ul>
						<form action="/site/send/<?php if($pg === "WHOIS"){ echo 'whois.php'; } elseif($pg === "DNS"){ echo 'dns.php'; } else{ echo 'whois.php'; } ?>" method="get" autocomplete="off" class="form-inline my-2 my-lg-0 ml-auto">
							<input required="required" autocorrect="off" autocapitalize="off" autocomplete="false" name="domain" class="form-control mr-sm-1 top-srch" type="search" placeholder="Enter a domain, ASN, or IP address" aria-label="Search" value="<?= $domainreq; ?>">
							<button class="btn btn-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
						</form>
						</div>
					</div>
				</nav>
				<hr class="mt-0 mb-0" style="width:100%;height:0.2rem;background-color:#08e1ae;background-image:linear-gradient(315deg, #08e1ae 0%, #98de5b 74%);">
