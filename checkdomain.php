<?php
$domain = 'example.com';
 if ( checkdnsrr($domain, 'ANY') ) {
  echo "DNS Record found ";
 }
 else {
  echo "NO DNS Record found ";
 }


 if ( gethostbyname($domain) != $domain ) {
  echo gethostbyname($domain);
	 $data = dns_get_record($domain, DNS_NS);
	 echo $data[0]['target'];
 }
 else {
  echo "NO DNS Record found";
 }
?>
