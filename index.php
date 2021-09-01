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

$pg = "Home";
include 'site/includes/header.php';
$ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);
?>
            <div class="my-auto">
                <div class="container mb-5">
                    <div style="max-width:28rem;margin: 0 auto" class="text-center">
						<img src="/site/logo_fpg.png" class="img-fluid mb-0" style="max-width:11rem" alt="Lookup Ninja's Logo">			
						<form action="/site/send/whois.php" method="get" autocomplete="off" class="mt-0 form-inline my-2 my-lg-0 ml-auto">
							<input style="max-width:28rem;margin: 0 auto" required="required" autocorrect="off" autocapitalize="off" autocomplete="" name="domain" class="mb-2 w-100 form-control form-control-lg my-2" type="search" placeholder="Enter a domain, ASN, or IP address" aria-label="Lookup" value="<?= $domainreq; ?>" autofocus></input>
							<button class="w-100 btn btn-lg btn-success my-2 my-sm-0" type="submit">Lookup!</button>
						</form>
						<p class="mt-2 text-muted small"><i class="bi bi-reception-4"></i> <a style="word-break:break-all;" href="/whois/<?= $ip ?>" class="text-muted"><?= $ip ?></a> is your IP address</p>
					</div>
                </div>
            </div>

<?php
include 'site/includes/footer.php';
?>
