<?php
	$ldapconn = ldap_connect("ldap");
	ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
	if($ldapconn) {
		$ldapbind = ldap_bind($ldapconn, 'cn=admin,dc=ldap,dc=domain', 'ldappasswd');
		if($ldapbind) {
			echo 'LDAP bind succeeded';
		} else {
			echo 'LDAP bind failed.';
		}
	} else {
		echo 'LDAP connect failed.';
	}
?>
