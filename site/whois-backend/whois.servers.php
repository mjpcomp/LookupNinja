<?php
/*
Whois.php        PHP classes to conduct whois queries

Copyright (C)1999,2005 easyDNS Technologies Inc. & Mark Jeftovic

Maintained by David Saez

For the most recent version of this package visit:

http://www.phpwhois.org

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/* servers.whois	v18   Markus Welters	2004/06/25 */
/* servers.whois	v17	ross golder	2003/02/09 */
/* servers.whois	v16	mark jeftovic	2001/02/28 */

// Modified by Jacob Sammon <js@eml.pm> <https://jacobsammon.com> for 
// Lookup Ninja
$this->DATA_VERSION = '19';

$this->DATA = array(
	'bz'		=> 'gtld',
	'com'		=> 'gtld',
	'jobs'		=> 'gtld',
	'li'		=> 'ch',
	'net'		=> 'gtld',
	'su'		=> 'ru',
	'tv'		=> 'gtld',
	'za.org'	=> 'zanet',
	'za.net'	=> 'zanet',
	// Punicode
	'xn--p1ai' => 'ru'
	);

/* Non UTF-8 servers */

$this->NON_UTF8 = array(
	'br.whois-servers.net' => 1,
	'ca.whois-servers.net' => 1,
	'cl.whois-servers.net' => 1,
	'hu.whois-servers.net' => 1,
	'is.whois-servers.net' => 1,
	'pt.whois-servers.net' => 1,
	'whois.interdomain.net' => 1,
	'whois.lacnic.net' => 1,
	'whois.nicline.com' => 1,
	'whois.ripe.net' => 1
	);

/* If whois Server needs any parameters, enter it here */

$this->WHOIS_PARAM = array(
	'com.whois-servers.net' => 'domain =$',
	'net.whois-servers.net' => 'domain =$',
	'de.whois-servers.net'	=> '-T dn,ace $',
	'jp.whois-servers.net'	=> 'DOM $/e'
	);

$this->WHOIS_SPECIAL = array(
        'gay'    => 'whois.nic.gay',
		'ad'	 => '',
		'ae'	 => 'whois.aeda.net.ae',
		'af'	 => 'whois.nic.af',
		'ai'	 => 'whois.nic.ai',
		'al'	 => '',
		'az'	 => '',
		'ba'	 => '',
		//'bb'	 => 'whois.nic.bb',
		'bg'	 => 'whois.register.bg',
		'bh'	 => 'whois.nic.bh',
		'bi'	 => 'whois.nic.bi',
		'bj'	 => 'whois.nic.bj',
		'by'	 => 'whois.cctld.by',
		'bz'	 => 'whois2.afilias-grs.net',
		//'cy'	 => 'http://whois.nic.cy',
		'es'	 => 'whois.nic.es',
		'fj'	 => 'whois.usp.ac.fj',
		'fm'     => 'whois.nic.fm',
		'jobs'	 => 'whois.nic.jobs',
		'ke'	 => 'whois.kenic.or.ke',
		//'gr'	 => 'whois.nic.gr',
		//'gs'     => 'whois.nic.gs',
		//'gt'	 => 'whois.nic.org.gt',
		'me'	 => 'whois.nic.me',
		'mobi'	 => 'whois.dotmobiregistry.net',
		'ms'     => 'whois.nic.ms',
		'mt'	 => 'whois.nic.org.mt',
		'nl'	 => 'whois.domain-registry.nl',
		'ly'	 => 'whois.nic.ly',
		'pe'	 => 'kero.rcp.net.pe',
		'pr'	 => 'whois.uprr.pr',
		'pro'	 => 'whois.registry.pro',
		'sc'     => 'whois2.afilias-grs.net',
		'tc'     => 'whois.nic.tc',
		'tf' 	 => 'whois.afnic.fr',
		'ovh'	 => 'whois.nic.ovh',
		've'	 => 'whois.nic.ve',
		'vg'     => 'whois.nic.vg',
		'network' => 'whois.nic.network',
		'monster' => 'whois.nic.monster',
		'fyi'	 => 'whois.nic.fyi',
		'contact' => 'whois.nic.contact',
		'cfd'	 => 'whois.nic.cfd',
		'gle'	 => 'whois.nic.google',
		'google' => 'whois.nic.google',
		'microsoft' => 'whois.nic.microsoft',
		'cyou'	 => 'whois.nic.cyou',
		'app'	 => 'whois.nic.google',
		'dev'	 => 'whois.nic.google',
		'new'	 => 'whois.nic.google',
		'scot'	 => 'whois.nic.scot',
		'republican' => 'whois.nic.republican',
		'rent'	 => 'whois.nic.rent',
		'progressive' => 'whois.nic.progressive',
		'porn'	 => 'whois.nic.porn',
		'pizza'  => 'whois.nic.pizza',
		'ooo'	 => 'whois.nic.ooo',
		'mobile' => 'whois.nic.mobile',
		'hosting' => 'whois.nic.hosting',
		'army'	 => 'whois.nic.army',
		'apple'	 => 'whois.afilias-srs.net',
		'analytics' => 'whois.nic.analytics',
		'life'	 => 'whois.nic.life',
		'design' => 'whois.nic.design',
		'li'	 => 'whois.nic.li',
		'ch'	 => 'whois.nic.ch',
		'la'	 => 'whois.nic.la',
		'online' => 'whois.nic.online',
		'garden' => 'whois.nic.garden',
		'guide'  => 'whois.nic.guide',
		'chat'   => 'whois.nic.chat',
		'family' => 'whois.nic.family',
		'page'   => 'whois.nic.page',
		'blog'   => 'whois.nic.blog',
		'studio' => 'whois.nic.studio',
		'work'   => 'whois.nic.work',
		'property' => 'whois.nic.property',
		'abogado' => 'whois.nic.abogado',
		'accountants' => 'whois.nic.accountants',
		'adult'  => 'whois.nic.adult',
		'airforce' => 'whois.nic.airforce',
		'windows' => 'whois.nic.windows',
		'lol'	 => 'whois.nic.lol',
		'bio'	 => 'whois.nic.bio',
		'host'   => 'whois.nic.host',
		'store'  => 'whois.nic.store',
		'live'   => 'whois.nic.live',
		'ltd'   => 'whois.nic.ltd',
		'video' => 'whois.nic.video',
		'irish' => 'whois.nic.irish',
		'space' => 'whois.nic.space',
		'website' => 'whois.nic.website',
		'help'  => 'whois.nic.help',
		'apartments' => 'whois.nic.apartments',
		'alipay' => 'whois.nic.alipay',
		'gives' => 'whois.nic.gives',
		'cern'  => 'whois.nic.cern',
		'gov.uk' => 'whois.ja.net',
		'group' => 'whois.nic.group',
		'collage' => 'whois.nic.collage',
		'site'  => 'whois.nic.site',
		'bet'   => 'whois.nic.best',
		'deals' => 'whois.nic.deals',
		'software' => 'whois.nic.software',
		'world' => 'whois.nic.world',
		'mil'   => 'whois.nic.mil',
		//
		//
		//
		// Second level
		//
		//
		//
		'eu.org' => 'nic.eu.org',
		'net.au' => 'whois.aunic.net',
		'ae.com' => 'whois.centralnic.net',
		'br.com' => 'whois.centralnic.net',
		'cn.com' => 'whois.centralnic.net',
		'de.com' => 'whois.centralnic.net',
		'eu.com' => 'whois.centralnic.net',
		'hu.com' => 'whois.centralnic.net',
		'jpn.com'=> 'whois.centralnic.net',
		'kr.com' => 'whois.centralnic.net',
		'gb.com' => 'whois.centralnic.net',
		'no.com' => 'whois.centralnic.net',
		'qc.com' => 'whois.centralnic.net',
		'ru.com' => 'whois.centralnic.net',
		'sa.com' => 'whois.centralnic.net',
		'se.com' => 'whois.centralnic.net',
		'za.com' => 'whois.centralnic.net',
		'uk.com' => 'whois.centralnic.net',
		'us.com' => 'whois.centralnic.net',
		'uy.com' => 'whois.centralnic.net',
		'gb.net' => 'whois.centralnic.net',
		'se.net' => 'whois.centralnic.net',
		'uk.net' => 'whois.centralnic.net',
		'za.net' => 'whois.za.net',
		'za.org' => 'whois.za.net',
		'co.za'  => 'http://co.za/cgi-bin/whois.sh?Domain={domain}.co.za',
		'org.za' => 'http://www.org.za/cgi-bin/rwhois?domain={domain}.org.za&format=full'
		);

/* handled gTLD whois servers */

$this->WHOIS_GTLD_HANDLER = array(
		'whois.bulkregister.com'			=> 'enom',
		'whois.dotregistrar.com'			=> 'dotster',
		'whois.namesdirect.com'				=> 'dotster',
		'whois.psi-usa.info'				=> 'psiusa',
		'whois.www.tv'						=> 'tvcorp',
		'whois.tucows.com'					=> 'opensrs',
		'whois.35.com'						=> 'onlinenic',
		'whois.nominalia.com'				=> 'genericb',
		'whois.encirca.com'					=> 'genericb',
		'whois.corenic.net'					=> 'genericb'
		);

/* Non ICANN TLD's */

$this->WHOIS_NON_ICANN = array (
		'agent'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'agente'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'america'	=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'amor'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'amore'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'amour'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'arte'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'artes'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'arts'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'asta'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'auction'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'auktion'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'boutique'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'chat'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'chiesa'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'church'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'cia'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'ciao'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'cie'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'club'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'clube'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'com2'		=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'deporte'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'ditta'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'earth'		=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'eglise'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'enchere'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'escola'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'escuela'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'esporte'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'etc'		=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'famiglia'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'familia'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'familie'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'family'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'free'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'hola'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'game'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'ges'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'gmbh'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'golf'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'gratis'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'gratuit'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'iglesia'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'igreja'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'inc'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'jeu'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'jogo'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'juego'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'kids'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'kirche'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'krunst'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'law'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'legge'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'lei'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'leilao'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'ley'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'liebe'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'lion'		=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'llc'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'llp'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'loi'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'loja'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'love'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'ltd'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'makler'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'med'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'mp3'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'not'		=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'online'	=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'recht'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'reise'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'resto'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'school'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'schule'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'scifi'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'scuola'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'shop'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'soc'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'spiel'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'sport'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'subasta'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'tec'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'tech'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'tienda'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'travel'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'turismo'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'usa' 		=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
		'verein'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'viaje'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'viagem'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'video'		=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'voyage'	=> 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
		'z'			=> 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}'
		);
?>
