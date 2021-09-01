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
<div class="row no-gutters">
    <div class="col">
        <a href="/whois/<?= $domainreq ?>" class="btn btn-block <?php if($pg === "WHOIS"){ echo 'btn-success'; }else{ echo 'btn-outline-secondary'; } ?>">WHOIS</a>
    </div>
    <div class="col">
        <a href="/dns/<?= $domainreq ?>" class="btn btn-block <?php if($pg === "DNS"){ echo 'btn-success'; }else{ echo 'btn-outline-secondary'; } ?>">DNS</a>
    </div>
</div>
<div class="card bg-light" style="border-top:0">
	<div class="card-body">
		<h1 class="mb-0 mt-0"><a style="color:black;text-decoration:none" target="_blank" href="http://<?= $domainreq ?>"><?= $domainreq ?></a></h1>
	    <p class="text-muted mt-0 mb-0"><?php if($pg === "DNS"){ echo 'DNS'; } elseif($pg === "WHOIS"){ echo 'WHOIS'; } ?> Information</p>
	</div>
</div>
