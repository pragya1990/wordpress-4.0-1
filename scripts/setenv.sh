#!/bin/sh
echo $DYLD_LIBRARY_PATH | egrep "/Applications/wordpress-4.0-1/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/Applications/wordpress-4.0-1/sqlite/bin:/Applications/wordpress-4.0-1/php/bin:/Applications/wordpress-4.0-1/mysql/bin:/Applications/wordpress-4.0-1/apache2/bin:/Applications/wordpress-4.0-1/common/bin:$PATH"
export PATH
DYLD_LIBRARY_PATH="/Applications/wordpress-4.0-1/sqlite/lib:/Applications/wordpress-4.0-1/mysql/lib:/Applications/wordpress-4.0-1/apache2/lib:/Applications/wordpress-4.0-1/common/lib:$DYLD_LIBRARY_PATH"
export DYLD_LIBRARY_PATH
fi

TERMINFO=/Applications/wordpress-4.0-1/common/share/terminfo
export TERMINFO
##### SQLITE ENV #####
			
LDAPCONF=/Applications/wordpress-4.0-1/common/etc/openldap/ldap.conf
export LDAPCONF
##### PHP ENV #####
		    
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/Applications/wordpress-4.0-1/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/Applications/wordpress-4.0-1/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/Applications/wordpress-4.0-1/common/openssl/openssl.cnf
export OPENSSL_CONF


. /Applications/wordpress-4.0-1/scripts/build-setenv.sh
