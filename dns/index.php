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

// Gets domain from URL
$domainreq = htmlspecialchars(strtolower($_GET["domain"]));

// Records
$dnsSOA = dns_get_record("$domainreq", DNS_SOA);
$dnsA = dns_get_record("$domainreq", DNS_A);
$dnsAwww = dns_get_record("www.$domainreq", DNS_A);
$dnsAAAA = dns_get_record("$domainreq", DNS_AAAA);
$dnsAAAAwww = dns_get_record("www.$domainreq", DNS_AAAA);
$dnsNS = dns_get_record("$domainreq", DNS_NS);
$dnsMX = dns_get_record("$domainreq", DNS_MX);
$dnsCNAME = dns_get_record("$domainreq", DNS_CNAME);
$dnsTXT = dns_get_record("$domainreq", DNS_TXT);

// Sends to / if no domain in URL
if(empty($domainreq)){
	header("Location: ".$installlocation);
}

// Standard page stuff
$pg = "DNS";
include '../site/includes/header.php';

// str replace first
function str_replace_first($from, $to, $content)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $content, 1);
}

// Convert DNS format emails to normal format
$dnsSOA_email = str_replace_first(".","@", $dnsSOA['0']['rname']);
?>

				<div class="container mb-3 mt-3">

					<?php
					include '../site/includes/querynav.php';
					?>

					<hr class="mt-0">
<?php
if($_GET['format'] === "soa_raw"){
    echo "<pre>";
    print_r($dnsSOA);
    echo "</pre>";
}
?>

<?php
if(!empty($dnsSOA)){
?>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="bg-light">
                                        <th><abbr title="Start of Authority">SOA</abbr></th>
                                        <?php if(!empty($dnsSOA['0']['ttl'])) { ?>
                                        <th><abbr title="Time to Live">TTL</abbr></th>
                                        <?php } if(!empty($dnsSOA['0']['minimum-ttl'])) { ?>
                                        <th><abbr title="Minimum Time to Live">Min TTL</abbr></th>
                                        <?php } if(!empty($dnsSOA['0']['mname'])) { ?>
                                        <th>Master Nameserver</th>
                                        <?php } if(!empty($dnsSOA['0']['rname'])) { ?>
                                        <th>DNS Master Email</th>
                                        <?php } if(!empty($dnsSOA['0']['serial'])) { ?>
                                        <th>Serial</th>
                                        <?php } if(!empty($dnsSOA['0']['refresh'])) { ?>
                                        <th>Refresh</th>
                                        <?php } if(!empty($dnsSOA['0']['retry'])) { ?>
                                        <th>Retry</th>
                                        <?php } if(!empty($dnsSOA['0']['expire'])) { ?>
                                        <th>Expire</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SOA</td>
                                        <?php if(!empty($dnsSOA['0']['ttl'])) { ?>
                                        <td><?= $dnsSOA['0']['ttl'] ?></td>
                                        <?php }if(!empty($dnsSOA['0']['minimum-ttl'])) { ?>
                                        <td><?= $dnsSOA['0']['minimum-ttl'] ?></td>
                                        <?php } if(!empty($dnsSOA['0']['mname'])) { ?>
                                        <td><a href="/dns/<?= $dnsSOA['0']['mname'] ?>"><?= $dnsSOA['0']['mname'] ?></a></td>
                                        <?php } if(!empty($dnsSOA['0']['mname'])) { ?>
                                        <td><a href="mailto:<?= $dnsSOA_email ?>"><?= $dnsSOA_email ?></a></td>
                                        <?php } if(!empty($dnsSOA['0']['serial'])) { ?>
                                        <td><?= $dnsSOA['0']['serial'] ?></td>
                                        <?php } if(!empty($dnsSOA['0']['refresh'])) { ?>
                                        <td><?= $dnsSOA['0']['refresh'] ?></td>
                                        <?php } if(!empty($dnsSOA['0']['retry'])) { ?>
                                        <td><?= $dnsSOA['0']['retry'] ?></td>
                                        <?php } if(!empty($dnsSOA['0']['expire'])) { ?>
                                        <td><?= $dnsSOA['0']['expire'] ?></td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
<?php
}
?>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="bg-light">
                                <th>Hostname</th>
                                <th>Type</th>
                                <th>Priority</th>
                                <th>TTL</th>
                                <th>Value</th>
                            </tr>
                            <tbody>
<?php
if(!empty($dnsA)){
    foreach($dnsA as $dA){
?>
                                <tr>
                                    <td><?= $domainreq ?></td>
                                    <td>A</td>
                                    <td></td>
                                    <td><?= $dA['ttl'] ?></td>
                                    <td><a class="dnslink" href="/whois/<?= $dA['ip'] ?>"><?= $dA['ip'] ?></a></td>
                                </tr>
<?php
    }
}if(!empty($dnsAAAA)){
    foreach($dnsAAAA as $dAAAA){
?>
                                <tr>
                                    <td><?= $domainreq ?></td>
                                    <td>AAAA</td>
                                    <td></td>
                                    <td><?= $dAAAA['ttl'] ?></td>
                                    <td><a class="dnslink" href="/whois/<?= $dAAAA['ipv6'] ?>"><?= $dAAAA['ipv6'] ?></a></td>
                                </tr>
<?php
    }
} if(!empty($dnsAwww)){
    foreach($dnsAwww as $dAwww){
?>
                                <tr>
                                    <td><?= "www.".$domainreq ?></td>
                                    <td>A</td>
                                    <td></td>
                                    <td><?= $dAwww['ttl'] ?></td>
                                    <td><a class="dnslink" href="/whois/<?= $dAwww['ip'] ?>"><?= $dAwww['ip'] ?></a></td>
                                </tr>
<?php
    }
} if(!empty($dnsAAAAwww)){
    foreach($dnsAAAAwww as $dAAAAwww){
?>
                                <tr>
                                    <td><?= "www.".$domainreq ?></td>
                                    <td>AAAA</td>
                                    <td></td>
                                    <td><?= $dAAAAwww['ttl'] ?></td>
                                    <td><a class="dnslink" href="/whois/<?= $dAAAAwww['ipv6'] ?>"><?= $dAAAAwww['ipv6'] ?></a></td>
                                </tr>


<?php
    }
} if(!empty($dnsMX)){
    foreach($dnsMX as $dMX){
?>
                                <tr>
                                    <td><?= $domainreq ?></td>
                                    <td>MX</td>
                                    <td><?= $dMX['pri'] ?></td>
                                    <td><?= $dMX['ttl'] ?></td>
                                    <td><a class="dnslink" href="/dns/<?= $dMX['target'] ?>"><?= $dMX['target'] ?></a></td>
                                </tr>
<?php
    }
} if(!empty($dnsNS)){
    foreach($dnsNS as $d_NS){
?>
                                <tr>
                                    <td><?= $domainreq ?></td>
                                    <td>NS</td>
                                    <td></td>
                                    <td><?= $d_NS['ttl'] ?></td>
                                    <td><a class="dnslink" href="/dns/<?= $d_NS['target'] ?>"><?= $d_NS['target'] ?></a></td>
                                </tr>
<?php
    }
} if(!empty($dnsCNAME)){
    foreach($dnsCNAME as $d_CNAME){
?>
                                <tr>
                                    <td><?= $domainreq ?></td>
                                    <td>CNAME</td>
                                    <td></td>
                                    <td><?= $d_CNAME['ttl'] ?></td>
                                    <td><a class="dnslink" href="/dns/<?= $d_CNAME['target'] ?>"><?= $d_CNAME['target'] ?></a></td>
                                </tr>
<?php
    }
}
?>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>

<?php
include '../site/includes/footer.php';
?>