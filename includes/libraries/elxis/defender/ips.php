<?php 
/**
* @version		$Id$
* @package		Elxis
* @subpackage	Elxis Defender
* @copyright	Copyright (c) 2006-2012 Elxis CMS (http://www.elxis.org). All rights reserved.
* @license		Elxis Public License ( http://www.elxis.org/elxis-public-license.html )
* @author		Elxis Team ( http://www.elxis.org )
* @description 	Elxis CMS is free software. Read the license for copyright notices and details
*/

defined('_ELXIS_') or die ('Direct access to this location is not allowed.');


/* IP ADDRESSES, IP RANGES AND CIDR BLOCKS (Last update: 2011-06-21 20:50:10) */
$signatures = array(
	array('lmatch', 'address', '65.94.3.', 'Site Scraper.'),
	array('lmatch', 'address', '115.124.102.24', 'Infected Machine.'),
	array('lmatch', 'address', '122.221.10.234', 'Infected Machine.'),
	array('iprange', 'address', '4.78.243.0', '4.78.243.255', 'Quantcast : Website Spies, Spyware Purveyors.'),
	array('iprange', 'address', '41.210.192.0', '41.210.255.255', 'Spamhost Movicel Telecomunicacoes LDA Angola.'),
	array('iprange', 'address', '59.93.0.0', '59.93.255.255', 'India Spam Pump.'),
	array('iprange', 'address', '64.128.80.0', '64.128.83.255', 'networkphantom.net - domains by proxy screwball.'),
	array('iprange', 'address', '65.98.0.0', '65.98.127.255', 'pwebtech/FortressITX spam-friendly host.'),
	array('iprange', 'address', '65.208.151.112', '65.208.151.119', 'Jarvis Universal Purchase Company (botnet).'),
	array('iprange', 'address', '66.7.192.0', '66.7.223.255', '3IX / host-care, known bad USA hosts.'),
	array('iprange', 'address', '66.228.192.0', '66.228.223.255', 'Swift Ventures spam/scrape network.'),
	array('iprange', 'address', '67.215.230.0', '67.215.230.255', 'Email harvester from India (setooz.com).'),
	array('iprange', 'address', '68.168.216.0', '68.168.216.255', 'Attacking /24.'),
	array('iprange', 'address', '69.36.0.0', '69.36.15.255', '3IX / host-care, known bad USA hosts.'),
	array('iprange', 'address', '69.72.128.0', '69.72.159.255', 'Hacker/Spammer Hosts.'),
	array('iprange', 'address', '69.89.16.0', '69.89.31.255', 'Hacker/Spammer Hosts.'),
	array('iprange', 'address', '69.210.185.0', '69.210.185.7', 'spunge.org, free sitehost with abuse problems.'),
	array('iprange', 'address', '72.20.99.0', '72.20.99.255', 'Content scraper for paid service.'),
	array('iprange', 'address', '72.27.0.0', '72.27.223.255', 'Jamaica Spammer Network (frittobay).'),
	array('iprange', 'address', '79.143.177.0', '79.143.177.255', 'Netherlands Site Host (doesnt need access to other sites).'),
	array('iprange', 'address', '80.81.159.0', '80.81.159.255', 'Filthy netblock.'),
	array('iprange', 'address', '80.81.208.0', '80.81.223.255', 'Filthy netblock.'),
	array('iprange', 'address', '80.87.152.0', '80.87.152.255', 'Server farm infected with grum spambot.'),
	array('iprange', 'address', '80.93.122.0', '80.93.122.255', 'Ukrainian Attack Prone Netblock.'),
	array('iprange', 'address', '81.21.74.0', '81.21.74.255', 'webfusion.co.uk - sitehost has no business surfing.'),
	array('iprange', 'address', '81.223.254.0', '81.223.254.127', 'smartservercontrol.com - ya aint controlling my server bub.'),
	array('iprange', 'address', '83.233.30.0', '83.233.33.255', 'Sven and Ole have been bad. Multiple referer spams.'),
	array('iprange', 'address', '84.201.224.0', '84.201.239.255', 'Spam network.'), 
	array('iprange', 'address', '85.131.188.0', '85.131.191.255', '.de hosts - sitehost has no business surfing.'),
	array('iprange', 'address', '87.101.0.0', '87.101.15.255', 'PureHosting.nl, a possible extention of keyweb.de .ru (bothost).'),
	array('iprange', 'address', '87.118.68.0', '87.118.122.255', 'keyweb.de .ru (bothost).'),
	array('iprange', 'address', '87.248.64.0', '87.248.95.255', 'Polish Bad Block.'),
	array('iprange', 'address', '87.248.162.0', '87.248.189.255', 'Moldavia Bad Block.'),
	array('iprange', 'address', '91.205.40.0', '91.205.43.255', 'British Virgin Islands Spambots.'),
	array('iprange', 'address', '91.214.44.0', '91.214.45.255', 'Altushost bothost and/or Server Farm.'),
	array('iprange', 'address', '95.24.0.0', '95.24.255.255', 'Corbina.ru Netblock dangerous ISP.'),
	array('iprange', 'address', '95.128.128.0', '95.129.199.255', 'Filthy Russian Netblock.'),
	array('iprange', 'address', '95.129.204.0', '95.129.223.255', 'Filthy Russian Netblock.'),
	array('iprange', 'address', '95.129.232.0', '95.131.103.255', 'Filthy Russian Netblock.'),
	array('iprange', 'address', '95.131.112.0', '95.135.255.255', 'Filthy Russian Netblock.'),
	array('iprange', 'address', '113.160.0.0', '113.191.255.255', 'localhost spoofing netblock.'),
	array('iprange', 'address', '118.98.0.0', '118.101.255.255', 'Filthy/Unassigned Netblock.'),
	array('iprange', 'address', '118.175.254.0', '118.175.255.255', 'Bangkok Attack prone 512 address block.'),
	array('iprange', 'address', '122.182.2.0', '122.182.2.255', 'India spammer/malware host.'),
	array('iprange', 'address', '124.123.0.0', '124.125.255.255', 'Indian hackers - 192K address netblock is bad.'),
	array('iprange', 'address', '141.11.0.0', '141.11.255.255', 'technicolor.c0m, abusive forum scraping network.'),
	array('cidrblock', 'address', '178.239.48.0/20', 'Hostile Belize Block.'),
	array('iprange', 'address', '187.32.0.0', '187.32.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '174.127.128.0', '174.127.255.255', 'VanoppenBiz Scraper Network.'),
	array('iprange', 'address', '188.92.72.0', '188.92.79.255', 'adtechnology.lv spammers.'),
	array('iprange', 'address', '189.15.0.0', '189.15.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '189.41.0.0', '189.41.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '189.112.0.0', '189.112.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '193.200.150.0', '193.200.150.255', 'Anonymizing proxy network, hackers paradise.'),
	array('iprange', 'address', '194.8.74.0', '194.8.75.255', 'British Virgin Islands Spambots.'),
	array('iprange', 'address', '195.87.102.0', '195.87.102.255', 'Comment spammer netblock.'),
	array('iprange', 'address', '195.238.38.0', '195.238.71.255', 'Filthy netblock.'),
	array('iprange', 'address', '195.238.95.0', '195.238.118.255', 'Filthy netblock.'),
	array('iprange', 'address', '200.63.42.0', '200.63.47.255', 'panamaserver.com .ru (bothost).'),
	array('iprange', 'address', '200.146.192.0', '200.146.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '200.170.128.0', '200.170.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '200.225.192.0', '200.225.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '200.233.128.0', '200.233.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '201.16.128.0', '201.16.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '201.48.0.0', '201.48.255.255', 'Filthy Brazilian netblock.'),
	array('iprange', 'address', '203.160.1.0', '203.160.1.255', 'Vietnam Junk Mailer/Forum Spammer.'),
	array('iprange', 'address', '204.8.34.0', '204.8.34.255', 'Swift Ventures spam/scrape network.'),
	array('iprange', 'address', '204.11.16.0', '204.11.19.255', 'onestop.net - sitehost has no business surfing.'),
	array('iprange', 'address', '204.13.164.0', '204.13.167.255', 'Swift Ventures spam/scrape network.'),
	array('iprange', 'address', '204.15.224.0', '204.15.255.255', 'Swift Ventures spam/scrape network.'),
	array('iprange', 'address', '204.124.180.0', '204.124.183.255', 'Comment spammer netblock.'),
	array('iprange', 'address', '204.244.109.240', '204.244.109.247', 'Tynt, Evil Proxy.'),
	array('iprange', 'address', '204.244.120.176', '204.244.120.183', 'Tynt, Evil Proxy.'),
	array('iprange', 'address', '206.161.0.0', '206.161.255.255', 'Questionable Hosts, some malicious.'),
	array('iprange', 'address', '206.196.110.0', '206.196.111.255', 'Rose Hosting.'),
	array('iprange', 'address', '207.38.118.0', '207.38.118.255', 'Scraper Network.'),
	array('iprange', 'address', '207.226.88.0', '207.226.95.255', 'many sitehosts - questionable behaviour.'),
	array('iprange', 'address', '208.64.28.0', '208.64.31.255', '.bh servers caught being b.h. surfers.'),
	array('iprange', 'address', '208.64.200.0', '208.64.203.255', 'Accentra Inc. , Bothost and/or Server Farm.'),
	array('iprange', 'address', '208.64.230.0', '208.64.230.127', 'Possible Terrorist Serverblock (credit: diabolicbg!).'),
	array('iprange', 'address', '208.99.192.0', '208.99.255.255', 'Swift Ventures spam/scrape network.'),
	array('iprange', 'address', '208.115.111.240', '208.115.111.255', 'Dotbot - Paid Service SEO Service.'),
	array('iprange', 'address', '209.62.96.0', '209.62.127.255', 'Questionable Hosts, some malicious.'),
	array('iprange', 'address', '209.135.34.0', '209.135.157.255', 'Questionable Hosts, some malicious.'),
	array('iprange', 'address', '209.249.0.0', '209.249.255.255', 'HUGE block of spam-mail servers, and scanbots.'),
	array('iprange', 'address', '210.0.160.0', '210.0.255.255', 'Japanese servers on Hong Kong netblock, suspicious.'),
	array('iprange', 'address', '211.43.0.0', '211.45.191.255', 'Korean Suspicious.'),
	array('iprange', 'address', '211.91.0.0', '211.97.255.255', 'Chinese Bad Block.'),
	array('iprange', 'address', '212.113.41.0', '212.113.63.255', 'Ukraine Bad Block.'),
	array('iprange', 'address', '212.117.188.0', '212.117.188.255', 'Altushost bothost and/or Server Farm.'),
	array('iprange', 'address', '212.178.0.0', '212.178.29.255', 'Ukraine Bad Block.'),
	array('iprange', 'address', '212.235.0.0', '212.235.127.255', 'netvision.net.il (filthy reputation ISP).'),
	array('iprange', 'address', '213.166.128.0', '213.166.159.255', 'Saudi Arabia bothost.'),
	array('iprange', 'address', '218.56.21.0', '218.56.21.255', 'Chinese Bad Block.'),
	array('iprange', 'address', '222.124.31.0', '222.124.255.255', 'India Bad Block.'),
	array('cidrblock', 'address', '72.10.32.0/19', 'MediaTemple, illegal nameserver response on reverse lookup.'),
// *Ecatel/internetserviceteam.com/netdirekt e.K./NetDirect/jmhservices.com notorious forum spammers.
	array('iprange', 'address', '62.41.26.0', '62.41.27.255', 'Notorious forums spammer'),
	array('iprange', 'address', '77.223.128.0', '77.223.159.255', 'Notorious forums spammer'),
	array('iprange', 'address', '78.40.224.0', '78.40.231.255', 'Notorious forums spammer'),
	array('iprange', 'address', '78.159.96.0', '78.159.127.255', 'Notorious forums spammer'),
	array('iprange', 'address', '84.16.224.0', '84.16.255.255', 'Notorious forums spammer'),
	array('iprange', 'address', '89.149.192.0', '89.149.255.255', 'Notorious forums spammer'),
	array('iprange', 'address', '89.248.160.0', '89.248.175.255', 'Notorious forums spammer'),
	array('iprange', 'address', '91.191.160.0', '91.191.175.255', 'Notorious forums spammer'),
	array('iprange', 'address', '92.45.72.0', '92.45.72.255', 'Notorious forums spammer'),
	array('iprange', 'address', '93.174.88.0', '93.174.95.255', 'Notorious forums spammer'),
	array('iprange', 'address', '93.187.200.0', '93.187.207.255', 'Notorious forums spammer'),
	array('iprange', 'address', '94.102.48.0', '94.102.63.255', 'Notorious forums spammer'),
	array('iprange', 'address', '95.168.160.0', '95.168.191.255', 'Notorious forums spammer'),
	array('iprange', 'address', '95.211.85.0', '95.211.86.255', 'Notorious forums spammer'),
	array('iprange', 'address', '188.72.192.0', '188.72.255.255', 'Notorious forums spammer'),
	array('iprange', 'address', '212.95.32.0', '212.95.255.255', 'Notorious forums spammer'),
	array('iprange', 'address', '212.252.24.0', '212.252.31.255', 'Notorious forums spammer'),
	array('iprange', 'address', '217.20.112.0', '217.20.127.255', 'Notorious forums spammer'),
	array('iprange', 'address', '78.129.128.0', '78.129.255.255', 'a Rapidswitch, dangerous network.'),
	array('iprange', 'address', '82.145.32.0', '82.145.63.255', 'b Rapidswitch, dangerous network.'),
	array('iprange', 'address', '83.142.224.0', '83.142.231.255', 'c Rapidswitch, dangerous network.'),
	array('iprange', 'address', '87.117.192.0', '87.117.255.255', 'd Rapidswitch, dangerous network.'),
	array('iprange', 'address', '95.154.192.0', '95.154.255.255', 'e Rapidswitch, dangerous network.'),
	array('iprange', 'address', '109.75.160.0', '109.75.167.255', 'f Rapidswitch, dangerous network.'),
	array('iprange', 'address', '109.169.0.0', '109.169.127.255', 'g Rapidswitch, dangerous network.'),
	array('iprange', 'address', '193.201.200.0', '193.201.201.255', 'h Rapidswitch, dangerous network.'),
	array('iprange', 'address', '193.227.244.0', '193.227.245.255', 'i Rapidswitch, dangerous network.'),
	array('iprange', 'address', '195.40.15.0', '195.40.15.255', 'j Rapidswitch, dangerous network.'),
	array('iprange', 'address', '195.62.10.0', '195.62.11.255', 'k Rapidswitch, dangerous network.'),
	array('iprange', 'address', '195.242.214.0', '195.242.215.255', 'l Rapidswitch, dangerous network.'),
	array('iprange', 'address', '213.228.193.0', '213.228.193.255', 'm Rapidswitch, dangerous network.'),
	array('iprange', 'address', '217.147.80.0', '217.147.95.255', 'n Rapidswitch, dangerous network.'),
	array('iprange', 'address', '195.216.160.0', '195.216.191.255', 'a JUNIK, dangerous network.'),
	array('iprange', 'address', '213.182.192.0', '213.182.223.255', 'b JUNIK, dangerous network.'),
	array('iprange', 'address', '87.245.192.0', '87.245.255.255', 'RETN, dangerous network.'),
	array('iprange', 'address', '64.116.161.0', '64.116.161.255', 'a Eveloz, dangerous network.'),
	array('iprange', 'address', '64.117.234.0', '64.117.234.255', 'b Eveloz, dangerous network.'),
	array('iprange', 'address', '190.122.160.0', '190.122.175.255', 'c Eveloz, dangerous network.'),
	array('iprange', 'address', '190.123.32.0', '190.123.47.255', 'd Eveloz, dangerous network.'),
	array('iprange', 'address', '200.63.40.0', '200.63.47.255', 'e Eveloz, dangerous network.'),
	array('iprange', 'address', '200.105.34.0', '200.105.44.255', 'f Eveloz, dangerous network.'),
	array('iprange', 'address', '200.115.128.0', '200.115.159.255', 'g Eveloz, dangerous network.'),
	array('iprange', 'address', '201.218.208.0', '201.218.208.255', 'h Eveloz, dangerous network.'),
	array('iprange', 'address', '66.186.0.0', '66.186.31.255', 'a Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '66.226.0.0', '66.226.31.255', 'b Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '72.26.96.0', '72.26.127.255', 'c Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '205.144.160.0', '205.144.175.255', 'd Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '208.76.216.0', '208.76.219.255', 'e Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '208.118.48.0', '208.118.63.255', 'f Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '209.132.192.0', '209.132.255.255', 'g Alchemy Communications, dangerous network.'),
	array('iprange', 'address', '216.250.112.0', '216.250.127.255', 'h Alchemy Communications, dangerous network.'),
	array('cidrblock', 'address', '89.36.232.0/22', 'Romainian network (AS41011-1) trying to hack user accounts.'),
	array('cidrblock', 'address', '89.37.132.0/24', 'Romainian network (AS41011-2) trying to hack user accounts.'),
	array('cidrblock', 'address', '89.41.172.0/23', 'Romainian network (AS41011-3) trying to hack user accounts.'),
	array('cidrblock', 'address', '89.46.132.0/22', 'Romainian network (AS41011-4) trying to hack user accounts.'),
	array('cidrblock', 'address', '93.113.36.0/23', 'Romainian network (AS41011-5) trying to hack user accounts.'),
	array('cidrblock', 'address', '93.115.240.0/23', 'Romainian network (AS41011-6) trying to hack user accounts.'),
	array('cidrblock', 'address', '188.208.32.0/23', 'Romainian network (AS41011-7) trying to hack user accounts.'),
	array('cidrblock', 'address', '188.240.32.0/22', 'Romainian network (AS41011-8) trying to hack user accounts.'),
	array('cidrblock', 'address', '46.108.128.0/21', 'Romainian network (AS41011-9) trying to hack user accounts.'),
	array('cidrblock', 'address', '46.108.144.0/21', 'Romainian network (AS41011-10) trying to hack user accounts.'),
	array('cidrblock', 'address', '46.108.240.0/21', 'Romainian network (AS41011-11) trying to hack user accounts.'),
	array('iprange', 'address', '77.51.0.0', '77.51.59.255', 'RBN.'),
	array('iprange', 'address', '77.92.88.0', '77.92.89.255', 'RBN.'),
	array('iprange', 'address', '77.105.0.0', '77.105.63.255', 'RBN.'),
	array('iprange', 'address', '78.24.24.234', '78.26.255.255', 'RBN.'),
	array('iprange', 'address', '78.37.128.0', '78.37.191.255', 'RBN.'),
	array('iprange', 'address', '78.110.175.0', '78.110.175.255', 'RBN.'),
	array('iprange', 'address', '78.129.202.0', '78.129.203.255', 'RBN.'),
	array('iprange', 'address', '78.157.140.0', '78.157.143.255', 'RBN.'),
	array('iprange', 'address', '79.174.64.0', '79.174.95.255', 'RBN.'),
	array('iprange', 'address', '79.175.64.0', '79.175.127.255', 'RBN.'),
	array('iprange', 'address', '81.23.0.0', '81.24.127.255', 'RBN.'),
	array('iprange', 'address', '83.167.98.0', '83.167.100.255', 'RBN.'),
	array('iprange', 'address', '83.167.104.0', '83.167.109.255', 'RBN.'),
	array('iprange', 'address', '83.167.127.0', '83.167.127.255', 'RBN.'),
	array('iprange', 'address', '85.249.0.0', '85.251.255.255', 'RBN.'),
	array('iprange', 'address', '89.108.64.0', '89.108.127.255', 'RBN.'),
	array('iprange', 'address', '89.113.72.0', '89.113.79.255', 'RBN.'),
	array('iprange', 'address', '89.254.192.0', '89.254.255.255', 'RBN.'),
	array('iprange', 'address', '91.204.72.0', '91.204.75.255', 'RBN.'),
	array('iprange', 'address', '91.205.65.0', '91.205.127.255', 'RBN.'),
	array('iprange', 'address', '91.205.168.0', '91.205.168.255', 'RBN.'),
	array('iprange', 'address', '91.212.96.0', '91.212.141.255', 'RBN.'),
	array('iprange', 'address', '92.38.128.0', '92.38.255.255', 'RBN.'),
	array('iprange', 'address', '92.241.0.0', '92.241.191.255', 'RBN.'),
	array('iprange', 'address', '93.174.88.0', '93.174.94.255', 'RBN.'),
	array('iprange', 'address', '94.102.48.0', '94.102.51.255', 'RBN.'),
	array('iprange', 'address', '94.142.128.0', '94.142.129.255', 'RBN.'),
	array('iprange', 'address', '94.181.0.0', '94.181.255.255', 'RBN.'),
	array('iprange', 'address', '109.121.0.0', '109.121.63.255', 'RBN.'),
	array('iprange', 'address', '188.134.0.0', '188.134.15.255', 'RBN.'),
	array('iprange', 'address', '193.53.87.0', '193.53.89.255', 'RBN.'),
	array('iprange', 'address', '193.109.248.0', '193.109.249.255', 'RBN.'),
	array('iprange', 'address', '193.189.126.0', '193.189.127.255', 'RBN.'),
	array('iprange', 'address', '194.106.188.0', '194.106.191.255', 'RBN.'),
	array('iprange', 'address', '194.165.42.0', '194.165.42.255', 'RBN.'),
	array('iprange', 'address', '195.2.252.0', '195.2.253.255', 'RBN.'),
	array('iprange', 'address', '195.88.0.0', '195.88.255.255', 'RBN.'),
	array('iprange', 'address', '195.189.80.0', '195.189.83.255', 'RBN.'),
	array('iprange', 'address', '208.64.24.0', '208.64.27.255', 'RBN.'),
	array('iprange', 'address', '212.15.65.0', '212.15.255.255', 'RBN.'),
	array('iprange', 'address', '212.152.60.128', '212.152.63.255', 'RBN.'),
	array('iprange', 'address', '213.219.192.0', '213.219.255.255', 'RBN.'),
	array('iprange', 'address', '213.248.0.0', '213.248.63.255', 'RBN.')
);
?>