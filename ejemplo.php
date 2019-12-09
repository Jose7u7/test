<?php
//LDAP Bind paramters, need to be a normal AD User account.
$user= 

$ldap_password = 'Julio2018';
$ldap_username = 'practicante.desa@saetowers.local';
$ldap_connection = ldap_connect("138.226.86.24");
 
if (FALSE === $ldap_connection){
    // Uh-oh, something is wrong...
 echo 'Unable to connect to the ldap server';
}
  
// We have to set this option for the version of Active Directory we are using.
ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.
 
if (TRUE === ldap_bind($ldap_connection, $ldap_username, $ldap_password)){
 //Your domains DN to query
 
  echo "conexion exitosa";
}



?>
