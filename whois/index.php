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

// GET things, etc
$format = $_GET['format'];
$aag = $_GET['aag'];

// Gets domain from URL
$domainreq = htmlspecialchars(strtolower($_GET["domain"]));

// Sends user to home if they made no reuqest
if(empty($domainreq)){
	header("Location: /");
}

// Normal page stuff
$pg = "WHOIS";
include '../site/includes/header.php';

// wooo cool WHOIS
include '../site/whois-backend/whois.main.php';
include '../site/whois-backend/whois.utils.php';
$whois->deep_whois = true;
$whois = new Whois();
$query = "$domainreq";
$result = $whois->Lookup($query);
$resout = str_replace('{query}', $query, $resout);
$utils = new utils;
$winfo = $utils->showHTML($result);

// site info stuff
$john = get_headers("http://".$domainreq, 1);

// gets tld/before tld
$firstbit = strtok($domainreq, '.');
// **** this below includes dot - .co.uk, .net
$thetld = strstr($domainreq, '.');

// tlds with broken ns
// INCLUDE .
$ns_issues = array(".co.uk", ".uk", ".me.uk", ".gov.uk", ".mod.uk", ".mil.uk", ".eu");

// domain exts for box
$exts = array('com', 'net', 'org', 'club', 'co', 'site', 'ninja', 'cloud');
?>

				<div class="container mt-3 mb-3">

					<?php
					if($result['regyinfo']['type'] === "domain"){
					    if($result['regrinfo']['registered'] === "no"||$result['regrinfo']['registered'] === "unknown"){
					?>
					<div class="mb-3">
						<div class="card">
						    <div class="py-1 card-header text-right text-uppercase">
						        <small>Information</small>
						    </div>
							<div class="card-body">
							    <div class="row">
							        <div class="col-md">
							            <h2 class="mb-0 mt-0"><strong><?= $domainreq ?></strong> is Available for Registration.</h2>
							        </div>
							    </div>
							</div>
						</div>
					</div>
					<?php
					    }
					}
					?>

					<?php
					include '../site/includes/querynav.php';
					?>
					<div class="row">
					    <div class="col-md-8">
        					<div class="card mt-3">
        					    <div class="card-header">
        					        <h3 class="text-center mb-0">WHOIS</h3>
        					    </div>
        						<div class="card-body">
<?php
if($format === "raw"){
?>
                                    <pre class="bg-light p-3">
                                        <?php print_r($result); ?>
                                    </pre>
<?php
}else{
?>
<?php
    							if(empty($winfo)){
?>
                                    <h1>Hmm. <span class="text-muted">Something's broke.</span></h1>
                                    <p class="lead">Our WHOIS request to this TLD's WHOIS server failed.</p>
                                    <p class="mb-0">Try again in a few minutes.</p>
<?php
                                }else{
                                    echo $winfo;
                                }
}
?>
                                </div>
<?php
if(!empty($winfo)){
?>
                                <div class="py-1 card-footer text-right text-uppercase">
						            <small>Cached</small>
						        </div>
<?php
}
?>
                        </div>
                        </div>
                        <div class="col-md-4">
<?php
if(!isset($result['regrinfo']['AS'])){
?>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h3 class="text-center mb-0">Site Info</h3>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0"><strong>Webserver:</strong> <?php
                                    if(is_array($john['Server'])){
                                        echo htmlspecialchars($john['Server']['0']);
                                    }
                                    elseif(!is_array($john['Server'])){
                                        echo htmlspecialchars($john['Server']);
                                    }
                                    if(empty($john)){
                                        echo "<span class=\"badge badge-danger text-uppercase\">None</span>";
                                    }
                                    ?></p>
                                </div>
                            </div>
<?php
}
//if(isset($result['regrinfo']['domain']['nserver'])){
?>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h3 class="mb-0 text-center">Nameservers</h3>
                                </div>
                                <div class="card-body">
<?php
if (in_array($thetld, $ns_issues)) {
    echo "<p class=\"mb-0\">Sorry, but we can't get the name servers from domains with the ".$thetld." TLD.</p>";
}
else{
?>
                                    <p class="mb-0"><?php
                                    foreach($result['regrinfo']['domain']['nserver'] as $ns => $ip){
                                        echo "<code>".$ns."</code> <small class=\"text-muted\">(".$ip.")</small><br>";
                                    }
                                    ?></p>
<?php
}if(!isset($result['regrinfo']['domain']['nserver'])){
    echo "<p class=\"mb-0\"><span class=\"badge badge-danger text-uppercase\">No Nameservers Found</span></p>";
}
?>
                                </div>
                            </div>
<?php
//}
?>
                            </div>
                        </div>
					</div>
				</div>

<?php
include '../site/includes/footer.php';
?>
