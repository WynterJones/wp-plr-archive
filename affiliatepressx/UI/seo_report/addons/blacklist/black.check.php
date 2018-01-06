<?php
/***************************************************************************************
This is a simple PHP script to lookup for blacklisted IP against multiple DNSBLs at once.
 
You are free to use the script, modify it, and/or redistribute the files as you wish.
 
Homepage: http://dnsbllookup.com

Script found at: http://snipplr.com/view/64564/
****************************************************************************************/
function dnsbllookup($ip){
$listed = array();
$dnsbl_lookup=array("dnsbl-1.uceprotect.net","dnsbl-2.uceprotect.net","dnsbl-3.uceprotect.net","dnsbl.dronebl.org","dnsbl.sorbs.net","zen.spamhaus.org"); // Add your preferred list of DNSBL's
if($ip){
$reverse_ip=implode(".",array_reverse(explode(".",$ip)));
foreach($dnsbl_lookup as $host){
if(checkdnsrr($reverse_ip.".".$host.".","A")){
$listed[] = array($reverse_ip, $host, true);
}
}
}
if(isset($listed)){
return $listed;
}else{
return 'error';
}
}
$ip=$_GET['ip'];
if(isset($_GET['ip']) && $_GET['ip']!=null){
if(filter_var($ip,FILTER_VALIDATE_IP)){
return dnsbllookup($ip);
}else{
return 'error';
}
}
?> 